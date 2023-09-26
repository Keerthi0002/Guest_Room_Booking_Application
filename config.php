<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "bluebirdhotel";

//$conn = mysqli_connect($server,$username,$password,$database)

$conn = mysqli_connect($server,$username,$password,$database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  //echo "Connected successfully";
?>