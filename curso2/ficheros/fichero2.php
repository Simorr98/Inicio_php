<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>

<body>
<?php

//Escribir ficheros
$miarchivo = fopen("archivo3.txt","a+");
//escribe dentro del archivo3.txt
fwrite($miarchivo,"Escribiendo dentro del fichero");
//por si queda algo suelto lo escribe
fflush($miarchivo);
//enseña la longitud del archivo
echo filesize("archivo3.txt");
//enseña informacion del archivo
$arrayinfo = stat("archivo3.txt");
var_dump($arrayinfo);

?>
</body>

</html>
