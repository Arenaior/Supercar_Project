
<!DOCTYPE HTML>
<html lang=fr>
<head>
<meta charset="utf-8" />
</head>
<body>
<?php
include ("../requetedb/bdconnect.php");

$sql= "select * from Inscription"; $curseur = mysqli_query($bdd,$sql);
echo ("<H2>Visualiser mes contacts!</H2>"); while ($row = mysqli_fetch_assoc($curseur)){
$idcontact = $row["idcontact"]; echo "<b>ID :</b> $guestid<br />";
$name = $row["nom"]; echo "<b>Nom :</b> $name<br />"; $adresse = $row["adresse"]; echo "<b>Adresse :</b> $adresse<br />";
$email = $row["email"]; echo "<b>Email :</b> $email<br />";
$url = $row["url"]; echo "<b>Url :</b> $url<br />";
$commentaires = $row["commentaires"]; echo "<b>Commentaires :</b>
</body>
$commentaires<br /><br />";
} mysqli_free_result($curseur); mysqli_close($bdd);
?>
<p>
<h1 align='center'><a href='signer.php'> Retour au formulaire Guestbook </a></h1></p>
</html>