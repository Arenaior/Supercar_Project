<?php
    include ("bdconnect.php");
    include ("../../Accueil/barre.php");

    $nom     =$_POST["nom"];
    $adresse    =$_POST["adresse"];
    $email       =$_POST["email"];
    $numéro          = $_POST["numéro"];
    $Mdp = $_POST["Mdp"];

    $ajouter = "insert into Clients (nom,adresse,email,numéro,Mdp) values 
    ('$nom','$adresse','$email','$numéro','$Mdp')";
    mysqli_query($bdd, $ajouter);
    mysqli_close($bdd);

?>

<!DOCTYPE HTML>
<html lang=fr>
<Font face ='Arial'>

    <head>
        <meta charset = "UTF-8" />

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
    <H2 class='H2'> Bienvenue <?php echo $nom ?>.

    </h2>

</p>
</body>
</html>