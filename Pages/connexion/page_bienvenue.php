<?php
session_start();

// Vérifier si l'utilisateur est connecté
if (!isset($_SESSION['email'])) {
    // Si l'utilisateur n'est pas connecté, rediriger vers la page de connexion
    header("Location: pageconnexion.php");
    exit();
}

// Informations de l'utilisateur
$prenom = htmlspecialchars($_SESSION['prenom']);
$nom = htmlspecialchars($_SESSION['nom']);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bienvenue - Supercar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<!-- Barre de navigation -->
<?php include("../barre/barre.php"); ?>

<div class="container mt-5">
    <h1 class="text-center">Bienvenue, <?php echo $prenom . ' ' . $nom; ?> !</h1>
    <p class="text-center">Nous sommes ravis de vous avoir parmi nous.</p>

    <div class="text-center mt-4">
        <a href="/supercar_project/Pages/connexion/deconnection.php" class="btn btn-danger">Se déconnecter</a>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
