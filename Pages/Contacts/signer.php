<?php
include ("../barre/barre.php");
?>


<head> 


<!DOCTYPE HTML>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contacts Supercar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<html lang=fr>

<head>
    <style>
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

        .H2{
            font-size:50px;
        }

        .H8{
            font-size:20px;
            color:#514C4B;
        }

        .H1{
            font-size:25px;
            margin-left:400px;
            animation: slideIn 2s forwards; /* Appelle l'animation */
        }

        /* Animation pour faire glisser le texte */
        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateY(-100%);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .img1{
            width:25px;
        }

        .H9{
            margin-left:800px;
            margin-top:-400px;
        }

        </style>
        </head>

<div class="hero">
        <img src="/supercar_project/assets/images/Contacts-1.jpg" alt="Voiture de luxe">
       
    </div>

    <div class="container mt-5">
        <h1 class="H8" >Contactez Supercar pour plus d'</h1><h2 class="H2"> Informations, pour obtenir de l'aide ou pour vos suggestions.</h2>
    </div>

    <hr>

    <br><br><br><br>
    <div class="container mt-5 ">
       <h1 class="H1"> Nous sommes là pour vous aider <img src="/supercar_project/assets/images/sourire.png" class="img1"> </h1>

    </div>

    <br>

    <div class="container mt-5">
    <form action="identification.php" method="POST">
            <input type="text" class="form-control données w-50" placeholder="Entrez votre nom" name ="nom">
            <br>
            <input type="text" class="form-control données w-50" placeholder="Entrez votre prénom" name="prénom" >
            <br>
            <input type="mail" class="form-control données w-50" placeholder="Entrez votre adresse mail" name='mail'>
            <br>
            <input type="mail" class="form-control données w-50" placeholder="Entrez votre commentaire" name='commentaire'>
            
         <br><br>
            <button type="submit" class="btn btn-dark">Envoyer</button>
            <button type="reset" class="btn btn-secondary-emphasis">Annuler</button>

        
    </div>
        <br><br><br>

        <!-- <div class="container mt-5">
            <H1> Où nous trouver ? </H1> -->

