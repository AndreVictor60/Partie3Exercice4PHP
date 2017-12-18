<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Partie 3 Exercice 4</title>
  </head>
  <body>
    <?php
    $number=1;
    $result = $number / 2;
    while(($number + $result) <= 10){
      $result = $number / 2;
      $number = $number + $result;
      echo $number;
      ?>
      <br />
      <?php
    }
     ?>

  </body>
</html>
