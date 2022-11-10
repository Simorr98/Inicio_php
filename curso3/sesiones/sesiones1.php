<?php 
//si no se inician las sesion la variable _SESSION no se va a llenar
session_start();
//iniciando el nombre de la sesion
$_SESSION['mi_sesion'] = "VALOR";
$_SESSION['mi_sesion2'] = "VALOR2";
//genera un numero aleatorio para identificar una sesion unica
session_id();
?>

<a href="sesiones2.php">Pruebas de Sesion</a>