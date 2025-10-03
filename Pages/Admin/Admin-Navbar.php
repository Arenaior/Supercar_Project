
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
/* ================== SIDEBAR ================== */
body, html {
  margin: 0;
  padding: 0;
  height: 100%;
  font-family: 'Roboto', sans-serif;
}

.dashboard-wrapper {
  display: flex;
  min-height: 100vh;
}

/* Sidebar fixe à gauche */
.sidebar {
  width: 250px;
  background: #2c3e50;
  color: white;
  padding: 20px;
  display: flex;
  flex-direction: column;
  min-height: 100vh; /* prend toute la hauteur */
}

.sidebar h2 {
  margin-bottom: 20px;
  font-size: 22px;
}

.sidebar nav {
  display: flex;
  flex-direction: column;
  gap: 15px;
  margin-top: 20px;
}

.sidebar nav a {
  color: white;
  text-decoration: none;
  font-size: 18px;
  padding: 8px 12px;
  transition: background 0.3s;
  border-radius: 6px;
}

.sidebar nav a:hover {
  background: #34495e;
}

b{
  color: #686868ff;
}

/* Contenu à côté de la sidebar */
.content {
  flex: 1;
  background: #f4f7fc;
  padding: 20px;
  overflow-x: auto;
}
</style>

<div class="sidebar">
    <h2>Supercar Admin</h2>
    <nav>
      <a href="Admin-Dashboard.php">Tableau de Bord</a>
      <a href="Admin-VoirContacts.php">Clients</a>
      <a href="Admin-Gestionimages.php">Gestion des images</a>
      <a href="Admin-Voitures.php">Véhicules</a>
      <a href="Admin-Demande.php">Demandes d'Essai</a>
      <a href="Admin-VoirCommentaires.php">Messages</a>
      <a href="logout.php"><b>Déconnexion</b></a>
    </nav>
</div>

</body>
</html>

        


</html>