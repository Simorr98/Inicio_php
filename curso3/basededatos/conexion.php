<?php

$hostname = 'localhost';
$username = 'root';
$password = 'sistemes';
$bd = 'llista';

$conn = mysqli_connect($hostname, $username, $password, $bd);

print_r($conn);