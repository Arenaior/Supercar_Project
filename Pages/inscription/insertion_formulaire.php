<?php

include ("../barre/barre.php");
if(isset($_POST["nom"]) && isset($_POST["prenom"]) && isset($_POST["mdp"]) && isset($_POST["telephone"]) && isset($_POST["email"])){
    $nom  = $_POST["nom"];
    $prenom  = $_POST["prenom"];
    $mdp = $_POST["mdp"];
    $telephone = $_POST["telephone"];
    $mail = $_POST["email"];
   
    $verification = $bdd->prepare('SELECT COUNT(*) FROM client WHERE adresse_email = :email');
    $verification->bindValue(":email", $mail);
    $verification->execute();
    $verification->fetch();
    
    if ($verification) {
        echo "L'adresse email est déjà utilisé par un autre utilisateur";
    } else {
        
        $requete = $bdd->prepare('INSERT INTO client(nom, prenom, telephone, adresse_email, mot_de_passe) VALUES(?, ?, ?, ?, ?)') or die(print_r($bdd->errorInfo()));
        $requete->execute(array($nom, $prenom, $telephone, $mail, $mdp));
        ?>
<!DOCTYPE HTML>
<html lang=fr>
<Font face ='Arial'>

    <head>
        <meta charset = "UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .H2{
            font-size:40px;
            margin-left:100px;
            transform: translateX(-100%); /* Hors écran à gauche */
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
    </style>
    </head>
<body>
<p>
<div class="container text-center mt-5">
    <H2 class='H2'> Bienvenue <?php echo $nom ?>.

    </h2>

    <hr>
    <a href="/Supercar_Project/Pages/connexion/page_connexion.php" class="btn btn-primary">Se connecter</a>
    </div>

</p>
</body>
</html>
    <?php }
    
    
}
?>



