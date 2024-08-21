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
        $user = htmlentities(addslashes($_POST["usuario"]));
        $password = htmlentities(addslashes($_POST["password"]));
        $contador = 0;
        $con = new PDO("mysql:host=localhost; dbname=tienda", "root", "",);
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "SELECT * FROM usuarios WHERE usuario =:usuario";

        $result = $con->prepare($sql);

        $result->execute(array(":usuario" => $user));

        while ($registro = $result->fetch(PDO::FETCH_ASSOC)) {
            if (password_verify($password, $registro["password"])) {
                $contador++;
            }
        }

        if ($contador > 0) {
            echo "usuario Registrado";
        } else {
            echo "Usuario no registrado";
        }
        $result->closeCursor();
        
    } catch (EXCEPTION $e) {
        die("Error: " . $e->getMessage());
    }

    ?>
</body>

</html>