<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>

<body>
<?php
//Arrays asociativos
$exploradores = array("explorador1" => "Chrome", "explorador2" => "Opera", "explorador3" => "Firefox");

$datos = array("nombre" => "Luis", "edad " => 21, "profesor" => true, 3 => 100);

echo "Explorador 3: " . $exploradores["explorador3"];
echo "<br>";
echo "Nombre: " . $datos["nombre"];
echo "<br>";
echo "3: " . $datos[3];
echo "<br>";
var_dump($exploradores);
echo "<br>";
var_dump($datos);

?>
</body>

</html>
