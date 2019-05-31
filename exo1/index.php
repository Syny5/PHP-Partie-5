<!DOCTYPE html>
<html lang="fr">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/style.css">
      <title>Exercice 1</title>
  </head>
  <body>
      <!-- container Bootstrap -->
      <div class="container-fluid">
          <!-- header -->
          <header>
            <div class="jumbotron jumbotron-fluid">
              <div class="container">
                <h1 class="display-3">Partie 5 - Exercice 1</h1>
                <p class="lead">Créer un tableau months et l'initialiser avec les valeurs suivantes :</p>
                <ul>
                  <li>janvier</li>
                  <li>février</li>
                  <li>mars</li>
                  <li>avril</li>
                  <li>mai</li>
                  <li>juin</li>
                  <li>juillet</li>
                  <li>aout</li>
                  <li>septembre</li>
                  <li>octobre</li>
                  <li>novembre</li>
                  <li>décembre</li>
                </ul>
              </div>
            </div>
          </header>
          <!-- main -->
          <main>
            <?php
              $months = array('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre');
             ?>
          </main>
          <!-- footer -->
          <footer>

          </footer>
      </div>
      <!-- scripts JQuery, Popper, Angular et Bootstrap-->
      <script src="assets/js/jquery-3.4.0.min.js"></script>
      <script src="assets/js/popper.min.js"></script>
      <script src="assets/js/bootstrap.min.js"></script>
      <!-- mon script principal -->
      <script src="assets/js/main.js"></script>
  </body>
</html>
