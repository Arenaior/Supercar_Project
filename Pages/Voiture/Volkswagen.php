<?php 
include ('../barre/barre.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

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
            width: 400px;
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
            margin-top: 5px;
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

        .h2{
            font-size:50px;
            color:black;
            margin-top:20px;
        }

        H5{
            font-size:20px;
            color:black;
        }

        .modal {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 350px
    height:350px
    background-color: rgba(0, 0, 0, 0.5);
    text-align: center;
}

.modal-content {
    background: white;
    padding: 20px;
    width: 50%;
    margin: 10% auto;
    border-radius: 10px;
    position: relative;
}

.close {
    position: absolute;
    top: 10px;
    right: 20px;
    font-size: 20px;
    text-decoration: none;
    color: black;
}

.p5{
    font-size:20px;
    color:black;
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
    <h2 class="h2 text-center">Découvrez nos modèles de Volkswagen</h2>
</div> 
<hr>

<div class="container">
    <div class="row justify-content-center">

        <!-- GOLF 8 -->
        <div class="col-12 col-md-6 col-lg-4 mb-4 d-flex justify-content-center">
            <div class="car-card">
                <img src="../../assets/images/Voitures-Volkswagen-Golf8.jpg" alt="Volkswagen">
                <div class="content">
                    <h3>Golf 8</h3>
                    <p>à partir de 27 000 €</p>
                    <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#Golf8">Voir plus...</a> 
                    <a href="/supercar_project/Pages/Clients/connexion/connexion.php" class="btn-dark">Demander un essai</a>
                </div>
            </div>
        </div>

        <!-- Modal pour GOLF 8 -->
          <!-- Modals -->
          <div id="Golf8" class="modal">
                <div class="modal-content">
                    <a href="#" class="close">&times;</a>
                    <h2>À propos de la Volkswagen Golf 8</h2>
                    <p>La Volkswagen Golf 8 est une compacte moderne et polyvalente, offrant une conduite confortable, des technologies avancées et un large choix de motorisations.</p>
                    <div class="voiture-cadre">
                        <img src="/supercar_project/assets/images/Voitures-Volkswagen-Golf8.jpg" alt="Volkswagen Golf 8">
                    </div>
                    <br>
                    <div class="tittle">
                        <li><strong>Motorisations</strong> : Essence (TSI), Diesel (TDI), Hybride léger (eTSI) et Hybride rechargeable (GTE)</li>
                        <li><strong>Puissance</strong> : De 110 ch (1.0 TSI) à 320 ch (Golf R)</li>
                        <li><strong>Transmission</strong> : Boîte manuelle ou automatique DSG à 7 rapports</li>
                    </div>
                </div>
            </div>



        <!-- TIGUAN -->
        <div class="col-12 col-md-6 col-lg-4 mb-4 d-flex justify-content-center">
            <div class="car-card">
                <img src="../../assets/images/Voitures-Volkswagen-Tiguan.jpg" alt="Tiguan">
                <div class="content">
                    <h3>Tiguan R-Line 2020</h3>
                    <p>à partir de 50 000 €</p>
                    <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#Tiguan">Voir plus...</a>
                    <a href="/supercar_project/Pages/Clients/connexion/connexion.php" class="btn-dark">Demander un essai</a>
                </div>
            </div>
        </div>

                    <!-- Modal pour Tiguan-->
          <!-- Modals -->
          <div id="Tiguan" class="modal">
                <div class="modal-content">
                    <a href="#" class="close">&times;</a>
                    <h2>À propos du Volkswagen Tiguan</h2>
                    <p>Le Volkswagen Tiguan est un SUV familial élégant et polyvalent, reconnu pour son confort, sa technologie embarquée et sa sécurité.</p>
                    <div class="voiture-cadre">
                        <img src="/supercar_project/assets/images/Voitures-Volkswagen-Tiguan.jpg" alt="Volkswagen Tiguan">
                    </div>
                    <br>
                    <div class="tittle">
                        <li><strong>Motorisations</strong> : Essence (TSI), Diesel (TDI), et Hybride rechargeable (eHybrid)</li>
                        <li><strong>Puissance</strong> : De 130 ch à 320 ch (Tiguan R)</li>
                        <li><strong>Transmission</strong> : Boîte manuelle ou automatique DSG, transmission intégrale 4MOTION disponible</li>
                    </div>
                </div>
        </div>



        <!-- TAYRON -->
        <div class="col-12 col-md-6 col-lg-4 mb-4 d-flex justify-content-center">
            <div class="car-card">
                <img src="../../assets/images/Voitures-Volkswagen-Tayron.jpg" alt="Tayron">
                <div class="content">
                    <h3>Volkswagen Tayron</h3>
                    <p>à partir de 40 800 €</p>
                    <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#Tayron">Voir plus...</a>
                    <a href="/supercar_project/Pages/Clients/connexion/connexion.php" class="btn-dark">Demander un essai</a>
                </div>
            </div>
        </div>


                         <!-- Modal pour Tayron -->
                    <div id="Tayron" class="modal">
                        <div class="modal-content">
                            <a href="#" class="close">&times;</a>
                            <h2>À propos du Volkswagen Tayron</h2>
                            <p>Le Volkswagen Tayron est un SUV spacieux et élégant, conçu pour offrir confort, technologie et polyvalence. Il s'adresse principalement au marché asiatique et propose une conduite dynamique avec un bon niveau de sécurité.</p>
                            <div class="voiture-cadre">
                                <img src="/supercar_project/assets/images/Voitures-Volkswagen-Tayron.jpg" alt="Volkswagen Tayron">
                            </div>
                            <br>
                            <div class="tittle">
                                <li><strong>Motorisations</strong> : Essence (TSI), parfois hybride selon les marchés</li>
                                <li><strong>Puissance</strong> : De 186 ch à 220 ch</li>
                                <li><strong>Transmission</strong> : Boîte automatique DSG à 7 rapports, transmission intégrale disponible</li>
                            </div>
                        </div>
                    </div>


       

    </div>
</div>


    
    
    
    
    <!--Deuxième ligne de voitures-->
    <div class="container">
    <div class="row justify-content-center">

        <!-- POLO 5 -->
        <div class="col-12 col-md-6 col-lg-4 mb-4 d-flex justify-content-center">
            <div class="car-card">
                <img src="../../assets/images/Voitures-Volkswagen-Polo5.jpg" alt="Volkswagen Polo5">
                <div class="content">
                    <h3>Polo5</h3>
                    <p>prix débutant à 18 015 €</p>
                    <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#Polo">Voir plus...</a>
                    <a href="/supercar_project/Pages/Clients/connexion/connexion.php" class="btn-dark">Demander un essai</a>
                </div>
            </div>
        </div>

                     <!-- Modal pour Polo 5 -->
          <!-- Modals -->
                    <div id="Polo" class="modal">
                <div class="modal-content">
                    <a href="#" class="close">&times;</a>
                    <h2>À propos de la Polo 5</h2>
                    <p>La Volkswagen Polo 5 est une citadine polyvalente et fiable. Elle combine compacité, confort et technologies pratiques, idéale pour la conduite urbaine et périurbaine.</p>
                    <div class="voiture-cadre">
                        <img src="/supercar_project/assets/images/Voitures-Volkswagen-Polo5.jpg" alt="Volkswagen Polo 5">
                    </div>
                    <br>
                    <div class="tittle">
                        <li><strong>Motorisations</strong> : Essence (MPI, TSI) ou Diesel (TDI)</li>
                        <li><strong>Puissance</strong> : De 60 ch à 192 ch (GTI)</li>
                        <li><strong>Transmission</strong> : Boîte manuelle ou automatique DSG</li>
                    </div>
                </div>
            </div>



        <!-- TOUAREG -->
        <div class="col-12 col-md-6 col-lg-4 mb-4 d-flex justify-content-center">
            <div class="car-card">
                <img src="../../assets/images/Voitures-Volkswagen-Touareg.jpg" alt="Volkswagen Touareg">
                <div class="content">
                    <h3>Touareg</h3>
                    <p>à partir de 60 000 €</p>
                    <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#Touareg">Voir plus...</a>
                    <a href="/supercar_project/Pages/Clients/connexion/connexion.php" class="btn-dark">Demander un essai</a>
                </div>
            </div>
        </div>

                         <!-- Modal pour Touareg-->
          <!-- Modals -->
                    <div id="Touareg" class="modal">
                <div class="modal-content">
                    <a href="#" class="close">&times;</a>
                    <h2>À propos du Touareg</h2>
                    <p>Le Volkswagen Touareg est un SUV haut de gamme, spacieux et performant, qui allie luxe, technologies de pointe et confort pour les longs trajets comme pour les aventures.</p>
                    <div class="voiture-cadre">
                        <img src="/supercar_project/assets/images/Voitures-Volkswagen-Touareg.jpg" alt="Volkswagen Touareg">
                    </div>
                    <br>
                    <div class="tittle">
                        <li><strong>Motorisations</strong> : Diesel V6, Essence V6/V8 et Hybride rechargeable (eHybrid)</li>
                        <li><strong>Puissance</strong> : De 231 ch à 462 ch (Touareg R eHybrid)</li>
                        <li><strong>Transmission</strong> : Boîte automatique Tiptronic à 8 rapports, transmission intégrale 4Motion</li>
                    </div>
                </div>
            </div>



        <!-- PASSAT -->
        <div class="col-12 col-md-6 col-lg-4 mb-4 d-flex justify-content-center">
            <div class="car-card">
                <img src="../../assets/images/Voitures-Volkswagen-Passat.jpg" alt="Volkswagen Passat">
                <div class="content">
                    <h3>Passat</h3>
                    <p>à partir de 34 030 €</p>
                    <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#Passat">Voir plus...</a>
                    <a href="/supercar_project/Pages/Clients/connexion/connexion.php" class="btn-dark">Demander un essai</a>
                </div>
            </div>
        </div>

                    <!-- Modal pour passat-->
          <!-- Modals -->
          <div id="Passat" class="modal">
                <div class="modal-content">
                    <a href="#" class="close">&times;</a>
                    <h2>À propos de la Passat</h2>
                    <p>La Volkswagen Passat est une berline familiale élégante et spacieuse, idéale pour les longs trajets grâce à son confort et ses technologies avancées.</p>
                    <div class="voiture-cadre">
                        <img src="/supercar_project/assets/images/Voitures-Volkswagen-Passat.jpg" alt="Volkswagen Passat">
                    </div>
                    <br>
                    <div class="tittle">
                        <li><strong>Motorisations</strong> : Essence, Diesel et Hybride rechargeable (Passat GTE)</li>
                        <li><strong>Puissance</strong> : De 120 ch à 218 ch (GTE hybride rechargeable)</li>
                        <li><strong>Transmission</strong> : Boîte manuelle ou automatique DSG à 6 ou 7 rapports</li>
                    </div>
                </div>
            </div>

</div>
</div>
</div>
    
    
    
    
        <!-- Troisième ligne de voitures -->
        <div class="container">

        <!-- T-ROC -->
        <div class="car-card">
            <img src="../../assets/images/Voitures-Volkswagen-T-Roc.jpg" alt="Volkswagen T-Roc">
            <div class="content">
                <h3>T-Roc</h3>
                <p>À partir de 27 540 €</p>
                <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#T-Roc">Voir plus...</a>
                <a href="/supercar_project/Pages/Clients/connexion/connexion.php" class="btn-dark">Demander un essai</a>
            </div>
        </div>

            <!-- Modal T-Roc -->
            <div id="T-Roc" class="modal">
                <div class="modal-content">
                    <a href="#" class="close">&times;</a>
                    <h2>À propos de la T-Roc</h2>
                    <p>Un SUV compact stylé, pratique en ville comme sur route.</p>
                    <div class="voiture-cadre">
                        <img src="/supercar_project/assets/images/Voitures-Volkswagen-T-Roc.jpg" alt="Volkswagen T-Roc">
                    </div>
                    <br>
                    <div class="tittle">
                        <li><strong>Motorisations</strong> : Essence, diesel</li>
                        <li><strong>Puissance</strong> : 110 à 190 ch</li>
                        <li><strong>Transmission</strong> : Manuelle ou automatique (DSG)</li>
                    </div>
                </div>
            </div>

            <!-- T-CROSS -->
            <div class="car-card">
                <img src="../../assets/images/Voitures-Volkswagen-T-Cross.jpg" alt="Volkswagen T-Cross">
                <div class="content">
                    <h3>T-Cross</h3>
                    <p>À partir de 24 000 €</p>
                    <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#T-Cross">Voir plus...</a>
                    <a href="/supercar_project/Pages/Clients/connexion/connexion.php" class="btn-dark">Demander un essai</a>
                </div>
            </div>

            <!-- Modal T-Cross -->
            <div id="T-Cross" class="modal">
                <div class="modal-content">
                    <a href="#" class="close">&times;</a>
                    <h2>À propos de la T-Cross</h2>
                    <p>Un mini SUV urbain, maniable et fun à conduire.</p>
                    <div class="voiture-cadre">
                        <img src="/supercar_project/assets/images/Voitures-Volkswagen-T-Cross.jpg" alt="Volkswagen T-Cross">
                    </div>
                    <br>
                    <div class="tittle">
                        <li><strong>Motorisations</strong> : Essence</li>
                        <li><strong>Puissance</strong> : 95 à 115 ch</li>
                        <li><strong>Transmission</strong> : Manuelle ou automatique</li>
                    </div>
                </div>
            </div>

            <!-- JETTA -->
            <div class="car-card">
                <img src="../../assets/images/Voitures-Volkswagen-Jetta.jpg" alt="Volkswagen Jetta">
                <div class="content">
                    <h3>Jetta</h3>
                    <p>À partir de 12 030 €</p>
                    <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#Jetta">Voir plus...</a>
                    <a href="/supercar_project/Pages/Clients/connexion/connexion.php" class="btn-dark">Demander un essai</a>
                </div>
            </div>

            </div> <!-- fin du .container -->

            <!-- Modal Jetta -->
            <div id="Jetta" class="modal">
            <div class="modal-content">
                <a href="#" class="close">&times;</a>
                <h2>À propos de la Jetta</h2>
                <p>Une berline classique et sobre, surtout populaire hors Europe.</p>
                <div class="voiture-cadre">
                    <img src="/supercar_project/assets/images/Voitures-Volkswagen-Jetta.jpg" alt="Volkswagen Jetta">
                </div>
                <br>
                <div class="tittle">
                    <li><strong>Motorisations</strong> : Principalement essence</li>
                    <li><strong>Puissance</strong> : Environ 110 à 150 ch</li>
                    <li><strong>Transmission</strong> : Manuelle ou automatique</li>
                </div>
            </div>
            </div>

</html>
                <br><br>

                <?php
                  include ('../footage/footage.php');
                ?>


 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


</body>
