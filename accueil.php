<?php
// Démarrer la session
session_start();
// Extraire les variables de session
extract($_SESSION);
// Si l'utilisateur est connecté, afficher la page, sinon le rediriger vers login.php
if(isset($login)){
echo "Bienvenue ".$login." <br><br>";
	echo "Pour accéder à vos identifiants cliquez <a href='identifiant.php'>ici</a><br><br>";
// La fonction qui permet d'écrire des logs	
	tracelog();
// La fonction qui compte le nombre de visites
	nbreVisite();
	echo "si vous souhaitez partir cliquez sur <a href='logout.php'> déconnexion</a>";
}else header("location:login.php");
function tracelog(){
	$nom = "log.txt";
	$maintenant= date('d-m-Y H:i:s');
	$fichier = fopen($nom, "a+"); // ouverture en ajout
	$l = "connexion user : ".$_SESSION['login']." mot de passe : ".sha1($_SESSION['mdp'])." date de connexion : ".$maintenant." \n";
	echo "Nous Sommes le : ".$maintenant." <br><br>";
	fputs($fichier, $l);
	fclose($fichier);

}
function nbreVisite(){
// si le cookie existe déja, l'incrémenter
	if(isset($_COOKIE["nb_visites"])) {
		$nbVisites=$_COOKIE["nb_visites"]+1;
	}
// Sinon le créer, et l'initialiser à 1	
	else $nbVisites=1;
	setCookie("nb_visites",$nbVisites);
	echo "C'est la ".$nbVisites."<sup>ème</sup> fois que vous nous rendez visite !<br><br>";

}

	

?>