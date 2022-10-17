<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>

<body>
<?php
$miarchivo = fopen("archivo1.txt", "r+");
if ($miarchivo == false) {
    echo "error al abrir el fichero";
} else {
    $contenido = fread(~$miarchivo, filesize("archivo1.txt"));
    echo $contenido;
}

$miarchivo2 = fopen("archivo3.txt", "w");
$miarchivo3 = fopen("archivo4.txt", "w");

rewind($miarchivo);
//primera linea
echo fgets($miarchivo) ;
//primer caracter con un while muestra todo el archivo
echo fgetc($miarchivo);
//vuelca todas la lineas del fichero
$todo = file_get_contents($miarchivo);
//mete el fichero en un array
$arraya = file($miarchivo);
var_dump($arraya);
?>
</body>

</html>