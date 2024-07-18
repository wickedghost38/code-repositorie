<?php

$getal1 = 60;
$getal2 = 5;
$payable = $getal1 - $getal1 *(0.01*$getal2);

$tekst1 = ("de prijs is $getal1 euro");
$tekst2 = ("de kortings ppergentage is $getal2 procent");
$tekst3 = ("tebetalen $payable euro");
$title = ("Prijs en Geld");
?>

<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<title id="title">Opdracht 2</title>
</head>
<body>
    <h1><?php echo $title ?></h1>
<p> <?php echo $tekst1; ?></p>
<p> <?php echo $tekst2; ?></p>
<p> <?php echo $tekst3; ?></p>
</body>
</html>