<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>

<body>
<?php

//Matematicas
$nota = 7.34;

//funciones para comprobar si es un entero o un decimal
if (is_int($nota)) {
    echo "Nota es un entero";
} elseif (is_float($nota)) {
    echo "Nota es un decimal";
}

echo "<br>";
//añade comas entre los miles
echo number_format("1000000");
echo "<br>";
//añade dos decimales
echo number_format("1000000",2);
echo "<br>";
//separa los decimales con , y los miles con puntos
echo number_format("1000000",2,",",".");
echo "<br>";

?>
</body>

</html>
