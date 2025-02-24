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
            height: 100vh; /* Prend toute la hauteur de l'écran */
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
            text-align: center;
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
    </style>
</head>
<body>

    <div class="hero">
        <img src="../../assets/images/Accueil-Audi1.jpg" alt="Voiture de luxe">
        <h1>Roulez avec classe.</h1>
    </div>


    <section class="container my-5">
    <h2 class="text-center">Découvrez nos marques</h2>
    <div class="row text-center">
        <div class="col-md-4 gonflement">
            <div class="card h-100">
                <img src="../../assets/images/Accueil-Mercedes2.jpg" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Mercedes</h5>
                    <p>Puissance et élégance réunies.</p>
                    <a href="#" class="btn btn-dark">Voir les modèles</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 gonflement">
            <div class="card">
                <img src="../../assets/images/Accueil-Golf1.jpg" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Volkswagen</h5>
                    <p>Des performances inégalées.</p>
                    <a href="#" class="btn btn-dark">Voir les modèles</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 gonflement">
            <div class="card">
                <img src="../../assets/images/Accueil-Audi3.jpg" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">Audi</h5>
                    <p>Un design qui ne passe pas inaperçu.</p>
                    <a href="#" class="btn btn-dark">Voir les modèles</a>
                </div>
            </div>
        </div>
    </div>
</section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
