<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulario</title>
</head>
<body>
<?php
//nos enseña las propiedades del array _FILES
var_dump($_FILES);
//deja la imagen de forma temporal en este directorio
$directorio = ini_get('upload_tmp_dir');
echo $directorio;
//accede al array _FILES imagen name y  al tmp_name que es donde esta la imagen que queremos subir
$directorioTemp = $_FILES['imagen']['tmp_name'];
move_uploaded_file($directorioTemp, $_FILES['imagen']['name']);

?>
</body>
</html>