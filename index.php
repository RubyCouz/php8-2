<?php
session_start(); //démarage de session
//céclaration des variablesde session
$_SESSION['lastname'] = 'Cousin Ruby';
$_SESSION['firstname'] ='Cédric';
$_SESSION['age'] = '34';
 ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 2</title>
  </head>
  <body>
    <p>
      <a href="user.php">Cliquez ici!!</a>
    </p>
  </body>
</html>
