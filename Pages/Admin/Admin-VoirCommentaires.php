
  <?php 
  include("Admin-Navbar.php");
  include("../requetedb/bdconnect.php");
  ?>
  
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil-Admin</title>
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
$sql = "SELECT * FROM Contacts";
$curseur = mysqli_query($bdd, $sql);

echo "<h2>Voici les commentaires pour Supercar:</h2>";
echo "<table border='1'>"; // ouverture du tableau

// En-têtes du tableau
echo "<tr>";
echo "<th>ID</th>";
echo "<th> Nom</th>";
echo "<th>Prénom</th>";
echo "<th> Mail</th>";
echo "<th> Commentaires</th>";
echo "</tr>";

while ($row = mysqli_fetch_assoc($curseur)) {
    $id = $row["id"];
    $nom = $row["nom"];
    $prénom = $row["prénom"];
    $mail = $row["mail"];
    $commentaires = $row["commentaires"];

    echo "<tr>";
    echo "<td>$id</td>";
    echo "<td>$nom</td>";
    echo "<td>$prénom</td>";
    echo "<td>$mail</td>";
    echo "<td>$commentaires</td>";
    echo "</tr>";
}

echo "</table>"; // fermeture du tableau

mysqli_free_result($curseur);
mysqli_close($bdd);
?>

  </div>

</body>
</html>

        


</html>