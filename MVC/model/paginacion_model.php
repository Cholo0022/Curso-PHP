<?php
require_once("Conectar.php");

$conexion = Conectar::conexion();
$registros_por_pagina = 2;

if (isset($_GET["pagina"])) {
    $pagina = $_GET["pagina"];
} else {
    $pagina = 1;
}

$empezar_desde = ($pagina - 1) * $registros_por_pagina;
$sql = "SELECT * FROM productos";
$result = $conexion->prepare($sql);
$result->execute(array());

$cantidad_registros = $result->rowCount();
$cantidad_paginas = ceil($cantidad_registros / $registros_por_pagina);

?>