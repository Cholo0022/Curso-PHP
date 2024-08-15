<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    if (!isset($_COOKIE["idioma_selecionado"])){
        header("location:index.php");
    } else if ($_COOKIE["idioma_selecionado"]=="es"){
        header("location:spanish.php");
    } else if ($_COOKIE["idioma_selecionado"]=="en"){
        header("location:english.php");
    }

    ?>
</body>
</html>