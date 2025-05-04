
  <?php 
  include("../../requetedb/bdconnect.php");
  include("Admin-Navbar.php");
  
  ?>
  
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil-Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    

  <style>
    .p1{
        font-size:20px;
    }
    table {
        border-collapse: collapse;
        width: 100%;
    }

    th, td {
        padding: 10px; /* augmente l’espace à l’intérieur des cases */
        text-align: left;
    }

    tr {
        height: 50px; /* espace entre les lignes */
    }


  </style>

  <div class="content">
  <?php

$requete = $bdd->query("SELECT id_client, nom, prenom, telephone, adresse_email FROM client");
      

?>
<h2>Visualiser mes Clients !</h2>
<table border>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Telephone</th>
                <th>Adresse email</th>              
            </tr>
<?php
// fetch permet de recuperer une entrer
while($utilisateur = $requete->fetch(PDO::FETCH_ASSOC)) {
?>       
        <tr>
            <td>
                <?php echo $utilisateur["id_client"];?>
            </td>
            <td>
                <?php echo $utilisateur["nom"];?>
            </td>
            <td>
                <?php echo $utilisateur["prenom"];?>
            </td>
            <td>
                <?php echo $utilisateur["telephone"];?>
            </td>
            <td>
                <?php echo $utilisateur["adresse_email"];?>
            </td>
        </tr>
<?php 
}
?>
    </table>



  </div>

</body>
</html>
