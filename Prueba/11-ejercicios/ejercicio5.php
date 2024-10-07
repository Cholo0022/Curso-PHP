<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="get">
        <label for="">Numero 1: <input type="number" name="n1" id=""></label>
        <label for="">Numero 2: <input type="number" name="n2" id=""></label>
        <input type="submit" value="Ver Numeros">
    </form>


    <?php

    if (isset($_GET["n1"]) && isset($_GET["n2"])){
        $n1 = $_GET["n1"];
        $n2 = $_GET["n2"];
        if ($n2<=$n1){
            echo "Error, el primer numero es mayor al segundo";
            return;
        }
            for ($i=$n1; $i<=$n2; $i++){
                echo $i . "<br>";
            }
        
    }

    ?>
</body>
</html>