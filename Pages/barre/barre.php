<?php 
include("../../requetedb/bdconnect.php");
?>

<!DOCTYPE HTML>
<html>
<head>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<style>
  .img1{
    width:25px;
    margin-left:-25px;
  }
  .nom{
    color: #ddd;
  }
</style>
</head>
<body>
<!--déclaration de la barre de navigation avec couleur noire-->
<nav class="navbar navbar-expand-lg bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand  text-white" href="#" >
      <!--insertion logo-->
      <img src="/supercar_project/assets/images/barre-logo.PNG"  width="70" height="70" > SUPERCAR</a>
   
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-3 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active text-white mx-3" aria-current="page" href="/supercar_project/Pages/Accueil/accueil.php">Accueil</a>
        </li>
       
        <li class="nav-item mx-3">
          <a class="nav-link active text-white" href="/supercar_project/Pages/Voiture/Voiture-Accueil.php">Voitures</a>
        </li>

        <li class="nav-item mx-3">
          <a class="nav-link active text-white" href="/supercar_project/Pages/Service/service.php">Services</a>
        </li>

        <li class="nav-item mx-3">
          <a class="nav-link text-white" href="/supercar_project/Pages/connexion/page_connexion.php">Demande d'essai</a>
        </li>

        <li class="nav-item mx-3">
          <a class="nav-link text-white" href="/supercar_project/Pages/Contacts/commentaire.php">Contactez-Nous</a>
        </li>
      </ul>
    </div>

    <div class="user-info" style="float: right; margin-right: 20px;">
    <?php
    if (session_status() === PHP_SESSION_NONE) {
        session_start();  // Démarre la session si elle n'est pas déjà démarrée
    }

    // Vérifie si les données de l'utilisateur sont présentes dans la session
    if (isset($_SESSION['prenom']) && isset($_SESSION['nom'])) {
        // Récupère les initiales de l'utilisateur
        $initiales = strtoupper(substr($_SESSION['prenom'], 0, 1) . substr($_SESSION['nom'], 0, 1));
    ?>
        <a href="#" style="text-decoration: none;
                           color:#ddd;
        ">
          <div style="display: flex; align-items: center;">
              <!-- Affiche les initiales de l'utilisateur -->
              <div style="
                  background-color: #0bbe38;
                  border-radius: 50%;
                  width: 40px;
                  height: 40px;
                  display: flex;
                  align-items: center;
                  justify-content: center;
                  font-weight: bold;
                  margin-right: 10px;
              ">
                  <?php echo $initiales; ?>
              </div>
          
        </a>
            <div style="display: flex; flex-direction: column;">
                <!-- Affiche le prénom de l'utilisateur -->
                <span class="nom">Bonjour, <?php echo htmlspecialchars($_SESSION['nom']) . " " . htmlspecialchars($_SESSION['prenom']);?></span>
                <!-- Lien pour se déconnecter -->
                <a href="/supercar_project/Pages/connexion/deconnection.php" style="font-size: 12px; color: red; text-decoration: none; margin-top: 2px;">
                    Se déconnecter
                </a>
            </div>
          </div>
    <?php } else { ?>
        <!-- Affiche le bouton de connexion si l'utilisateur n'est pas connecté -->
        <a href="/supercar_project/Pages/connexion/page_connexion.php">
            <img src="/supercar_project/assets/images/barre-personne.png"
                 class="img1 mx-5"
                 alt="Connexion"
                 style="width: 40px; height: 40px;">
        </a>
    <?php } ?>
</body>
</nav>
</html>