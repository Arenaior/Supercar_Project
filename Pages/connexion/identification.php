<?php
include("../barre/barre.php");

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
            echo "<div class='container text-center mt-5'>
                    <h1 class='H1'>Mot de passe incorrect.</h1>
                    <a href='page_connexion.php' class='H2'><u>Veuillez réessayer</u></a>
                  </div><hr>";
        }
    } else {
        echo "<div class='container text-center mt-5'>
                <h1 class='H1'>Utilisateur inexistant.</h1>
                <a href='page_connexion.php' class='H2'><u>Retour</u></a>
              </div><hr>";
    }
} else {
    echo "Veuillez remplir le formulaire.";
}
?>



<!DOCTYPE HTML>
<html lang=fr>
<Font face ='Arial'>
    <head>
    <meta charset = "UTF-8" />    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <style>
            .H1{
                font-size:40px;
                color:black;
                margin-top:150px;
                animation: slideIn 2s forwards; /* Appelle l'animation */
            }

                /* Animation pour faire glisser le texte */
                @keyframes slideIn {
                    from {
                opacity: 0;
                transform: translateX(-100%);
                }
                    to {
                opacity: 1;
                transform: translateX(0);
                }
            }

            .H2{
                font-size:25px;
                margin-top:150px;
    
            }

        </style>


 

        
         
         <div class="container mt-5">
    <h1 class="h4 text-center mb-4">Veuillez remplir ce formulaire pour finaliser votre demande d'essai</h1>

    <div class="row align-items-center gap-4">
        <div class="col-md-4">
            <img src="/supercar_project/assets/images/DE2.jpg" class="img-fluid rounded shadow" alt="Voiture Volkswagen">
        </div>

        <div class="col-md-6">
                <form method="POST" action="Confirmation.php">
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Nom" name="Nom">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Mail" name="Mail">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Adresse" name="Adresse">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Marque de la voiture" name="Marque">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Modèle de la voiture" name="Modele">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Date d'essai" name="Jour">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Heure" name="Heure">
            </div>

            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Date de retour" name="D-Retour">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Heure Retour" name="Retour">
            </div>
            <button type="submit" class="btn btn-primary">Envoyer</button>
            <a class="btn btn-secondary" href="identification.php">Retour</a>
        </form>

        </div>
    </div>
</div>

    </div>
    
</body>
</html>