<!DOCTYPE html>
<html lang="fr">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/style.css">
      <title>Exercice 6</title>
  </head>
  <body>
      <!-- container Bootstrap -->
      <div class="container-fluid">
          <!-- header -->
          <header>
            <div class="jumbotron jumbotron-fluid">
              <div class="container">
                <h1 class="display-3">Partie 5 - Exercice 6</h1>
                <p class="lead">Avec le tableau de l'exercice 5, afficher la valeur de l'index 59.</p>
              </div>
            </div>
          </header>
          <!-- main -->
          <main>
            <?php
              // On crée un tableau avec la méthode array
              $department = array(
                '59' => 'Nord', // On lie deux valeurs avec la flèche "=>" comme suit clef => valeur
                '62' => 'Pas-de-Calais', // puis on les sépare avec une virgule pour passer aux valeurs suivantes
                '80' => 'Somme',
                '60' => 'Oise',
                '02' => 'Aisne',
              );
              echo $department['59']; // On affiche la valeur de l'index 59 positionnant la array à la clé susmentionnée.
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
