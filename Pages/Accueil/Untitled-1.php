<?php
$message = "";
if (isset($_POST['email'])) {
    if (empty($_POST['email'])) {
        $message = "Veuillez entrer votre adresse email.";
    } else {
        $message = "Merci ! Votre email est : " . htmlspecialchars($_POST['email']);
    }
}
?>

<form method="POST">
    <input type="email" name="email" placeholder="Votre email">
    <button type="submit">Envoyer</button>
</form>

<?php if ($message): ?>
    <div style="margin-top: 10px; color: blue;">
        <?= $message ?>
    </div>
<?php endif; ?>
<?php
for ($i = 0; $i < 5; $i++) {
    echo "i vaut $i <br>";
}
?>