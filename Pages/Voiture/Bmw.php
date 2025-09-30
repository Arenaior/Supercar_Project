<?php
session_start();
include ('../barre/barre.php');
$requete = $bdd->query("SELECT * FROM voiture WHERE marque LIKE '%BMW%'");
$voitures = $requete->fetchAll(PDO::FETCH_ASSOC); // fetchAll pour pouvoir utiliser foreach
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modèles de BMW</title>
</head>
<body>
<style>
.vid {
    height: 800px;
    padding: 20px 0; 
    text-align: center; 
    color: rgb(245, 242, 242);
    font-size: 60px;
    display: flex;
    justify-content: center;
    align-items: center;
    background-image: url('../../assets/images/illustration-BMW.jpg');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}

.vid .vid1{ 
    position: relative;
    z-index: 1;
    font-size: 60px;
    font-weight: bold;
    margin-top: 170px;
    padding: 66px 53px;
    border-radius: 3px; 
}

.titre {
    font-size: 70px;
    font-weight: bold;
    margin-top: 125px;
}

.descri {
    font-size: 15px;
    color: rgb(248, 242, 242); 
    text-align: left; 
    line-height: 1.8; 
    max-width: 800px; 
    margin: 30px 0; 
    padding-left: 20px; 
    border-left: 4px solid rgb(248, 242, 242); 
    font-weight:bold;
    margin-top: 150px;
    margin-right:600px;
}

.logo{
    width: 40px;
    height: 40px;
}
.voiture-container {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
    margin: 40px 60px;
}

.voiture-cadre {
    height: 100%;
    min-height: 500px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}
.voiture-cadre img {
    height: 250px;
    object-fit: cover;
    border-radius: 10px;
}
.voiture-titre {
    margin-top: 10px;
    font-weight: bold;
    font-size: 18px;
}
.voiture-button {
    margin-top: auto;
    display: flex;
    justify-content: center;
    gap: 10px;
}

.button {
    background-color: #007bff;
    color: white;
    padding: 8px 15px;
    border-radius: 5px;
    text-decoration: none;
    font-weight: bold;
}
.button:hover {
    background-color: #0056b3;
}

.specif {
    font-size: 20px;
    font-weight: 500;
    font-family: "Arial", sans-serif;
    color: #333;
    background: linear-gradient(to right, #f8f8f8, #e0e0e0);
    padding: 15px;
    border-radius: 10px;
    box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.1);
}

.specif li {
    margin-bottom: 10px;
    list-style: none;
    position: relative;
    padding-left: 25px;
}

.specif li::before {
    content: "✓";
    color: #007bff;
    font-size: 22px;
    font-weight: bold;
    position: absolute;
    left: 0;
    top: 0;
}

/* Style du modal (invisible par défaut) */
.modal {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 350px;
    height: 350px;
    background-color: rgba(0, 0, 0, 0.5);
    text-align: center;
}

.modal-cont {
    background: white;
    padding: 20px;
    width: 300px;
    border-radius: 10px;
    display: inline-block;
    width: 80%;
    position: relative;
    top: 50%;
    transform: translateY(-50%);
    text-align: center;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
}

.close {
    position: absolute;
    top: 10px;
    right: 15px;
    font-size: 24px;
    font-weight: bold;
    text-decoration: none;
    color: black;
}

/* Afficher le modal lorsque ciblé */
.modal:target {
    display: block;
}

.test {
    display: flex;
    overflow-x: auto;
    gap: 20px;
    padding: 20px;
}

</style>

<div class="vid">
    <div class="vid1">
        <center><h1 class="titre">BMW</h1></center>
        <div class="descri">
        Ressentez chaque instant au volant comme une expérience unique. BMW allie puissance et élégance, 
        technologie et raffinement, pour transformer chaque trajet en moment d’émotion. Conçue pour ceux 
        qui repoussent les limites de la route, chaque détail reflète l’excellence allemande et le plaisir 
        de conduire sans compromis.
        </div>
    </div>
</div>

<center>
    <div class="css">
        <h1>Découvrez nos modèles de BMW</h1>
        <img src="../../assets/images/BMW-Logo.png" style="width: 180px; height: auto;">
    </div>
</center>

<hr>

<main>
    <div class="voiture-container">
        <?php foreach ($voitures as $voiture): ?>
        <div class="voiture-cadre">
            <img src="../../assets/images/<?= htmlspecialchars($voiture['image_illustration']) ?>" alt="<?= htmlspecialchars($voiture['modele']) ?>">
            <div class="voiture-titre">
                <?= htmlspecialchars($voiture['marque'] . ' ' . $voiture['modele']); ?>
            </div>
            <div class="voiture-titre">
                À partir de <?= htmlspecialchars($voiture['prix']) ?> RS
            </div>
            <div class="voiture-button">
                <a href="#modal-<?= $voiture['id_voiture'] ?>" class="btn btn-dark">Voir plus...</a>
                <?php if (!isset($_SESSION['email'])): ?>
                    <a href="../connexion/page_connexion.php" class="btn btn-dark">Essayer</a>
                <?php else: ?>
                    <a href="../connexion/formulaire_essaie.php" class="btn btn-dark">Essayer</a>
                <?php endif; ?>
            </div>
        </div>
        <?php endforeach; ?>
    </div>

    <?php foreach ($voitures as $voiture): ?>
    <!-- Modal -->
    <div id="modal-<?= $voiture['id_voiture'] ?>" class="modal">
        <div class="modal-cont">
            <a href="#" class="close">&times;</a>
            <h2>À propos du modèle <?= htmlspecialchars($voiture['marque'] . ' ' . $voiture['modele']); ?></h2>
            <p>L’ingénierie allemande au service du plaisir de conduire. </p>
            <div class="test">
                <div class="voiture-cadre">
                    <img src="../../assets/images/<?= htmlspecialchars($voiture['img_illustr1']) ?>" alt="<?= htmlspecialchars($voiture['marque'] . ' ' . $voiture['modele']); ?>">
                </div>
                <div class="voiture-cadre">
                    <img src="../../assets/images/<?= htmlspecialchars($voiture['img_illustr2']) ?>" alt="<?= htmlspecialchars($voiture['marque'] . ' ' . $voiture['modele']); ?>">
                </div>
                <div class="voiture-cadre">
                    <img src="../../assets/images/<?= htmlspecialchars($voiture['img_illustr3']) ?>" alt="<?= htmlspecialchars($voiture['marque'] . ' ' . $voiture['modele']); ?>">
                </div>
            </div>
            <br>
            <div class="specif">
                <li><strong>Motorisation :</strong> <?= htmlspecialchars($voiture['motorisation']) ?></li>
                <li><strong>Puissance :</strong> <?= htmlspecialchars($voiture['puissance']) ?></li>
                <li><strong>Transmission :</strong> <?= htmlspecialchars($voiture['transmission']) ?></li>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</main>

<?php include('../footage/footage.php'); ?>

</body>
</html>
