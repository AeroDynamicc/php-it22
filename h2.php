<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Harjutused</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <h1>Harjutus2</h1>
<?php

//yl2
//Daniil Meijel
//01.02.24


$arv1 = 14;
$arv2 = 3;

$liitmine = $arv1 + $arv2;
echo "$arv1 + $arv2 = $liitmine<br>";

$lahutamine = $arv1 - $arv2;
echo "$arv1 - $arv2 = $lahutamine<br>";

$korrutamine = $arv1 * $arv2;
echo "$arv1 * $arv2 = $korrutamine<br>";

$jagamine = $arv1 / $arv2;
echo "$arv1 / $arv2 = $jagamine<br>";

$jaak = $arv1 % $arv2;
echo "$arv1 % $arv2 = $jaak<br>";

$millimeetrid = 1500;
$sentimeetrid = $millimeetrid / 10;
$meetrid = $sentimeetrid / 100;

echo "Sentimeetrites: " . number_format($sentimeetrid, 2) . " cm<br>";
echo "Meetrites: " . number_format($meetrid, 2) . " m<br>";


$a = 3;
$b = 4;
$c = sqrt($a**2 + $b**2);
$ymbermoot = round($a + $b + $c);
$pindala = round(0.5 * $a * $b);

echo "Täisnurkse kolmnurga ümbermõõt on $ymbermoot ja pindala on $pindala.";






?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>










