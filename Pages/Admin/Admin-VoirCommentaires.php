<?php 
include("Admin-Navbar.php");
include('../../requetedb/bdconnect.php');
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
            padding: 10px;
            text-align: left;
        }
        tr {
            height: 50px;
        }
    </style>
</head>
<body>

<div class="content">
<?php
$sql = "SELECT * FROM contacts"; // utilisation de la table contacts
$requete = $bdd->query($sql); // On utilise PDO ici

echo "<h2>Voici les messages reçus :</h2>";
echo "<table border='1'>";

// En-têtes du tableau
echo "<tr>";
echo "<th>id_client</th>";
echo "<th>nom</th>";
echo "<th>prenom</th>";
echo "<th>adresse_email</th>";
echo "<th>telephone</th>";
echo "<th>commentaires</th>";
echo "</tr>";

// Boucle avec PDO
while ($row = $requete->fetch(PDO::FETCH_ASSOC)) {
    $id = $row["id_client"];
    $nom = $row["nom"];
    $prenom = $row["prenom"];
    $email = $row["adresse_email"];
    $telephone = $row["telephone"];
    $commentaires = $row["commentaire"];

    echo "<tr>";
    echo "<td>$id</td>";
    echo "<td>$nom</td>";
    echo "<td>$prenom</td>";
    echo "<td>$email</td>";
    echo "<td>$telephone</td>";
    echo "<td>$commentaires</td>";
    echo "</tr>";
}

echo "</table>";
?>
</div>

</body>
</html>
