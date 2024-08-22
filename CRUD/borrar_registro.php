<?php
    include("Conexion.php");

    $id = $_GET["id"];

    $conexion->query("DELETE FROM datos_clientes WHERE id='$id'");

    header("location:index.php");

?>