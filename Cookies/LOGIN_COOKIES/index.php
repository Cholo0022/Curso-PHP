<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $autenticar = false;
    if (isset($_POST["enviar"])) {
        try {
            $con = new PDO("mysql:host=localhost; dbname=tienda", "root", "",);
            $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = "SELECT * FROM usuarios WHERE usuario =:usuario AND password=:password";

            $result = $con->prepare($sql);

            $user = htmlentities(addslashes($_POST["usuario"]));
            $password = htmlentities(addslashes($_POST["password"]));

            $result->bindValue(":usuario", $user);
            $result->bindValue(":password", $password);

            $result->execute();

            $registrado = $result->rowCount();

            if ($registrado != 0) {
                $autenticar = true;

                if (isset($_POST["recordar"])){
                
                    setcookie("nombre_usuario", $_POST["usuario"], time()+2592000);
                    
                }
            } else {
               
                echo " Error de Usuario o contraseña ";
            }
        } catch (EXCEPTION $e) {
            die("Error: " . $e->getMessage());
        }
    }
    ?>


    <?php
    if ($autenticar == false){
        if (!isset($_COOKIE["nombre_usuario"])) {
            include("Formulario.html");
        }
    }

   if ($autenticar == true){
    echo "Hola " . $_POST["usuario"] . "!";
    
   } elseif (isset($_COOKIE["nombre_usuario"])){
    echo "Hola " . $_COOKIE["nombre_usuario"] . "!";
   }


    ?>

    <h2>Contenido de la WEB</h2>
    <table width="800">
        <tr>
            <td><img src="./img/Fiesta Luna294.jpg" width="300"> </td>
            <td><img src="./img/Fiesta Luna300.jpg" width="300"> </td>
        </tr>
        <tr>
            <td><img src="./img/Fiesta Luna397.jpg" width="300"> </td>
            <td><img src="./img/Fiesta Luna427.jpg" width="300"> </td>
        </tr>
    </table>

    <?php
        if ($autenticar==true || isset($_COOKIE["nombre_usuario"])){
            include("zona_registrado.html");
        }
    ?>
    
</body>

</html>