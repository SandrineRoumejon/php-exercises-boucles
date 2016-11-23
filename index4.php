<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>exo4.php</title>
  </head>
  <body>
  <?php
$variable1 = 1;
while ($variable1 <= 10) {
        echo $variable1."<br />";
        $moitie = $variable1 / 2;
        $variable1 += $moitie;
}

   ?>
  </body>
</html>
