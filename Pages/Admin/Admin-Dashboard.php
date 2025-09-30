<?php 
include("../../requetedb/bdconnect.php");
include("Admin-Navbar.php");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Tableau de Bord</title>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
<style>
body {
    font-family: 'Roboto', sans-serif;
    margin: 0;
    padding: 0;
    background: #f4f7fc;
    display: flex;
    min-height: 100vh;
}

/* Main Content */
.main-content {
    flex-grow: 1;
    padding: 20px;
    box-sizing: border-box;
}

/* Flex container for cards */
.cards-container {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    margin-bottom: 40px;
}

.card {
    background: white;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    padding: 15px;
    flex: 1 1 calc(50% - 20px); /* deux cartes par ligne */
    box-sizing: border-box;
    min-width: 200px;
    max-width: 400px;
    height: 100px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    text-align: center;
}

.card h3 {
    margin: 0;
    font-size: 16px;
}

.card .value {
    font-size: 22px;
    font-weight: bold;
    margin-top: 5px;
}

/* Horizontal cards for top models */
.top-models-container {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
}

.top-model-card {
    background: white;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    display: flex;
    align-items: center;
    gap: 15px;
    padding: 10px;
    flex: 1 1 calc(33% - 20px); /* 3 par ligne */
    min-width: 250px;
}

.top-model-card img {
    width: 120px;
    height: 70px;
    object-fit: cover;
    border-radius: 6px;
}

.top-model-card .info {
    display: flex;
    flex-direction: column;
}

.top-model-card .info h4 {
    margin: 0 0 5px 0;
    font-size: 16px;
}

.top-model-card .info span {
    font-size: 14px;
    color: #555;
}

/* Responsive */
@media (max-width: 768px) {
    .card {
        flex: 1 1 100%;
        max-width: 100%;
        height: 100px;
    }
    .top-model-card {
        flex: 1 1 100%;
    }
}
</style>
</head>
<body>

<div class="main-content">
<h1>Bienvenue sur le Tableau de Bord</h1>

<?php
$pdo = new PDO("mysql:host=localhost;dbname=supercar;charset=utf8", "root", "root");

// Clients actifs
$clientsActifs = $pdo->query("SELECT COUNT(*) FROM client")->fetchColumn();

// Véhicules en vente
$vehiculesEnVente = $pdo->query("SELECT COUNT(*) FROM Voiture")->fetchColumn();

// Demandes d'essai en attente
$demandesEnAttente = $pdo->query("SELECT COUNT(*) FROM essais WHERE statut = 'en_attente'")->fetchColumn();


// Messages
$messages = $pdo->query("SELECT COUNT(*) FROM contacts")->fetchColumn();
?>

<div class="cards-container">
    <div class="card">
        <h3>Clients Enregistrés</h3>
        <p class="value"><?= $clientsActifs ?></p>
    </div>
    <div class="card">
        <h3>Véhicules en Vente</h3>
        <p class="value"><?= $vehiculesEnVente ?></p>
    </div>
    <div class="card">
        <h3>Demandes d'Essai en Attente</h3>
        <p class="value"><?= $demandesEnAttente ?></p>
    </div>
    <div class="card">
        <h3>Messages reçus</h3>
        <p class="value"><?= $messages ?></p>
    </div>
</div>

<h2>Les modèles les plus demandés</h2>
<div class="top-models-container">
<?php
// Requête pour récupérer les modèles les plus demandés
$topModelsQuery = "
SELECT v.id_voiture, v.modele, v.marque, v.image_illustration, COUNT(e.id_essai) AS nb_demandes
FROM Voiture v
JOIN essais e ON v.modele = e.modele
GROUP BY v.id_voiture, v.modele, v.marque, v.image_illustration
ORDER BY nb_demandes DESC
LIMIT 6
";
$topModels = $pdo->query($topModelsQuery);

while($model = $topModels->fetch(PDO::FETCH_ASSOC)) {
    // On encode correctement les valeurs pour l'HTML
    $imgPath = htmlspecialchars($model['image_illustration']);
    $modele = htmlspecialchars($model['modele']);
    $marque = htmlspecialchars($model['marque']);
    $demandes = $model['nb_demandes'];

    echo '<div class="top-model-card">';
    echo '<img src="'.$imgPath.'" alt="'.$modele.'">';
    echo '<div class="info">';
    echo '<h4>'.$marque.' '.$modele.'</h4>';
    echo '<span>Demandes: '.$demandes.'</span>';
    echo '</div></div>';
}
?>
</div>


</div>
</body>
</html>
