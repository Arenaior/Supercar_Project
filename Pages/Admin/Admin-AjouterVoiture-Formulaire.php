
  <?php 
  include("Admin-Navbar.php");
  ?>
  
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter Voiture</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
 

    </head>


<div class="container">
<center>

<div class="container mt-5">
    <h1> Entrez les données de la voiture: </h1>
    <form action="Admin-AjouterVoiture.php" method="POST">
    <input type="text" class="form-control données w-50" placeholder="la marque" name="Marque">
    <input type="text" class="form-control données w-50" placeholder="le modèle" name="Modèle">

    <br>
    <button type="submit" class="btn btn-dark">OK</button>
    <button type="reset" class="btn btn-secondary-emphasis">Annuler</button>
</form>

    
</center>

        


</html>
      </div>