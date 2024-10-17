<?php

$variable = "";

if (empty($variable)){
   echo "Variable vacia";
   $variable = "texto de relleno";
   echo "<strong> " . strtoupper($variable) . "</strong>";
} else {
    echo "Variable rellena";
}