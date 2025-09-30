<?php
include ("../../requetedb/bdconnect.php");
include ("../barre/barre.php");

// Récupération des données du formulaire
$mail = $_POST["email"];
$marque = $_POST["marque"];
$modele = $_POST["modele"];
$date_essai = $_POST["date_essai"];
$heure_essai = $_POST["heure_essai"];
$date_retour = $_POST["date_retour"];
$heure_retour = $_POST["heure_retour"];

// Vérifier si le client existe
$requete = $bdd->prepare('SELECT id_client, nom, prenom, telephone FROM client WHERE adresse_email = ?');
$requete->execute([$mail]);
$donnee = $requete->fetch();

if (!$donnee) {
    echo '<center><h1>Adresse email non reconnue</h1></center>';
    exit();
}

// Vérifier si une demande "en attente" existe déjà pour ce client
$requete = $bdd->prepare('SELECT COUNT(*) FROM essais WHERE adresse_email = :email AND statut = "en_attente"');
$requete->bindValue(":email", $mail);
$requete->execute();
$verification = $requete->fetchColumn();

if ($verification > 0) {
    echo '<center><h1>Vous avez déjà une demande en attente</h1></center>';
    exit();
}

// Récupérer les informations du client
$id_client = $donnee["id_client"];
$nom  = $donnee["nom"];
$prenom  = $donnee["prenom"]; 
$telephone = $donnee["telephone"];

// Insérer la nouvelle demande avec statut "en_attente"
$requete = $bdd->prepare('INSERT INTO essais(id_client, nom, prenom, telephone, adresse_email, marque, modele, date_essai, heure_essai, date_retour, heure_retour, statut) 
                          VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)')
           or die(print_r($bdd->errorInfo()));

$requete->execute([$id_client, $nom, $prenom, $telephone, $mail, $marque, $modele, $date_essai, $heure_essai, $date_retour, $heure_retour, 'en_attente']);

// Message de succès
echo '<center><h1>Votre demande a été envoyée avec succès !</h1></center>';
exit();
?>
