<?php

include ("../Accueil/barre.php");
    include ("bdconnect.php");

    $nom     =$_POST["nom"];
    $adresse    =$_POST["adresse"];
    $email       =$_POST["email"];
    $url          = $_POST["url"];
    $commentaires = $_POST["commentaires"];

    $ajouter = "insert into contacts (nom,adresse,email,url,commentaires) values 
    ('$nom','$adresse','$email','$url','$commentaires')";
    mysqli_query($bdd, $ajouter);
    mysqli_close($bdd);

?>

<!DOCTYPE HTML>
<html lang=fr>
    <head>
        <meta charset = "UTF-8" />

        <style>
            H2{font-size:30px;
                margin-top:350px;
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
    <font face='arial'>
        <center>
<p>
    <H2> Merci!! Supercar vous est reconnaissant pour votre avis!

    </h2>

</p>
</center>

<br><br><br>
<a href='https://www.whatsapp.com/?lang=fr_FR'><button class='button1'> <img src="images/phone.png"> +230 5935 3043 </button></a>
<a href='https://workspace.google.com/intl/fr/gmail/'><button class='button1'><img src="images/mail.png">supercar@gmail.com</button></a>
<a href='http://localhost:8888/TPHTML/Supercar/Contacts/signer.php'><button class='button1'><img src="images/web.png">Supercar.com/mu/mauritius</button></a>
</body>
</html>