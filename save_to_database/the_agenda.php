<?php
include('../config.php');
session_start();
// ------------- ประกาศจัดซื้อจัดจ้าง -------------------
        if (isset($_POST['the_agenda'])); {

            $the_topic = $_POST['the_topic'];
            $the_date = $_POST['the_date'];
        
            $file = $_FILES["the_file"];
        $name = time();
        move_uploaded_file($file["tmp_name"], "../uploads/uploads_the_agenda/" .$name.$file["name"]);
        
        $the_file=$name.$file["name"];
        
            $sql = "INSERT INTO the_agenda (the_topic,the_date,the_file)
            VALUES ('$the_topic','$the_date','$the_file')";
        
                        if ($conn->query($sql) === TRUE) {
                                echo "<script type='text/javascript'>";
                                echo "alert('บันทึกข้อมูลสำเร็จ');";
                                echo "window.location='../form/form_the_agenda.php';";
                                echo "</script>";
                                echo "<script>";
                        } 
                }

                ?>