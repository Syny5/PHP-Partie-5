<!DOCTYPE html>
<html lang="fr">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/style.css">
      <title>Exercice 8</title>
  </head>
  <body>
      <!-- container Bootstrap -->
      <div class="container-fluid">
          <!-- header -->
          <header>
            <div class="jumbotron jumbotron-fluid">
              <div class="container">
                <h1 class="display-3">Partie 5 - Exercice 8</h1>
                <p class="lead">Avec le tableau de l'exercice 1 et une boucle, afficher toutes les valeurs de ce tableau.</p>
              </div>
            </div>
          </header>
          <!-- main -->
          <main>
            <?php
              // On crée un tableau avec la méthode array
              $months = array('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre');
              for ($num = 0; $num < 12; $num++){ // On crée une boucle (intialisation, condition, incrémentation)
            ?>
            <p>
              <?php
                  echo $months[$num]; // On affiche le tableau avec echo $nomArray[$nomLoop]
                }
              ?>
            </p>
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
