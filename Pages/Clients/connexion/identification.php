<?php
    include ("../barre/barre.php");
    include ("../requetedb/bdconnect.php");
    
    $mdp= $_POST['mdp'];
    $mail=$_POST['mail'];

    
    $sql= "SELECT * FROM Client WHERE Mail='$mail' AND Mdp='$mdp' ";
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

            .H2{
                font-size:25px;
                margin-top:150px;
    
            }

        </style>


    <?php if ($result->num_rows === 1) :?>

        <div class="container text-center mt-5">
              <H1 class='H1'> Bienvenue  <?php echo  $mail;?> ! </H1> 

              <hr>
         
         <div class="container mt-5">
    <h1 class="h4 text-center mb-4">Veuillez remplir ce formulaire pour finaliser votre demande d'essai</h1>

    <div class="row align-items-center gap-4">
        <div class="col-md-4">
            <img src="/supercar_project/assets/images/DE2.jpg" class="img-fluid rounded shadow" alt="Voiture Volkswagen">
        </div>

        <div class="col-md-6">
                <form method="POST" action="Confirmation.php">
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Nom" name="Nom">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Mail" name="Mail">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Adresse" name="Adresse">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Marque de la voiture" name="Marque">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Modèle de la voiture" name="Modele">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Date d'essai" name="Jour">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Heure" name="Heure">
            </div>

            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Date de retour" name="D-Retour">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Heure Retour" name="Retour">
            </div>
            <button type="submit" class="btn btn-primary">Envoyer</button>
            <a class="btn btn-secondary" href="identification.php">Retour</a>
        </form>

        </div>
    </div>
</div>

    </div>
    
    
    
    
    <!----CONDITION ELSE----->
        <?php else : ?>
            <div class="container text-center mt-5">
                <H1 class='H1'> Nom d'utilisateur ou mot de passe incorrect.</H1>
        <br> <a href='page_connexion.php' class='H2'><u>Veuillez réessayer</u> </a>
        </div>
        <hr>
        
         <?php endif; ?>

        

<?php $bdd->close(); ?>

</body>
</html>



