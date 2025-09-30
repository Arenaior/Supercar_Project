<?php
include("../../requetedb/bdconnect.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $marque = $_POST["marque"];
    $modele = $_POST["modele"];
    $prix = $_POST["prix"];
    $motorisation = $_POST["motorisation"];
    $puissance = $_POST["puissance"];
    $transmission = $_POST["transmission"];

    // gestion des images uploadées
    $targetDir = "../../assets/images/";

    function uploadImage($inputName, $targetDir) {
        if (!empty($_FILES[$inputName]["name"])) {
            $fileName = basename($_FILES[$inputName]["name"]);
            $targetFilePath = $targetDir . $fileName;

            if (move_uploaded_file($_FILES[$inputName]["tmp_name"], $targetFilePath)) {
                return $fileName;
            }
        }
        return null;
    }

    $image_illustration = uploadImage("image_illustration", $targetDir);
    $img_illustr1 = uploadImage("img_illustr1", $targetDir);
    $img_illustr2 = uploadImage("img_illustr2", $targetDir);
    $img_illustr3 = uploadImage("img_illustr3", $targetDir);

    // insertion en BDD
    $sql = "INSERT INTO Voiture (marque, modele, prix, motorisation, puissance, transmission, image_illustration, img_illustr1, img_illustr2, img_illustr3) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

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
        $img_illustr3
    ]);

    if ($ok) {
        header("Location: Admin-Voitures.php?success=1");
        exit;
    } else {
        echo "Erreur lors de l'insertion.";
    }
} else {
    echo "Méthode non autorisée.";
}
?>
