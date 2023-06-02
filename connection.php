<?php 

$host = "localhost";
$dbuser = "root";
$dbPwd = "";
$dbname = "pickshop";

$conn = mysqli_connect($host,$dbuser,$dbPwd,$dbname);

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

