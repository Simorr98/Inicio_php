<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulario</title>
</head>
<body>
<?php
$minombre = $_GET["nombre"];

$servidor = "localhost";
$usuario = "root";
$password = "";
$conexion = mysqli_connect($servidor,$usuario,$password) or die("Error de conexion");

mysqli_select_db($conexion, "usuarios");

$consultar = "SELECT nombre FROM clientes";

$registros = mysqli_query($conexion,$consultar);

while($registro = mysqli_fetch_row($registros)) {
    //el 0 es la posicion del campo dentro de la tabla, si tuviese dni seria el 1
    echo "Nombre: " . $registro[0];
    echo "<br>";
    if ($registro[0] == $minombre) {
        $encontrado = true;
    } else {
        $encontrado = false;
    }
}

if ($encontrado) {
    echo $minombre . " ha sido encontrado en la BD";
} else {
    echo $minombre . " no ha sido encontrado en la BD";
}

?>
</body>
</html>