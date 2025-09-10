<?php include ('../barre/barre.php'); ?>
<!DOCTYPE html>
<html lang="fr">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Accueil - SuperCar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .hero {
            position: relative;
            height: 80vh;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .hero img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            position: absolute;
            top: 0;
            left: 0;
            z-index: 1;
        }

        .hero h1 {
            font-size: 5vw;
            font-weight: bold;
            color: white;
            z-index: 2;
            text-shadow: 3px 3px 10px rgba(0, 0, 0, 0.7);
            position: relative;
            opacity: 0;
            transform: translateY(50px);
            animation: fadeInUp 1.5s forwards ease-out;
        }

        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(50px); }
            to   { opacity: 1; transform: translateY(0); }
        }

        @media (max-width: 768px) {
            .hero h1 { font-size: 7vw; }
        }

        @media (max-width: 480px) {
            .hero h1 { font-size: 9vw; }
        }

        .H1 { font-size: 35px; }

        .gonflement {
            transition: transform 0.3s ease-in-out;
        }

        .gonflement:hover {
            transform: scale(1.05);
        }

        .img-caroussel {
            border-radius: 10px;
        }

        .Voir {
            position: absolute;
            bottom: 30px;
            right: 30px;
        }

        .offre {
            font-size: 45px;
        }

        .lien {
            position: absolute;
            bottom: 20px;
            left: 20px;
            background-color: rgba(0, 0, 0, 0.6);
            padding: 5px 15px;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        .lien:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }

        .carousel-item {
    pointer-events: auto;
}

.carousel-item .Voir {
    pointer-events: auto;
    z-index: 999;
}

    </style>
</head>
<body>

<!-- Hero section -->
<div class="hero">
    <img src="../../assets/images/Accueil-Range.jpg" alt="Voiture de luxe">
    <h1>Une nouvelle dimension de la conduite</h1>
</div>

<!-- Présentation -->
<section class="container my-5">
    <h2 class="H1">Bienvenue chez Supercar</h2>
    <h4>Qui sommes-nous ?</h4>
    <p>
        SuperCar est une entreprise spécialisée dans la vente de voitures haut de gamme et de prestige. Forte d’une large gamme de véhicules des plus grandes marques automobiles telles que Mercedes, Audi, Volkswagen, BMW et bien d’autres, SuperCar s’impose comme un acteur incontournable pour les passionnés d’automobiles d’exception.
        Grâce à un service client sur-mesure et une expertise approfondie du marché, SuperCar accompagne ses clients dans l’acquisition du véhicule idéal, alliant performance, confort et élégance.
    </p>
    <hr><br>

    <!-- Marques -->
    <h2 class="text-center">Découvrez nos marques</h2>
    <div class="row text-center mt-4">
        <div class="col-md-4 gonflement">
            <div class="card h-100">
                <img src="../../assets/images/Accueil-Mercedes2.jpg" class="card-img-top" alt="Mercedes">
                <div class="card-body">
                    <h5 class="card-title">Mercedes</h5>
                    <p>Puissance et élégance réunies.</p>
                    <a href="../Voiture/mercedes.php" class="btn btn-dark">Voir les modèles</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 gonflement">
            <div class="card h-100">
                <img src="../../assets/images/Accueil-Golf1.jpg" class="card-img-top" alt="Volkswagen">
                <div class="card-body">
                    <h5 class="card-title">Volkswagen</h5>
                    <p>Des performances inégalées.</p>
                    <a href="../Voiture/Volkswagen.php" class="btn btn-dark">Voir les modèles</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 gonflement">
            <div class="card h-100">
                <img src="../../assets/images/Accueil-Audi3.jpg" class="card-img-top" alt="Audi">
                <div class="card-body">
                    <h5 class="card-title">Audi</h5>
                    <p>Un design qui ne passe pas inaperçu.</p>
                    <a href="../Voiture/audi.php" class="btn btn-dark">Voir les modèles</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Modèles populaires -->
    <div class="my-5">
        <h2 class="text-center">Nos modèles les plus convoités</h2>
        <div id="carouselExample" class="carousel slide mt-4" data-bs-ride="carousel">
            <div class="carousel-inner position-relative">
                <div class="carousel-item active position-relative">
                    <img src="../../assets/images/Accueil-Tiguan.jpg" class="d-block w-100 img-caroussel" alt="Volkswagen Tiguan">
                    <a href="../Voiture/Volkswagen.php" class="btn btn-outline-light Voir">Voir le modèle</a>
                </div>
                <div class="carousel-item position-relative">
                    <img src="../../assets/images/Accueil-MercedesAMG.jpg" class="d-block w-100 img-caroussel" alt="Mercedes AMG">
                    <a href="../Voiture/mercedes.php" class="btn btn-outline-light Voir">Voir le modèle</a>
                </div>
                <div class="carousel-item position-relative">
                    <img src="../../assets/images/Accueil-Audi4.jpg" class="d-block w-100 img-caroussel" alt="Audi modèle">
                    <a href="../Voiture/audi.php" class="btn btn-outline-light Voir">Voir le modèle</a>
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
    </div>

    <!-- Découvertes -->
    <hr>
    <div class="text-center mt-5">
        <h2 class="offre">Découvrez</h2>
        <div class="row mt-4">
            <div class="col-md-6 gonflement">
                <div class="card position-relative">
                    <img src="../../assets/images/Accueil-Services.jpg" class="card-img-top" alt="Nos services">
                    <a href="../service/service.php" class="lien">Services →</a>
                </div>
            </div>
            <div class="col-md-6 gonflement">
                <div class="card position-relative">
                    <img src="../../assets/images/Accueil-Demande.jpg" class="card-img-top" alt="Demande d’essai">
                    <a href="../connexion/page_connexion.php" class="lien">Demande d'essai →</a>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<?php include ('../footage/footage.php'); ?>
</body>
</html>
