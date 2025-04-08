<?php 
include ('../barre/barre.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="merco.css">
    <title>Document</title>
</head>
<body>
<header>
        <div>
        <center><h1 class="titre">MERCEDES-BENZ</h1></center>
        <div class="descri">L'élégance et la performance exceptionnelles de Mercedes-Benz. 
        Offrez-vous le luxe d'un véhicule d'exception, alliant design raffiné, technologie de pointe et conduite incomparable. 
        Faites le choix de l'excellence dès aujourd'hui et prenez le volant de votre future Mercedes !</div>
</header>
<center>
    <div class="css">
        <h1>Découvrez nos modeles avec Mercedes-Benz</h1>
        <img src="../../assets/images/logomerco.jpg" style="width: 150px; height: auto;">

    </div>
</center>
<hr>


<main>
        <div class="voiture-container">
            <div class="voiture-cadre">
                <img src="../../assets/images/3.png" alt="Mercedes C63">
                <div class="voiture-titre">Mercedes Classe A</div>
                <div class="voiture-titre">Á partir de 39.250€</div>
                <div class="voiture-button">
                    <a href="#modal-c63" class="btn btn-dark">Voir plus...</a>
                    <a href="#"class="btn btn-dark">Essayer</a>
                </div>
            </div>
            <div class="voiture-cadre">
                <img src="../../assets/images/2.png" alt="Mercedes GLC">
                <div class="voiture-titre">Mercedes GLC Coupé</div>
                <div class="voiture-titre">Á partir de 65.000€</div>
                <div class="voiture-button">
                    <a href="#modal-glc" class="btn btn-dark">Voir plus...</a>
                    <a href="#"class="btn btn-dark">Essayer</a>
                </div>
            </div>
            <div class="voiture-cadre">
                <img src="../../assets/images/1.png" alt="Mercedes Classe G">
                <div class="voiture-titre">Mercedes Classe G</div>
                <div class="voiture-titre">Á partir de 77.842€</div>
                <div class="voiture-button">
                    <a href="#modal-classeg" class="btn btn-dark">Voir plus...</a>
                    <a href="#"class="btn btn-dark">Essayer</a>
                </div>
            </div>
            <div class="voiture-cadre">
                <img src="../../assets/images/4.png" alt="Mercedes AMG">
                <div class="voiture-titre">Mercedes AMG GT S</div>
                <div class="voiture-titre">Á partir de 121.150€</div>
                <div class="voiture-button">
                    <a href="#modal-amg" class="btn btn-dark">Voir plus...</a>
                    <a href="#"class="btn btn-dark">Essayer</a>
                </div>
            </div>
        </div>
    </main>

    <!-- Modals -->
    <div id="modal-c63" class="modal">
        <div class="modal-content">
            <a href="#" class="close">&times;</a>
            <h2>À propos de la Mercedes Classe A </h2>
            <p>La Mercedes Classe A est une berline compacte haut de gamme qui allie élégance, innovation et performances.</p>
            <div class="voiture-cadre">
                <img src="../../assets/images/modalclassea.jpg" alt="Mercedes classe a ">
            </div>
            <br>
            <div class="tittle">
            <li><strong>Motorisations</strong> : Essence ou Diesel et Hybride rechargeable</li>
            <li><strong>Puissance</strong> : De 116 ch (A 180d) à 421 ch (AMG A 45 S 4MATIC+)</li>
            <li><strong>Transmission</strong> : Boîte manuelle ou automatique 7G-DCT/8G-DCT</li>
            </div>
        </div>
    </div>

    <div id="modal-glc" class="modal">
        <div class="modal-content">
            <a href="#" class="close">&times;</a>
            <h2>À propos de la Mercedes GLC</h2>
            <p>Le Mercedes GLC est un SUV haut de gamme offrant luxe et performance.Un design audacieux, 
                une technologie de pointe et des performances incomparables.</p>
                <div class="voiture-cadre">
                <img src="../../assets/images/modalglc.jpg" alt="Mercedes classe a ">
            </div>
            <br>
            <div class="tittle">
            <li><strong>Motorisations</strong> : Essence ou Diesel et Hybride rechargeable</li>
            <li><strong>Puissance</strong> : De 197 ch (GLC 200) à 680 ch (AMG GLC 63 S E PERFORMANCE)</li>
            <li><strong>Transmission</strong> :Boîte automatique 9G-TRONIC avec transmission intégrale 4MATIC</li>
        </div>
        
    </div>

    <div id="modal-classeg" class="modal">
        <div class="modal-content">
            <a href="#" class="close">&times;</a>
            <h2>À propos de la Mercedes Classe G</h2>
            <p>Symbole de robustesse et de luxe, 
                le Mercedes Classe G allie un design intemporel à des performances exceptionnelles, sur route comme en tout-terrain.</p>
                <div class="voiture-cadre">
                <img src="../../assets/images/modalclasseg.jpg" alt="Mercedes classe g ">
            </div>
            <br>
            <li><strong>Motorisations</strong> : Essence, Diesel et version AMG haute performance</li>
            <li><strong>Puissance</strong>  :De 286 ch (G 350d) à 585 ch (AMG G 63) </li>
            <li><strong>Transmission</strong> :Boîte automatique 9G-TRONIC avec transmission intégrale 4MATIC et 3 blocages de différentiel</li>

        </div>
        
            
    </div>

    <div id="modal-amg" class="modal">
        <div class="modal-content">
            <a href="#" class="close">&times;</a>
            <h2>À propos de la Mercedes AMG GT S</h2>
            <p>La Mercedes-AMG GT S est une véritable voiture de sport, alliant un design racé, 
                une technologie de pointe et des performances explosives sur route comme sur circuit.</p>
                <div class="voiture-cadre">
                <img src="../../assets/images/modalamggts.jpg" alt="Mercedes amggts ">
                <br>
           
        </div>
        <br>
            <li><strong>Motorisations</strong> :V8 biturbo 4.0L AMG</li>
            <li><strong>Puissance</strong> : 522 ch pour des accélérations fulgurantes</li>
            <li><strong>Transmission</strong>: Boîte automatique AMG SPEEDSHIFT DCT 7 rapports avec propulsion arrière</li>


    
    

</body>
</html>


