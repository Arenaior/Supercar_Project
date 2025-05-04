<?php 
  include("../../requetedb/bdconnect.php");
  include("Admin-Navbar.php");
  include("../barre/barre.php");
  ?>
  
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter Voiture</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
 

    </head>
    <body>

<div class="container">
<center>

<div class="container mt-5">
    <h1> Entrez les données de la voiture: </h1>
    <form action="Admin-AjouterVoiture.php" method="POST" enctype="multipart/form-data">
    <input type="text" class="form-control données w-50" placeholder="Marque" name="marque" required><br>
    <input type="text" class="form-control données w-50" placeholder="Modèle" name="modele" required><br>
    <input type="number" step="100" class="form-control données w-50" placeholder="Prix en RS" name="prix" required><br>
    <input type="text" class="form-control données w-50" placeholder="Motorisation" name="motorisation" required><br>
    <input type="number" step="10" class="form-control données w-50" placeholder="Puissance en CV" name="puissance" required><br>
    <input type="text" class="form-control données w-50" placeholder="Transmission" name="transmission" required><br>
    <label for="img0">Image de couverture: </label><input type="file" id="img0" class="form-control données w-50" name="image_illustration" accept="image/*" required>
    <label for="img1">Illustration 1: </label><input type="file" id="img1" class="form-control données w-50" name="img_illustr1" accept="image/*" required>
    <label for="img2">Illustration 2: </label><input type="file" id="img2" class="form-control données w-50" name="img_illustr2" accept="image/*" required>
    <label for="img3">Illustration 3: </label><input type="file" id="img3" class="form-control données w-50" name="img_illustr3" accept="image/*" required>

    <br>
    <button type="submit" class="btn btn-dark">OK</button>
    <button type="reset" class="btn btn-secondary-emphasis">Annuler</button>
</form>

    
</center>
</div>
<br><br>

</body>
</html>
      