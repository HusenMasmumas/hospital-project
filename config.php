<?php
$host = "localhost";
$username = "root";
$password = "";
$db = "pana_hospital";

$conn = new mysqli($host, $username, $password, $db) or die ('Connect Failed');
$conn->set_charset("utf8");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else {
  //echo "successful <br>";
}
?>