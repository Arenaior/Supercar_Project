<?php
session_start();
session_unset();
session_destroy();
echo "Déconnecté !";
// header("Location: /supercar_project/Pages/connexion/page_connexion.php");

header("Location: /supercar_project/Pages/connexion/page_connexion.php"); 


exit();
