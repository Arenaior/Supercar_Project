<?php 
include("Admin-Navbar.php");
include("../../requetedb/bdconnect.php");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Demandes d'Essai - Supercar</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body, html {
    margin: 0;
    padding: 0;
    font-family: 'Roboto', sans-serif;
    background: #f4f7fc;
    min-height: 100vh;
    display: flex;
}

/* Content à côté de la sidebar */
.content {
    flex: 1;
    padding: 20px;
    margin-left: 0px;
    box-sizing: border-box;
    overflow-x: auto;
}

/* Titre section */
h2.section-title {
    margin-bottom: 20px;
    font-size: 22px;
    color: #333;
    text-align: center;
}

/* Tableau stylé */
.styled-table {
    width: 100%;
    border-collapse: collapse;
    font-size: 14px;
    background: white;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 2px 8px rgba(0,0,0,0.05);
}

.styled-table thead tr {
    background-color: #2c3e50;
    color: #ffffff;
    text-align: left;
}

.styled-table th, .styled-table td {
    padding: 10px 12px;
    border-bottom: 1px solid #ddd;
}

.styled-table tbody tr:nth-of-type(even) {
    background-color: #f9f9f9;
}

.styled-table tbody tr:hover {
    background-color: #e8f0fe;
}

/* Boutons */
.btn-action {
    margin-right: 5px;
    font-size: 12px;
}
</style>
</head>
<body>

<div class="content">
    <h2 class="section-title">Voici les demandes d'essai pour Supercar</h2>

    <table class="styled-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Téléphone</th>
                <th>Mail</th>
                <th>Marque</th>
                <th>Modèle</th>
                <th>Date Essai</th>
                <th>Heure Essai</th>
                <th>Date Retour</th>
                <th>Heure Retour</th>
                <th>Statut</th> <!-- ✅ Nouvelle colonne -->
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $sql = "SELECT * FROM essais";
        $curseur = $bdd->query($sql);

        while ($row = $curseur->fetch(PDO::FETCH_ASSOC)) {
            $id = $row['id_client'];
            echo "<tr>";
            echo "<td>{$id}</td>";
            echo "<td>{$row['nom']}</td>";
            echo "<td>{$row['prenom']}</td>";
            echo "<td>{$row['telephone']}</td>";
            echo "<td>{$row['adresse_email']}</td>";
            echo "<td>{$row['marque']}</td>";
            echo "<td>{$row['modele']}</td>";
            echo "<td>{$row['date_essai']}</td>";
            echo "<td>{$row['heure_essai']}</td>";
            echo "<td>{$row['date_retour']}</td>";
            echo "<td>{$row['heure_retour']}</td>";

            // ✅ Nouvelle cellule : Statut
            $statut = $row['statut'];
            $couleur = "secondary";
            if ($statut == "validee") $couleur = "success";
            elseif ($statut == "rejete") $couleur = "danger";
            elseif ($statut == "en_attente") $couleur = "warning";

            echo "<td><span class='badge bg-$couleur'>".ucfirst(str_replace('_', ' ', $statut))."</span></td>";

            // Actions : valider / rejeter
            echo "<td>
                    <a href='Admin-ValiderEssai.php?id={$id}' class='btn btn-success btn-action'>Valider</a>
                    <a href='Admin-RejeterEssai.php?id={$id}' class='btn btn-danger btn-action'>Rejeter</a>
                  </td>";
            echo "</tr>";
        }
        ?>
        </tbody>
    </table>
</div>

</body>
</html>
