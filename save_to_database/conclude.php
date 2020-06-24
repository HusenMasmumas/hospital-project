<?php
include('../config.php');
session_start();
// ------------- ประกาศจัดซื้อจัดจ้าง -------------------
        if (isset($_POST['conclude'])); {

            $con_topic = $_POST['con_topic'];
            $con_date = $_POST['con_date'];
        
            $file = $_FILES["con_file"];
        $name = time();
        move_uploaded_file($file["tmp_name"], "../uploads/uploads_conclude/" .$name.$file["name"]);
        
        $con_file=$name.$file["name"];
        
            $sql = "INSERT INTO conclude (con_topic,con_date,con_file)
            VALUES ('$con_topic','$con_date','$con_file')";
        
                        if ($conn->query($sql) === TRUE) {
                                echo "<script type='text/javascript'>";
                                echo "alert('บันทึกข้อมูลสำเร็จ');";
                                echo "window.location='../form/form_conclude.php';";
                                echo "</script>";
                                echo "<script>";
                        } 
                }

                ?>