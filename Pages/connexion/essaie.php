<?php
session_start();
include('../requetedb/bdconnect.php');

if (!isset($_SESSION['id_client'])) {
    header("Location: ../connexion/pageconnexion.php");
    exit();
}

$id_client = $_SESSION['id_client'];

$requete = $conn->prepare("SELECT nom, prenom, email, telephone FROM clients WHERE id = ?");
$requete->execute([$id_client]);
$client = $requete->fetch();
?>

<form action="traitement_essai.php" method="POST">
    <input type="hidden" name="id_client" value="<?= $id_client ?>">
    
    <label>Nom :</label>
    <input type="text" name="nom" value="<?= htmlspecialchars($client['nom']) ?>" required><br>

    <label>Prénom :</label>
    <input type="text" name="prenom" value="<?= htmlspecialchars($client['prenom']) ?>" required><br>

    <label>Téléphone :</label>
    <input type="tel" name="telephone" value="<?= htmlspecialchars($client['telephone']) ?>" required><br>

    <label>Email :</label>
    <input type="email" name="email" value="<?= htmlspecialchars($client['email']) ?>" required><br>

    <label>Date de l'essai :</label>
    <input type="date" name="date_essai" required><br>

    <input type="submit" value="Envoyer la demande">
</form>
