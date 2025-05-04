<?php 
  include("../../requetedb/bdconnect.php");
  include("Admin-Navbar.php");
  include("../barre/barre.php");
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
  if (isset($_POST['delete']) && isset($_POST['id_client'])){
  $id = $_POST['id_client'];
  $requete = $bdd->prepare('DELETE FROM client WHERE id_client = ?');
  $requete->execute([$id]);
  }
              
  $requete = $bdd->query("SELECT id_client, nom, prenom, telephone, adresse_email FROM client");
  $utilisateurs = $requete->fetchAll();
?>
<h2>Visualiser mes Clients !</h2>
<table border>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Telephone</th>
                <th>Adresse email</th>
                <th></th>              
            </tr>
<?php
foreach($utilisateurs as $utilisateur):
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
            <td>
                <form method="POST" action="">
                    <input type="hidden" name="id_client" value="<?= $utilisateur['id_client'] ?>">
                    <button type="submit" name="delete" onclick="return confirm('Confirmer la suppression ?')">Supprimer</button>
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
        
</table>
  </div>

</body>
</html>