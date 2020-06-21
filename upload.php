<?php
$file = $_FILES["file"];
$name = time();
move_uploaded_file($file["tmp_name"], "uploads/" .$name.$file["name"]);

header("Location: index1.php");
// namefile
// echo $name.$file["name"];