<?php
    if (isset($_GET['aceptar'])) {
        $caducidad = time() + (60*60*24*365);
        setcookie('micookie','1',$caducidad);
    }
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>

<body>
<?php
//comprueba si la cookie es aceptada o creada, si no es aceptada o creada vuelve a enseñar el mensaje
if (!isset($_GET['aceptar']) && !isset($_COOKIE['micookie'])) {

}
?>
<h2>Cookies</h2>
<p>Debes aceptar las cookies para poder seguir navegando</p>
<a href="?aceptar=1">Aceptar</a>

</body>

</html>