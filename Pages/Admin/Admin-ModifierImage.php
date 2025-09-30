<?php
include("../../requetedb/bdconnect.php");
if (!isset($_SESSION)) { session_start(); }

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'], $_POST['nom'])) {
    $id = intval($_POST['id']);
    $nom = trim($_POST['nom']);

    if (!empty($nom)) {
        $stmt = $bdd->prepare("UPDATE interface_images SET nom = :nom WHERE id = :id");
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        header("Location: Admin-GestionImages.php");
        exit;
    } else {
        echo "Le nom ne peut pas être vide.";
    }
} else {
    echo "Données invalides.";
}
?>
