<?php

namespace Oneshop;

session_start();

$id_product = $_GET['id_product'];

$array_new = array($id_product);

function addProductToCart($id_product, $array_new) {
    if (count($_SESSION['cart']) > 0) {
        $array_merge =  array_merge($_SESSION['cart'], $array_new);
        $_SESSION['cart'] =  $array_merge;
    }
     else {
        $_SESSION['cart'] = $array_new;
    }
}
addProductToCart($id_product, $array_new);

function getCart() {
    var_dump($_SESSION['cart']);
    return ($_SESSION['cart']);
}
?>