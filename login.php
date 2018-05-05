<?php
// Démarrer la session
session_start();
// extraire les variable de POST 
extract($_POST);
// Si l'utilisateur a cliqué sur le bouton login
if(isset($commit)){
// on vérifie les valeurs saisies par l'utilisateur
if ($login =='admin' && $mdp =='admin123') {
// si le login/password sont Ok, on les stocke dans la session
	$_SESSION['login'] = $login;
	$_SESSION['mdp'] = sha1($mdp);
// Ensuite on redirige l'utilisateur sur la page de login
	header("location:accueil.php");
}else {
// si le login/password invalide, afficher un message d'erreur
	echo "<br><span> login ou mot de passe invalide </span>";
}
}



?>

<!doctype html>
<html lang="fr">
<head>
<meta charset="utf-8">
<title>Login Form</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
	<div>
		<h1>Login</h1>
		<form method="post" >
			<input type="text" name="login" value="" placeholder="Username "> <br> <br>
			<input type="password" name="mdp" value="" placeholder="Password"> <br> <br>
			<input type="submit" name="commit" value="Login">
		</form>
	</div>
</body>
</html>


