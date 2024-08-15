<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    setcookie("idioma_selecionado", $_GET["idioma"], time()+604800);
    header("location:verCookie.php")

    ?>
</body>
</html>