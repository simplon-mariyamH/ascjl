<?php
if (!isset($_SESSION['mail'])){
?>

<!-- Always shows a header, even in smaller screens. -->
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
      <header class="mdl-layout__header mdl-layout__header--waterfall">
        <div class="mdl-layout__header-row">
          <!-- Title -->
          <span class="mdl-layout-title">ASCJL</span>
          <span id="logo"></span>
          <!-- Add spacer, to align navigation to the right -->
          <div class="mdl-layout-spacer"></div>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable
                    mdl-textfield--floating-label mdl-textfield--align-right">
          <div class="mdl-textfield__expandable-holder">
            <input class="mdl-textfield__input" type="text" name="sample"
                   id="waterfall-exp">
          </div>
        </div>
      </div>
      <!-- Bottom row, not visible on scroll -->
      <div class="mdl-layout__header-row">
        <div class="mdl-layout-spacer"></div>
          <!-- Navigation. We hide it in small screens. -->
          <nav class="mdl-navigation mdl-layout--large-screen-only">
            <a class="mdl-navigation__link" href="index.php">Accueil</a>
              <a class="mdl-navigation__link" href="sejour.php">Séjour 8-16 ans</a>
              <a class="mdl-navigation__link" href="seminaire.php">Séminaire +17 ans</a>
              <a class="mdl-navigation__link" href="livredor.php">Livre d'or</a>  
              <a class="mdl-navigation__link" href="don.php">Don</a>   
            </nav>
        </div>
      </header>
      <div class="mdl-layout__drawer">
        <span class="mdl-layout-title">ASCJL</span>
        <nav class="mdl-navigation">
          <a class="mdl-navigation__link" href="index.php">Accueil</a>
            <a class="mdl-navigation__link" href="sejour.php">Séjour 8-16 ans</a>
            <a class="mdl-navigation__link" href="seminaire.php">Séminaire +17 ans</a>
            <a class="mdl-navigation__link" href="livredor.php">Livre d'or</a>
            <a class="mdl-navigation__link" href="don.php">Don</a>  
        </nav>
      </div>
      <main class="mdl-layout__content">
        <div class="page-content"><!-- Your content goes here -->
<?php 
}
else{
?>
<!-- Always shows a header, even in smaller screens. -->
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
      <header class="mdl-layout__header mdl-layout__header--waterfall">
        <div class="mdl-layout__header-row">
          <!-- Title -->
          <span class="mdl-layout-title">ASCJL</span>
          <span id="logo"></span>
          <!-- Add spacer, to align navigation to the right -->
          <div class="mdl-layout-spacer"></div>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable
                    mdl-textfield--floating-label mdl-textfield--align-right">
          <div class="mdl-textfield__expandable-holder">
            <input class="mdl-textfield__input" type="text" name="sample"
                   id="waterfall-exp">
          </div>
        </div>
      </div>
      <!-- Bottom row, not visible on scroll -->
      <div class="mdl-layout__header-row">
        <div class="mdl-layout-spacer"></div>
          <!-- Navigation. We hide it in small screens. -->
          <nav class="mdl-navigation mdl-layout--large-screen-only">
            <a class="mdl-navigation__link" href="index.php">Accueil</a>
              <a class="mdl-navigation__link" href="sejour.php">Séjour 8-16 ans</a>
              <a class="mdl-navigation__link" href="seminaire.php">Séminaire +17 ans</a>
              <a class="mdl-navigation__link" href="livredor.php">Livre d'or</a>  
              <a class="mdl-navigation__link" href="index.php">Don</a>   
            </nav>
        </div>
      </header>
      <div class="mdl-layout__drawer">
        <span class="mdl-layout-title">ASCJL</span>
        <nav class="mdl-navigation">
          <a class="mdl-navigation__link" href="index.php">Accueil</a>
            <a class="mdl-navigation__link" href="sejour.php">Séjour 8-16 ans</a>
            <a class="mdl-navigation__link" href="seminaire.php">Séminaire +17 ans</a>
            <a class="mdl-navigation__link" href="livredor.php">Livre d'or</a>
            <a class="mdl-navigation__link" href="index.php">Don</a>  
        </nav>
      </div>
      <main class="mdl-layout__content">
        <div class="page-content"><!-- Your content goes here -->   
  
<?php
} ?>