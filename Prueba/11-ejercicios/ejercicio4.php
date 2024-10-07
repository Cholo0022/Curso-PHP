<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="get">
   <label>Numero 1:<input type="number" name="n1" id=""></label>
   <label>Numero 2:<input type="number" name="n2" id=""></label>
   <input type="submit" value="Calcular">


</form>

    <?php
    if (isset($_GET["n1"]) && isset($_GET["n2"])){
   
    if (!empty($_SERVER['PHP_SELF'])){
        
        $n1 = $_GET["n1"];
        $n2 = $_GET["n2"];

        echo "Multiplico" . $n1 * $n2 . "<br>";
        echo "Divido" . $n1 / $n2 . "<br>";
        echo "Sumo" . $n1 + $n2 . "<br>";
        echo "Resto" . $n1 - $n2 . "<br>";
    }
}
    ?>
</body>
</html>