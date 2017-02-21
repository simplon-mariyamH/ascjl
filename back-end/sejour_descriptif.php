<!DOCTYPE html>
<html>
<head>
	<?php include('header.php'); ?>
	<title>Descriptif du Séjour</title>
</head>
<body>

	<script type="text/javascript">
		function checkAge() {
		  var age = document.getElementById("age").value;
		  if (age<8 || age>16) {
		    var msg = document.createTextNode("Insérez un âge entre 8 et 16 ans inclus.");
		    document.getElementById("ageerror").appendChild(msg);
		    alert('L\'enfant doit être âgé entre 8 et 16 ans pour participer au séjour.' );
		  }
		}
	</script>

	<?php include('menu.php'); ?>
 	
	<div id='haut'></div>
	<div id='bas'>
		<h2>Réserver une place pour votre enfant</h2>
		<form method="post" action="ciblesejour_descriptif.php">
			
			<p>
            	<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                	<input class="mdl-textfield__input" type="text" name="nom" id="sample3">
                	<label class="mdl-textfield__label" for="sample3">Nom : </label>
            	</div>
            </p>

            <p>
            	<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                	<input class="mdl-textfield__input" type="text" name="prenom" id="sample3">
                	<label class="mdl-textfield__label" for="sample3">Prenom : </label>
            	</div>
            </p>

            <p>
            	<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                	<input class="mdl-textfield__input" type="text" name="age" id="age" onblur="checkAge()">
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
		<!-- <?php 
		include('database.php');
		function CptUser(){
   		global $bdd;
   		$compteur = $bdd->prepare('SELECT id FROM sejour');        
   		return $compteur->rowcount();
		}
 		?> -->
 		
	</div>
</body>
</html>