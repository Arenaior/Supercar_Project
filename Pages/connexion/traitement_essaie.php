<?php
include ("../../requetedb/bdconnect.php");
include ("../barre/barre.php");

if(isset($_POST["nom"]) && isset($_POST["prenom"]) && isset($_POST["mdp"]) && isset($_POST["telephone"]) && isset($_POST["email"])){
    $nom  = $_POST["nom"];
    $prenom  = $_POST["prenom"];
    $mdp = $_POST["mdp"];
    $telephone = $_POST["telephone"];
    $mail = $_POST["email"];

    $requete = $bdd->prepare('INSERT INTO client(nom, prenom, telephone, adresse_email, mot_de_passe) VALUES(?, ?, ?, ?, ?)') or die(print_r($bdd->errorInfo()));
    $requete->execute(array($nom, $prenom, $telephone, $mail, $mdp));


exit();
}
