<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>

<body>
<?php
//for

for ($i=1;$i<=10;$i++){
    echo $i;
    echo "<br>";
}

for ($j=10;$j>=1;$j--){
    echo $j;
    echo "<br>";
}

for ($k=0;$k<=100;$k++){
    if ($k%2 == 0){
        echo $k;
        echo "<br>";
    }
}

$num = 10;

for ($l=0;$l<=10;$l++){
    echo $num . " x " . $l . " = " . $num * $l;
    echo "<br>";
}

$datos = array("uno" => 1, "dos" =>2);

foreach ($datos as $k => $v){
    echo "Valores [$k] => $v";
    echo "<br>";
}

?>
</body>

</html>