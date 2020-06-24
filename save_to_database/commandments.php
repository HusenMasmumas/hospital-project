<?php
include('../config.php');
session_start();
// ------------- ประกาศจัดซื้อจัดจ้าง -------------------
        if (isset($_POST['commandments'])); {

            $com_topic = $_POST['com_topic'];
            $com_date = $_POST['com_date'];
        
            $file = $_FILES["com_file"];
        $name = time();
        move_uploaded_file($file["tmp_name"], "../uploads/uploads_commandments/" .$name.$file["name"]);
        
        $com_file=$name.$file["name"];
        
            $sql = "INSERT INTO commandments (com_topic,com_date,com_file)
            VALUES ('$com_topic','$com_date','$com_file')";
        
                        if ($conn->query($sql) === TRUE) {
                                echo "<script type='text/javascript'>";
                                echo "alert('บันทึกข้อมูลสำเร็จ');";
                                echo "window.location='../form/form_commandments.php';";
                                echo "</script>";
                                echo "<script>";
                        } 
                }

                ?>