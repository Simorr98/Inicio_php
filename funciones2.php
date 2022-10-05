<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>

<body>
<?php
//Valor y referencia
$num1 = 4;

function miFuncion($num1) {
    $num1 = $num1 +2;
}

function otraFuncion(&$num1) {
    $num1 = $num1 +2;
}

miFuncion($num1);
echo $num1;
echo "<br>";

otraFuncion($num1);
echo $num1;
echo "<br>";

?>
</body>

</html>