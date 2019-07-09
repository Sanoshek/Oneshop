<?php

namespace Oneshop\Controllers;

include_once 'DAO/ProductDAO.php';

use Oneshop\DAO\ProductDAO;

class MainController {

    public function __construct() {}

    public static function indexAction($session) {
        return (include '../oneshop/Views/home.php');
    }

    public static function goodiesAction($session) {
        return (include '../oneshop/Views/goodies.php');
    }

    public static function aboutAction($session) {
        return (include '../oneshop/Views/aboutus.php');
    }

    public static function connectAction($session) {
        return (include '../oneshop/Views/login.php');
    }

    public static function logoutAction($session) {
        return (include '../oneshop/Utils/logout.php');
    }

    public static function cartAction($session) {
        $productDAO = new ProductDAO();
        return (include '../oneshop/Views/cart.php');
    }
}

?>