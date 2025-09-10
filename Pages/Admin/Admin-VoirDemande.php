
  <?php 
  include("Admin-Navbar.php");
  include("../../requetedb/bdconnect.php");
  ?>
  
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voir demande d'essai</title>
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
$sql = "SELECT * FROM essais";
$curseur = $bdd->query($sql);

echo "<h2>Voici les demandes d'essai pour Supercar:</h2>";
echo "<table border='1'>"; // ouverture du tableau

// En-têtes du tableau
echo "<tr>";
echo "<th>iD</th>";
echo "<th> Nom</th>";
echo "<th> Prénom</th>";
echo "<th> Téléphone</th>";
echo "<th>Mail</th>";
echo "<th> Marque</th>";
echo "<th> Modele</th>";
echo "<th> Date d'essai </th>";
echo "<th> Heure d'essai'</th>";
echo "<th> Date de retour</th>";
echo "<th> Heure de retour</th>";
echo "</tr>";

while ($row = $curseur->fetch(PDO::FETCH_ASSOC))
 {
    $id = $row["id_client"];
    $Nom = $row["nom"];
    $Prénom = $row["prenom"];
    $Telephone = $row["telephone"];
    $Mail = $row["adresse_email"];
    $Marque = $row["marque"];
    $Modele = $row["modele"];
    $date_essai = $row["date_essai"];
    $heure_essai = $row["heure_essai"];
    $date_retour = $row["date_retour"];
    $heure_retour = $row["heure_retour"];
    

    echo "<tr>";
    echo "<td>$id</td>";
    echo "<td>$Nom</td>";
    echo "<td>$Prénom</td>";
    echo "<td>$Telephone</td>";
    echo "<td>$Mail</td>";
    echo "<td>$Marque</td>";
    echo "<td>$Modele</td>";
    echo "<td>$date_essai</td>";
    echo "<td>$heure_essai</td>";
    echo "<td>$date_retour</td>";
    echo "<td>$heure_retour</td>";

   
    echo "</tr>";
}

echo "</table>"; // fermeture du tableau



?>

  </div>

</body>
</html>

        


</html>