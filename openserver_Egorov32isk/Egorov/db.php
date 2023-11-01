<?php

$servername = "Egorov";
$username = "root";
$password = "";
$dbname = "Egorov";

$conn = mysqli_connect($server, $username, $password, $dbname);

if(!$conn){
    die("Connection Failed". mysqli_connect_error());
}else{
   "Успешная регистрация";
}?>