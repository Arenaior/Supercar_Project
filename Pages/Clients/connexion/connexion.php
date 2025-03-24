<?php
include ("../../barre/barre.php");
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Connexion Supercar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
   

<style>
    .text1{
        text-align: center;
    }

    .données{
        width:500px;
    }

    .checkbox{
        margin-left:-90px;
    }
    </style>

    <div class="container mt-5">
        <h2 class="text1">Connectez-vous pour pouvoir avoir accès à nos services</h2>
    </div>

    <br><br>
    <center>
        <form action="identification.php" method="POST">
            <input type="mail" class="form-control données" placeholder="Entrez votre adresse mail" name='mail'>
            <br>
            <input type="password" class="form-control données" placeholder="Entrez votre mot de passe" name="mdp">
            <br>
            <br>
            <button type="reset" class="btn btn-secondary-emphasis">Mot de passe oublié</button>
            <button type="submit" class="btn btn-dark">Connexion</button>
            

            <br><br> <br>Vous n'avez pas encore un compte ? <a href="../inscription/formulaire.php"> Inscription </a>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


