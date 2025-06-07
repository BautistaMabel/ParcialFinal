<?php
$c = isset($_GET['c']) ? $_GET['c'] : 'empleado';
$a = isset($_GET['a']) ? $_GET['a'] : 'listar';

require_once "controllers/" . ucfirst($c) . "Controller.php";
$controllerName = ucfirst($c) . "Controller";
$controller = new $controllerName();
$controller->$a();
?>