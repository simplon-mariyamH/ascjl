<?php 
session_start();

include('database.php');

$login_valide = $_POST['mail'];
$mdp_valide = $_POST['mdp'];

$req = $bdd->prepare('SELECT * FROM inscription WHERE mail = :mail AND mdp = :mdp');
$req->execute(array(
	'mail' => $login_valide,
	'mdp' => $mdp_valide
	));

$donnees = $req->fetch();

if ((isset($_POST['mail']) AND !empty(htmlspecialchars($_POST['mail']))) AND (isset($_POST['mdp']) AND !empty(htmlspecialchars($_POST['mdp'])))) {
	if (!$donnees) {
		// Le visiteur n'a pas été reconnu comme étant membre de notre site. On utilise alors un petit javascript lui signalant ce fait
		echo '<body onLoad="alert(\'Membre non reconnu...\')">';
		// puis on le redirige vers la page d'accueil
		echo '<meta http-equiv="refresh" content="0;URL=inscription.php">';
	}
	else {
		
		$_SESSION['id'] = $donnees['id'];
		$_SESSION['mail'] = $login_valide;
		$_SESSION['nom'] = $donnees['nom'];
		$_SESSION['prenom'] = $donnees['prenom'];
		$_SESSION['civilite'] = $donnees['civilite'];
		$_SESSION['numero'] = $donnees['numero'];
		$_SESSION['adresse'] = $donnees['adresse'];
		

		//echo 'Bienvenue ' . $_SESSION['mail'];
		echo '<body onLoad="alert(\'Connexion OK\')">';
		// puis on le redirige vers la page d'accueil
		echo '<meta http-equiv="refresh" content="0;URL=index.php">';

		
	}
}
else {
	echo 'trompé';
}
?>