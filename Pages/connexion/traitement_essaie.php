<?php
session_start();
include('../connexion/db.php');

if (!isset($_SESSION['id_client'])) {
    header("Location: ../connexion/page_connexion.php");
    exit();
}

$id_client = $_SESSION['id_client'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$telephone = $_POST['telephone'];
$email = $_POST['adresse_email'];
$date_essai = $_POST['date_essai'];

$req = $conn->prepare("INSERT INTO essais (id_client, nom, prenom, telephone, aemail, date_essai)
                       VALUES (?, ?, ?, ?, ?, ?)");
$req->execute([$id_client, $nom, $prenom, $telephone, $email, $date_essai]);

header("Location: confirmation.php");
exit();
