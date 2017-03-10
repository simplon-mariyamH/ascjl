<?php 

include('database.php');

if ((isset($_POST['nom']) AND $_POST['nom']!=='') 
	AND (isset($_POST['prenom']) AND $_POST['prenom']!=='') 
	AND (isset($_POST['age']) AND $_POST['age']!=='' AND ($_POST['age']>=17)) 
	AND (isset($_POST['sexe']) AND $_POST['sexe']!==''))
{

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$age = $_POST['age'];
$sexe = $_POST['sexe'];

$req = $bdd->prepare('INSERT INTO seminaire(nom, prenom, age, sexe) VALUES(?, ?, ?, ?)');
$req -> execute(array( 
	$nom, 
	$prenom, 
	$age, 
	$sexe
	));

$req = $bdd->query('UPDATE seminaire SET nom=UPPER(nom), prenom = CONCAT(UCASE(LEFT(prenom, 1)), LCASE(SUBSTRING(prenom, 2)))');

echo '<meta http-equiv="refresh" content="0;URL=seminaire_confirmation.php">';

} else {
	echo 'Vous n\'avez pas renseigner tous les champs ou avez entrez un âge incorrect, veuillez réessayez en cliquant <a href="seminaire_descriptif.php">ici</a>';
}
 ?>