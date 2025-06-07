<?php include 'views/layout/header.php'; ?>

<h2>Registrar Nuevo Empleado</h2>
<form method="post">
    <label>Nombre:</label><br>
    <input type="text" name="nombre" required><br><br>

    <label>Salario Base:</label><br>
    <input type="number" step="0.01" name="salario_base" required><br><br>

    <label>Comisión (%):</label><br>
    <input type="number" step="0.01" name="comision_pct" required><br><br>

    <button type="submit">Guardar</button>
</form>