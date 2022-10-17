<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulario</title>
</head>
<body>
<?php

$servidor = "localhost";
$usuario = "root";
$password = "";
$conexion = mysqli_connect($servidor,$usuario,$password);

if (!$conexion) {
    echo "La conexion ha fallado";
} else {
    $sql = "CREATE DATABASE usuarios";
    //comprobar que la sentecia se ha ejecutado
    if (mysqli_query($conexion, $sql)) {
        echo "BD creada";
    } else {
        echo "Error: " . mysqli_error($conexion);
    }

    mysqli_select_db($conexion,"usuarios");

    $sql2 = "CREATE TABLE clientes(nombre varchar(20))";
    //crea la tabla clientes
    if (mysqli_query($conexion, $sql2)) {
        echo "Tabla creada";
    } else {
        echo "Error: " . mysqli_error($conexion);
    }

}

?>
</body>
</html>