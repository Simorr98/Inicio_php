<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>

<body>
<?php
//Funciones

$numero1 = 5;
$numero2 = 10;

function sumar() {
    echo "Soy la funcion sumar";
}

sumar();

function sumarNumeros($n1,$n2) {
    echo $n1 + $n2;
}
echo "<br>";
sumarNumeros(5,5);
echo "<br>";

function sumarNumerosRetorno($n1,$n2) {
    return $n1 + $n2;
}

$resultado = sumarNumerosRetorno(5,10);
echo $resultado;

?>
</body>

</html>