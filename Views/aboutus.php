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
    <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light ">
        <a href="/oneshop/"> <img src="imgHome/logo1.png" class="img-fluid" alt="Responsive image"> </a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav flex-grow-1">
            <li class="nav-item">
                <a class="nav-link" href="/oneshop/?action=goodies">Goodies</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/oneshop/?action=about">About us</a>
            </li>
            <li class="nav-item d-flex justify-content-end flex-grow-1">
                <?php
                if ($session != false) {
                    echo "<a class='nav-link' href = 'Utils/Logout.php'><button type='button' class='btn btn-dark btn-md'>".$session['name'][0]." : Logout</button></a>";
                }
                else {
                    echo "<a class='nav-link' href = '/oneshop/?action=login'><button type='button' class='btn btn-dark btn-md'>Connexion</button></a>";
                }
                ?>
            </li>
            </ul>
        </div>
        </nav>
    </header>
    <body class="bg-light">

    </body>
</html>