<?php 
include ('../barre/barre.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="merco.css">
    <title>Volkswagen</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        .hero {
            position: relative;
            width: 100%;
            height: 50vh;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
            text-align: center;
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

        .hero .content {
            position: relative;
            z-index: 2;
            color: white;
            font-size: 2rem;
            font-weight: bold;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            padding: 20px;
            width: 100%;
        }

        .car-card {
            width: 30%;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            transition: transform 0.3s ease-in-out;
            text-align: center;
        }

        .car-card:hover {
            transform: translateY(-5px);
        }

        .car-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .car-card .content {
            padding: 15px;
        }

        .car-card h3 {
            margin: 10px 0;
            font-size: 1.5rem;
            color: #333;
        }

        .car-card p {
            font-size: 1rem;
            color: #666;
        }

        .car-card .btn {
            display: inline-block;
            margin-top: 10px;
            padding: 10px 15px;
            background: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background 0.3s;
        }

        .car-card .btn:hover {
            background: #0056b3;
        }

        @media (max-width: 768px) {
            .car-card {
                width: 90%;
            }
        }
    </style>
</head>
<body>

    <div class="hero">
        <img src="../../assets/images/Voitures-Volkswagen-Tiguan-Accueil.jpg" alt="Voiture de luxe">
        <div class="content">
            <h1>Bienvenue chez Volkswagen</h1>
        </div>
    </div>

    <div class="container">
        <div class="car-card">
            <img src="../../assets/images/Voitures-Volkswagen-Golf8.jpg" alt="Volkswagen">
            <div class="content">
                <h3>Golf 8</h3>
                <p>à partir de 27 000 €</p>
                <a href="#" class="btn">Acheter</a>
            </div>
        </div>

        <div class="car-card">
            <img src="../../assets/images/Voitures-Volkswagen-Tiguan.jpg" alt="Audi">
            <div class="content">
                <h3>Tiguan</h3>
                <p> à partir de 50.000€</p>
                <a href="#" class="btn">Acheter</a>
            </div>
        </div>

        <div class="car-card">
            <img src="../../assets/images/Voitures-Volkswagen-Tayron.jpg" alt="BMW">
            <div class="content">
                <h3>Volkswagen Tayron</h3>
                <p>à partir de 40 800 €</p>
                <a href="#" class="btn">Acheter</a>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="car-card">
            <img src="../../assets/images/Voitures-Volkswagen-Polo5.jpg" alt="Volkswagen">
            <div class="content">
                <h3>Polo5</h3>
                <p>prix débutant à 18 015 €</p>
                <a href="#" class="btn">Acheter</a>
            </div>
        </div>

        <div class="car-card">
            <img src="../../assets/images/Voitures-Volkswagen-Touareg.jpg" alt="Audi">
            <div class="content">
                <h3>Touareg</h3>
                <p> à partir de  60 000 €</p>
                <a href="#" class="btn">Acheter</a>
            </div>
        </div>

        <div class="car-card">
            <img src="../../assets/images/Voitures-Volkswagen-Passat.jpg" alt="BMW">
            <div class="content">
                <h3>Passat</h3>
                <p>à partir de  34 030 €</p>
                <a href="#" class="btn">Acheter</a>
            </div>
        </div>
    </div>

    <br><br>


    
</body>
</html>