
<?php
//définir vos paramètres dec connexion
// nom du serveur
$host="localhost";
// nom utilisateur
$login="root";
// mot de passe
$pass="root";
// nom de la base de données
$dbname="supercar";
// créer la connexion avec la base de données
$bdd = mysqli_connect($host, $login, $pass, $dbname);
// vérification de la connexion avec la BD

// changer le jeu de caractères à utf8
mysqli_set_charset($bdd,"utf8");

?>



  
