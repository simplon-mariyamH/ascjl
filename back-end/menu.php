<?php
if (!isset($_SESSION['mail'])){
?>
  <style>
  .demo-layout-waterfall .mdl-layout__header-row .mdl-navigation__link:last-of-type  {
    padding-right: 0;
  }
  @media screen and (max-width: 1024px){
.demo-layout-waterfall {
    display: flex;
}}
  .connexion {
    position: relative;
    width: 20%;
    height: 70%;
    background-color: #ce2c64;
    border: 1px solid grey;
    border-radius: 5%;
   /* opacity: 0.5;
    -webkit-opacity: 0.5;*/

  }
  .connexion a {
    text-align: center;
    position: relative;
    padding: 3%;
    text-decoration: none;
    color: black;
    top: -11%;
    font-size: 1.2em;
  }

  .connexion i.material-icons {
    text-align: center;
    position: relative;
    padding: 3%;
    text-decoration: none;
    color: black;
    top: 3%;
  }

div.connexion{
  text-align: center;
}

a {
  font-family: 'Julius Sans One';
}

.mdl-layout__header-row a {

  font-size: 1.5em;
}



  </style>

  <div id="haut" class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header mdl-layout__header--waterfall">
      <!-- Top row, always visible -->
      <div class="mdl-layout__header-row">
        <!-- Title -->
        <!-- <span class="mdl-layout-title" style="font-family:'Julius Sans One', sans-serif; font-size: 2em;"> -->
          ASCJL
        <!-- </span> -->
        <div class="mdl-layout-spacer"></div>
         
        <div class="connexion">
          <a href="index.php">Connexion</a>
            <i class="material-icons">lock_outline</i>
          
        </div>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable
                    mdl-textfield--floating-label mdl-textfield--align-right">
          <!--<label class="mdl-button mdl-js-button mdl-button--icon"
                 for="waterfall-exp">
            <i class="material-icons">search</i>
          </label>-->
          <div class="mdl-textfield__expandable-holder">
            <input class="mdl-textfield__input" type="text" name="sample"
                   id="waterfall-exp">
          </div>
        </div>
      </div>
      <!-- Bottom row, not visible on scroll -->
      <div class="mdl-layout__header-row">
        <div class="mdl-layout-spacer"></div>
        <!-- Navigation -->
        <nav class="mdl-navigation">

          <a class="mdl-navigation__link" href="index.php">Accueil</a>
          <a class="mdl-navigation__link" href="sejour.php">Séjour 8-16 ans</a>
          <a class="mdl-navigation__link" href="seminaire.php">Séminaire +17 ans</a>
          <!-- FAIRE FUSIONNER AVEC LE BADGE DE NOMBRE DE seminaire DANS LE PANIER ET REGLER CE NOMBRE<a class="mdl-navigation__link" href="">Panier</a>-->
          <!-- Number badge -->
          <!--<a class="mdl-navigation__link" href="panier.php"><span class="mdl-badge" data-badge="4">Panier</span></a>-->

          <a class="mdl-navigation__link" href="livredor.php">Livre d'or</a>
        </nav>
      </div>
    </header>
    <div class="mdl-layout__drawer">
      <span class="mdl-layout-title">Menu <!--<style type="text/css">
        span {
          text-align: left;
          margin-left: 53px;
        }
        </style>-->
      </span>
      <nav class="mdl-navigation">
        <a class="mdl-navigation__link" href="index.php">Accueil</a>
        <a class="mdl-navigation__link" href="index.php">Connexion</a>/<a class="mdl-navigation__link" href="inscription.php">Inscription</a><!-- disparait une fois connecter / déconnexion quand connecté -->
        <a class="mdl-navigation__link" href="sejour.php">Séjour 8-16 ans</a>
        <a class="mdl-navigation__link" href="seminaire.php">Séminaire +17 ans</a>
        <!--<a class="mdl-navigation__link" href="panier.php">Panier</a>-->
        <a class="mdl-navigation__link" href="">Livre d'or</a> 
        <a class="mdl-navigation__link" href="">Nous contacter</a>
      </nav>
    </div>
<?php 
}
else{
?>
   
  <style>
  .demo-layout-waterfall .mdl-layout__header-row .mdl-navigation__link:last-of-type  {
    padding-right: 0;
  }
  @media screen and (max-width: 1024px){
.demo-layout-waterfall {
    display: flex;
}}
  .connexion {
    position: relative;
    width: 20%;
    height: 70%;
    background-color: #ce2c64;
    margin-right: -3%;
    border: 1px solid grey;
    border-radius: 5%;
    /*opacity: 0.5;
    -webkit-opacity: 0.5;
*/
  }
  .connexion a {
    text-align: center;
    position: relative;
    padding: 3%;
    text-decoration: none;
    color: black;
    top: -11%;
    font-size: 1.2em;
  }

  .connexion i.material-icons {
    text-align: center;
    position: relative;
    padding: 3%;
    text-decoration: none;
    color: black;
    top: 3%;
  }

div.connexion{
  text-align: center;
}
a {
  font-family: 'Julius Sans One';
}

.mdl-layout__header-row a {

  font-size: 1.5em;
}

  </style>

  <div class="demo-layout-waterfall mdl-layout mdl-js-layout">
    <header class="mdl-layout__header mdl-layout__header--waterfall">
      <!-- Top row, always visible -->
      <div class="mdl-layout__header-row">
        <!-- Title -->
        <span class="mdl-layout-title" style="font-family:'Julius Sans One', sans-serif; font-size: 2em;">
          <em style="font-size: 2em; color:#cc004e; font-family: 'Rouge Script';">C</em>ooky<em style="font-size: 1.7em; color:#cc004e; font-family: 'Rouge Script';">H</em>am
        </span>
        <div class="mdl-layout-spacer"></div>
        
        <div class="connexion">
          <a href="deconnexion.php">Déconnexion</a>
            <i class="material-icons">lock_open</i>
          
        </div>
        
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable
                    mdl-textfield--floating-label mdl-textfield--align-right">
          <!--<label class="mdl-button mdl-js-button mdl-button--icon"
                 for="waterfall-exp">
            <i class="material-icons">search</i>
          </label>-->
          <div class="mdl-textfield__expandable-holder">
            <input class="mdl-textfield__input" type="text" name="sample"
                   id="waterfall-exp">
          </div>
        </div>
      </div>
      <!-- Bottom row, not visible on scroll -->
      <div class="mdl-layout__header-row">
        <div class="mdl-layout-spacer"></div>
        <!-- Navigation -->
        <nav class="mdl-navigation">

          <a class="mdl-navigation__link" href="index.php">Accueil</a>
          <a class="mdl-navigation__link" href="sejour.php">Séjour 8-16 ans</a>
          <a class="mdl-navigation__link" href="seminaire.php">Séminaire +17 ans</a>
          <a class="mdl-navigation__link" href="commande.php">Commander</a>
          <!-- FAIRE FUSIONNER AVEC LE BADGE DE NOMBRE DE seminaire DANS LE PANIER ET REGLER CE NOMBRE<a class="mdl-navigation__link" href="">Panier</a>-->
          <!-- Number badge -->
          <!-- <a class="mdl-navigation__link" href="panier.php"><span class="mdl-badge" data-badge="4">Panier</span></a> -->
          <a class="mdl-navigation__link" href="panier.php">Panier</a>

          <a class="mdl-navigation__link" href="livredor.php">Livre d'or</a>
        </nav>
      </div>
    </header>
    <div class="mdl-layout__drawer">
      <span class="mdl-layout-title">Menu <!--<style type="text/css">
        span {
          text-align: left;
          margin-left: 53px;
        }
        </style>-->
      </span>
      <nav class="mdl-navigation">
        <a class="mdl-navigation__link" href="index.php">Accueil</a>
        <a class="mdl-navigation__link" href="sejour.php">Séjour 8-16 ans</a>
        <a class="mdl-navigation__link" href="seminaire.php">Séminaire +17 ans</a>
        <a class="mdl-navigation__link" href="panier.php">Panier</a>
        <a class="mdl-navigation__link" href="commande.php">Commander</a>
        <a class="mdl-navigation__link" href="">Historique</a><!-- apparait une fois connecter--> 
        <a class="mdl-navigation__link" href="">Livre d'or</a> 
        <a class="mdl-navigation__link" href="">Contacter</a>
        <a class="mdl-navigation__link" href="deconnexion.php">Déconnexion</a>
      </nav>
    </div>
<?php
} ?>