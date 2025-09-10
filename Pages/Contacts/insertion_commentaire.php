<?php

include ("../barre/barre.php");

$message = ""; // Variable pour afficher un message après soumission

if (isset($_POST["nom"]) && isset($_POST["prenom"]) && isset($_POST["telephone"]) && isset($_POST["email"]) && isset($_POST["commentaire"])) {
    $nom         = $_POST["nom"];
    $prenom      = $_POST["prenom"];
    $telephone   = $_POST["telephone"];
    $mail        = $_POST["email"];
    $commentaire = $_POST["commentaire"];
    $mot_de_passe = ""; // Mot de passe vide

    // Vérifie si le contacts existe déjà
    $requete = $bdd->prepare('SELECT COUNT(*) FROM contacts WHERE adresse_email = :email');
    $requete->bindValue(":email", $mail);
    $requete->execute();
    $verification = $requete->fetchColumn();

    if ($verification > 0) {
        // Mise à jour du commentaire existant
        $requete = $bdd->prepare('UPDATE contacts SET commentaire = ? WHERE adresse_email = ?');
        $requete->execute([$commentaire, $mail]);
    } else {
        // Insertion d'un nouveau contacts avec commentaire
        $requete = $bdd->prepare('INSERT INTO contacts(nom, prenom, telephone, adresse_email, commentaire, mot_de_passe) VALUES(?, ?, ?, ?, ?, ?)');
        $requete->execute([$nom, $prenom, $telephone, $mail, $commentaire, $mot_de_passe]);
    }

    // Message de confirmation
    $message = "✅ Votre commentaire a bien été reçu.";
}

?>

<!-- Affichage du message après envoi -->
<?php if (!empty($message)): ?>
    <H1><center><p style=" font-weight: bold; margin-top: 30px;">
        <?= htmlspecialchars($message) ?>
    </p></center></H1>
<?php endif; ?>
