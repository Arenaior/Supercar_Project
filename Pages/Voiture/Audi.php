<?php 
session_start();
include ('../barre/barre.php');
$prenom = htmlspecialchars($_SESSION['prenom']);
$nom = htmlspecialchars($_SESSION['nom']);
$telephone = htmlspecialchars($_SESSION['telephone']);
$mail = htmlspecialchars($_SESSION['email']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Audi.css">
    <title>Modèles Audi</title>
</head>
<body>
<header>
        <div class="descri">
            Consultez nos dernières offres sur certains modèles Audi, pour les clients hautement qualifiés
        </div>
</header>
<center>
    <div class="css">
        <h1>Découvrez nos modeles avec Audi</h1>
        <img src="../../assets/images/Logo audi.png" style="width: 150px; height: auto;">
    </div>
</center>
<hr>


    <main>
        <div class="voiture-container">
            <div class="voiture-cadre">
                <img src="../../assets/images/Audi RS q8.jpeg" alt="Audi RS Q8">
                <div class="voiture-titre">
                    Audi RS Q8
                </div>
                <div class="voiture-titre">
                    À partir de 
                </div>
                <div class="voiture-button">
                <a href="#modal-rsq8" class="btn btn-dark">Voir plus...</a>
                    <a href="../connexion/pageconnexion.php"class="btn btn-dark">Essayer</a>
                </div>
            </div>
            <div class="voiture-cadre">
                <img src="../../assets/images/Audi rs7.jpeg" alt="Audi RS7">
                <div class="voiture-titre">
                    Audi RS7
                </div>
                <div class="voiture-titre">
                    À partir de 
                </div>
                <div class="voiture-button">
                <a href="#modal-rs7" class="btn btn-dark">Voir plus...</a>
                    <a href="../connexion/pageconnexion.php"class="btn btn-dark">Essayer</a>
                </div>
            </div>
            <div class="voiture-cadre">
                <img src="../../assets/images/Audi S e-tron.jpeg" alt="Audi S e-tron">
                <div class="voiture-titre">
                    Audi S e-tron
                </div>
                <div class="voiture-titre">
                    À partir de 
                </div>
                <div class="voiture-button">
                <a href="#modal-etron" class="btn btn-dark">Voir plus...</a>
                    <a href="../connexion/pageconnexion.php"class="btn btn-dark">Essayer</a>
                </div>
            </div>
            <div class="voiture-cadre">
                <img src="../../assets/images/Audi S8.jpeg" alt="Audi S8">
                <div class="voiture-titre">
                    Audi S8
                </div>
                <div class="voiture-titre">
                    À partir de 
                </div>
                <div class="voiture-button">
                <a href="#modal-s8" class="btn btn-dark">Voir plus...</a>
                    <a href="../connexion/pageconnexion.php"class="btn btn-dark">Essayer</a>
                </div>
            </div>
            <div class="voiture-cadre">
                <img src="../../assets/images/Audi sq7.jpeg" alt="Audi SQ7">
                <div class="voiture-titre">
                    Audi SQ7
                </div>
                <div class="voiture-titre">
                    À partir de 
                </div>
                <div class="voiture-button">
                <a href="#modal-sq7" class="btn btn-dark">Voir plus...</a>
                    <a href="../connexion/pageconnexion.php"class="btn btn-dark">Essayer</a>
                </div>
            </div>
        </div>
    </main>

<?php 
 include ('../footage/footage.php');
?>
    <!-- Modal Audi RS Q8 -->
<div id="modal-rsq8" class="modal">
  <div class="modal-content">
    <a href="#" class="close">&times;</a>
    <h2>À propos de l'Audi RS Q8</h2>
    <p>Le SUV sportif ultime d'Audi, alliant performance et luxe.</p>
    <div class="voiture-cadre">
      <img src="../../assets/images/Audi RS q8.jpeg" alt="Audi RS Q8">
    </div>
    <br>
    <div class="specif">
      <li><strong>Motorisation :</strong> V8 biturbo 4.0L</li>
      <li><strong>Puissance :</strong> 600 ch</li>
      <li><strong>Transmission :</strong> Quattro – Tiptronic 8 rapports</li>
    </div>
  </div>
</div>

<!-- Modal Audi RS7 -->
<div id="modal-rs7" class="modal">
  <div class="modal-content">
    <a href="#" class="close">&times;</a>
    <h2>À propos de l'Audi RS7</h2>
    <p>Une berline coupé ultra-performante avec un style affirmé.</p>
    <div class="voiture-cadre">
      <img src="../../assets/images/Audi rs7.jpeg" alt="Audi RS7">
    </div>
    <br>
    <div class="specif">
      <li><strong>Motorisation :</strong> V8 biturbo 4.0L</li>
      <li><strong>Puissance :</strong> 600 ch</li>
      <li><strong>Transmission :</strong> Quattro – automatique 8 rapports</li>
    </div>
  </div>
</div>

<!-- Modal Audi S e-tron -->
<div id="modal-setron" class="modal">
  <div class="modal-content">
    <a href="#" class="close">&times;</a>
    <h2>À propos de l'Audi S e-tron</h2>
    <p>Le SUV 100% électrique qui allie sportivité et autonomie.</p>
    <div class="voiture-cadre">
      <img src="../../assets/images/Audi S e-tron.jpeg" alt="Audi S e-tron">
    </div>
    <br>
    <div class="specif">
      <li><strong>Motorisation :</strong> Électrique</li>
      <li><strong>Puissance :</strong> 503 ch</li>
      <li><strong>Autonomie :</strong> Jusqu’à 470 km (WLTP)</li>
    </div>
  </div>
</div>

<!-- Modal Audi S8 -->
<div id="modal-s8" class="modal">
  <div class="modal-content">
    <a href="#" class="close">&times;</a>
    <h2>À propos de l'Audi S8</h2>
    <p>Le summum de l’élégance et de la performance pour les berlines Audi.</p>
    <div class="voiture-cadre">
      <img src="../../assets/images/Audi S8.jpeg" alt="Audi S8">
    </div>
    <br>
    <div class="specif">
      <li><strong>Motorisation :</strong> V8 biturbo mild-hybrid</li>
      <li><strong>Puissance :</strong> 571 ch</li>
      <li><strong>Technologies :</strong> Suspension prédictive, conduite semi-autonome</li>
    </div>
  </div>
</div>

<!-- Modal Audi SQ7 -->
<div id="modal-sq7" class="modal">
  <div class="modal-content">
    <a href="#" class="close">&times;</a>
    <h2>À propos de l'Audi SQ7</h2>
    <p>Un SUV 7 places avec la puissance d’une sportive.</p>
    <div class="voiture-cadre">
      <img src="../../assets/images/Audi sq7.jpeg" alt="Audi SQ7">
    </div>
    <br>
    <div class="specif">
      <li><strong>Motorisation :</strong> V8 TFSI</li>
      <li><strong>Puissance :</strong> 507 ch</li>
      <li><strong>Transmission :</strong> Quattro – Boîte Tiptronic 8 rapports</li>
    </div>
  </div>
</div>



</body>
</html>


