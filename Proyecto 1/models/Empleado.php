<?php
require_once 'database/conexion.php';

class Empleado {
    private $conn;

    public function __construct() {
        $this->conn = Conexion::conectar();
    }

    public function registrar($nombre, $salario_base, $comision_pct) {
        $sql = "INSERT INTO empleados (nombre, salario_base, comision_pct)
                VALUES (?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("sdd", $nombre, $salario_base, $comision_pct);
        return $stmt->execute();
    }

    public function obtenerTodos() {
        $sql = "SELECT *, (salario_base + (salario_base * comision_pct / 100)) AS salario_total FROM empleados";
        $resultado = $this->conn->query($sql);
        return $resultado->fetch_all(MYSQLI_ASSOC);
    }
}
?>