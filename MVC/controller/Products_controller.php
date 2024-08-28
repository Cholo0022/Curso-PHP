<?php

    require_once("model/Products_model.php");

    $product = new Products_model();

    $matrizProduct=$product->getProducts();

    require_once("view/Products_view.php")

?>