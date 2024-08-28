<?php
require_once("Conectar.php");

$conexion = Conectar::conexion();
$registros_por_pagina = 3;

if (isset($_GET["pagina"])) {
    $pagina = $_GET["pagina"];
} else {
    $pagina = 1;
    // header("location:index.php");
}

$empezar_desde = ($pagina - 1) * $registros_por_pagina;
$sql = "SELECT * FROM datos_clientes LIMIT $empezar_desde, $registros_por_pagina";
$result = $conexion->prepare($sql);
$result->execute(array());

$cantidad_registros = $result->rowCount();
$cantidad_paginas = ceil($cantidad_registros / $registros_por_pagina);

//echo "Cantidad de registros " . $cantidad_registros . "<br>";
//echo "Cantidad de paginas " . $cantidad_paginas . "<br>";




?>