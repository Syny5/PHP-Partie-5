<!DOCTYPE html>
<html lang="fr">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/style.css">
      <title>Exercice 10</title>
  </head>
  <body>
      <!-- container Bootstrap -->
      <div class="container-fluid">
          <!-- header -->
          <header>
            <div class="jumbotron jumbotron-fluid">
              <div class="container">
                <h1 class="display-3">Partie 5 - Exercice 10</h1>
                <p class="lead">Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau ainsi que les clés associés.
                  Cela pourra être, par exemple, de la forme : "Le département" + nom du département + "a le numéro" + numéro du département</p>
              </div>
            </div>
          </header>
          <!-- main -->
          <main>
            <?php
              $department = array(
                '59' => 'Nord',
                '62' => 'Pas-de-Calais',
                '80' => 'Somme',
                '60' => 'Oise',
                '02' => 'Aisne',
              );
              foreach ($department as $index => $valeur){
                echo '<p>Le département ' . $valeur . ' a le numéro ' . $index . '</p>';
              }
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
