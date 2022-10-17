<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>

<body>
<?php

//Redondear
echo (round(0.60));
echo "<br>";
echo (round(0.50));
echo "<br>";
echo (round(0.49));
echo "<br>";
echo (round(-4.40));
echo "<br>";
echo (round(-4.60));
echo "<br>";
//redondea a dos decimals
echo (round(4.96784,2));
echo "<br>";
//redondea hacia arriba
echo (round(1.50,0,PHP_ROUND_HALF_UP));
echo "<br>";
//redondea hacia abajo
echo (round(1.50,0,PHP_ROUND_HALF_DOWN));
echo "<br>";
//redondea hacia un numero par
echo (round(1.50,0,PHP_ROUND_HALF_EVEN));
echo "<br>";
//ceil redondea el siguiente entero hacia arriba
echo (ceil(0.60));
echo "<br>";
echo (ceil(5));
echo "<br>";
echo (ceil(5.1));
echo "<br>";
//floor redondea el siguiente entero hacia abajo
echo (floor(0.60));
echo "<br>";
echo (floor(5));
echo "<br>";
echo (floor(5.1));
echo "<br>";

?>
</body>

</html>
