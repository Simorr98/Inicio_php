<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>

<body>
<?php
//directorios
//enseña la ruta donde se encuentre el fichero
echo getcwd();
//genera un array asociativo
$directorio = scandir(getcwd());
var_dump($directorio);
//chdir cambia de directorio
chdir('../');
echo getcwd();

?>
</body>

</html>