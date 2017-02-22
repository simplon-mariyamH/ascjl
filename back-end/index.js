<script type="text/javascript">
  // Mon code Javascript
	document.querySelector("#on_connexion").onclick = function() {
	if (window.getComputedStyle(document.querySelector("#under_connexion")).display=='none'){
	document.querySelector("#under_connexion").style.display="block";
	document.querySelector("#on_connexion").style.display="none";
	} else {
	document.querySelector("#under_connexion").style.display="none";
	}
	}

	document.querySelector("#hors_connexion").onclick = function() {
	if (window.getComputedStyle(document.querySelector("#en_connexion")).display=='none'){
	document.querySelector("#en_connexion").style.display="block";
	document.querySelector("#hors_connexion").style.display="none";
	} else {
	document.querySelector("#en_connexion").style.display="none";
	}
	}
</script>