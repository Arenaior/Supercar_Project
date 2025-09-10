
  <?php 
  include("Admin-Navbar.php");
  include("../../requetedb/bdconnect.php");
  ?>
  
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voir Voitures </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    

  <style>
    .p1{
        font-size:20px;
    }
    table {
        border-collapse: collapse;
        width: 100%;
    }

    th, td {
        padding: 10px; /* augmente l’espace à l’intérieur des cases */
        text-align: left;
    }

    tr {
        height: 50px; /* espace entre les lignes */
    }


  </style>

  <div class="content">
  <?php
$sql = "SELECT * FROM Voiture";
$curseur = $bdd->query($sql);

echo "<h2>Voici les modèles de voitures de Supercar:</h2>";
echo "<table border='1'>"; // ouverture du tableau

// En-têtes du tableau
echo "<tr>";
echo "<th>ID</th>";
echo "<th> Marque</th>";
echo "<th>Modele</th>";
echo "</tr>";

while ($row = $curseur->fetch(PDO::FETCH_ASSOC)){
    $id = $row["id_voiture"];
    $Marque = $row["marque"];
    $Modèle = $row["modele"];

    echo "<tr>";
    echo "<td>$id</td>";
    echo "<td>$Marque</td>";
    echo "<td>$Modèle</td>";
    echo "</tr>";
}

echo "</table>"; // fermeture du tableau


?>

  </div>

</body>
</html>

        


</html>