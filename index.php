<?php

namespace Oneshop;

include_once 'Controllers/MainController.php';
include_once 'Controllers/ProductsController.php';
include_once 'Utils/Utils.php';
include_once 'Controllers/LoginController.php';
include_once 'DAO/Database.php';
include_once 'Controllers/ClientsController.php';
include_once 'DAO/ProductDAO.php';

use Oneshop\DAO\ProductDAO;
use oneshop\Controllers\MainController;
use oneshop\Controllers\ProductsController;
use Oneshop\Controllers\LoginController;
use Oneshop\Utils\Utils;
use Oneshop\DAO\Database;
use Oneshop\Controllers\ClientsController;

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
else if ('/oneshop/?cn=login&action=signin' == $uri)
  ClientsController::createClient($_POST);
else if ('/oneshop/?cn=logout&action=logout' == $uri)
  MainController::logoutAction($session);
else if (strstr($uri, 'id_product=', true) == '/oneshop/?cn=product&action=show&')
  ProductsController::getProductById($_GET['id_product'], $session);
else if ('/oneshop/?cn=cart&action=show' == $uri && $session != false)
  MainController::cartAction($session);
else if (strstr($uri, 'id_product=', true) == '/oneshop/?cn=cart&action=add&')
  Utils::addToCart($_GET['id_product'], array($_GET['id_product'] => 1));
else if (strstr($uri, 'id_product', true) == '/oneshop/?cn=cart&action=delete&')
  Utils::removeFromCart($_GET['id_product']);

?>