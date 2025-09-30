<?php
include("../barre/barre.php");
include("../../requetedb/bdconnect.php");

if (!isset($_SESSION['id_client'])) {
    header("Location: ../connexion/page_connexion.php");
    exit();
}

$id_client = $_SESSION['id_client'];

// Récupération des données client
$requete = $bdd->prepare("SELECT nom, prenom, telephone, adresse_email FROM client WHERE id_client = ?");
$requete->execute([$id_client]);
$client = $requete->fetch();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Demande d'essai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        main {
            min-height: 80vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .formulaire-container {
            background-color: #f8f9fa;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
            max-width: 500px;
            margin: 50px auto;
        }

        .formulaire-container h2 {
            text-align: center;
            margin-bottom: 30px;
        }

        .alert-message {
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>

<main>
    <div class="formulaire-container">
        <h2>Demande d'essai</h2>
    
        <form action="traitement_essaie.php" method="POST">
            <input type="hidden" name="id_client" value="<?= htmlspecialchars($id_client) ?>">
    
            <div class="mb-3">
                <label for="nom" class="form-label">Nom :</label>
                <input type="text" class="form-control" id="nom" name="nom" value="<?= htmlspecialchars($client['nom']) ?>" required>
            </div>
    
            <div class="mb-3">
                <label for="prenom" class="form-label">Prénom :</label>
                <input type="text" class="form-control" id="prenom" name="prenom" value="<?= htmlspecialchars($client['prenom']) ?>" required>
            </div>
    
            <div class="mb-3">
                <label for="telephone" class="form-label">Téléphone :</label>
                <input type="tel" class="form-control" id="telephone" name="telephone" value="<?= htmlspecialchars($client['telephone']) ?>" required>
            </div>
    
            <div class="mb-3">
                <label for="email" class="form-label">Email :</label>
                <input type="email" class="form-control" id="email" name="email" value="<?= htmlspecialchars($client['adresse_email']) ?>" required>
            </div>
    
            <?php if (isset($_SESSION['test'])): ?>
                <div class="alert-message"><?= htmlspecialchars($_SESSION['test']) ?></div>
            <?php endif; ?>
    
            <div class="mb-3">
                <label for="marque" class="form-label">Marque :</label>
                <select class="form-control" id="marque" name="marque" required>
                    <option value="">Sélectionnez une marque</option>
                    <option value="Mercedes">Mercedes</option>
                    <option value="Volkswagen">Volkswagen</option>
                    <option value="Audi">Audi</option>
                    <option value="Audi">Land Rover</option>
                    <option value="Audi">BMW</option>
                </select>
            </div>
    
            <div class="mb-3">
                <label for="modele" class="form-label">Modèle :</label>
                <input type="text" class="form-control" id="modele" name="modele" placeholder="Ex. : Classe A, Tiguan, A4..." required>
            </div>
    
            <div class="mb-3">
                <label for="date_essai" class="form-label">Date de l'essai :</label>
                <input type="date" class="form-control" id="date_essai" name="date_essai" required>
            </div>

            <div class="mb-3">
                <label for="heure_essai" class="form-label">Heure de l'essai :</label>
                <input type="text" class="form-control" id="heure d'essai" name="heure_essai" required>
            </div>

            <div class="mb-3">
                <label for="date_retour" class="form-label">Date de retour :</label>
                <input type="date" class="form-control" id="date_retour" name="date_retour" required>
            </div>

            <div class="mb-3">
                <label for="heure_retour" class="form-label">Heure de retour:</label>
                <input type="text" class="form-control" id="heure_retour" name="heure_retour" required>
            </div>
    
            <div class="d-grid">
                <button type="submit" class="btn btn-dark">Envoyer la demande</button>
            </div>
        </form>
    </div>
</main>

<?php include('../footage/footage.php'); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
