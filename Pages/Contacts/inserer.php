<?php

include ("../barre/barre.php");
    include ("../requetedb/bdconnect.php");

    $nom     =$_POST["nom"];
    $prénom   =$_POST["prénom"];
    $mail       =$_POST["mail"];
    $commentaires = $_POST["commentaire"];

    $ajouter = "insert into contacts (nom,prénom,mail,commentaires) values 
    ('$nom','$prénom','$mail','$commentaires')";
    mysqli_query($bdd, $ajouter);
    mysqli_close($bdd);

?>

<!DOCTYPE HTML>
<html lang=fr>
    <head>
        <meta charset = "UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contacts Supercar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

        <style>
            H2{font-size:30px;
                margin-top:150px;
            }

        .hero {
            position: relative;
            width: 100%;
            height: 50vh; /* Prend toute la hauteur de l'écran */
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        /* Image responsive */
        .hero img {
            width: 100%;
            height: 100%;
            object-fit: cover; /* Ajuste l'image sans déformation */
            position: absolute;
            top: 0;
            left: 0;
            z-index: 1;
        }

        .H8{
            font-size:20px;
            color:#514C4B;
        }

        .H2{
            font-size:50px;
        }

        .img1{
            width:25px;
        }
        </style>

    </head>
<body>
    <font face='arial'>

    <div class="hero">
        <img src="/supercar_project/assets/images/Contacts-1.jpg" >
       
    </div>

    <div class="container mt-5">
        <h1 class="H8" >Contactez Supercar pour plus d'</h1><h3 class="H2"> Informations, pour obtenir de l'aide ou pour vos suggestions.</h3>
    </div>
        <center>
<p>
<div class="container mt-5">
    <H2> Merci!! Supercar vous est reconnaissant pour votre avis! <img src="/supercar_project/assets/images/sourire.png" class="img1">
 </h2>
    <div>

</p>


<div class="container mt-5">
    <a class="btn btn-dark" href="/supercar_project/Pages/Contacts/signer.php">Retour au formulaire</a>

</p>

</html>