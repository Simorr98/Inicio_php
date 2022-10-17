<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>

<body>
<?php
//reanuda la anterior sesion
session_start();
//las variables estan ahi hasta que no se cierra el navegador
if (isset($_SESSION['iniciada']) == true) {
    //destruye todas las variables
    session_unset();
    //destruye la sesion
    session_destroy();
} else {
    echo "No se ha definido la sesion";
}

echo "<a href='sesiones2.php'> Volver a la web principal </a>";

?>
</body>

</html>