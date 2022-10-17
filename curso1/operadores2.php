<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>

<body>
<?php
//Operadores
$num1 = 5;
$num2 = 10;
$num3 = 5;
$valor1 = "5";

if ($num1 == $num2) {
    echo "Num1 y Num2 son iguales";
    echo "<br>";
}

if ($num1 == $num3) {
    echo "Num1 y Num3 son iguales";
    echo "<br>";
}

if ($num1 === $num3) {
    echo "Num1 y Num3 son identicos";
    echo "<br>";
}

if ($num1 !== $valor1) {
    echo "Num1 y Valor1 no son identicos";
    echo "<br>";
}

?>
</body>

</html>