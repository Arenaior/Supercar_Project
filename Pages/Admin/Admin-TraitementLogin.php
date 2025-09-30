<?php
session_start();
$pdo = new PDO("mysql:host=localhost;dbname=supercar;charset=utf8", "root", "root");

$nom = $_POST['Nom'] ?? '';
$password = $_POST['password'] ?? '';


$stmt = $pdo->prepare("SELECT * FROM Admin WHERE Nom = :Nom LIMIT 1");
$stmt->execute(['Nom' => $nom]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if ($user && $password === $user['Password']) {
    $_SESSION['Nom'] = $user['Nom']; // stocker qui est connecté
    header("Location: Admin-Essai.php"); // page protégée
    exit;
} else {
    echo "Nom ou mot de passe incorrect";
}
