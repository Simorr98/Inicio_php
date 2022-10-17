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

$insertar = "INSERT clientes (nombre) VALUES ('$minombre')";
//inserta el nombre que dicen en el formulario
mysqli_query($conexion, $insertar);

?>
</body>
</html>