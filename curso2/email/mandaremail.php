<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulario</title>
</head>
<body>
<?php

$to = "simoramos2898@gmail.com";

$subject = "Email de confirmacion";

$message = "Confirma acciendo click en el siguiente enlace";

$from = "administrator@dominio.com";
//añade una cabezera al mail
$headers = "From: $from";

mail($to, $subject, $message, $headers);

echo "Mail enviado";

?>
</body>
</html>