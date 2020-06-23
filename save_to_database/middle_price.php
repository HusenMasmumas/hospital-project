<?php
include('../config.php');
session_start();


if (isset($_POST['middle_price'])); {

    $mid_topic = $_POST['mid_topic'];
    $mid_date = $_POST['mid_date'];

    $file = $_FILES["mid_file"];
$name = time();
move_uploaded_file($file["tmp_name"], "../uploads/uploads_middle_price/" .$name.$file["name"]);

$mid_file=$name.$file["name"];

    $sql = "INSERT INTO middle_price (mid_topic,mid_date,mid_file)
    VALUES ('$mid_topic','$mid_date','$mid_file')";
//     $query = mysqli_query($conn,$sql);

                if ($conn->query($sql) === TRUE) {
                        echo "<script type='text/javascript'>";
                        echo "alert('บันทึกข้อมูลสำเร็จ');";
                        echo "window.location='../form/form_Middle_price.php';";
                        echo "</script>";
                        echo "<script>";
                } 
        }

 ?>