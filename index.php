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
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" hrefœ="assetes/css/style.css">
</head>
<body>
  <a href="user.php"type="button" class="btn btn-primary btn-lg btn-block btn-info">Cliquez ici!!</a>


  <script src="assets/js/jquery-3.3.1.min.js" charset="utf-8"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js" charset="utf-8"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" charset="utf-8"></script>
  <script src="assets/js/script.js" charset="utf-8"></script>
</body>
</html>
