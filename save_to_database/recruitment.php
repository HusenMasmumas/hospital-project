<?php
include('../config.php');
session_start();
// ------------- ประกาศจัดซื้อจัดจ้าง -------------------
        if (isset($_POST['recruitment'])); {

            $rec_topic = $_POST['rec_topic'];
            $rec_date = $_POST['rec_date'];
        
            $file = $_FILES["rec_file"];
        $name = time();
        move_uploaded_file($file["tmp_name"], "../uploads/uploads_recruitment/" .$name.$file["name"]);
        
        $rec_file=$name.$file["name"];
        
            $sql = "INSERT INTO recruitment (rec_topic,rec_date,rec_file)
            VALUES ('$rec_topic','$rec_date','$rec_file')";
        
                        if ($conn->query($sql) === TRUE) {
                                echo "<script type='text/javascript'>";
                                echo "alert('บันทึกข้อมูลสำเร็จ');";
                                echo "window.location='../form/form_recruitment.php';";
                                echo "</script>";
                                echo "<script>";
                        } 
                }

                ?>