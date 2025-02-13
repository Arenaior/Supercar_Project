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
    </style>
</head>
<body>

    <div class="hero">
        <img src="../../assets/images/Audi1.jpg" alt="Voiture de luxe">
        <h1>Roulez avec classe.</h1>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
