<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>

<body>
<?php
session_start();

if (isset($_SESSION['iniciada']) == true) {
    echo "Identificador de la sesion: " . session_id();
    echo "<br>";
    echo "Nombre de la sesion: " . session_name();
    echo "<br>";
    echo "Nombre: " . $_SESSION['nombre'];
    echo "<br>";
    echo "Edad: " . $_SESSION['edad'];
    echo "<br>";
} else {
    echo "No se ha definido la sesion";
}

echo "<a href='sesiones2.php'> Volver a la web principal </a>";

?>
</body>

</html>