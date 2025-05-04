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

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Page Responsive</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
   

<style>
    .text1{       
        text-align: center;
    }

    .données{
        width:500px;
    }

    
    </style>
<br><br>
<center>
    <form action="traitement_essaie.php" method="POST">
        <input type="hidden" name="id_client" value="<?= $id_client ?>">
    
        <label>Nom :</label>
        <input type="text" class="form-control données" name="nom" value="<?= htmlspecialchars($client['nom']) ?>" required style="width: 350px;"><br>
    
        <label>Prénom :</label>
        <input type="text" class="form-control données" name="prenom" value="<?= htmlspecialchars($client['prenom']) ?>" required style="width: 350px;"><br>
    
        <label>Téléphone :</label>
        <input type="tel" class="form-control données" name="telephone" value="<?= htmlspecialchars($client['telephone']) ?>" required style="width: 350px;"><br>
    
        <label>Email :</label>
        <input type="email" class="form-control données" name="email" value="<?= htmlspecialchars($client['adresse_email']) ?>" required style="width: 350px;"><br>
    <?php if($_SESSION['test']){
        echo $_SESSION['test'];
    }?>
        <label>Marque :</label>
        <input type="" class="form-control données" name="marque" value="" required style="width: 350px;"><br>
    
        <label>Modèle :</label>
        <input type="" class="form-control données" name="modele" value="" required style="width: 350px;"><br>
    
        <label>Date de l'essai :</label>
        <input type="date" class="form-control données" name="date_essai" required style="width: 350px;"><br>
    
        <input type="submit" value="Envoyer la demande">
    </form>
</center>
<br><br>
<?php
include ('../footage/footage.php');
?>
</body>
</html>

