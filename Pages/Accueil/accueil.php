<?php
include ('../barre/barre.php');
?>
<!DOCTYPE html> 
<html lang="fr">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Accueil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        /* Conteneur principal pour l'image et le texte */
        .hero {
            position: relative;
            width: 100%;
            height: 80vh; /* Prend toute la hauteur de l'écran */
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        /* Image responsive */
        .hero img {
            width: 100%;
            height: 100%;
            object-fit: cover; /* Ajuste l'image sans déformation */
            position: absolute;
            top: 0;
            left: 0;
            z-index: 1;
        }

        /* Texte superposé */
        .hero h1 {
            font-size: 5vw; /* Taille relative à la largeur de l'écran */
            font-weight: bold;
            color: white;
            margin-left: 80px;
            margin-top:100px;
            z-index: 2;
            text-shadow: 3px 3px 10px rgba(0, 0, 0, 0.7); /* Ombre pour lisibilité */
            position: relative;
            opacity: 0;
            transform: translateY(50px);
            animation: fadeInUp 1.5s forwards ease-out;
        }

        /* Animation d’apparition */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Responsive : Adapter la taille du texte pour petits écrans */
        @media (max-width: 768px) {
            .hero h1 {
                font-size: 7vw;
            }
        }

        @media (max-width: 480px) {
            .hero h1 {
                font-size: 9vw;
            }
        }
        .H1{
            font-size:35px;
        }

        .gonflement {
  transition: transform 0.3s ease-in-out;
}

.gonflement:hover {
  transform: scale(1.1); /* Augmente la taille de 10% */
}

.img-caroussel{
    border-radius: 10px;
}

.Voir{
    margin-top:-120px;
    margin-left:990px;
}

.offre{
    font-size: 45px;

}

.lien{
    text-decoration: none;
    font-size:20px;
    margin-top:-60px;
    margin-left:200px;
    color:white;
}
    </style>
</head>
<body>

    <div class="hero">
        <img src="../../assets/images/Accueil-Range.jpg" alt="Voiture de luxe">
        <h1>Une nouvelle dimension de la conduite</h1>
    </div>


    <section class="container my-5">

            <h2 class="H1">Bienvenue chez Supercar</h2>
            <br>
            <H4> Qui sommes-nous ?</h4>
            <p>SuperCar est une entreprise spécialisée dans la vente de voitures haut de gamme et de prestige. Forte d’une large gamme de véhicules des plus grandes marques automobiles, telles que Mercedes, Audi, Volkswagen, BMW et bien d’autres, SuperCar s’impose comme un acteur incontournable pour les passionnés d’automobiles d’exception.
            Grâce à un service client sur-mesure et une expertise approfondie du marché, SuperCar accompagne ses clients dans l’acquisition du véhicule idéal, alliant performance, confort et élégance. Que ce soit pour une berline de luxe, un SUV moderne ou une sportive puissante, SuperCar propose une sélection exclusive répondant aux plus hautes exigences.</p>
            
            <hr>
            <br><br><br><br>
            <h2 class="text-center">Découvrez nos marques</h2>
            <br><br>
            <div class="row text-center">
                <div class="col-md-4 gonflement">
                    <div class="card h-100">
                        <img src="../../assets/images/Accueil-Mercedes2.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Mercedes</h5>
                            <p>Puissance et élégance réunies.</p>
                            <a href="../Voiture/mercedes.php" class="btn btn-dark">Voir les modèles</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 gonflement">
                    <div class="card">
                        <img src="../../assets/images/Accueil-Golf1.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Volkswagen</h5>
                            <p>Des performances inégalées.</p>
                            <a href="../Voiture/Volkswagen.php" class="btn btn-dark">Voir les modèles</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 gonflement">
                    <div class="card">
                        <img src="../../assets/images/Accueil-Audi3.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Audi</h5>
                            <p>Un design qui ne passe pas inaperçu.</p>
                            <a href="../Voiture/Audi.php" class="btn btn-dark">Voir les modèles</a>
                        </div>
                    </div>
                </div>
            </div>
            <br><br><br><br>
            <div class="container-mt-5">
            <h2 class="text-center"> Nos modèles les plus convoités </h2>
            <br><br>

<!-- Carousel -->
<div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
  <div id="Tiguan" class="carousel-inner">
    <div class="carousel-item active">
      <img src="../../assets/images/Accueil-Tiguan.jpg" class="d-block w-100 img-caroussel">
      <a href="/supercar_project/Pages/Voiture/Volkswagen.php" class="btn btn-outline-light Voir">Voir le modèle</a>
    </div>
    <div class="carousel-item">
      <img src="../../assets/images/Accueil-MercedesAMG.jpg" class="d-block w-100 img-caroussel">
      <a href="../Voiture/mercedes.php" class="btn btn-outline-light Voir">Voir le modèle</a>
    </div>
    <div class="carousel-item">
      <img src="../../assets/images/Accueil-Audi4.jpg" class="d-block w-100 img-caroussel" alt="Image 3">
      <a href="#" class="btn btn-outline-light Voir">Voir le modèle</a>
    </div>
  </div>

  <!-- Boutons de navigation -->
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
    <span class="visually-hidden">Précédent</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
    <span class="visually-hidden">Suivant</span>
  </button>
</div>

</section>
<hr>
<div class="container mt-5 text-center">
    <h2 class="offre">Découvrez</h2>
    <br><br>
    <div class="row text-center">
        <div class="col-md-4 gonflement">
            <div class="card position-relative">
                <img src="../../assets/images/Accueil-Services.jpg" class="card-img-top">
                <a href="../service/service.php" class="lien">Services-></a>
            </div>
        </div>
        <div class="col-md-4 gonflement">
            <div class="card position-relative">
                <img src="../../assets/images/Accueil-Demande.jpg" class="card-img-top">
                <a href="../Clients/connexion/connexion.php" class="lien">Demande d'essai-></a>
            </div>
        </div>
    </div>
</div>

<br><br><br><br>

                


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<?php
include ('../footage/footage.php');
?>
</body>
</html>
