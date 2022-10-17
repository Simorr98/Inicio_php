<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulario</title>
</head>
<body>
<?php
//Funciones de objetos
class Alumnos {
    private $nombre = null;
    private $apellidos = null;

    function getNombre() {
        return this -> nombre;
    }

    function getApellidos() {
        return this -> nombre;
    }

    function setNombre($nombre) {
        $this -> nombre = $nombre;
    }

    function setApellidos($apellidos) {
        $this -> apellidos = $apellidos;
    }

    function calcularLetras($nombre) {
        return strlen($this -> nombre);
    }
}

$alumno1 = new Alumnos();

$alumno1 -> setNombre("Simo");
$alumno1 -> setApellidos("Ramos");

$nombreAlumno1 = $alumno1 -> getNombre();
echo $nombreAlumno1;
echo "<br>";
$apellidoAlumno1 = $alumno1 -> getApellidos();
echo $apellidoAlumno1;
echo "<br>";
$letras = $alumno1 -> calcularLetras($nombreAlumno1);
echo $letras;
//mira si la clase existe
if (class_exists("Alumnos")) {
    echo "Clase: " . get_class($alumno1);
    echo "<br>";
}
//enseña las funciones de la classe alumnos
$metodosAlumno = get_class_methods("Alumnos");
var_dump($metodosAlumno);
//al ser los atributos privados no enseña nada
$propiedadAlumno = get_class_vars("Alumnos");
var_dump($propiedadAlumno);

?>
</body>
</html>