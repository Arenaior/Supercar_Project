<?php

    include ("bdconnect.php");
    include ("../../barre/barre.php");
    $nom= $_POST['nom'];
    $prénom= $_POST['prénom'];
    $Mdp= $_POST['mdp'];
    $Mail=$_POST['mail'];

    
    $sql= "SELECT * FROM Client WHERE Nom='$nom' AND Prénom='$prénom' AND Mdp='$Mdp' AND Mail='$Mail'";
  $result = $bdd->query($sql);?>

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

<style>
            .H2{
                font-size:25px;
                margin-top:150px;
    
            }
        </style>


    <?php if ($result->num_rows === 1) :?>

        <div class="container text-center mt-5">
              <H1 class='H1'> Bienvenue  <?php echo  $nom;?> ! </H1> 
    </div>
    
        <?php else : ?>
            <div class="container text-center mt-5">
                <H1 class='H1'> Nom d'utilisateur ou mot de passe incorrect.</H1>
        <br> <a href='signer.php' class='H2'><u>Veuillez réessayer</u> </a>
        </div>
        
         <?php endif; ?>


<?php $bdd->close(); ?>
</body>
</html>