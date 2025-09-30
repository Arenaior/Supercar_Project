<?php 
  include("../../requetedb/bdconnect.php");
  include("Admin-Navbar.php");
  ?>
  
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil-Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    

 <?php
// supprimer_client.php

include("../../requetedb/bdconnect.php"); // connexion à la BDD

// Vérifie si l'ID a été envoyé
if(isset($_POST['id_client'])) {
    $id = $_POST['id_client'];

    // Préparer la requête DELETE
    $stmt = $bdd->prepare("DELETE FROM client WHERE id_client = :id");
    
    // Exécuter la requête avec l'ID
    $stmt->execute(['id' => $id]);

    // Vérifier si une ligne a été supprimée
    if($stmt->rowCount() > 0) {
        // Redirection vers la page clients (ou dashboard)
        header("Location: Admin-VoirContacts.php?message=Client supprimé avec succès");
        exit;
    } else {
        echo "Aucun client trouvé avec cet ID.";
    }
} else {
    echo "ID client manquant.";
}
?>


</body>
</html>