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

        .img2{
            width:25px;
        }

        .img3{
            width:45px;
        }

        .H9{
            margin-left:800px;
            margin-top:-400px;
        }

        .p1{
            font-size:20px;
        }

        footer{
            height:200px;
            width:100%;
        }

        </style>
        </head>

<div class="hero">
        <img src="/supercar_project/assets/images/Contacts-1.jpg" >
       
    </div>

    <div class="container mt-5">
        <h1 class="H8" >Contactez Supercar </h1> <h2 class="H2"> Pour plus d'informations, obtenir de l'aide ou pour vos donner votre avis.</h2>
    </div>

    <hr>

    <br><br><br><br>
    <div class="container mt-5 ">
       <h1 class="H1"> Nous sommes là pour vous aider <img src="/supercar_project/assets/images/sourire.png" class="img2"> </h1>

    </div>

    <br>

    <div class="container mt-5">
    <form action="insertion_commentaire.php" method="POST">
            <input type="text" class="form-control données w-50" placeholder="Votre Nom" name ="nom">
            <br>
            <input type="text" class="form-control données w-50" placeholder="Votre Prénom" name="prenom">
            <br>
            <input type="mail" class="form-control données w-50" placeholder="Votre adresse mail" name='email'>
            <br>
            <input type="tel" class="form-control données w-50" placeholder="Votre numero telephone" name='telephone'>
            <br>
            <textarea class="form-control w-75" name="commentaire" rows="7" placeholder="Dites-nous?"></textarea> 
         <br><br>
            <button type="submit" class="btn btn-dark">Envoyer</button>
            <button type="reset" class="btn btn-secondary-emphasis">Annuler</button>

        
    </div>
        <br><br><br>

        <div class="container mt-5">
            <H1> Où nous trouver ? </H1>
            <br><br>
            <p clase="p1"> SuperCar est une entreprise innovante située à Ébène, Maurice, spécialisée dans la vente et la location de voitures haut de gamme. Avec un service client exceptionnel et une flotte de véhicules de luxe, SuperCar s'engage à offrir une expérience unique à ses clients, alliant performance, élégance et confort.</p>
            <br>
            <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d1573.9001167778467!2d57.460944072382404!3d-20.242802104542186!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMjDCsDE0JzM0LjgiUyA1N8KwMjcnNDAuOSJF!5e0!3m2!1sfr!2smu!4v1746176181912!5m2!1sfr!2smu" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            
          

  <br><br><br><br><br><br><br><br><br>
  </html>
  
  <?php
  include ("../footage/footage.php");
    ?>

