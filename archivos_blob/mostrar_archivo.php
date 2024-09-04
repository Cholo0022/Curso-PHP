<?php

$id="";
$contenido="";
$tipo="";

    require ("Conectar.php");

    $conexion=Conectar::conexion();
    
    $sql = "SELECT * FROM blob_imagen WHERE ID=3";
    $result = $conexion->prepare($sql);
    $result->execute(array());    

    while ($registro=$result->fetch(PDO::FETCH_ASSOC)) {

        $id=$registro["id"];
        $contenido=$registro["contenido"];
        $tipo=$registro["tipo"];

    }

    echo $id . "<br>";
    echo $tipo . "<br>";
    echo $contenido . "<br>";
    echo "<img src='data:image/jpeg; base64," . base64_encode($contenido) . "'>";
?>