<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
    if (isset($_POST['usuario'])) {
        if (!isempty($_POST['usuario'])) {
            $usuario = $_POST['usuario'];
            echo $usuario;
            echo "<br>";
        }
    }

    if (isset($_POST['password'])) {
        if (!isempty($_POST['password'])) {
            $password = $_POST['password'];
            echo password;
            echo "<br>";
        }
    }
?>
</form>
</body>
</html>