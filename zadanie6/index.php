<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl2.css">
    <title>Document</title>
</head>
<body>
    <div id="title">
        <h1>RESZTA Z DZIELENIA WPISANYCH LICZB</h1>
    </div>
    <div id="result-container">
    <?php
    //reszta z dzielenia
    $dzielna=$_GET["napis"];
    $dzielnik=$_GET["l1"];

    echo $dzielna % $dzielnik;
    ?>
    </div>
</body>
</html>