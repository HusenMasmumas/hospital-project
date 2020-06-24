<?php
include('../config.php');
session_start();
// ------------- ประกาศจัดซื้อจัดจ้าง -------------------
        if (isset($_POST['rule'])); {

            $rul_topic = $_POST['rul_topic'];
            $rul_date = $_POST['rul_date'];
        
            $file = $_FILES["rul_file"];
        $name = time();
        move_uploaded_file($file["tmp_name"], "../uploads/uploads_rule/" .$name.$file["name"]);
        
        $rul_file=$name.$file["name"];
        
            $sql = "INSERT INTO rule (rul_topic,rul_date,rul_file)
            VALUES ('$rul_topic','$rul_date','$rul_file')";
        
                        if ($conn->query($sql) === TRUE) {
                                echo "<script type='text/javascript'>";
                                echo "alert('บันทึกข้อมูลสำเร็จ');";
                                echo "window.location='../form/form_rule.php';";
                                echo "</script>";
                                echo "<script>";
                        } 
                }

                ?>