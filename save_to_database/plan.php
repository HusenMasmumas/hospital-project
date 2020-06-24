<?php
include('../config.php');
session_start();
// ------------- ประกาศจัดซื้อจัดจ้าง -------------------
        if (isset($_POST['plan'])); {

            $pla_topic = $_POST['pla_topic'];
            $pla_date = $_POST['pla_date'];
        
            $file = $_FILES["pla_file"];
        $name = time();
        move_uploaded_file($file["tmp_name"], "../uploads/uploads_plan/" .$name.$file["name"]);
        
        $pla_file=$name.$file["name"];
        
            $sql = "INSERT INTO plan (pla_topic,pla_date,pla_file)
            VALUES ('$pla_topic','$pla_date','$pla_file')";
        
                        if ($conn->query($sql) === TRUE) {
                                echo "<script type='text/javascript'>";
                                echo "alert('บันทึกข้อมูลสำเร็จ');";
                                echo "window.location='../form/form_plan.php';";
                                echo "</script>";
                                echo "<script>";
                        } 
                }

                ?>