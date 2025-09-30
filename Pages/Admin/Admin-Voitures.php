<?php 
include("../../requetedb/bdconnect.php");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Gestion Voitures - Admin Supercar</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
/* WRAPPER FLEX */
.dashboard-wrapper {
    display: flex;
    min-height: 100vh;
    font-family: 'Roboto', sans-serif;
}

/* SIDEBAR FIXE */
.sidebar {
    width: 250px;
    background-color: #f8f9fa;
    height: 100vh;
    position: fixed;
    overflow-y: auto;
}

/* CONTENT */
.content {
    margin-left: 250px;
    flex: 1;
    background: #f4f7fc;
    padding: 30px;
    overflow-y: auto;
}

/* TITRE */
h2 {
    margin-bottom: 20px;
    color: #333;
}

/* TABLEAU STYLÉ */
.styled-table {
    width: 100%;
    border-collapse: collapse;
    font-size: 14px;
    background: #fff;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
}

.styled-table thead tr {
    background-color: #2c3e50;
    color: #ffffff;
}

.styled-table th, .styled-table td {
    padding: 10px 12px;
    border-bottom: 1px solid #ddd;
    text-align: left;
    vertical-align: middle;
}

.styled-table tbody tr:nth-of-type(even) {
    background-color: #f9f9f9;
}

.styled-table tbody tr:hover {
    background-color: #e8f0fe;
}

.styled-table th {
    border-top-left-radius: 12px;
    border-top-right-radius: 12px;
}

/* Aperçu image */
img.preview {
    max-width: 100px;
    max-height: 60px;
    object-fit: cover;
    border-radius: 6px;
}

/* BOUTONS */
.btn-modifier {
    background-color: #3498db;
    color: white;
    border: none;
    padding: 6px 12px;
    border-radius: 6px;
    text-decoration: none;
    cursor:pointer;
}

