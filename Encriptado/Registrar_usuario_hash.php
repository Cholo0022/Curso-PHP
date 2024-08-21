<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $usuario = $_POST["usuario"];
    $password = $_POST["password"];

    $pass_cifrado = password_hash($password, PASSWORD_DEFAULT);
    try {
        $con = new PDO("mysql:host=localhost; dbname=tienda", "root", "", );
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "INSERT INTO usuarios (usuario, password) VALUES (:user , :pass)";

        $result = $con->prepare($sql);

        $result->execute(array(":user"=>$usuario, ":pass"=>$pass_cifrado));

        echo "Usuario registrado";

        $result->closeCursor();
    } catch(Exception $e){

        die("Error: " . $e->getMessage());

    }
    ?>
</body>
</html>