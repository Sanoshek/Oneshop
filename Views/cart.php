<?php

namespace Oneshop\Views;

$session = session_start();

include '../DAO/ProductDAO.php';
use Oneshop\DAO\ProductDAO;



$id_product = $_GET['id_product'];

$array_new = array($id_product);

function addProductToCart($id_product, $array_new) {
    if (!empty($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
        $array_merge =  array_merge($_SESSION['cart'], $array_new);
        $_SESSION['cart'] =  $array_merge;
    }
     else {
        $_SESSION['cart'] = $array_new;
    }
}
addProductToCart($id_product, $array_new);

function getCart() {
    return ($_SESSION['cart']);
}

$productDAO = new ProductDAO();
$data_id = getCart();
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
    <a href="/oneshop/"> <img src="../imgHome/logo1.png" class="img-fluid" alt="Responsive image"> </a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav flex-grow-1">
            <li class="nav-item">
                <a class="nav-link" href="/oneshop/?cn=goodies&action=show">Goodies</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/oneshop/?cn=about&action=show">About us</a>
            <li class="nav-item d-flex justify-content-end flex-grow-1">
                <?php
                if ($session != false) {
                    echo "<a class='nav-link' href = '/oneshop/?cn=logout&action=logout'><button type='button' class='btn btn-dark btn-md'>".$session['name'][0]."Logout</button></a>";
                }
                else {
                    echo "<a class='nav-link' href = '/oneshop/?cn=login&action=logging'><button type='button' class='btn btn-dark btn-md'>Connexion</button></a>";
                }
                ?>
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
        <h1 class="text-center"><?php echo "";  ?></h1>
        </br>
                <?php 
                
                foreach (getCart() as $val) {
                $data_product = $productDAO->getProductById($val);
                 echo "
                <div class='row border'>
                     <div class='col'>
                        <p class='text-center'><img src ='../".$data_product['photo']."' alt='photo' height='225' width='225'></p>
                    </div>
                    <div class='col'>
                    <p class='text-center'>".$data_product['price']."</p>
                    </div>
                </div>";
                } 
                ?>
                </div>
            </div>
    </body>
</html>
