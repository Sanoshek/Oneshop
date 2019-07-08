<html>
    <head>
        <title>Se connecter - Oneshop</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <div class='container'>
            <div class='row'>
                <div class='col-6'>
                <h1>Connexion</h1>
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
                    <h1>Créer un compte</h1>
                    <form action='../Controllers/ClientsController.php' method='post'>
                        <div class="form-group">
                            <input class="form-control" placeholder='votre nom' name='name'>
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder='votre mail' name='email'>
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder='votre mot de passe' name='email'>
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder='votre adresse' name='adress'>
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder='votre numéro de téléphone' name='mobile'>
                        </div>
                        <button type='submit' class="btn btn-primary">Confirmer</button>
                       
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>