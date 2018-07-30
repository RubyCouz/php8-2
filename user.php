<?php
session_start();
 ?>
 <!DOCTYPE html>
 <html lang="fr" dir="ltr">
   <head>
     <meta charset="utf-8" />
     <title>User page</title>
   </head>
   <body>
     <p>
       Rebonjour <?= print_r($_SESSION['lastname'] . ' ' . $_SESSION['firstname'] .'!'); ?><br />
       Tu as toujours <?= print_r($_SESSION['age'] . ' ans?'); ?>
     </p>
   </body>
 </html>
