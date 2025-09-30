<?php
include("../../requetedb/bdconnect.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $id = $_POST["id"];
    $marque = $_POST["marque"];
    $modele = $_POST["modele"];
    $prix = $_POST["prix"];
    $motorisation = $_POST["motorisation"];
    $puissance = $_POST["puissance"];
    $transmission = $_POST["transmission"];

    // dossier de destination
    $targetDir = "../../assets/images/";

    function uploadImage($inputName, $targetDir, $oldFile = null) {
        if (!empty($_FILES[$inputName]["name"])) {
            $fileName = basename($_FILES[$inputName]["name"]);
            $targetFilePath = $targetDir . $fileName;

            if (move_uploaded_file($_FILES[$inputName]["tmp_name"], $targetFilePath)) {
                return $fileName;
            }
        }
        return $oldFile; // si aucune nouvelle image, on garde l'ancienne
    }

    // récupérer les anciennes valeurs
    $stmt = $bdd->prepare("SELECT * FROM Voiture WHERE id_voiture = ?");
    $stmt->execute([$id]);
    $oldData = $stmt->fetch(PDO::FETCH_ASSOC);

    // uploader ou garder anciennes images
    $image_illustration = uploadImage("image_illustration", $targetDir, $oldData["image_illustration"]);
    $img_illustr1 = uploadImage("img_illustr1", $targetDir, $oldData["img_illustr1"]);
    $img_illustr2 = uploadImage("img_illustr2", $targetDir, $oldData["img_illustr2"]);
    $img_illustr3 = uploadImage("img_illustr3", $targetDir, $oldData["img_illustr3"]);

    // update BDD
    $sql = "UPDATE Voiture 
            SET marque=?, modele=?, prix=?, motorisation=?, puissance=?, transmission=?, 
                image_illustration=?, img_illustr1=?, img_illustr2=?, img_illustr3=? 
            WHERE id_voiture=?";

    $stmt = $bdd->prepare($sql);
    $ok = $stmt->execute([
        $marque,
        $modele,
        $prix,
        $motorisation,
        $puissance,
        $transmission,
        $image_illustration,
        $img_illustr1,
        $img_illustr2,
        $img_illustr3,
        $id
    ]);

    if ($ok) {
        header("Location: Admin-Voitures.php?updated=1");
        exit;
    } else {
        echo "Erreur lors de la modification.";
    }
} else {
    echo "Méthode non autorisée.";
}
?>
