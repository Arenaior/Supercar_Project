<?php
include ("../barre/barre.php");
$message = '';
if (!empty($_POST['email']) && !empty($_POST['mdp'])) {
    $mail = $_POST['email'];
    $mdp = $_POST['mdp'];

    $requete = $bdd->prepare("SELECT * FROM client WHERE adresse_email = ?");
    $requete->execute([$mail]);        
    $utilisateur = $requete->fetch(PDO::FETCH_ASSOC);

    if ($utilisateur) {
        // Vérification du mot de passe
        if ($mdp == $utilisateur['mot_de_passe']) {
            // Connexion réussie
            $_SESSION['email'] = $utilisateur['adresse_email'];
            $_SESSION['nom'] = $utilisateur['nom'];
            $_SESSION['prenom'] = $utilisateur['prenom'];
            $_SESSION['telephone'] = $utilisateur['telephone'];
            $_SESSION['id_client'] = $utilisateur['id_client'];
            header("Location: page_bienvenue.php"); // Redirection vers la page de bienvenue après la connexion
            exit();
        } else {
            // Mot de passe incorrect
            $message = 'Mot de passe incorrect';
        }
    } else {
        $message = 'Utilisateur inexistant';
    }
} else {
    $message = 'Veuillez saisir votre identifiant et mot de passe';
}
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
        <form action="" method="POST">
            <input type="mail" class="form-control données" placeholder="Entrez votre adresse mail" name='email' style="width: 350px;">
            <br>
            <input type="password" class="form-control données" placeholder="Entrez votre mot de passe" name="mdp" style="width: 350px;">
            <br>
            <?php if ($message): ?>
    <h5 style="color: red; padding: 10px; margin-top: 10px;">
        <?= htmlspecialchars($message) ?>
            </h5>
<?php endif; ?>         
            <br>
            <button type="reset" class="btn btn-secondary-emphasis">Mot de passe oublié</button>
            <button type="submit" class="btn btn-dark">Connexion</button>
            

            <br><br> <br>Vous n'avez pas encore un compte ? <a href="../inscription/formulaire_inscription.php"> Inscription </a>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<br><br><br>
</body>
</html>


<?php
include ('../footage/footage.php');
?>


