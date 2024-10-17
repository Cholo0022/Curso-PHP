<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black; /* Bordes de color negro */
        }
        th, td {
            padding: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
   
    <h2>Tabla de multiplicar</h2>

<table>
    <tr>
      <?php
    
        for ($i = 2; $i<=10; $i++){
         echo "<th>" .  $i . "</th>";
        }
        
        ?>
    </tr>
    <?php

    function tabla($numero){
       
        $resultado = "";
        for ($i = 0; $i <= 10; $i++) {
            $resultado .= $numero . " x " . $i . " = " . ($numero * $i) . "<br>";
        }
        return $resultado;
      
    }

    ?>

    <tr>
<?php
     for ($i = 2; $i <= 10; $i++) {
        echo "<td>" . tabla($i) . "</td>";
    }

    ?>


</tr>
</table>

</body>
</html>