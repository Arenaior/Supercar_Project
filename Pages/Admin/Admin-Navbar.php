
  <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil-Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Navbar verticale</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .sidebar {
      height: 100vh;
      width: 250px;
      position: fixed;
      top: 0;
      left: 0;
      background-color: #343a40;
      padding-top: 20px;
    }

    .sidebar a {
      color: white;
      padding: 10px 20px;
      display: block;
      text-decoration: none;
    }

    .sidebar a:hover {
      background-color: #495057;
    }

    .content {
      margin-left: 250px;
      padding: 20px;
    }

    .h4 {
      color: white;
      padding: 10px 20px;
      text-decoration: none;
    }
  </style>
</head>
<body>

  <nav class="sidebar">
    <a href="/supercar_project/Pages/Admin/Admin-Accueil.php">ADMIN</a>
    <h4 class="h4"> CONTACTS </h4>
    <a href="/supercar_project/Pages/Admin/Admin-VoirContacts.php">Voir Contacts</a>
    <a href="/supercar_project/Pages/Admin/Admin-SupprimerContacts-formulaire_inscription.php">Supprimer Contacts</a>
    <h4 class="h4"> COMMENTAIRES </h4>
    <a href="/supercar_project/Pages/Admin/Admin-VoirCommentaires.php">Voir commentaires</a>
    <a href="/supercar_project/Pages/Admin/Admin-SupprimerCommentaires-formulaire_inscription.php">Supprimer commentaires</a>
    <h4 class="h4"> DEMANDES </h4>
    <a href="/supercar_project/Pages/Admin/Admin-VoirDemande.php">Voir demandes d'essai</a>
    <a href="/supercar_project/Pages/Admin/Admin-SupprimerDemande-formulaire_inscription.php">Supprimer demandes d'essai</a>
    <h4 class="h4"> VOITURES </h4>
    <a href="/supercar_project/Pages/Admin/Admin-AjouterVoiture-formulaire_inscription.php">Ajouter une voiture</a>
    <a href="/supercar_project/Pages/Admin/Admin-VoirVoitures.php">Voir les voiture</a>
    <a href="/supercar_project/Pages/Admin/Admin-SupprimerVoiture-Formulaire.php">Supprimer une voiture</a>
  </nav>

  

</body>
</html>

        


</html>