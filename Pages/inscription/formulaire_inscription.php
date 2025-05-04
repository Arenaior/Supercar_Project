<?php
include ("../barre/barre.php");
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Page Responsive</title>
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
        <h2 class="text1">Inscrivez-vous pour pouvoir avoir accès à nos services</h2>
</div>

   <br><br>
    <div>
        <center>
            <form action="insertion_formulaire.php" method="POST" >
                <input type="text" class="form-control données" placeholder="Entrez votre Nom" name="nom" style="width: 350px;">
                <br>
                <input type="text" class="form-control données" placeholder="Entrez votre Prénom" name="prenom" style="width: 350px;">
                <br>
                <input type="tel" class="form-control données" placeholder="Entrez votre Numero telephone" name="telephone" style="width: 350px;">
                <br>
                <input type="mail" class="form-control données" placeholder="Entrez votre Adresse email" name="email" style="width: 350px;">
                <br>
                <input type="password" class="form-control données" placeholder="Entrez un Mot de passe" name="mdp" style="width: 350px;">
                <br>
                <br>
                <input type="checkbox" class="checkbox"> J'accepte les conditions d'utilisation de mes données*
                <br><br><br>
                <button type="submit" class="btn btn-dark">Envoyer</button>
                <button type="reset" class="btn btn-secondary-emphasis">Annuler</button>
                <br><br> <br>Vous avez déjà un compte ? <a href="../Connexion/page_connexion.php"> Connexion </a>
            </form>
        </center>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </div>
    <br><br>
<?php
include ('../footage/footage.php');
?>
</body>
</html>


