<?php

namespace Oneshop;

include 'Utils/Utils.php';

use Oneshop\Utils\Utils;

$session = Utils::checkSession();
?>

<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Oneshop</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="script.js"></script>
</head>
    <!-- <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon"> -->
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light ">
        <a href="index.php"><img src="imgHome/logo1.png" class="img-fluid" alt="Responsive image"></a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav flex-grow-1">
            <li class="nav-item">
                <a class="nav-link" href="goodies.php">Goodies</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="aboutus.php">About us</a>
            </li>
            <li class="nav-item d-flex justify-content-end flex-grow-1">
            <?php
              if ($session != false) {
                echo "<a class='nav-link' href = 'Utils/Logout.php'><button type='button' class='btn btn-dark btn-md'>".$session['name'][0]." : Logout</button></a>";
              }
              else {
                echo "<a class='nav-link' href = 'Views/login.php'><button type='button' class='btn btn-dark btn-md'>Connexion</button></a>";
              }
            ?>
            </li>
            </ul>
        </div>
        </nav>
    </header>
    <body class="bg-light">
    </br>
        <div class="container d-flex">
                <div class="col">
                <img src='goodies/pull.png' width = "80%" alt="Tigre" class="img-responsive center-block border">
                </div>
                <div class="col border">
                <h1 class="text-center">Pull</h1>
                <p class="text-center">Je suis la descriptiondza dzadaz zefefegre gregr gr zgr ghyhythyt ukyrk hjtyjtyhrhrt zhgtr</p>
                <p class="text-center font-weight-bold">150€</p>
                <div class="flex-grow-1 d-flex justify-content-center">
                <button type='button'class='btn btn-dark'>Ajouter au panier </button>
                <div>
                </div>
              </div>
    </body>
</html>