.btn-modifier:hover { background-color: #2980b9; }

.btn-supprimer {
    background-color: #e74c3c;
    color: white;
    border: none;
    padding: 6px 12px;
    border-radius: 6px;
    text-decoration: none;
}

.btn-supprimer:hover { background-color: #c0392b; }

/* FORMULAIRE CARD */
.card {
    background: #fff;
    border-radius: 12px;
    padding: 25px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    margin-top: 40px;
    max-width: 700px;
    margin-left: auto;
    margin-right: auto;
}

.card h3 {
    margin-bottom: 20px;
    color: #2c3e50;
    text-align: center;
}

.form-control { margin-bottom: 15px; }

button[type="submit"], button[type="reset"] { width: 120px; }
</style>
</head>

<body>
<div class="dashboard-wrapper">
    <!-- SIDEBAR -->
    <div class="sidebar">
        <?php include("Admin-Navbar.php"); ?>
    </div>

    <!-- CONTENT -->
    <div class="content">

        <!-- TABLEAU DES VOITURES -->
        <?php
        $sql = "SELECT * FROM Voiture";
        $curseur = $bdd->query($sql);

        echo "<h2>Modèles de voitures Supercar</h2>";
        echo "<table class='styled-table'>";
        echo "<thead><tr>";
        echo "<th>Aperçu</th>";
        echo "<th>ID</th>";
        echo "<th>Marque</th>";
        echo "<th>Modèle</th>";
        echo "<th>Modifier</th>";
        echo "<th>Supprimer</th>";
        echo "</tr></thead><tbody>";

        while ($row = $curseur->fetch(PDO::FETCH_ASSOC)){
            $id = $row["id_voiture"];
            $Marque = htmlspecialchars($row["marque"]);
            $Modele = htmlspecialchars($row["modele"]);
            $image = htmlspecialchars($row["image_illustration"]);
            $img1 = htmlspecialchars($row["img_illustr1"]);
            $img2 = htmlspecialchars($row["img_illustr2"]);
            $img3 = htmlspecialchars($row["img_illustr3"]);

            $imageUrl = "/supercar_project/assets/images/" . $image;
            
            echo "<tr>";
            echo "<td>";
            if (!empty($image)) { echo "<img src='$imageUrl' alt='$Modele' class='preview'>"; } else { echo "Pas d'image"; }
            echo "</td>";
            echo "<td>$id</td>";
            echo "<td>$Marque</td>";
            echo "<td>$Modele</td>";

            $jsonRow = htmlspecialchars(json_encode($row), ENT_QUOTES, 'UTF-8');
            echo "<td><button class='btn-modifier' onclick='openModal($jsonRow)'>Modifier</button></td>";

            echo "<td><a href='Admin-SupprimerVoiture.php?id=$id' class='btn-supprimer' onclick=\"return confirm('Voulez-vous vraiment supprimer cette voiture ?');\">Supprimer</a></td>";
            echo "</tr>";
        }

        echo "</tbody></table>";
        ?>

        <!-- FORMULAIRE AJOUTER VOITURE -->
        <div class="card">
            <h3>Ajouter une nouvelle voiture</h3>
            <form action="Admin-AjouterVoiture.php" method="POST" enctype="multipart/form-data">
                <input type="text" class="form-control" placeholder="Marque" name="marque" required>
                <input type="text" class="form-control" placeholder="Modèle" name="modele" required>
                <input type="number" step="100" class="form-control" placeholder="Prix en RS" name="prix" required>
                <input type="text" class="form-control" placeholder="Motorisation" name="motorisation" required>
                <input type="number" step="10" class="form-control" placeholder="Puissance en CV" name="puissance" required>
                <input type="text" class="form-control" placeholder="Transmission" name="transmission" required>

                <label for="img0">Image de couverture: </label>
                <input type="file" id="img0" class="form-control" name="image_illustration" accept="image/*" required>

                <label for="img1">Illustration 1: </label>
                <input type="file" id="img1" class="form-control" name="img_illustr1" accept="image/*" required>

                <label for="img2">Illustration 2: </label>
                <input type="file" id="img2" class="form-control" name="img_illustr2" accept="image/*" required>

                <label for="img3">Illustration 3: </label>
                <input type="file" id="img3" class="form-control" name="img_illustr3" accept="image/*" required>

                <div class="d-flex justify-content-center mt-3">
                    <button type="submit" class="btn btn-dark me-2">OK</button>
                    <button type="reset" class="btn btn-secondary">Annuler</button>
                </div>

            </form>
        </div>

    </div>
</div>

<!-- MODAL MODIFICATION -->
<div class="modal-bg" id="modal-bg" style="display:none; position:fixed; top:0; left:0; width:100%; height:100%; background:rgba(0,0,0,0.5); backdrop-filter:blur(5px); justify-content:center; align-items:center; z-index:9999;">
    <div class="modal-content" style="background:#fff; padding:30px; border-radius:12px; max-width:700px; width:90%; position:relative;">
        <span class="close-modal" style="position:absolute; top:10px; right:15px; font-size:22px; font-weight:bold; cursor:pointer;" onclick="closeModal()">&times;</span>
        <h3 style="text-align:center; margin-bottom:20px;">Modifier la voiture</h3>
        <form id="editForm" action="Admin-ModifierVoiture.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" id="edit-id">
            <input type="text" class="form-control" name="marque" id="edit-marque" placeholder="Marque" required>
            <input type="text" class="form-control" name="modele" id="edit-modele" placeholder="Modèle" required>
            <input type="number" step="100" class="form-control" name="prix" id="edit-prix" placeholder="Prix" required>
            <input type="text" class="form-control" name="motorisation" id="edit-motorisation" placeholder="Motorisation" required>
            <input type="number" step="10" class="form-control" name="puissance" id="edit-puissance" placeholder="Puissance" required>
            <input type="text" class="form-control" name="transmission" id="edit-transmission" placeholder="Transmission" required>

            <label>Image de couverture: </label>
            <img src="" id="edit-image0" class="preview mb-2">
            <input type="file" class="form-control" name="image_illustration" accept="image/*">

            <label>Illustration 1: </label>
            <img src="" id="edit-image1" class="preview mb-2">
            <input type="file" class="form-control" name="img_illustr1" accept="image/*">

            <label>Illustration 2: </label>
            <img src="" id="edit-image2" class="preview mb-2">
            <input type="file" class="form-control" name="img_illustr2" accept="image/*">

            <label>Illustration 3: </label>
            <img src="" id="edit-image3" class="preview mb-2">
            <input type="file" class="form-control" name="img_illustr3" accept="image/*">

            <div class="d-flex justify-content-center mt-3">
                <button type="submit" class="btn btn-dark me-2">Modifier</button>
                <button type="button" class="btn btn-secondary" onclick="closeModal()">Annuler</button>
            </div>

        </form>
    </div>
</div>

<script>
function openModal(car) {
    document.getElementById('modal-bg').style.display = 'flex';
    document.getElementById('edit-id').value = car.id_voiture;
    document.getElementById('edit-marque').value = car.marque;
    document.getElementById('edit-modele').value = car.modele;
    document.getElementById('edit-prix').value = car.prix;
    document.getElementById('edit-motorisation').value = car.motorisation;
    document.getElementById('edit-puissance').value = car.puissance;
    document.getElementById('edit-transmission').value = car.transmission;

    document.getElementById('edit-image0').src = '/supercar_project/assets/images/' + car.image_illustration;
    document.getElementById('edit-image1').src = '/supercar_project/assets/images/' + car.img_illustr1;
    document.getElementById('edit-image2').src = '/supercar_project/assets/images/' + car.img_illustr2;
    document.getElementById('edit-image3').src = '/supercar_project/assets/images/' + car.img_illustr3;
}

function closeModal() {
    document.getElementById('modal-bg').style.display = 'none';
}
</script>

</body>
</html>
