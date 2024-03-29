<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Oneshop</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="script.js"></script>
</head>
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light ">
        <a href="/oneshop/"><img src="imgHome/logo1.png" class="img-fluid" alt="Responsive image"></a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav flex-grow-1">
            <li class="nav-item">
                <a class="nav-link" href="/oneshop/?cn=goodies&action=show">Goodies</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/oneshop/?cn=about&action=show">About us</a>
            </li>
            <li class="nav-item d-flex justify-content-end flex-grow-1">
            <?php
              if ($session != false) {
                echo "<a class='nav-link' href = '/oneshop/?cn=logout&action=logout'><button type='button' class='btn btn-dark btn-md'>".$session['name'][0]." : Logout</button></a>";
                echo "<a class='nav-link' href = '/oneshop/?cn=cart&action=show'><button type='button' class='btn btn-dark btn-md'>Panier</button></a>";
              }
              else {
                echo "<a class='nav-link' href = '/oneshop/?cn=login&action=login'><button type='button' class='btn btn-dark btn-md'>Connexion</button></a>";
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
                <?php
                echo "<img src=".$test['photo']." width = '80%' alt='Tigre' class='img-responsive center-block border border-dark rounded' style='padding-top:15px; padding-bottom:15px'>"
                ?>
                
                </div>
                <div class="col border border-dark rounded d-flex justify-content-center flex-column">
                <h1 class="text-center ">
                <?php 
                echo $test["name"]; 
                ?>
                </h1>
                <p class="text-center"><?php 
                echo $test["description"]; 
                ?></p>
                <p class="text-center font-weight-bold"><?php 
                echo $test['price'];
                echo " €" 
                ?></p>
                <div class=" d-flex justify-content-center">
                <?php
                if ($session != false) {
                  echo "<a href = '/oneshop/?cn=cart&action=add&id_product=".$_GET['id_product']."'><button type='button' class='btn btn-dark btn-md'>Add to cart</button></a>";
                } else {
                  echo "<p>You must be logged to add to cart</p>";
                }
                ?>
                <div>
                </div>
              </div>
    </body>
</html>