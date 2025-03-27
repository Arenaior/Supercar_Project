<?php 
include ('../barre/barre.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="merco.css">
    <title>Mercedes</title>
<div class="video-background">
    <video autoplay loop muted playsinline>
        <source src="../../assets/vidéo/Mercedesmp4.mp4" type="video/mp4">
        Votre navigateur ne supporte pas les vidéos HTML5.
    </video>
</div>

<div class="container">
    <h1 class="titre">MERCEDES-BENZ</h1>
    <p class="descri">
        "Découvrez l'élégance et la performance exceptionnelles de Mercedes-Benz. 
        Offrez-vous le luxe d'un véhicule d'exception, alliant design raffiné, technologie de pointe et conduite incomparable. 
        Faites le choix de l'excellence dès aujourd'hui et prenez le volant de votre future Mercedes !"
    </p>
</div>
<main>
</head>
<body class="bg-gray-100 p-6">
    <h1 class="text-3xl font-bold mb-6">Car Gallery</h1>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <div class="card" onclick="redirectTo('polo.html')">
            <img src="polo.png" alt="Polo" class="car-image">
            <h2 class="car-title">Polo</h2>
            <p class="car-price">\u00c0 partir de 21 630,00€ TTC</p>
        </div>

        <div class="card" onclick="redirectTo('golf.html')">
            <img src="golf.png" alt="Nouvelle Golf" class="car-image">
            <h2 class="car-title">Nouvelle Golf</h2>
            <p class="car-price">\u00c0 partir de 30 740,00€ TTC</p>
        </div>

        <div class="card" onclick="redirectTo('golf_ehybrid.html')">
            <img src="golf_ehybrid.png" alt="Nouvelle Golf eHybrid" class="car-image">
            <h2 class="car-title">Nouvelle Golf eHybrid</h2>
            <p class="car-price">\u00c0 partir de 43 990,00€ TTC</p>
        </div>
    </div>
    <script src="script.js"></script>
</main>

<body>
</html>