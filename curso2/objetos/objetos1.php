<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulario</title>
</head>
<body>
<?php
//Objetos
class PrimeraClase {
    public $nombre = "Simo";
    public function mostrarNombre() {
        //funcion para enseñar el atributo nombre
        echo $this -> nombre;
    }
}

$instanciar = new PrimeraClase();
//las dos muestran el nombre, una llama al atributo y la otra llama a la funcion
echo $instanciar -> nombre;
echo "<br>";
$instanciar ->mostrarNombre();

?>
</body>
</html>