<?php

?>


<html>
    <head>
        <title>Se connecter - Oneshop</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <header>
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <nav class="navbar navbar-expand-lg navbar-light bg-light ">
    <a href="../index.php"><img src="../imgHome/logo1.png" class="img-fluid" alt="Responsive image"></a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav flex-grow-1">
            <li class="nav-item">
                <a class="nav-link" href="../goodies.php">Goodies</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../aboutus.php">About us</a>
            </li>
            <!-- <li class="nav-item d-flex justify-content-end flex-grow-1">
            <a class="nav-link" href = "Views/login.php"><button type="button" class="btn btn-dark">Connexion</button></a>
            </li> -->
            </ul>
        </div>
        </nav>
    </header>
    <body class="bg-light">
        <div class='container'>
            <div class='row'>
                <div class='col-6'>
                <h1>Connection</h1>
                    <form action='../Controllers/LoginController.php' method='post'>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control"  name="password" placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <div class='col-6'>
                    <h1>Register</h1>
                    <form action='../Controllers/ClientsController.php' method='post'>
                        <div class="form-group">
                            <input class="form-control" placeholder='Name't name='name'>
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder='Email' name='email'>
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder='Password' name='email'>
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder='Adress' name='adress'>
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder='Mobile' name='mobile'>
                        </div>
                        <button type='submit' class="btn btn-primary">Submit</button>
                       
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>