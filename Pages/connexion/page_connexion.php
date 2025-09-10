<?php
include ("../barre/barre.php");
$message = '';
if (!empty($_POST['email']) && !empty($_POST['mdp'])) {
    $mail = $_POST['email'];
    $mdp = $_POST['mdp'];

    $requete = $bdd->prepare("SELECT * FROM client WHERE adresse_email = ?");
    $requete->execute([$mail]);        
    $utilisateur = $requete->fetch(PDO::FETCH_ASSOC);

    if ($utilisateur) {
        if ($mdp == $utilisateur['mot_de_passe']) {
            $_SESSION['email'] = $utilisateur['adresse_email'];
            $_SESSION['nom'] = $utilisateur['nom'];
            $_SESSION['prenom'] = $utilisateur['prenom'];
            $_SESSION['telephone'] = $utilisateur['telephone'];
            $_SESSION['id_client'] = $utilisateur['id_client'];
            header("Location: page_bienvenue.php");
            exit();
        } else {
            $message = 'Mot de passe incorrect';
        }
    } else {
        $message = 'Utilisateur inexistant';
    }
} else if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $message = 'Veuillez saisir votre identifiant et mot de passe';
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Connexion Supercar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        main {
            min-height: 80vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .form-box {
            max-width: 500px;
            width: 100%;
        }

        .alert-message {
            padding: 8px;
            font-size: 0.95rem;
        }
    </style>
</head>
<body>

    <!-- Titre -->
    <div class="container text-center mt-5">
        <h2>Connectez-vous pour pouvoir avoir accès à nos services</h2>
    </div>

    <!-- Formulaire -->
    <main>
        <div class="form-box p-4 border rounded shadow-sm bg-light">
            <form action="" method="POST">
                <div class="mb-3">
                    <input type="email" class="form-control" placeholder="Entrez votre adresse mail" name="email" required>
                </div>

                <div class="mb-3">
                    <input type="password" class="form-control" placeholder="Entrez votre mot de passe" name="mdp" required>
                </div>

                <?php if ($message): ?>
                    <div class="alert alert-danger alert-message">
                        <?= htmlspecialchars($message) ?>
                    </div>
                <?php endif; ?>

                <div class="d-flex justify-content-between align-items-center mb-3">
                    <a href="#" class="text-decoration-none">Mot de passe oublié ?</a>
                    <button type="submit" class="btn btn-dark">Connexion</button>
                </div>

                <div class="text-center">
                    Vous n'avez pas encore un compte ?
                    <a href="../inscription/formulaire_inscription.php">Inscription</a>
                </div>
            </form>
        </div>
    </main>

    <!-- Footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <br><br>
    <?php include ('../footage/footage.php'); ?>
</body>
</html>
