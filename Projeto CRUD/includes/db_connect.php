<?php

$servername = "localhost";
$username = "root";
$password = "";
$db_name = "dbsite";

$connect = mysqli_connect($servername,$username, $password, $db_name);

if (mysqli_connect_error()) {
    echo "erro na conexão: ".mysqli_connect_error(); 
}