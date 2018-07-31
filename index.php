<!DOCTYPE html>
<html lang="pl" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Temperature Converter</title>
</head>
<body>
  <div id="container">
    <form action= "temperature.php" method="get">
      <input type="number" name="celsjusz" placeholder="Skala Celsjusza">
      <input type="number" name="farenheit" placeholder="Skala Farenheita">
      <input type="number" name="kelwin" placeholder="Skala Kelwina">
      <input type="submit" name="check" value="Sprawdź">
    </div>

    <?php
    if (isset($_GET["check"])){
      converter();
    }

    ?>
  </body>
  </html>
