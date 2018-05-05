<?php
// Démarrer la session
session_start();
// Si l'utilisateur est connecté
if(isset($_SESSION["login"])){
// Afficher son login stocké dans la session
	echo "Votre login est : ". $_SESSION["login"] ."<br><br>";
// Affcicher son password stocké dans la session
	echo "Votre mot de passe est : ". $_SESSION["mdp"]." <br><br>";
// Afficher le lien vers la page de déconnexion
	echo "si vous souhaitez partir cliquez sur <a href='logout.php'> déconnexion</a> <br><br>";
}else {
// Si l'utilisateur n'est pas authentifié, on le redirige vers la page de login
	header("location:login.php");
}
?>