<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        session_start();
        setcookie("nombre_usuario", "cholo", time()-1);
        echo "Cookie eliminada";

    ?>
</body>
</html>