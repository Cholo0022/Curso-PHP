<?php

if (isset($_COOKIE['miCookie'])){
    echo $_COOKIE['miCookie'];
}else{
    echo "Cookie inexistente";
}