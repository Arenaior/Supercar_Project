<?php 
include("../../requetedb/bdconnect.php");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Supercar</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
/* RESET & BASE */
body, html {
  margin: 0;
  padding: 0;
  height: 100%;
  font-family: 'Roboto', sans-serif;
}

/* WRAPPER POUR FLEX */
.dashboard-wrapper {
  display: flex;       /* sidebar + contenu côte à côte */
  min-height: 100vh;
}

/* CONTENT */
.content {
  flex: 1;
  background: #f4f7fc;
  padding: 20px;
  overflow-x: auto;
}

/* TABLEAU CLIENTS */
h2.section-title {
  margin-bottom: 15px;
  color: #333;
  font-size: 22px;
}

.styled-table {
  width: 100%;
  border-collapse: collapse;
  font-size: 14px;
}

.styled-table thead tr {
  background-color: #2c3e50;
  color: #ffffff;
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

.styled-table th {
  border-top-left-radius: 12px;
  border-top-right-radius: 12px;
}
</style>
</head>

<body>

<div class="dashboard-wrapper">
    <!-- LA SIDEBAR EST INCLUSE ICI -->
    <?php include("Admin-Navbar.php"); ?>

    <!-- CONTENT PRINCIPAL -->
    <div class="content">

        <!-- TABLEAU CLIENTS -->
        <h2 class="section-title">Visualiser mes Clients !</h2>

        <table class="styled-table">
  <thead>
    <tr>
      <th>ID</th>
      <th>Nom</th>
      <th>Prénom</th>
      <th>Téléphone</th>
      <th>Adresse email</th>
      <th>Action</th> <!-- nouvelle colonne -->
    </tr>
  </thead>
  <tbody>
  <?php
  $requete = $bdd->query("SELECT id_client, nom, prenom, telephone, adresse_email FROM client");
  while($utilisateur = $requete->fetch(PDO::FETCH_ASSOC)) {
  ?>
    <tr>
      <td><?= $utilisateur["id_client"]; ?></td>
      <td><?= $utilisateur["nom"]; ?></td>
      <td><?= $utilisateur["prenom"]; ?></td>
      <td><?= $utilisateur["telephone"]; ?></td>
      <td><?= $utilisateur["adresse_email"]; ?></td>
      <td>
        <form method="post" action="Admin-SupprimerContacts.php" onsubmit="return confirm('Voulez-vous vraiment supprimer ce client ?');">
          <input type="hidden" name="id_client" value="<?= $utilisateur['id_client']; ?>">
          <button type="submit" style="padding:5px 10px; background:#e74c3c; color:white; border:none; border-radius:6px; cursor:pointer;">
            Supprimer
          </button>
        </form>
      </td>
    </tr>
  <?php 
  }
  ?>
  </tbody>
</table>

          </tbody>
        </table>

    </div>
</div>

</body>
</html>
