<?php
include ("../../Accueil/barre.php");
?>
<head> <body> 

<Font face ='Arial'>
<!DOCTYPE HTML>
<html lang=fr>

<style>
    H3{
        margin-top:-700px;
        margin-left:250px;
    }
    </style>

<style>
    .rectangle {
            width: 600px; /* Largeur du rectangle */
            height: 900px; /* Hauteur du rectangle */
            background-color: #000000 ; /* Couleur de fond */
            border: 0px solid #000; /* Bordure */
            margin: 10px; /* Marge autour du rectangle */
			margin-left:-1200px;
			margin-top:0px;
            /* transition: transform 0.3s ease; */

        }
        /* .rectangle:hover {
  /* transform: scale(1.1); /* Agrandit l'élément de 10% */
} */ 
    </style>

<style>
    H4{
        margin-top:-270px;
        margin-left:300px;
        font-size:30px;
    }
    </style>

<style>
    H5{font-size: 30px;
        margin-left:-1350px;
        margin-top:-100px;
    color:white;}
</style>

<style>
    .H6{font-size:20px;
    margin-left:-1150px;
margin-top:-35px;
color:white;}
</style>


</head>
<style>
    .image1{width:40px;
    margin-left:-1600px;
margin-top:-350px;}
</style>

<style>
    .H7{font-size:20px;
    margin-left:-1280px;
margin-top:-35px;
color:white;}
</style>



<meta charset="utf-8" />
<center>

<div class="rectangle">

</div>

    <H3>
<form action="identification.php" method="post" >

Nom: <input type="text" name="nom">
<br /><br />
Mdp: <input type="password" name="Mdp">
<br /><br />

 <input type = "submit" value = "OK">
<input type = "reset" value = "Effacer">
</form>
</H3>
<H4>
    Connectez-vous pour pouvoir 
    <br>accéder de nos services 
</H4>


<H5>Un seul compte pour 
<br>tout vos services: </H5>

<img src='../2.png' class=image1 >

<H6 class='H6'>
    Faites un essai de votre future voiture </H6>

    <br><br>
 <img src='../3.png' class=image1 >

<H6 class='H7'>
    Accédez à nos services </H6>




</center>

</body>
</html>