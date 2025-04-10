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

        .modal-backdrop {
    background-color: transparent !important; /* Supprime l'effet d'assombrissement */
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
        <H2 class="h2">Découvrez nos modèles de Volkswagen</H2>
    </div> 
    <hr>


    <!--Première ligne de voitures-->
    <div class="container">
   
   <!--GOLF--------------------->

            <!-- Première carte -->
            <div class="car-card">
                <img src="../../assets/images/Voitures-Volkswagen-Golf8.jpg" alt="Volkswagen">
                <div class="content">
                    <h3>Golf 8</h3>
                    <p>à partir de 27 000 €</p>
                    <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#Golf8">Voir plus...</a> <a href="/supercar_project/Pages/Clients/connexion/connexion.php" class="btn-dark">Essayer</a>
                </div>
            </div>

            <!-- Modal pour Golf 8 -->
                    <div id="Golf8" class="modal">
                <div class="modal-content">
                    <a href="#" class="close">&times;</a>
                    <h2>À propos de la Golf8 </h2>
                    <p>La Volkswagen Golf 8 allie design moderne, technologies innovantes et plaisir de conduite au quotidien.</p>
                    <div class="voiture-cadre">
                        <img src="/supercar_project/assets/images/Voitures-Volkswagen-Golf8.jpg" alt="Mercedes classe a ">
                    </div>
                    <br>
                    <div class="tittle">
                    <li><strong>Motorisations</strong> : Essence, diesel, hybride</li>
                    <li><strong>Puissance</strong> : 110 à 320 ch</li>
                    <li><strong>Transmission</strong> : Manuelle ou automatique (DSG)</li>
                    </div>
                </div>
            </div>



        <!---TIGUAN---------->
        
        <!--Deuxième carte-->
                <div class="car-card">
                    <img src="../../assets/images/Voitures-Volkswagen-Tiguan.jpg" alt="Audi">
                    <div class="content">
                        <h3>Tiguan R-Line 2020</h3>
                        <p> à partir de 50.000€</p>
                        <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#Tiguan">Voir plus...</a> <a href="/supercar_project/Pages/Clients/connexion/connexion.php" class="btn-dark">Essayer</a>
                    </div>
                </div>

                <!-- Modal pour Tiguan -->
                            <div id="Tiguan" class="modal">
                            <div class="modal-content">
                                <a href="#" class="close">&times;</a>
                                <h2>À propos de la Tiguan R-Line</h2>
                                <p>Un SUV dynamique au look sportif et au confort premium.</p>
                                <div class="voiture-cadre">
                                    <img src="/supercar_project/assets/images/Voitures-Volkswagen-Tiguan.jpg" alt="Mercedes classe a ">
                                </div>
                                <br>
                                <div class="tittle">
                                <li><strong>Motorisations</strong> : Essence ou diesel</li>
                                <li><strong>Puissance</strong> : Environ 150 à 200 ch</li>
                                <li><strong>Transmission</strong> :  Automatique (DSG), 4Motion disponible</li>
                                </div>
                            </div>
                        </div>

       
       
         <!--TAYRON----------->
                
                            <!--Troisième carte-->
                    <div class="car-card">
                        <img src="../../assets/images/Voitures-Volkswagen-Tayron.jpg" alt="BMW">
                        <div class="content">
                            <h3>Volkswagen Tayron</h3>
                            <p>à partir de 40 800 €</p>
                            <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#Tayron">Voir plus...</a> <a href="/supercar_project/Pages/Clients/connexion/connexion.php" class="btn-dark">Essayer</a>
                        </div>
                    </div>
                </div>

                        <!-- Modal pour Tayron -->
                                    <div id="Tayron" class="modal">
                            <div class="modal-content">
                                <a href="#" class="close">&times;</a>
                                <h2>À propos de la Volkswagen Tayron</h2>
                                <p>Un SUV familial au design élégant, réservé à certains marchés comme la Chine.</p>
                                <div class="voiture-cadre">
                                    <img src="/supercar_project/assets/images/Voitures-Volkswagen-Tayron.jpg" alt="Mercedes classe a ">
                                </div>
                                <br>
                                <div class="tittle">
                                <li><strong>Motorisations</strong> : Essence principalement</li>
                                <li><strong>Puissance</strong> : 150 à 220 ch</li>
                                <li><strong>Transmission</strong> : Automatique, possible 4 roues motrices</li>
                                </div>
                            </div>
                        </div>

    
    
    
    
    <!--Deuxième ligne de voitures-->
    <div class="container">

            <!--POLO------>
     
                <!--Première carte-->
                    <div class="car-card">
                        <img src="../../assets/images/Voitures-Volkswagen-Polo5.jpg" alt="Volkswagen">
                        <div class="content">
                            <h3>Polo5</h3>
                            <p>prix débutant à 18 015 €</p>
                            <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#Polo">Voir plus...</a> <a href="/supercar_project/Pages/Clients/connexion/connexion.php" class="btn-dark">Essayer</a>
                        </div>
                    </div>

                    <!-- Modal pour POLO -->
                                <div id="Polo" class="modal">
                            <div class="modal-content">
                                <a href="#" class="close">&times;</a>
                                <h2>À propos de la Polo 5 </h2>
                                <p>Une citadine polyvalente et fiable, parfaite pour la ville.</p>
                                <div class="voiture-cadre">
                                    <img src="/supercar_project/assets/images/Voitures-Volkswagen-Polo5.jpg" alt="Mercedes classe a ">
                                </div>
                                <br>
                                <div class="tittle">
                                <li><strong>Motorisations</strong> : Essence ou diesel</li>
                                <li><strong>Puissance</strong> : 60 à 110 ch</li>
                                <li><strong>Transmission</strong> : Manuelle ou automatique (DSG)</li>
                                </div>
                            </div>
                        </div>





         <!-----TOUAREG------>
         
                 <!--Deuxième carte-->
                <div class="car-card">
                    <img src="../../assets/images/Voitures-Volkswagen-Touareg.jpg">
                    <div class="content">
                        <h3>Touareg</h3>
                        <p> à partir de  60 000 €</p>
                        <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#Touareg">Voir plus...</a> <a href="/supercar_project/Pages/Clients/connexion/connexion.php" class="btn-dark">Essayer</a>
                    </div>
                </div>

                 <!-- Modal pour TOUAREG -->
                            <div id="Touareg" class="modal">
                            <div class="modal-content">
                                <a href="#" class="close">&times;</a>
                                <h2>À propos de la Touareg </h2>
                                <p>Un SUV haut de gamme puissant et confortable pour les longs trajets.</p>
                                <div class="voiture-cadre">
                                    <img src="/supercar_project/assets/images/Voitures-Volkswagen-Touareg.jpg" alt="Mercedes classe a ">
                                </div>
                                <br>
                                <div class="tittle">
                                <li><strong>Motorisations</strong> :  Diesel, hybride rechargeable</li>
                                <li><strong>Puissance</strong> : 231 à 462 ch</li>
                                <li><strong>Transmission</strong> : Automatique (Tiptronic), transmission intégrale</li>
                                </div>
                            </div>
                        </div>






        <!----PASSAT------->
        
                    <!--Troisième carte-->
                    <div class="car-card">
                        <img src="../../assets/images/Voitures-Volkswagen-Passat.jpg" alt="BMW">
                        <div class="content">
                            <h3>Passat</h3>
                            <p>à partir de  34 030 €</p>
                            <a class="btn" data-bs-toggle="modal" data-bs-target="#Passat">Voir plus...</a> <a href="/supercar_project/Pages/Clients/connexion/connexion.php" class="btn-dark">Essayer</a>
                        </div>
                    </div>
                </div>



                        <!-- Modal pour PASSAT -->
                                    <div id="Passat" class="modal">
                            <div class="modal-content">
                                <a href="#" class="close">&times;</a>
                                <h2>À propos de la Passat </h2>
                                <p>Une grande berline élégante et idéale pour les trajets professionnels.</p>
                                <div class="voiture-cadre">
                                    <img src="/supercar_project/assets/images/Voitures-Volkswagen-Passat.jpg" alt="Mercedes classe a ">
                                </div>
                                <br>
                                <div class="tittle">
                                <li><strong>Motorisations</strong> : Essence, diesel, hybride rechargeable</li>
                                <li><strong>Puissance</strong> : 120 à 218 ch</li>
                                <li><strong>Transmission</strong> : Manuelle ou automatique</li>
                                </div>
                            </div>
                        </div>
    
    
    
    
                        <!-- Troisième ligne de voitures -->
    <div class="container">
        
       <!--T-ROC----->
       
            <!--Première carte-->    
                    <div class="car-card">
                        <img src="../../assets/images/Voitures-Volkswagen-T-Roc.jpg" alt="Volkswagen">
                        <div class="content">
                            <h3>T-Roc</h3>
                            <p> à partir de 27 540 € </p>
                            <a href="#" class="btn " data-bs-toogle="modal" data-bs-target="#T-Roc">Voir plus...</a> <a href="/supercar_project/Pages/Clients/connexion/connexion.php" class="btn-dark">Essayer</a>
                        </div>
                    </div>


                    <!-- Modal pour T-ROC -->
                                <div id="T-Roc" class="modal">
                            <div class="modal-content">
                                <a href="#" class="close">&times;</a>
                                <h2>À propos de la T-Roc </h2>
                                <p> Un SUV compact stylé, pratique en ville comme sur route.</p>
                                <div class="voiture-cadre">
                                    <img src="/supercar_project/assets/images/Voitures-Volkswagen-T-Roc.jpg" alt="Mercedes classe a ">
                                </div>
                                <br>
                                <div class="tittle">
                                <li><strong>Motorisations</strong> : Essence, diesel</li>
                                <li><strong>Puissance</strong> : 110 à 190 ch</li>
                                <li><strong>Transmission</strong> : Manuelle ou automatique (DSG)</li>
                                </div>
                            </div>
                        </div>







         <!---T-CROSS----->
         
                    <!--Deuxième carte-->
                    <div class="car-card">
                        <img src="../../assets/images/Voitures-Volkswagen-T-Cross.jpg" alt="Audi">
                        <div class="content">
                            <h3>T-Cross</h3>
                            <p> à partir de  24 000 €</p>
                            <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#T-Cross">Voir plus...</a> <a href="/supercar_project/Pages/Clients/connexion/connexion.php" class="btn-dark">Essayer</a>
                        </div>
                    </div>

                    <!-- Modal pour T-CRoss -->
                            <div id="T-Cross" class="modal">
                        <div class="modal-content">
                            <a href="#" class="close">&times;</a>
                            <h2>À propos de la T-Cross</h2>
                            <p>Un mini SUV urbain, maniable et fun à conduire.</p>
                            <div class="voiture-cadre">
                                <img src="/supercar_project/assets/images/Voitures-Volkswagen-T-Cross.jpg" alt="Mercedes classe a ">
                            </div>
                            <br>
                            <div class="tittle">
                            <li><strong>Motorisations</strong> : Essence</li>
                            <li><strong>Puissance</strong> : 95 à 115 ch</li>
                            <li><strong>Transmission</strong> : Manuelle ou automatique</li>
                            </div>
                        </div>
                    </div>

         
         
        <!---JETTA-------->
        
                        <!--Troisième carte-->
                        <div class="car-card">
                            <img src="../../assets/images/Voitures-Volkswagen-Jetta.jpg" alt="BMW">
                            <div class="content">
                                <h3>Jetta</h3>
                                <p>à partir de  12 030 €</p>
                                <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#Jetta">Voir plus...</a> <a href="/supercar_project/Pages/Clients/connexion/connexion.php" class="btn-dark">Essayer</a>
                            </div>
                        </div>
                    </div>

                    <!-- Modal pour JETTA -->
                                <div id="Jetta" class="modal">
                            <div class="modal-content">
                                <a href="#" class="close">&times;</a>
                                <h2>À propos de la Jetta </h2>
                                <p>Une berline classique et sobre, surtout populaire hors Europe.</p>
                                <div class="voiture-cadre">
                                    <img src="/supercar_project/assets/images/Voitures-Volkswagen-Jetta.jpg" alt="Mercedes classe a ">
                                </div>
                                <br>
                                <div class="tittle">
                                <li><strong>Motorisations</strong> :Principalement essence</li>
                                <li><strong>Puissance</strong> : Environ 110 à 150 ch </li>
                                <li><strong>Transmission</strong> : Manuelle ou automatique</li>
                                </div>
                            </div>
                        </div>

    <br><br>


 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>