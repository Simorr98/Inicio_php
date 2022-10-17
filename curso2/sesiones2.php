<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>

<body>
<?php

session_start();
$_SESSION['iniciada'] = true;
$_SESSION['nombre'] = "Simo";
$_SESSION['edad'] = 22;

echo "Identificador de la sesion: " . session_id();
echo "<br>";
echo "Nombre de la sesion: " . session_name();
echo "<br>";

echo "Nombre: " . $_SESSION['nombre'];
echo "<br>";
echo "Edad: " . $_SESSION['edad'];
echo "<br>";
echo "<a href='sesiones3.php'> Comprobar los valores en otra web </a>";
echo "<br>";
echo "<a href='sesiones4.php'> Finalizar la sesion </a>";

?>
</body>

</html>