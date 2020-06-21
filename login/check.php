<?php

include('../config.php');
session_start();
$Email = $_REQUEST['email'];
$passwd = $_REQUEST['pass'];

$sql = "SELECT * FROM user where us_email = '$Email' and us_pass='$passwd'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
        
        $_SESSION["us_email"] = $Email;
        $_SESSION["us-pass"] = $passwd;
     	echo "<script type='text/javascript'>";
		echo "alert('ยินดีตอนรับเข้าสู่ระบบ');";
		echo "window.location='../index.php';";
		echo "</script>";
		echo "<script>";
    }
} else {
	 echo "<script>";
     echo "alert(\" user หรือ  password ไม่ถูกต้อง\");"; 
     echo "window.history.back()";
     echo "</script>";
    //echo "0 results";
}

 ?>