<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<?php include('head.php'); ?>
<link rel="stylesheet" type="text/css" href="style.css">
	<title>Accueil</title>
</head>
<body>
		<?php include('menu.php');
			if (!isset($_SESSION['mail'])){
			?>
			 <div id="connexion">
        	<!-- <button id="on_connexion" >Connexion<i class="material-icons element">lock_outline</i></button>  -->
                 
          <div id="under_connexion">
        	<form method="post" action="cibleconnexion.php">
				<p><input type="text" name="mail" placeholder="Identifiant" /></p>
				<p><input type="password" name="mdp" placeholder="Mot de passe" /></p>

				<p><input id="valider" type="submit" name="submit" value="Valider" class="btn-login"/></p> 
			</form>
			<p>
				Pas encore inscrit ?
				<a href="inscription.php"> INSCRIVEZ-VOUS ICI !</a>
				<p><a href="" target="_blank">Mot de passe oublié</a>
			</p>
          </div>
          
        </div>
        </div>
        <?php 
		}else{ ?>		
        <div id="en_connexion">
        	Vous êtes connecté Youpi 
        </div>
        <?php } ?>
	<?php include('fin_menu.php'); ?>

	<footer></footer>
<!-- 	<script type="text/javascript">
  // Mon code Javascript
	document.querySelector("#on_connexion").onclick = function() {
	if (window.getComputedStyle(document.querySelector("#under_connexion")).display=='none'){
	document.querySelector("#under_connexion").style.display="block";
	document.querySelector("#on_connexion").style.display="none";
	} else {
	document.querySelector("#under_connexion").style.display="none";
	}
	}
</script> -->

	</body>
</html>