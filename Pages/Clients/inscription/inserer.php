<?php
    include ("bdconnect.php");
    include ("../../barre/barre.php");

    $nom  =$_POST["nom"];
    $prénom  =$_POST["prénom"];
    $mdp = $_POST["mdp"];
    $mail =$_POST["email"];
   

    $ajouter = "insert into Client (Nom,Prénom,Mdp,Mail) values 
    ('$nom','$prénom','$mdp','$mail')";
    mysqli_query($bdd, $ajouter);
    mysqli_close($bdd);

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
    <a href="/Supercar_Project/Pages/Clients/connexion/connexion.php" class="btn btn-primary">Se connecter</a>
    </div>

</p>
</body>
</html>

