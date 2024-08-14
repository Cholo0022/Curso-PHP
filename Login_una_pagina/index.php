<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
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
                session_start();
                $_SESSION["usuario"] = $_POST["usuario"];
                //header("location:Usuario_registrado.php");
            } else {
                //header("location:Formulario_login.php");
                echo " Error de Usuario o contraseña ";
            }
        } catch (EXCEPTION $e) {
            die("Error: " . $e->getMessage());
        }
    }
    ?>


    <?php
    if (!isset($_SESSION["usuario"])) {

        include("Formulario.html");
    }else{
        echo "Usuario: " . $_SESSION["usuario"];
    }
    ?>

    <h2>Contenido de la WEB</h2>
    <table width="800">
        <tr>
            <td><img src="./Fiesta Luna294.jpg" width="300"> </td>
            <td><img src="./Fiesta Luna300.jpg" width="300"> </td>
        </tr>
        <tr>
            <td><img src="./Fiesta Luna397.jpg" width="300"> </td>
            <td><img src="./Fiesta Luna427.jpg" width="300"> </td>
        </tr>
    </table>
    
</body>

</html>