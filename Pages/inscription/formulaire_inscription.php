<?php
include ("../barre/barre.php");
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inscription Supercar</title>
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

        .custom-checkbox {
            display: flex;
            align-items: center;
            font-size: 0.9rem;
            margin-bottom: 1.5rem;
        }
    </style>
</head>
<body>

<!-- Titre -->
<div class="container text-center mt-5">
    <h2>Inscrivez-vous pour pouvoir avoir accès à nos services</h2>
</div>

<!-- Formulaire -->
<main>
    <div class="form-box p-4 border rounded shadow-sm bg-light">
        <form action="insertion_formulaire.php" method="POST">
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Entrez votre Nom" name="nom" required>
            </div>

            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Entrez votre Prénom" name="prenom" required>
            </div>

            <div class="mb-3">
                <input type="tel" class="form-control" placeholder="Entrez votre Numéro de téléphone" name="telephone" required>
            </div>

            <div class="mb-3">
                <input type="email" class="form-control" placeholder="Entrez votre Adresse email" name="email" required>
            </div>

            <div class="mb-3">
                <input type="password" class="form-control" placeholder="Entrez un Mot de passe" name="mdp" required>
            </div>
            <div class="mb-3">
                <input type="hidden" name="commentaire" >
            </div>
            <div class="custom-checkbox mb-3">
                <input type="checkbox" class="form-check-input me-2" required>
                <label class="form-check-label">J'accepte les conditions d'utilisation de mes données *</label>
            </div>

            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-dark">Envoyer</button>
                <button type="reset" class="btn btn-secondary">Annuler</button>
            </div>

            <div class="text-center mt-4">
                Vous avez déjà un compte ? 
                <a href="../Connexion/page_connexion.php">Connexion</a>
            </div>
        </form>
    </div>
</main>

<!-- Footer -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<br><br>
<?php
include ('../footage/footage.php');
?>
</body>
</html>
