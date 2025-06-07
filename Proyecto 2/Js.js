const container = document.getElementById("products-container");
const searchInput = document.getElementById("search");
let products = [];


async function fetchProducts() {
    const res = await fetch("https://fakestoreapi.com/products");
    products = await res.json();
    renderProducts(products);
}

function renderProducts(productList) {
    container.innerHTML = ""; 
    productList.forEach((product) => {
        const div = document.createElement("div");
        div.className = "product";
        div.innerHTML = `
            <img src="${product.image}" alt="${product.title}">
            <h3>${product.title}</h3>
            <p><strong>Precio:</strong> $${product.price}</p>
            <p><strong>Categoría:</strong> ${product.category}</p>
        `;
        container.appendChild(div);
    });
}

searchInput.addEventListener("input", () => {
    const value = searchInput.value.toLowerCase();
    const filtered = products.filter(product =>
        product.category.toLowerCase().includes(value)
    );
    renderProducts(filtered);
});


fetchProducts();