<?php

namespace Oneshop;

include 'Controllers/MainController.php';

use oneshop\Controllers\MainController;

$uri = $_SERVER['REQUEST_URI'];

if ('/oneshop/' == $uri)
  MainController::indexAction();
else if ('/oneshop/?cn=goodies&action=show' == $uri)
  MainController::goodiesAction();
else if ('/oneshop/?cn=about&action=show' == $uri)
  MainController::aboutAction();
else if ('/oneshop/?action=login' == $uri)
  MainController::connectAction();
else if ('/oneshop/?action=logout' == $uri)
  MainController::logoutAction();
?>