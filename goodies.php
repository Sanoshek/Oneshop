<?php
//require_once("DAO/Database.php");
require_once("Models/Product.php");

include_once 'Controllers/ProductsController.php';

use Oneshop\Controllers\ProductsController;

define('HOSTNAME', 'localhost');
define('DBNAME', 'my_shop');
define('CHARSET', 'utf8');
define('USER_NAME', 'root');

$bdd = null;
 

try {
    $bdd = new PDO('mysql:host='.HOSTNAME.';dbname='.DBNAME.';charset='.CHARSET, USER_NAME, '');
}
catch(Exception $e) {
    die('Erreur : '.$e->getMessage());
}

function getProductDesc($bdd)
{
    $reponse = $bdd->query('select * from product');
    $donnees = $reponse->fetchAll(PDO::FETCH_ASSOC);
    return $donnees;
}

$donnees = getProductDesc($bdd);
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
    <a href="index.php"> <img src="imgHome/logo1.png" class="img-fluid" alt="Responsive image"> </a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav flex-grow-1">
            <li class="nav-item">
                <a class="nav-link" href="goodies.php">Goodies</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="aboutus.php">About us</a>
            </li>
            <li class="nav-item d-flex justify-content-end flex-grow-1">
            <a class="nav-link" href = "Views/login.php"><button type="button" class="btn btn-dark">Connexion</button></a>
            </li>
            </ul>
        </div>
        </nav>
            </ul>
        </div>
        </nav>
    </header>
    <body class="bg-light">
        <div class="container">
            <div class="row d-flex justify-content-center border">
                       <?php
                       foreach ($donnees as $val) {       
                        echo '<div class="col lg-2 border d-flex flex-column align-items-center">
                                <img src='.$val["photo"].' alt="Tigre" class="img-responsive center-block">
                                  <p class="text-center">
                                  Nom : '.$val["name"].'</br> 
                                  '.$val["description"].'</br>
                                  prix : '.$val["price"].' €</br>
                                  </p>
                                  <button type="bouton" class="btn btn-dark">Ajouter</button>
                                  </div>';
                       }
                      
                  ?>
            <!-- </div> -->
            <!-- <div class="col lg-2 border d-flex flex-column align-items-center">
                        <img src="p1.jfif" alt="Tigre" class="img-responsive center-block">
                          <p class="text-center">
                              Je suis une description longue mdr ffjeozfjoezfjoedzadzdhzaidljzdhzadhkzdhzakdjaz
                          </p>
            </div>
            <div class="col lg-2 border d-flex flex-column align-items-center">
                            <img src="p1.jfif" alt="Tigre" class="img-responsive center-block">
                              <p class="text-center">
                                  Je suis une description longue mdr ffjeozfjoezfjoedzadzdhzaidljzdhzadhkzdhzakdjaz
                              </p> -->

            </div>
        <div>
    </body>
</html>