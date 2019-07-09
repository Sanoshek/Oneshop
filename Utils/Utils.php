<?php

namespace Oneshop\Utils;
class Utils {

    public function __construct() {}

    public static function checkSession() {
        if (!empty($_SESSION['email']) )
            return $_SESSION;
        return false;
    }

    public static function addToCart($id_product, $array_new) {
        if (!empty($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
            foreach ($_SESSION['cart'] as $key => $val) {
                if($key == $id_product){
                    $_SESSION['cart'][$key] += 1;
                    header('location:/oneshop/?cn=cart&action=show');
                    return;
                }
            }
            $_SESSION['cart'][$id_product] = 1;
        } else {
            $_SESSION['cart'] = $array_new;
        }
       header('location:/oneshop/?cn=cart&action=show');
    }

    public static function getCart() {
        return ($_SESSION['cart']);
    }
}