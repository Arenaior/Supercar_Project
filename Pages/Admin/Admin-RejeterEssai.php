<?php
include("../../requetedb/bdconnect.php");

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    // Mettre le statut à "rejete"
    $sql = "UPDATE essais SET statut = 'rejetée' WHERE id_client = :id";
    $stmt = $bdd->prepare($sql);
    $stmt->execute([':id' => $id]);
}

// Retour à la page demandes
header("Location: Admin-Demande.php");
exit();
?>
