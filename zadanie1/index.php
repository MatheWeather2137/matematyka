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
        <h1>POLE KOŁA O WPISANYM PROMIENIU</h1>
    </div>
    <div id="result-container">
    <?php
    //pole koła
    $r=$_GET["napis"];
    $pi= pi();
    $napis=$pi*$r*$r;
    echo $napis; 
    ?>
    </div>
</body>
</html>