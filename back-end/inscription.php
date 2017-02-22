<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.2.1/material.grey-pink.min.css" />
    <script defer src="https://code.getmdl.io/1.2.1/material.min.js"></script>
    <link rel="stylesheet" type="text/css" href="inscription.css">
    <link href="https://fonts.googleapis.com/css?family=Herr+Von+Muellerhoff|Julius+Sans+One|Pinyon+Script|Rouge+Script|Roboto" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="footer.css">
	<title>Inscription</title>
</head>
<body>
    <script type="text/javascript">
		function checkMdp() {
		  var mdp = document.getElementById("mdp").value;
		  var mdp2 = document.getElementById("mdp2").value;
		  if (mdp!=mdp2) {
		    var msg = document.createTextNode("Confirmation du mot de passe invalide");
		    document.getElementById("mdperror").appendChild(msg);
		    alert('Les mots de passe ne correspondent pas !');
		  }
		}
	</script>

	
    <main class="mdl-layout__content">
        <div class="page-content">
        <!-- Your content goes here -->
            <div style="padding-left: 20px;"><!--class="entete"-->
                <h1 style="font-family: 'Julius Sans One'; font-weight: bold;">Inscription</h1>
                
            </div>
            <div class="info"><h5 style="font-family: 'Julius Sans One';">
                Veuillez entrer les informations suivantes afin de vous inscrire
                <p style="font-family: 'Julius Sans One';">*les champs ayant un astérisque étant obligatoires</p>
                </h5></div>
            <div class="container">
                <div class="section_form">
                    <div class="subtitle">
                        <h4 style="font-family: 'Julius Sans One'; font-weight: bold;">Parents</h4>
                    </div>

                    <form method="post" action="cibleinscription.php">
                        <p>
                            <span class="civilite_class">Civilité* : </span>
                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                                <input type="radio" id="option-1" class="mdl-radio__button" name="civilite" value="Monsieur" checked>
                                <span class="mdl-radio__label">Monsieur</span>
                            </label>
                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-2">
                                <input type="radio" id="option-2" class="mdl-radio__button" name="civilite" value="Madame">
                                <span class="mdl-radio__label">Madame</span>
                            </label>
                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-3">
                                <input type="radio" id="option-3" class="mdl-radio__button" name="civilite" value="Mademoiselle">
                                <span class="mdl-radio__label">Mademoiselle</span>
                            </label>
                        </p>
                        
                        <p>
                        	<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            	<input class="mdl-textfield__input" type="text" name="nom" id="sample3">
                            	<label class="mdl-textfield__label" for="sample3">Nom* : </label>
                        	</div>
                        <!-- </p> -->

                        <!-- <p class="flex"> -->
                        	<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            	<input class="mdl-textfield__input" type="text" name="prenom" id="sample3">
                            	<label class="mdl-textfield__label" for="sample3">Prenom* : </label>
                        	</div>
                        </p>

                       

                        <p>
                        	<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            	<input class="mdl-textfield__input" type="password" name="mdp" id="mdp">
                            	<label class="mdl-textfield__label" for="mdp">Mot de passe* : </label>
                        	</div>
                        <!-- </p> -->

                        <!-- <p class="flex"> -->
                        	<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            	<input class="mdl-textfield__input" type="password" name="mdp2" id="mdp2" onblur="checkMdp()">
                            	<label class="mdl-textfield__label" for="mdp2">Confirmation mot de passe* : </label>
                        	</div>
                        </p>

                        <p><label id="mdperror"></label></p>

                         <p>
                        	<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            	<input class="mdl-textfield__input" type="text" name="mail" id="sample3">
                            	<label class="mdl-textfield__label" for="sample3">Mail* : </label>
                        	</div>
                        <!-- </p> -->
                       
                        <!-- Numeric Textfield with Floating Label -->
                        

                        <!-- <p class="flex"> -->
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="text" name="adresse" id="sample3">
                                <label class="mdl-textfield__label" for="sample3">Adresse* : </label>
                            </div>
                        </p>
                        <p>
                        	<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            	<input class="mdl-textfield__input" type="text" name="numero" pattern="-?[0-9]*(\.[0-9]+)?" id="sample4">
                            	<label class="mdl-textfield__label" for="sample4">Numéro portable* :</label>
                            	<span class="mdl-textfield__error">L'entrée n'est pas un numéro!</span>
                        	</div>
                        </p>
                        <button class="mdl-button mdl-js-button mdl-button--accent" type="submit" name="submit" style="font-size: 2em;">
							  Valider
							</button>
                </div>
                
            </div>
        </div>
</body>
</html>