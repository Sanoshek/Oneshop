<?php

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
        <img src="imgHome/logo1.png" class="img-fluid" alt="Responsive image">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav flex-grow-1">
            <li class="nav-item">
                <a class="nav-link" href="goodies.php">Goodies</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="aboutus.php">About us</a>
            </li>
            <li class="nav-item d-flex justify-content-end flex-grow-1">
            <a class="nav-link" href = "Views/client.php"><button type="button" class="btn btn-dark">Connexion</button></a>
            </li>
            </ul>
        </div>
        </nav>
    </header>
    <body>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
            <div id="my_slider" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#myslider" data-slide-to="0" class="active"></li>
                      <li data-target="#myslider" data-slide-to="1"></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img class="d-block w-100" src="imgHome/img2.jpg">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="imgHome/img1.jpg">
                      </div>
                    </div>
              </div>
    </body>
</html>