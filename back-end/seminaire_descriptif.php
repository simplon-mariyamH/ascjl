<!DOCTYPE html>
<html lang="fr">
<head>
	<?php include('head.php'); ?>
	<title>Descriptif du Séjour</title>
</head>
<body>

	<script type="text/javascript">
		function checkAge() {
		  var age = document.getElementById("age").value;
		  if (age<17) {
		    var msg = document.createTextNode("Insérez un âge supérieur ou égale à 17 ans.");
		    document.getElementById("ageerror").appendChild(msg);
		    alert('Vous devez avoir 17 ans ou plus pour participer au séminaire.' );
		  }
		}
	</script>

	<?php include('menu.php'); ?>
 	
	<div id='haut'>
		<h3>Il reste : 
			<?php 
			include('database.php');
			$nombre_initial = 30;
			

			$affichage = $bdd -> query('SELECT COUNT(*) AS nbinscrit FROM seminaire');

			$donnees = $affichage -> fetch();
			$nombre_final = $nombre_initial - $donnees['nbinscrit'];

			if ($nombre_final !== 0) {
				echo 'Il reste : '.$nombre_final.' places.';
			?>
	</div>
	<div id='bas'>
		<h2>Réserver une place pour le séminaire</h2>
		<form method="post" action="cibleseminaire_descriptif.php">
			
			<p>
            	<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                	<input class="mdl-textfield__input" type="text" name="nom" id="sample3" required>
                	<label class="mdl-textfield__label" for="sample3">Nom : </label>
            	</div>
            </p>

            <p>
            	<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                	<input class="mdl-textfield__input" type="text" name="prenom" id="sample3" required>
                	<label class="mdl-textfield__label" for="sample3">Prenom : </label>
            	</div>
            </p>

            <p>
            	<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                	<input class="mdl-textfield__input" type="text" name="age" id="age" onblur="checkAge()" required>
                	<label class="mdl-textfield__label" for="sample3">Age : </label>
            	</div>
            </p>
            <p><label id="ageerror"></label></p>
            <p>
                <span class="sexe_class">Sexe : </span>
                <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                    <input type="radio" id="option-1" class="mdl-radio__button" name="sexe" value="feminin" checked>
                    <span class="mdl-radio__label">feminin</span>
                </label>
                <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-2">
                    <input type="radio" id="option-2" class="mdl-radio__button" name="sexe" value="masculin">
                    <span class="mdl-radio__label">masculin</span>
                </label>
            </p>
            <button class="mdl-button mdl-js-button mdl-button--accent" type="submit" id="submit" name="submit" style="font-size: 2em;">Valider</button>
		</form>
	</div>
			<?php
			}
			else {
				echo "<h1>IL N'Y A PLUS DE PLACE <br/> SUIVEZ-NOUS POUR NOS PROCHAINS EVENEMENT
				<br/>LES INFOS SERONT <a href='seminaire.php'>ICI</a> UNE FOIS DISPONIBLE</h1>";
			}
			 ?>
    <?php include('fin_menu.php'); ?>
</body>
</html>