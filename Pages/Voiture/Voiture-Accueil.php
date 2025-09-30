<?php
include("../barre/barre.php");
?>

  <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>C Voitures</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* body {
            background-color: #2B2C2E;
            color: white;
        } */
        .carousel-container {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        .text-section {
            flex: 1;
            padding: 30px;
        }
        .carousel-section {
            flex: 2;
        }
        .carousel-inner img {
            border-radius: 10px;
        }

    </style>
</head>
<body>
  <div class="container-fluid vh-100 d-flex align-items-center justify-content-center">
    <div class="row w-100 h-100 bg-dark-section align-items-center">
        
        <div class="col-md-4 text-section">
            <h2>TROUVEZ LA MARQUE QUI <span style="color: #1B3765;">VOUS CORRESPOND</span></h2>
            <p>Puissance, élégance, exclusivité… Quelle Supercar fera vibrer votre âme de pilote ? Faites votre choix et vivez l’exceptionnel.</p>
            <p><strong>+ de 20 modèles disponibles</strong> | <strong>Top 5 des meilleures marques</strong> | <strong>Garantie:</strong> 3 ans</p>
            <button class="btn btn-dark">Contactez-nous</button>
        </div>

        
        <div class="col-md-8">
            <div id="carouselVoitures" class="carousel slide w-100 h-100" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md-4"><a href="mercedes.php"><img src="../../assets/images/Voitures-Accueil-Mercedes.jpg" class="d-block w-100 h-100 object-fit-cover" ></a></div>
                            <div class="col-md-4"><a href="audi.php"><img src="../../assets/images/Voitures-Accueil-Audi1.jpg" class="d-block w-100 h-100 object-fit-cover" ></a></div>
                            <div class="col-md-4"><a href="Volkswagen.php"><img src="../../assets/images/Voitures-Accueil-Golf1.jpg" class="d-block w-100 h-100 object-fit-cover"></a></div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-4"><a href="Land Rover.php"><img src="../../assets/images/Voitures-Accueil-Range.jpg" class="d-block w-100 h-100 object-fit-cover" ></a></div>
                            <div class="col-md-4"><a href="Renault.php"><img src="../../assets/images/Voitures-Accueil-Renault.jpg" class="d-block w-100 h-100 object-fit-cover"></a></div>
                            <div class="col-md-4"><a href="BMW.php"><img src="../../assets/images/Voitures-Accueil-Bmw1.jpg" class="d-block w-100 h-100 object-fit-cover" ></a></div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselVoitures" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselVoitures" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                </button>
            </div>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>



</html>