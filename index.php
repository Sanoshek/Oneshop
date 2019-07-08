<?php

namespace Oneshop;

include 'Controllers/MainController.php';

use oneshop\Controllers\MainController;

$uri = $_SERVER['REQUEST_URI'];

if ('/oneshop/' == $uri)
  MainController::indexAction();
else if ('/oneshop/?action=goodies' == $uri)
  MainController::goodiesAction();
else if ('/oneshop/?action=about' == $uri)
  MainController::aboutAction();
else if ('/oneshop/?action=login' == $uri)
  MainController::connectAction();
else if ('/oneshop/?action=logout' == $uri)
  MainController::logoutAction();
?>