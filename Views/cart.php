<?php

namespace Oneshop\Views;

$session = session_start();

include '../DAO/ProductDAO.php';
use Oneshop\DAO\ProductDAO;



$id_product = $_GET['id_product'];

$array_new = array($id_product => 1);

function addProductToCart($id_product, $array_new) {
    $flag=0;
    if (!empty($_SESSION['cart']) && count($_SESSION['cart']) > 0) {

        foreach ($_SESSION['cart'] as $key => $val) {
            if($key == $id_product){
                $_SESSION['cart'][$key] += 1;
                return;
            }
        }
        $_SESSION['cart'][$id_product] = 1;
    } else {
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
        </br>
        </br>
        <h1 class="text-center"><?php echo "Your cart";  ?></h1>
        </br>
        </br>
                <?php 
                $cart = getCart();
                foreach (getCart() as $key => $val) {
                $data_product = $productDAO->getProductById($key);
                 echo "
                 <div class='row d-flex justify-content-center align-items-center border border-dark rounded'>
                     <div class='col border-right border-dark d-flex justify-content-center'>
                        <img src ='../".$data_product['photo']."' alt='photo' height='112' width='112' style='padding-top:5px;'>
                    </div>
                    <div class='col border-right f-grow-1 border-dark'>
                    <p class='text-center'>".$data_product['name']."</p>
                    </div>
                    <div class='col border-right border-dark'>
                    <p class='text-center'>".$data_product['price']." €</p>
                    </div>
                    <div class='col border-right border-dark'>
                    <p class='text-center'>".$val."</p>
                    </div>
                    <div class='col border-right d-flex justify-content-center'>
                    <button type='button' class='btn btn-dark btn-md'>Delete</button>
                    </div>
                    
                </div> </br>";
                } 
                ?>
                </div>
            </div>
    </body>
</html>
