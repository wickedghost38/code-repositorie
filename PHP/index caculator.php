<?php

$getal1 = $_GET['g1'];
$getal2 = $_GET['g2'];

$som = $getal1 + $getal2;
$verschil = $getal1 - $getal2;
$product = $getal1 * $getal2;

if($getal2 == 0){
    $teskt9 =("het tweede getal kan niet nul zijn");
}
else {
    $quotient = $getal1 / $getal2;
    $rest = $getal1 % $getal2;
    $tekst4 =("quotient = $quotient");
    $tekst5 =("rest = $rest");
}


$tekst7 =("getal 1 = $getal1");
$tekst8 =("getal 2 = $getal2");
$tekst1 =("som = $som");
$tekst2 =("verschil = $verschil");
$tekst3 =("product = $product");
$tekst6 =("Rekenen met Input(beveiliging)");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title id="title">Opdracht 5</title>
</head>
<body>
    <h1><?php echo $tekst6 ?></h1>
    <p> <?php echo $tekst7 ?> </p>
    <p> <?php echo $tekst8 ?> </p>
    <p> <?php echo $tekst1 ?> </p>
    <p> <?php echo $tekst2 ?> </p>
    <p> <?php echo $tekst3 ?> </p>

    <?php if($getal2 == 0){ ?>
    <p>  <?php echo $teskt9?>  </p>
    <?php } else {  ?>
    <p> <?php echo $tekst4 ?> </p>
    <p> <?php echo $tekst5 ?> </p>
        <?php } ?>
</body>
</html>