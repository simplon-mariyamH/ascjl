<?php 

include('database.php');

if ((isset($_POST['nom']) AND $_POST['nom']!=='') 
	AND (isset($_POST['prenom']) AND $_POST['prenom']!=='') 
	AND (isset($_POST['age']) AND $_POST['age']!=='') 
	AND (isset($_POST['sexe']) AND $_POST['sexe']!==''))
{

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$age = $_POST['age'];
$sexe = $_POST['sexe'];

$req = $bdd->prepare('INSERT INTO sejour(nom, prenom, age, sexe) VALUES(?, ?, ?, ?)');
$req -> execute(array( 
	$nom, 
	$prenom, 
	$age, 
	$sexe
	));

$req = $bdd->query('UPDATE sejour SET nom=UPPER(nom), prenom = CONCAT(UCASE(LEFT(prenom, 1)), LCASE(SUBSTRING(prenom, 2)))');


echo '<meta http-equiv="refresh" content="0;URL=sejour_descriptif.php">';

} else {
	echo 'vous n\'avez pas renseigner tous les champs obligatoires, merci de renseigner tous les champs comportant un astérisque';
}
 ?>