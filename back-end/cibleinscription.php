<?php 
//session_start();
//peut-être qu'il faudrait que j'enlève ce session_start(); psk je ne veux pas qu'ici ma session s'ouvre mais après il faudra se connecter donc faire un header location sur la page de connection ? ou faire qu'on soit déjà connecté à partir d'ici ?

include("database.php");
// Si tout va bien, on peut continuer
if ((isset($_POST['civilite']) AND $_POST['civilite']!=='') 
	AND (isset($_POST['nom']) AND $_POST['nom']!=='') 
	AND (isset($_POST['prenom']) AND $_POST['prenom']!=='') 
	AND (isset($_POST['mail']) AND $_POST['mail']!=='') 
	AND (isset($_POST['mdp']) AND $_POST['mdp']!=='')  
	AND (isset($_POST['numero']) AND $_POST['numero']!=='')
	AND (isset($_POST['adresse']) AND $_POST['adresse']!==''))
{
$civilite = $_POST['civilite'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$mail = $_POST['mail'];
$mdp = sha1('gz' . $_POST['mdp']);
$numero = $_POST['numero'];
$adresse = $_POST['adresse'];

$req = $bdd->prepare('INSERT INTO inscription (civilite, nom, prenom, mail, mdp, numero, adresse) VALUES(?, ?, ?, ?, ?, ?, ?)');
$req -> execute(array(
	$civilite, 
	$nom, 
	$prenom, 
	$mail, 
	$mdp,  
	$numero, 
	$adresse
	));

$req = $bdd->query('UPDATE inscription SET nom=UPPER(nom), prenom = CONCAT(UCASE(LEFT(prenom, 1)), LCASE(SUBSTRING(prenom, 2)))');

include("mail.php");
//=====Envoi de l'e-mail.
mail($mails,$sujet,$message,$header);
//==========


echo '<meta http-equiv="refresh" content="0;URL=validationinscription.php">';

// header('Location: validationinscription.php');
	
} else {
	echo 'vous n\'avez pas renseigner tous les champs obligatoires, merci de renseigner tous les champs comportant un astérisque';
}
?>
