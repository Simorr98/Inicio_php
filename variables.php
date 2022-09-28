<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>

<body>
    <?php
        //variables
        $edad = 33;

        $estatura = 1.24;
        $nombre = "Simo";
        $apellido = "Ramos";
        $profesor = false;

        echo "Me llamo $nombre <br>";
        echo "Tengo $edad años <br>";
        //si es falso no sale nada, a menos que pongas json_encode
        echo json_encode($profesor);
    ?>
</body>

</html>
