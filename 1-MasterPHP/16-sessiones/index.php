<?php

$varible_normal = "Variable normal";

session_start();


$_SESSION['miSession'] = "Variable de seccion creada";


echo $varible_normal . "<br>";

echo $_SESSION['miSession'];
