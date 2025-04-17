<?php
session_start();
session_unset();
session_destroy();
echo "Déconnecté !";
// header("Location: /supercar_project/Pages/connexion/pageconnexion.php");

header("Location: /supercar_project/Pages/connexion/pageconnexion.php"); 


exit();
