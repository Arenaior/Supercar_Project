
  <?php 
  include("Admin-Navbar.php");
  include("bdconnect.php");
  ?>

  
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout de voiture </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  

  <style>
    .p1{
        font-size:20px;
    }
  </style>

  <div class="content">
  <?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_Marque = mysqli_real_escape_string($bdd, $_POST["Marque"]);
    $_Modele = mysqli_real_escape_string($bdd, $_POST["Modèle"]);

    $sql = "INSERT INTO Voitures (Marque, Modele) VALUES ('$_Marque', '$_Modele')";

    if (mysqli_query($bdd, $sql)) {
        echo "<div class='alert alert-success'>Voiture ajoutée avec succès !</div>";
    } else {
        echo "<div class='alert alert-danger'>Erreur : " . mysqli_error($bdd) . "</div>";
    }

    mysqli_close($bdd);
}
?>

<center>
<H1><p>Voiture ajoutée avec succès</p></H1>
<center>
  </div>

</body>
</html>

        


</html>