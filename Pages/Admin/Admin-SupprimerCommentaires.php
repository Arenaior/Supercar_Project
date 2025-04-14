
  <?php 
  include("Admin-Navbar.php");
  include("bdconnect.php");
  ?>

  
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suppression de Commentaire</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  

  <style>
    .p1{
        font-size:20px;
    }
  </style>

  <div class="content">
  <?php
  $_id = $_POST ["id"];


$sql= "DELETE FROM Contacts  WHERE id='$_id'"; 
$result = $bdd->query($sql);
?>
<center>
<H1><p>Commentaire supprimé avec succès</p></H1>
<center>
  </div>

</body>
</html>

        


</html>