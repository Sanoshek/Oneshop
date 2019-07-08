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
                <a class="nav-link" href="/oneshop/?cn=goodies&action=show">Goodies</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/oneshop/?cn=about&action=show">About us</a>
            <li class="nav-item d-flex justify-content-end flex-grow-1">
                <?php
                if ($session != false) {
                    echo "<a class='nav-link' href = '/oneshop/?cn=logout&action=logout'><button type='button' class='btn btn-dark btn-md'>".$session['name'][0]." : Logout</button></a>";
                }
                else {
                    echo "<a class='nav-link' href = '/oneshop/?cn=login&action=login'><button type='button' class='btn btn-dark btn-md'>Connexion</button></a>";
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
            <div class="row d-flex justify-content-center border">
                       <?php
                       foreach ($donnees as $val) {       
                            echo "<div class='col lg-2 border d-flex flex-column align-items-center'>
                            <a href='/oneshop/?cn=product&action=show&id_product=".$val['id_product']."'><img src=".$val['photo']." alt='Tigre' class='img-responsive center-block'></a>
                            <p class='text-center'>
                            ".$val['name']."</br> 
                            <strong> ".$val['price']."€ </strong></br>
                            </p>
                            </div>";
                       }
                  ?>
            </div>
        <div>
    </body>
</html>