<?php 
include("Admin-Navbar.php");
include("../../requetedb/bdconnect.php");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modification de voiture</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>.p1 { font-size: 20px; }</style>
</head>
<body>

<div class="content">
<?php
// Récupération des données du formulaire
$_id = $_POST["id"];
$_marque = $_POST["marque"];
$_modele = $_POST["modele"];
$_prix = $_POST["prix"];
$_motorisation = $_POST["motorisation"];
$_puissance = $_POST["puissance"];
$_transmission = $_POST["transmission"];

$dossierDestination = '../../assets/images/';
$images = ['image_illustration', 'img_illustr1', 'img_illustr2', 'img_illustr3'];
$imageNames = [];

// Traitement des images
foreach ($images as $imageField) {
    if (!empty($_FILES[$imageField]['name'])) {
        $imageName = basename($_FILES[$imageField]['name']);
        $imageTmp = $_FILES[$imageField]['tmp_name'];
        $cheminComplet = $dossierDestination . $imageName;

        if (!move_uploaded_file($imageTmp, $cheminComplet)) {
            echo "<p style='color:red;'>Erreur lors du téléchargement de l'image $imageField</p>";
            exit();
        }

        $imageNames[$imageField] = $imageName;
    } else {
        // Image non modifiée, on récupère l'existante
        $stmt = $bdd->prepare("SELECT $imageField FROM Voiture WHERE id_voiture = ?");
        $stmt->execute([$_id]);
        $data = $stmt->fetch();
        $imageNames[$imageField] = $data[$imageField];
    }
}

// Mise à jour
$sql = "UPDATE Voiture SET 
    marque = ?, 
    modele = ?, 
    prix = ?, 
    motorisation = ?, 
    puissance = ?, 
    transmission = ?, 
    image_illustration = ?, 
    img_illustr1 = ?, 
    img_illustr2 = ?, 
    img_illustr3 = ?
    WHERE id_voiture = ?";

$stmt = $bdd->prepare($sql);
$result = $stmt->execute([
    $_marque,
    $_modele,
    $_prix,
    $_motorisation,
    $_puissance,
    $_transmission,
    $imageNames['image_illustration'],
    $imageNames['img_illustr1'],
    $imageNames['img_illustr2'],
    $imageNames['img_illustr3'],
    $_id
]);

if ($result) {
    echo '<center><h1>Voiture modifiée avec succès</h1></center>';
} else {
    echo '<center><h1 style="color:red;">Erreur lors de la modification</h1></center>';
}
?>
</div>

</body>
</html>
