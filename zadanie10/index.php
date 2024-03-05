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
        <h1>NAJMNIEJSZA LICZBA Z WPISANYCH</h1>
    </div>
    <div id="result-container">
    <?php
    //najmiejsza liczba
    $napis=$_GET["napis"];
    $l1=$_GET["l1"];
    $l2=$_GET["l2"];

    echo min($napis,$l1,$l2);
    ?>
    </div>
</body>
</html>