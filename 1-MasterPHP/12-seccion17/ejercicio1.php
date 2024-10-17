<?php

$numeros = array(4, 7, 1, 6, 2, 9, 3);
var_dump($numeros);

echo "<br> Cantidad antes de ingresar un elemento " . count($numeros) ."<br>";
//sort($numeros); 
array_push($numeros, 8);

foreach($numeros as $numero){
    echo "<br>" . $numero ."<br>";
}
echo "Cantidad " . count($numeros);

$array = array(0 => 'azul', 1 => 'rojo', 2 => 'verde', 3 => 'rojo');

$buscar = array_search("rojo", $array);

echo "<br> Rojo se encuentr en la posicion $buscar";
?>

