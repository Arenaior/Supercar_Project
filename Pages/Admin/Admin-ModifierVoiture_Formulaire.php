<?php 
include("Admin-Navbar.php");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Modifier Voiture - Admin Supercar</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
/* ================== RESET & BASE ================== */
body, html {
    margin: 0;
    padding: 0;
    height: 100%;
    font-family: 'Roboto', sans-serif;
}

/* ================== CONTENT ================== */
.content {
    flex: 1;
    background: #f4f7fc;
    padding: 20px;
    overflow-x: auto;
    margin-left: 270px; /* laisser place pour la sidebar */
}

/* ================== FORMULAIRE ================== */
.form-container {
    background: white;
    padding: 30px;
    border-radius: 12px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    max-width: 700px;
    margin: 30px auto;
}

.form-container h2 {
    margin-bottom: 20px;
    color: #333;
    font-size: 22px;
    text-align: center;
}

.form-container input[type="text"],
.form-container input[type="file"] {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    border: 1px solid #ccc;
    border-radius: 8px;
    font-size: 14px;
}

.form-container button {
    padding: 12px 20px;
    margin-top: 10px;
    border-radius: 8px;
    font-size: 16px;
}

.btn-dark {
    background: #292b29ff;
    color: white;
    border: none;
}

.btn-dark:hover {
    background: #2e312eff;
}

.btn-secondary-emphasis {
    background: #7f8c8d;
    color: white;
    border: none;
}

.btn-secondary-emphasis:hover {
    background: #606f73;
}
</style>
</head>

<body>

<div class="content">
    <div class="form-container">
        <h2>Modifier une Voiture</h2>
        <form action="Admin-ModifierVoiture.php" method="POST" enctype="multipart/form-data">
            <input type="text" placeholder="Entrez l'ID de la voiture" name="id" required>

            <h2>Nouvelle Informations</h2>
            <input type="text" placeholder="Marque" name="marque" required>
            <input type="text" placeholder="Modèle" name="modele" required>
            <input type="text" placeholder="Prix" name="prix" required>
            <input type="text" placeholder="Motorisation" name="motorisation" required>
            <input type="text" placeholder="Puissance" name="puissance" required>
            <input type="text" placeholder="Transmission" name="transmission" required>

            <label>Image de couverture :</label>
            <input type="file" name="image_illustration" accept="image/*" required>
            <input type="file" name="img_illustr1" accept="image/*" required>
            <input type="file" name="img_illustr2" accept="image/*" required>
            <input type="file" name="img_illustr3" accept="image/*" required>

            <button type="submit" class="btn btn-dark">Modifier</button>
            <button type="reset" class="btn btn-secondary-emphasis">Annuler</button>
        </form>
    </div>
</div>

</body>
</html>
