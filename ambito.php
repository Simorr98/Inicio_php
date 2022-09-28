<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>

<body>
<?php
//Ámbito
$numero = 22;

function prueba()
{
    //palabra global sirve para que se pueda usar una variable fuera de la funcion
    global $numero;
    echo $numero;
}

prueba();
?>
</body>

</html>
