<?php

namespace Oneshop;

include 'Controllers/MainController.php';
include 'Controllers/ProductsController.php';
include 'Utils/Utils.php';
include 'Controllers/LoginController.php';
include_once 'DAO/Database.php';

use oneshop\Controllers\MainController;
use oneshop\Controllers\ProductsController;
use Oneshop\Controllers\LoginController;
use Oneshop\Utils\Utils;
use Oneshop\DAO\Database;

$uri = $_SERVER['REQUEST_URI'];
$session = Utils::checkSession();

if ('/oneshop/' == $uri)
  MainController::indexAction($session);
else if ('/oneshop/?cn=goodies&action=show' == $uri)
  ProductsController::getProducts($session);
else if ('/oneshop/?cn=about&action=show' == $uri)
  MainController::aboutAction($session);
else if ('/oneshop/?cn=login&action=login' == $uri)
  MainController::connectAction($session);
else if ('/oneshop/?cn=login&action=logging' == $uri)
  LoginController::check($_POST['email'], $_POST['password']);
else if ('/oneshop/?cn=logout&action=logout' == $uri)
  MainController::logoutAction($session);
else if (strstr($uri, 'id_product=', true) == '/oneshop/?cn=product&action=show&')
  ProductsController::getProductById($_GET['id_product'], $session);

?>