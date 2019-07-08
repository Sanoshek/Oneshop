<?php

namespace Oneshop\Controllers;

class MainController {

    public function __construct() {}

    public static function indexAction() {
        return (include '../oneshop/Views/home.php');
    }

    public static function goodiesAction() {
        return (include '../oneshop/Views/goodies.php');
    }

    public static function aboutAction() {
        return (include '../oneshop/Views/aboutus.php');
    }

    public static function connectAction() {
        return (include '../oneshop/Views/login.php');
    }

    public static function logoutAction() {
        return (include '../oneshop/Utils/logout.php');
    }
}

?>