<?php
$severname = "localhost";
$username = "root";
$password = "";
$dbname = "blood";

$conn = new mysqli($severname,$username,$password,$dbname);

if ($conn->connect_error) {
    die("connect error ".$conn->connect_error);
}

$conn->query("SET NAMES UTF8");


?>