<?php   
session_start(); //d�marrer la session
// D�truit toutes les variables de session
$_SESSION = array();
session_destroy(); //detruire la session
header("location: login.php"); //redirection vers la page de login
?>