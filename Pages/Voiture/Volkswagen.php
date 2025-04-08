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
            width: 30%;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            transition: transform 0.3s ease-in-out;
            text-align: center;
            margin-top:-150px;
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
            margin-top:-200px;
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
            <div class="modal fade" id="Golf8" tabindex="-1" aria-labelledby="modalLabel">
                <div class="modal-dialog">
                    <div class="modal-content text-center">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalLabel">Golf 8</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
                        </div>
                        <div class="modal-body">
                            <img src="../../assets/images/Voitures-Volkswagen-Golf8.jpg"  class="img-fluid rounded">
                            <br><br>
                            <p class="mt-3 p5">La Volkswagen Golf 8 incarne l'évolution d'un modèle emblématique, alliant design moderne, technologie avancée et performances optimisées. Elle reste fidèle à son ADN tout en s'adaptant aux nouvelles exigences de la mobilité.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                        </div>
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
                        <div class="modal fade" id="Tiguan" tabindex="-1" aria-labelledby="modalLabel">
                            <div class="modal-dialog">
                                <div class="modal-content text-center">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalLabel">Tiguan</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
                                    </div>
                                    <div class="modal-body">
                                        <img src="../../assets/images/Voitures-Volkswagen-Tiguan.jpg"  class="img-fluid rounded">
                                        <br><br>
                                        <p class="mt-3 p5">Le Volkswagen Tiguan R-Line 2020 est la version dynamique et sportive du célèbre SUV allemand. Avec son design affirmé, ses technologies modernes et ses performances optimisées, il séduit ceux qui recherchent un SUV à la fois pratique et puissant.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                                    </div>
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
                        <div class="modal fade" id="Tayron" tabindex="-1" aria-labelledby="modalLabel">
                            <div class="modal-dialog">
                                <div class="modal-content text-center">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalLabel">Tayron</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
                                    </div>
                                    <div class="modal-body">
                                        <img src="../../assets/images/Voitures-Volkswagen-Tayron.jpg"  class="img-fluid rounded">
                                        <br><br>
                                        <p class="mt-3 p5">Le Volkswagen Tayron est un SUV familial qui combine design moderne, confort et technologie avancée. Conçu principalement pour le marché chinois, il partage plusieurs éléments avec le Tiguan, tout en offrant un look plus robuste et raffiné.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                                    </div>
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
                    <div class="modal fade" id="Polo" tabindex="-1" aria-labelledby="modalLabel">
                            <div class="modal-dialog">
                                <div class="modal-content text-center">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalLabel">Polo 5</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
                                    </div>
                                    <div class="modal-body">
                                        <img src="../../assets/images/Voitures-Volkswagen-Polo5.jpg"  class="img-fluid rounded">
                                        <br><br>
                                        <p class="mt-3 p5">La Volkswagen Polo 5 (ou Polo V, génération 2009-2017) est une citadine compacte qui a su conquérir le marché grâce à son design sobre, sa fiabilité et son agrément de conduite. Elle est idéale pour la ville tout en étant capable d’assurer des trajets plus longs avec confort.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                                    </div>
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
                 <div class="modal fade" id="Touareg" tabindex="-1" aria-labelledby="modalLabel">
                            <div class="modal-dialog">
                                <div class="modal-content text-center">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalLabel">Touareg</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
                                    </div>
                                    <div class="modal-body">
                                        <img src="../../assets/images/Voitures-Volkswagen-Touareg.jpg"  class="img-fluid rounded">
                                        <br><br>
                                        <p class="mt-3 p5">- Diesel (TDI)
                                                            - 3.0 V6 TDI 231 ch / 286 ch – moteur coupleux et économique (~7L/100 km).
                                                            <br>- Essence (TSI) 3.0 V6 TSI 340 ch – performances impressionnantes.
                                                            <br>- Hybride Rechargeable (eHybrid)
                                                            <br>- 3.0 V6 TSI + moteur électrique – 381 ch / 462 ch (Touareg R PHEV).
                                                            <br>- Autonomie électrique ~50 km en mode 100% électrique.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                                    </div>
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
                        <div class="modal fade" id="Passat" tabindex="-1" aria-labelledby="modalLabel">
                            <div class="modal-dialog">
                                <div class="modal-content text-center">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalLabel">Passat</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
                                    </div>
                                    <div class="modal-body">
                                        <img src="../../assets/images/Voitures-Volkswagen-Passat.jpg"  class="img-fluid rounded">
                                        <br><br>
                                        <p class="mt-3 p5">- Diesel (TDI)
                                                            - 3.0 V6 TDI 231 ch / 286 ch – moteur coupleux et économique (~7L/100 km).
                                                            <br>- Essence (TSI) 3.0 V6 TSI 340 ch – performances impressionnantes.
                                                            <br>- Hybride Rechargeable (eHybrid)
                                                            <br>- 3.0 V6 TSI + moteur électrique – 381 ch / 462 ch (Touareg R PHEV).
                                                            <br>- Autonomie électrique ~50 km en mode 100% électrique.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                                    </div>
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
                            <a href="#" class="btn" data-bs-toogle="modal" data-bs-target="#T-Roc">Voir plus...</a> <a href="/supercar_project/Pages/Clients/connexion/connexion.php" class="btn-dark">Essayer</a>
                        </div>
                    </div>


                    <!-- Modal pour T-ROC -->
                    <div class="modal fade" id="T-Roc" tabindex="-1" aria-labelledby="modalLabel">
                            <div class="modal-dialog">
                                <div class="modal-content text-center">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalLabel">T-Roc</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
                                    </div>
                                    <div class="modal-body">
                                        <img src="../../assets/images/Voitures-Volkswagen-T-Roc.jpg"  class="img-fluid rounded">
                                        <br><br>
                                        <p class="mt-3 p5">- Diesel (TDI)
                                                            - 3.0 V6 TDI 231 ch / 286 ch – moteur coupleux et économique (~7L/100 km).
                                                            <br>- Essence (TSI) 3.0 V6 TSI 340 ch – performances impressionnantes.
                                                            <br>- Hybride Rechargeable (eHybrid)
                                                            <br>- 3.0 V6 TSI + moteur électrique – 381 ch / 462 ch (Touareg R PHEV).
                                                            <br>- Autonomie électrique ~50 km en mode 100% électrique.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                                    </div>
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

                    <!-- Modal pour T-ROC -->
                    <div class="modal fade" id="T-Cross" tabindex="-1" aria-labelledby="modalLabel">
                                        <div class="modal-dialog">
                                            <div class="modal-content text-center">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="modalLabel">T-Cross</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <img src="../../assets/images/Voitures-Volkswagen-T-Cross.jpg"  class="img-fluid rounded">
                                                    <br><br>
                                                    <p class="mt-3 p5">- Diesel (TDI)
                                                                        - 3.0 V6 TDI 231 ch / 286 ch – moteur coupleux et économique (~7L/100 km).
                                                                        <br>- Essence (TSI) 3.0 V6 TSI 340 ch – performances impressionnantes.
                                                                        <br>- Hybride Rechargeable (eHybrid)
                                                                        <br>- 3.0 V6 TSI + moteur électrique – 381 ch / 462 ch (Touareg R PHEV).
                                                                        <br>- Autonomie électrique ~50 km en mode 100% électrique.</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                                                </div>
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
                    <div class="modal fade" id="Jetta" tabindex="-1" aria-labelledby="modalLabel">
                                            <div class="modal-dialog">
                                                <div class="modal-content text-center">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="modalLabel">Jetta</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <img src="../../assets/images/Voitures-Volkswagen-Jetta.jpg"  class="img-fluid rounded">
                                                        <br><br>
                                                        <p class="mt-3 p5">- Diesel (TDI)
                                                                            - 3.0 V6 TDI 231 ch / 286 ch – moteur coupleux et économique (~7L/100 km).
                                                                            <br>- Essence (TSI) 3.0 V6 TSI 340 ch – performances impressionnantes.
                                                                            <br>- Hybride Rechargeable (eHybrid)
                                                                            <br>- 3.0 V6 TSI + moteur électrique – 381 ch / 462 ch (Touareg R PHEV).
                                                                            <br>- Autonomie électrique ~50 km en mode 100% électrique.</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

    <br><br>


 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>