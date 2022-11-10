<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form method=post action="get_post.php" enctype="multipart/form-data">
        Nombre: <input type="text" name="usuario">
        <br>
        Fichero: <input type="file" name="fichero">
        <br>
        <input type="Submit" name="enviar" value="Enviar">
    </form>
</body>
</html>