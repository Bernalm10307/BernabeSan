<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$cantidad = 1500;

$billetes_500 = floor($cantidad / 500);
$billetes_200 = floor(($cantidad % 500) / 200);
$billetes_100 = floor((($cantidad % 500) % 200) / 100);
$billetes_50 = floor(((($cantidad % 500) % 200) % 100) / 50);
$billetes_20 = floor((((($cantidad % 500) % 200) % 100) % 50) / 20);

echo "Para devolver $cantidad pesos necesitas:\n";
echo "$billetes_500 billetes de 500 \n";
echo "$billetes_200 billetes de 200 \n";
echo "$billetes_100 billetes de 100 \n";
echo "$billetes_50 billetes de 50 \n";
echo "$billetes_20 billetes de 20 \n";

?>
</body>
</html>