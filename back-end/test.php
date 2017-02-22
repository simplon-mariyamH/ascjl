<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="test.css">
    <title></title>
</head>
<body>
 <!--  <div class="connexion"> -->
            <button id="Bouton" >Connexion<!-- <i class="material-icons element">lock_outline</i> --></button> 
                 
          <div id="under_connexion">
            <form method="post" action="cibleconnexion.php">
                        <p><input type="text" name="mail" placeholder="Identifiant" /></p>
                        <p><input type="password" name="mdp" placeholder="Mot de passe" /></p>

                        <p><input type="submit" name="submit" value="Valider" class="btn-login"/></p> 
                    </form>
          </div>

<script>
                document.querySelector("#Bouton").onclick = function() {
                if (window.getComputedStyle(document.querySelector("#under_connexion")).display=='none'){
                document.querySelector("#under_connexion").style.display="block";
                document.querySelector("#Bouton").style.display="none";
                } else {
                document.querySelector("#under_connexion").style.display="none";
                }
                }
              </script>

<!-- <button id="Bouton">Press me !</button>
<div id="tonDiv">Hello !</div>
   
<script>
document.querySelector("#Bouton").onclick = function() {
if (window.getComputedStyle(document.querySelector('#tonDiv')).display=='none'){
document.querySelector("#tonDiv").style.display="block";
document.querySelector("#Bouton").style.display="none";
} else {
document.querySelector("#tonDiv").style.display="none";
}
}
</script> -->
</body>
</html>