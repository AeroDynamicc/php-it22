<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Harjutused</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <h1>Harjutus3</h1>
    <form method="post" action="">
    <label for="alumine">Alumine alus: </label>
    <input type="number" step="any" id="alumine" name="alumine" required><br>

    <label for="ylemine">Ülemine alus: </label>
    <input type="number" step="any" id="ylemine" name="ylemine" required><br>

    <label for="korgus">Kõrgus: </label>
    <input type="number" step="any" id="korgus" name="korgus" required><br>

    <input type="submit" value="Arvuta">
</form>

<?php
//yl3
//Daniil Meijel
//01.02.24

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $alumine_alus = $_POST["alumine"];
  $ylemine_alus = $_POST["ylemine"];
  $korgus = $_POST["korgus"];

 
  $trapetsi_pindala = ($alumine_alus + $ylemine_alus) * $korgus / 2;


  $rombi_umbermoot = 4 * sqrt(pow(($alumine_alus / 2), 2) + pow($korgus, 2));

  echo "Trapetsi pindala on " . round($trapetsi_pindala, 1) . " ruutühikut.</br>";
  echo "Rombi ümbermõõt on " . round($rombi_umbermoot, 1) . " ühikut.</br>";
}




?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>










