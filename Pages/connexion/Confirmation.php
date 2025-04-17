<?php

    include ("../requetedb/bdconnect.php");
    include ("../barre/barre.php");
    $nom = $_POST['Nom'];
    $mail =$_POST['Mail'];
    $Adresse =$_POST['Adresse'];
    $Marque =$_POST['Marque'];
    $Modele =$_POST['Modele'];
    $jour =$_POST['Jour'];
    $Heure =$_POST['Heure'];
    $Retour =$_POST['Retour'];
    $Dretour =$_POST['D-Retour'];

    
    $sql = "INSERT INTO Demandes (`Nom`, `Mail`, `Adresse`, `Marque`, `Modele`, `Jour`, `Heure de récupération`, `Heure de dépôt`, `Jour de retour`) 
    VALUES ('$nom', '$mail', '$Adresse', '$Marque', '$Modele', '$jour', '$Heure', '$Retour', '$Dretour')";
$result = $bdd->query($sql);
?>

<!DOCTYPE HTML>
<html lang=fr>
<Font face ='Arial'>
    <head>
    <meta charset = "UTF-8" />    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <style>
            .H1{
                font-size:40px;
                color:black;
                margin-top:150px;
                animation: slideIn 2s forwards; /* Appelle l'animation */
            }

            /* Animation pour faire glisser le texte */
            @keyframes slideIn {
                from {
                opacity: 0;
                transform: translateX(-100%);
                }
                  to {
                opacity: 1;
                transform: translateX(0);
                }
            }
            .H2{
                font-size: 25px;
                margin-top: 150px;
            }
        </style>


        <div class="container text-center mt-5">
              <H1 class='H1'> Votre demande a bien été reçue  <?php echo  $mail;?> ! </H1> 

              <hr>
        </div> 

        <div class="container mt-5">
            <a href="/supercar_project/Pages/Accueil/Accueil.php" class="btn btn-dark">Retour à l'accueil</a>

        

<?php $bdd->close(); ?>

</body>
</html>



