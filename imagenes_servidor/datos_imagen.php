<?php
require("Conectar.php");
$conexion=Conectar::conexion();
$nombre_imagen = $_FILES["imagen"]["name"];
$tipo_imagen = $_FILES["imagen"]["type"];
$tamanio_imagen = $_FILES["imagen"]["size"];

//echo $tamanio_imagen;
if ($tamanio_imagen <= 2000000) {
    //Ruta de la carpeta destino en el servidor
    $carpeta_destino = $_SERVER['DOCUMENT_ROOT'].'./imagenes_servidor/img/';

    if ($tipo_imagen === "image/jpg" || $tipo_imagen === "image/jpeg" || $tipo_imagen === "image/png" || $tipo_imagen === "image/gif") {
        move_uploaded_file($_FILES['imagen']['tmp_name'], $carpeta_destino.$nombre_imagen);
        $sql = "INSERT INTO imagenes (imagen) VALUES (:nombreImagen)";
        $result = $conexion->prepare($sql);
        $result->execute(array(":nombreImagen"=>$nombre_imagen));
    } else {
        echo "Solo se permiten archivos de tipo jgp, jpeg, png y gif";
    }
    
} else {
    echo "Tamaño de imagen mayor a 2MB";
}


$sql="SELECT * FROM imagenes";
$result=$conexion->prepare($sql);
$result->execute(array());
?>
<?php while ($registro=$result->fetch(PDO::FETCH_ASSOC)): 
    
    $ruta_imagen = $registro["imagen"]; ?>
    <img src="./imagenes_servidor/img/<?php echo $ruta_imagen?>" width="250">
<?php endwhile; ?>





