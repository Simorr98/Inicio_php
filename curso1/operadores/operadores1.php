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
$num3 = 0;

echo $num1 + $num2;
echo "<br>";
echo $num1 . " x " . $num2 . " = " . $num1 * $num2;
echo "<br>";
echo $num2 . " / " . $num1 . " = " . $num2 % $num1;
echo "<br>";
echo $num1 . " elevado a " . $num2 . " = " . $num1 ** $num2;

$num3 = $num1;
echo "<br>";
echo $num3;
echo "<br>";
echo $num1 . " += " . $num2 . " = > " . $num1+=$num2;
echo "<br>";
echo $num1 . " *= " . $num2 . " = > " . $num1*=$num2;

?>
</body>

</html>