<?php
// Connect
$host="192.168.1.103:9606";
$username = "MYSQL_USER";
$password = "MYSQL_PASSWORD";
$datab = "u576316930_nupj";

$connect = new mysqli($host, $username, $password, $datab);
if ($connect->connect_error){
    die("Connection failed: " . $connect->connect_error);
}

$headtxt_web =  "Wellcome ";
$headtxt = "Hello .. Have a good day! ";
?>
