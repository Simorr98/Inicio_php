<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulario</title>
</head>
<body>
<?php
var_dump($_FILES);
//Restricciones
$directorioSubida = "uploads/";
$max_file_size = "512000";
$extensionesValidas = array("jpg", "png", "gif");
//miramos si esta creada la imagen en la array _FILES, miramos imagen porque en el formulario le hemos puesto el id="imagen"
if (isset($_FILES['imagen'])){
    $errores = 0;
    $nombreArchivo = $_FILES['imagen']['name'];
    $filesize = $_FILES['imagen']['size'];
    $directorioTemp = $_FILES['imagen']['tmp_name'];
    $tipoArchivo = $_FILES['imagen']['type'];
    $arrayArchivo = pathinfo($nombreArchivo);
    var_dump($arrayArchivo);
    $extension = $arrayArchivo['extension'];
}
//Comprueba si la extension de la imagen es valida, de las cuales hemos metido en la variable extensionesValidas
if (!in_array($extension,$extensionesValidas)) {
    echo "Extension no valida";
    $errores = 1;
}

if ($filesize > $max_file_size) {
    echo "La imagen excede el tamaño maximo permitido";
    $errores = 1;
}
//si no hay errores lo que hace es subir la imagen al directorio de subida con el nombre del archivo
if ($errores == 0) {
    $nombreCompleto = $directorioSubida.$nombreArchivo;
    move_uploaded_file($directorioTemp, $nombreCompleto);
}

?>
</body>
</html>