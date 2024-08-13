<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    try {
        $con = new PDO("mysql:host=localhost; dbname=tienda", "root", "", );
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "SELECT * FROM usuarios WHERE usuario =:usuario AND password=:password";

        $result = $con->prepare($sql);

        $user = htmlentities(addslashes($_POST["usuario"]));
        $password = htmlentities(addslashes($_POST["password"]));

        $result->bindValue(":usuario", $user);
        $result->bindValue(":password", $password);

        $result->execute();

        $registrado = $result->rowCount();

        if ($registrado!=0){
            echo "<h2>Bienvenido!</h2>";
        }else{
            header("location:Formulario_login.php");
        }

    } catch (EXCEPTION $e) {
        die("Error: " . $e->getMessage());
    }

    ?>
</body>
</html>