<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>

<body>
<?php
//Creando cookies
//creamos una cookies que no expira
setcookie("noexpira",1);
//creamos una cookie que expiras a los 20 segundos, time() es la hora actual
setcookie("micookies",2,time() + 20);
//define el idioma
setcookie("idioma","esp");
//compruba si tu idioma es español
if ($_COOKIE['idioma'] == "esp") {
    echo "Tu idioma es español";
}
//eliminar una cookie
//desconfigura la cookie pero sigue estando alli
unset($_COOKIE['noexpira']);
//elimina la cookie
setcookie("noexpira","", time() - 1);

?>
</body>

</html>