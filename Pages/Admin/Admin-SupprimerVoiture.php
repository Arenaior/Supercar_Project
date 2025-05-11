<?php   
session_start();
include("Admin-Navbar.php");
include ('../barre/barre.php');
$requete = $bdd->query("SELECT * FROM voiture");
$voitures = $requete->fetchAll(PDO::FETCH_ASSOC); // fetchAll pour pouvoir utiliser foreach
?>

  
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suppression de Demande d'essai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<style>
  .voiture-container {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 10px;
    margin-left: 69px;;
}

.voiture-cadre {
    width: 75%;   
    background-color: white;
    border-radius: 10px;
    padding: 15px;
    margin: 11px;
    text-align: center;
    box-sizing: border-box;
    box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
}

.voiture-cadre img {
    width: 100%;
    height: auto;
    border-radius: 10px;
}

.voiture-titre {
    font-weight: bold;
    margin-top: 10px;
}

.voiture-button {
    margin-top: 10px;
    display: flex;
    justify-content: center;
    gap: 10px;
}
</style>
<main>
<div class="voiture-container">
<?php foreach ($voitures as $voiture): ?>
      
        <div class="voiture-cadre">
            <img src="<?= $voiture['image_illustration'] ?>" alt="<?= $voiture['modele'] ?>">
            <div class="voiture-titre">
                <?= $voiture['marque'] . ' ' . $voiture['modele']; ?>
            </div>
            <div class="voiture-titre">
                À partir de <?= $voiture['prix'] ?> RS
            </div>
            <div class="voiture-button">
                <a href="" class="btn btn-dark">Supprimer</a>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</main>  
</body>  
</html>
