<?php
include ("../../requetedb/bdconnect.php");
include ("../barre/barre.php");

    $mail = $_POST["email"];
    $marque = $_POST["marque"];
    $modele = $_POST["modele"];
    $date_essai = $_POST["date_essai"];
    $heure_essai = $_POST["heure_essai"];
    $date_retour = $_POST["date_retour"];
    $heure_retour = $_POST["heure_retour"];
    

    $requete = $bdd->prepare('SELECT id_client, nom, prenom, telephone FROM client WHERE adresse_email = ?');
    $requete->execute([$mail]);
    $donnee = $requete->fetch();

    $requete = $bdd->prepare('SELECT COUNT(*) FROM essais WHERE adresse_email = :email');
    $requete->bindValue(":email", $mail);
    $requete->execute();
    $verification = $requete->fetchColumn();
   
    if ($verification > 0) {
        echo '<center><h1> Vous avez déjà une demande en cours</h1></center>';
    }
    
    elseif($donnee){
    $id_client = $_POST["id_client"];
    $nom  = $_POST["nom"];
    $prenom  = $_POST["prenom"]; 
    $telephone = $_POST["telephone"];
    
    
        $requete = $bdd->prepare('INSERT INTO essais(id_client, nom, prenom, telephone, adresse_email, marque, modele, date_essai, heure_essai, date_retour , heure_retour) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)') or die(print_r($bdd->errorInfo()));
        $requete->execute([$id_client, $nom, $prenom, $telephone, $mail, $marque, $modele, $date_essai, $heure_essai, $date_retour, $heure_retour]);
    
        echo '<center><h1> Votre demande a été envoyée avec succès!</h1></center>';
    
    exit();
    }
    
?>
