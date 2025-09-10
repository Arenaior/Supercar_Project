<?php
include ("../barre/barre.php");

if (!empty($_POST["marque"]) && !empty($_POST["modele"]) && !empty($_POST["prix"]) && !empty($_POST["motorisation"]) && !empty($_POST["puissance"]) && !empty($_POST["transmission"]) && !empty($_FILES["image_illustration"]["name"]) && !empty($_FILES["img_illustr1"]["name"]) && !empty($_FILES["img_illustr2"]["name"]) && !empty($_FILES["img_illustr3"]["name"])) {
  $marque  = $_POST["marque"];
  $modele  = $_POST["modele"];
  $prix = $_POST["prix"];
  $motorisation = $_POST["motorisation"];
  $puissance = $_POST["puissance"];
  $transmission = $_POST["transmission"];
  $emplacement_image = "../../assets/images/";
  $image_illustration = $emplacement_image . basename($_FILES["image_illustration"]["name"]);
  $img_illustr1 = $emplacement_image . basename($_FILES["img_illustr1"]["name"]);
  $img_illustr2 = $emplacement_image . basename($_FILES["img_illustr2"]["name"]);
  $img_illustr3 = $emplacement_image . basename($_FILES["img_illustr3"]["name"]);

  move_uploaded_file($_FILES["image_illustration"]["tmp_name"], $image_illustration);
  move_uploaded_file($_FILES["img_illustr1"]["tmp_name"], $img_illustr1);
  move_uploaded_file($_FILES["img_illustr2"]["tmp_name"], $img_illustr2);
  move_uploaded_file($_FILES["img_illustr3"]["tmp_name"], $img_illustr3);

  // Insertion dans la base
  $requete = $bdd->prepare('INSERT INTO voiture(marque, modele, prix, motorisation, puissance, transmission, image_illustration, img_illustr1, img_illustr2, img_illustr3) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
  $requete->execute([$marque, $modele, $prix, $motorisation, $puissance, $transmission, $image_illustration, $img_illustr1, $img_illustr2, $img_illustr3]);
}

  ?>
  <center> <H1> Voiture ajoutée avec succès ! </H1> </center>
