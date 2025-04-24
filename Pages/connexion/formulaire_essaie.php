<?php
include("../barre/barre.php");
include("../../requetedb/bdconnect.php");

if (!isset($_SESSION['id_client'])) {
    header("Location: ../connexion/page_connexion.php");
    exit();
}

$id_client = $_SESSION['id_client'];

$requete = $bdd->prepare("SELECT nom, prenom, telephone, adresse_email FROM client WHERE id_client = ?");
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
    <input type="email" name="email" value="<?= htmlspecialchars($client['adresse_email']) ?>" required><br>

    <label>Marque :</label>
    <input type="" name="" value="" required><br>

    <label>Modèle :</label>
    <input type="" name="" value="" required><br>

    <label>Date de l'essai :</label>
    <input type="date" name="date_essai" required><br>

    <input type="submit" value="Envoyer la demande">
</form>
