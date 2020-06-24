<?php
include('../config.php');
session_start();
// ------------- ประกาศจัดซื้อจัดจ้าง -------------------
        if (isset($_POST['results'])); {

            $res_topic = $_POST['res_topic'];
            $res_date = $_POST['res_date'];
        
            $file = $_FILES["res_file"];
        $name = time();
        move_uploaded_file($file["tmp_name"], "../uploads/uploads_results/" .$name.$file["name"]);
        
        $res_file=$name.$file["name"];
        
            $sql = "INSERT INTO results (res_topic,res_date,res_file)
            VALUES ('$res_topic','$res_date','$res_file')";
        
                        if ($conn->query($sql) === TRUE) {
                                echo "<script type='text/javascript'>";
                                echo "alert('บันทึกข้อมูลสำเร็จ');";
                                echo "window.location='../form/form_results.php';";
                                echo "</script>";
                                echo "<script>";
                        } 
                }

                ?>