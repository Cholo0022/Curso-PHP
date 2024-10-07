<?php
function duplicar($numero) {
    $numero *= 2;  // Duplicar el número
}

$valor = 5;
duplicar($valor);  // Pasa $valor por valor

echo $valor;  // Salida: 5 (no se ha modificado)

function incrementar(&$numero) {
    $numero++;  // Incrementa la variable
}

$valor = 5;
incrementar($valor);  // Pasa $valor por referencia

echo $valor;  // Salida: 6

$palabra = "Hola";
echo strlen($palabra);
?>
