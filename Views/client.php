<html>
    <head>
        <title>Se connecter - Oneshop</title>
    </head>
    <body>
        <h1>Connexion<h1>
        <form action='../Controllers/ClientsController.php' method='post'>
            <input placeholder='Saisissez votre nom' name='name'>
            <br>
            <input placeholder='Saisissez votre mail' name='email'>
            <br>
            <input placeholder='Saisissez votre adresse' name='adress'>
            <br>
            <input placeholder='Numéro de téléphone' name='mobile'>
            <br>
            <button type='submit'>Confirmer</button>
        </form>
        <a href='home.php'>Retour à l'acceuil</a>
    </body>
</html>