<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>

<body>
<?php
//if
$nota1 = 2;
$nota2 = 8;
$nota3 = 5;

if ($nota1 >= 5) {
    echo "Aprobado";
    echo "<br>";
}

if ($nota2 >=5):
    echo "Aprobado";
    echo "<br>";
endif;

if ($nota2 >= 5) {
    echo "Dentro del primer if";
    if ($nota1 >= 9) {
        echo "<br>";
        echo "Dentro del segundo if";
    }
}

?>
</body>

</html>