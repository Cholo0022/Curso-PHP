<?php

    require("Conectar.php");

    $id = $_GET["id"];
    $conexion= Conectar::conexion();
    $conexion->query("DELETE FROM productos WHERE id='$id'");

    header("location:../index.php");

?>