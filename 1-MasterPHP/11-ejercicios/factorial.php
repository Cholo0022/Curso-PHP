<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
function factorial ($numero){
        if ($numero <=1){
            return 1;
        } else {
            return $numero * factorial($numero - 1);
        }
    }
    echo factorial(5);
    ?>
</body>
</html>