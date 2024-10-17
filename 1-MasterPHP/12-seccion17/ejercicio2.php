<?php

$numeros= array();
$i = 0;
while (count($numeros) <= 119){
       
    array_push($numeros, $i);
    $i++;
}

foreach($numeros as $numero){
    echo $numero . "<br>";
}

echo "El array tiene " . count($numeros) . " elementos";