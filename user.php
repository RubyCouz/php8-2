<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>User page</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

  <div class="info">
  <div class="card border-primary mb-3" style="max-width: 18rem;">
    <div class="card-header">Salutation</div>
    <div class="card-body text-primary">
      <h5 class="card-title">HELLO</h5>
      <p class="card-text">
        Re-bonjour <?= print_r($_SESSION['lastname'] . ' ' . $_SESSION['firstname'] .'!'); ?><br />
        Tu as toujours <?= print_r($_SESSION['age'] . ' ans?'); ?>
      </p>
    </div>
  </div>
  </div



  <script src="assets/js/jquery-3.3.1.min.js" charset="utf-8"></script>
  <script src="assets/js/script.js" charset="utf-8"></script>
</body>
</html>
