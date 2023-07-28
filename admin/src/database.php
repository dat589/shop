<?php
$localhost = "localhost";
$username = "root";
$password = "";
$database = "qlbh";

$conn = new mysqli($localhost,$username,$password,$database);
$conn->query("SET character_set_results = 'utf8'");

if($conn->connect_errno){
    die("Connection error: " . $conn->connect_error);
}
return $conn;