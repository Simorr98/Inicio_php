<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>

<body>
<?php
$busqueda=$_GET["buscar"];
try {
    $base=new  PDO('mysql:host=localhost; dbname=prova','root', '');
    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $base->exec("SET CHARACTER SET utf8");
    $sql="SELECT nom,preu,quantitat,descripcio,imatge FROM prova WHERE nom = ?";
    $resultado=$base->prepare($sql);
    //Lo que le estamos diciendo es que nos ejecute la comanda sql que le hemos pasado, en este caso ara un select de los valores que sean igual a destornillador
    $resultado->execute(array($busqueda));
    while ($registro=$resultado->fetch(PDO::FETCH_ASSOC)) {
        echo "Nombre Articulo: " . $registro['nom'] . " Preu: " . $registro['preu'] . " Quantita: " . $registro['quantitat']
        . " Descripcio: " . $registro['descripcio'] . " Imatge: " . $registro['imatge'] . "<br>";
    }
    $resultado->closeCursor();
} catch (Exception $e) {
    die('Error: ' . $e->GetMessage());
}



?>
</body>

</html>