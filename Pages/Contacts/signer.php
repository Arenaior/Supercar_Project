<?php
include ("../Accueil/barre.php");
?>


<head> 


<!DOCTYPE HTML>
<html lang=fr>

<style>
    H3{
        margin-top:-400px;
        margin-left:-450px;
    }
    </style>

<style>
    .rectangle {
            width: 1200px; /* Largeur du rectangle */
            height: 500px; /* Hauteur du rectangle */
            background-color: #F5F5F5 ; /* Couleur de fond */
            border: 0px solid #000; /* Bordure */
            margin: 10px; /* Marge autour du rectangle */
			margin-left:275px;
			margin-top:100px;
            /* transition: transform 0.3s ease; */

        }
        /* .rectangle:hover {
  /* transform: scale(1.1); /* Agrandit l'élément de 10% */
} */ 
    </style>

<style>
    H4{
        margin-top:0px;
        margin-left:1000px;
    }
    </style>

<style>
    H5{
        margin-top:-350px;
        margin-left:1000px;
        font-size:25px;
    }
    </style>


<style>
 .button1 {
      width: 300px;         /* Largeur fixe du bouton */
      height: 80px;         /* Hauteur fixe du bouton */
      padding: 10px 20px;   /* Espacement intérieur pour ajuster la taille du contenu */
      font-size: 18px;      /* Taille du texte à l'intérieur */
      background-color: #000000;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      margin-top:100px;
      margin-left:200px;
      transition: transform 0.3s ease, box-shadow 0.3s ease; /* Transition pour l'agrandissement */

    }
     /* Effet de gonflement au survol */
     .button1:hover {
      transform: scale(1.1);      /* Agrandir le bouton de 10% */
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);  /* Ombre pour ajouter de la profondeur */
    }

    .button1 img {
      margin-right: 10px;           /* Espacement entre l'icône et le texte */
      width: 20px;                  /* Taille de l'icône */
      height: 20px;                 /* Taille de l'icône */
    } 
    

 </style>



</head>

<body>
<font face = Arial>
<meta charset="utf-8" />
<div class='rectangle'></div>
<center>
    <H3>
<form action="inserer.php" method="post" >

Nom: <input type="text" name="nom">
<br /><br />
Adresse: <input type="text" name="adresse">
<br /><br />
Email: <input type="text" name="email">
<br /><br />
URL: <input type="text" name="url">
<br /><br />
Commentaires: <textarea cols="40" rows="5" name="commentaires"></textarea>
<br /><br />

<input type = "submit" value = "OK">
<input type = "reset" value = "Effacer">
</form>
</H3>
</center>
<br/>
<H5>
    Où nous trouver ?
</H5>

<H4>
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d2759.351178474387!2d57.48817801165706!3d-20.244420722809444!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2smu!4v1734848647885!5m2!1sfr!2smu" 
    width="350" height="200" style="border:0;" allowfullscreen="" referrerpolicy="no-referrer-when-downgrade">
  </iframe>
    </H4>

<br><br><br>
<a href='https://www.whatsapp.com/?lang=fr_FR'><button class='button1'> <img src="images/phone.png"> +230 5935 3043 </button></a>
<a href='https://workspace.google.com/intl/fr/gmail/'><button class='button1'><img src="images/mail.png">supercar@gmail.com</button></a>
<a href='http://localhost:8888/TPHTML/Supercar/Contacts/signer.php'><button class='button1'><img src="images/web.png">Supercar.com/mu/mauritius</button></a>






</body>
</html>