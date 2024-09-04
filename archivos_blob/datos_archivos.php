<?php
require("Conectar.php");
$conexion=Conectar::conexion();
$nombre_archivo = $_FILES["archivo"]["name"];
$tipo_archivo = $_FILES["archivo"]["type"];
$tamanio_archivo = $_FILES["archivo"]["size"];

echo $nombre_archivo . "<br>";
echo $tipo_archivo . "<br>";
echo $tamanio_archivo . "<br>";
if ($tamanio_archivo <= 2000000) {
    //Ruta de la carpeta destino en el servidor
    $carpeta_destino = $_SERVER['DOCUMENT_ROOT'].'./archivos_blob/archivos/';
    move_uploaded_file($_FILES['archivo']['tmp_name'], $carpeta_destino.$nombre_archivo);
        
} else {
    echo "Tamaño del archivo mayor a 2MB";
}
$archivo_objetivo=fopen($carpeta_destino.$nombre_archivo,"r");

        $contenido = fread($archivo_objetivo, $tamanio_archivo);
        fclose($archivo_objetivo);

        $sql = "INSERT INTO blob_imagen (nombre, tipo, contenido) VALUES (:nombreArchivo, :tipoArchivo, :tamanioArchivo)";
        $result = $conexion->prepare($sql);
        $result->execute(array(":nombreArchivo"=>$nombre_archivo, ":tipoArchivo"=>$tipo_archivo, ":tamanioArchivo"=>$tamanio_archivo));    
        
?>




