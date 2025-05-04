<?php

include ("../barre/barre.php");
if(isset($_POST["nom"]) && isset($_POST["prenom"]) && isset($_POST["telephone"]) && isset($_POST["email"]) && isset($_POST["commentaire"])){
    $nom  = $_POST["nom"];
    $prenom  = $_POST["prenom"];
    $telephone = $_POST["telephone"];
    $mail = $_POST["email"];
    $commentaire = $_POST["commentaire"];
   
    $requete = $bdd->prepare('SELECT COUNT(*) FROM client WHERE adresse_email = :email');
    $requete->bindValue(":email", $mail);
    $requete->execute();
    $verification = $requete->fetchColumn();
    
    if ($verification > 0) {
        $requete = $bdd->prepare('UPDATE client SET commentaire = ? WHERE adresse_email = ?') or die(print_r($bdd->errorInfo()));
        $requete->execute([$commentaire, $mail]);
    } else {
        
        $requete = $bdd->prepare('INSERT INTO client(nom, prenom, telephone, adresse_email, commentaire) VALUES(?, ?, ?, ?, ?)') or die(print_r($bdd->errorInfo()));
        $requete->execute([$nom, $prenom, $telephone, $mail, $commentaire]);
    }
}
?>

  



