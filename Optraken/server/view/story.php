<?php
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?= $title ?> </title>
    <link href="/CSS/style.css" rel="stylesheet">
</head>
<body class="layout">
    <div class="top">
        <nav class="verhaal">
            <a class="nav" href="/verhalen">Verhaal</a>
        </nav>
        <div class="content"> 
            <h1><?= $title ?></h1>
            <?php include $story ?>
        </div>
    </div>
    <div class="footer">
        <a class="nav verhaal" href="contact" >Contact</a>
    </div>
</body>
</html>