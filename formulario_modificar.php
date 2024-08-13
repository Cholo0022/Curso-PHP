<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
      require("datos_conexion.php");
      $id=$_GET["id"];
      $conexion= mysqli_connect($db_host,$db_usuario,$db_password);
      
      if(mysqli_connect_errno()){
          echo("Error conexión con la base de datos");
          exit();
      }
      
      mysqli_select_db($conexion, $db_nombre) or die("La base de datos no existe");
      
      
      $query="SELECT * FROM products WHERE id='$id'";
      
      $result=mysqli_query($conexion,$query);
      
      
      
      while ($row=mysqli_fetch_array($result, MYSQLI_ASSOC)){
          echo "<form action='Modificar_articulo.php' method='get'>";
          
          echo "<input type='text' name='id' value='" . $row["id"] . "'><br>";
          echo "<input type='text' name='name' value='" . $row["name"] . "'><br>";
          echo "<input type='text' name='color' value='" . $row["color"] . "'><br>";
          echo "<input type='text' name='description' value='" . $row["description"] . "'><br>";
          echo "<input type='submit' value='Modificar'>";
          echo "</form><br>";
      
      }
      
      
      mysqli_close($conexion);
    ?>
    
</body>
</html>