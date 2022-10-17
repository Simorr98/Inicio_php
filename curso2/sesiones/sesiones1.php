<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>

<body>
<?php
//Sesiones
//indica el id de la sesion
session_id("22");
//enseña el nombre de la sesion
echo session_name();
//inicia la sesion
session_start();
//se guardan todas las varibles de una sesion
$_SESSION['iniciada'] = true;
$_SESSION['nombre'] = "Simo";

var_dump($_SESSION);
//Eliminamos la variable nombre
unset($_SESSION['nombre']);
if (isset($_SESSION['nombre']) == false) {
    echo "La variable de sesion nombre no existe";
}
//destruye la sesion pero no las variables
session_destroy();

?>
</body>

</html>