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
        <h1>ZAOKRĄGLENIE WPISANEJ LICZBY</h1>
    </div>
    <div id="result-container">
    <?php
    //zaokrąglenie do najbliższej liczby całkowitej
    $napis=$_GET["napis"];
    echo round($napis);
    ?>
    </div>
</body>
</html>