
<?php 
  include("Admin-Navbar.php");
  ?>
  
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier Voiture</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
 

    </head>


<div class="container">
<center>

<div class="container mt-5">
    <h1> Entrez l'id de la voiture à modifier </h1>
    <form action="Admin-ModifierVoiture.php" method="POST" enctype="multipart/form-data">
  <input type="text" class="form-control données w-50" placeholder="Entrez l'ID ici" name="id">
    <br><br>
    <h1> Entrez les nouvelles informations de la voiture </h1>
    <input type="text" class="form-control données w-50" placeholder="Entrez la marque ici" name="marque">
    <input type="text" class="form-control données w-50" placeholder="Entrez le modèle ici" name="modele">
    <input type="text" class="form-control données w-50" placeholder="Entrez le prix ici" name="prix">
    <input type="text" class="form-control données w-50" placeholder="Entrez la motorisation ici" name="motorisation">
    <input type="text" class="form-control données w-50" placeholder="Entrez la puissance ici" name="puissance">
    <input type="text" class="form-control données w-50" placeholder="Entrez la transmission ici" name="transmission">
    <label for="img0">Image de couverture: </label><input type="file" id="img0" class="form-control données w-50" name="image_illustration" accept="image/*" required>
    <label for="img0">Image de couverture: </label><input type="file" id="img1" class="form-control données w-50" name="img_illustr1" accept="image/*" required>
    <label for="img0">Image de couverture: </label><input type="file" id="img2" class="form-control données w-50" name="img_illustr2" accept="image/*" required>
    <label for="img0">Image de couverture: </label><input type="file" id="img3" class="form-control données w-50" name="img_illustr3" accept="image/*" required>

    <br>
    <button type="submit" class="btn btn-dark">OK</button>
    <button type="reset" class="btn btn-secondary-emphasis">Annuler</button>
</form>

    
</center>

        


</html>
      </div>