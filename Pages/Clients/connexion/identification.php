<?php

    include ("bdconnect.php");
    include ("../../Accueil/barre.php");
    $nom= $_POST['nom'];
    $Mdp= $_POST['Mdp'];
$sql= "SELECT * FROM Clients WHERE Nom='$nom' AND Mdp='$Mdp'";
  $result = $bdd->query($sql);?>

<!DOCTYPE HTML>
<html lang=fr>
<Font face ='Arial'>
    <head>
        <style>
            .H1{
                font-size:40px;
                color:black;
                margin-top:150px;
    
            }
        </style>

<style>
            .H2{
                font-size:25px;
                margin-top:150px;
    
            }
        </style>


    <?php if ($result->num_rows === 1) :?>

    <center>  <H1 class='H1'> Bienvenue  <?php echo  $nom;?> ! </H1> </center>
    
        <?php else : ?>
     <center> <H1 class='H1'> Nom d'utilisateur ou mot de passe incorrect.</H1>
        <br> <a href='signer.php' class='H2'><u>Veuillez réessayer</u> </a>
     </center>
        
         <?php endif; ?>


<?php $bdd->close(); ?>
</body>
</html>