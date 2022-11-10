<?php

echo "pagina 2";

print_r($_GET);

//comando header nos llevara a una pagina
header("location: pagina3.php?name=" . $_GET["name"]);