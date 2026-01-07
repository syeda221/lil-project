<?php
$host = "localhost";
$username  = "root";
$password = "";
$db  = "store";
$conn = mysqli_connect($host, $username, $password, $db);
if(! $conn){
    die("connection error]".mysqli_connect_error());
}
?>