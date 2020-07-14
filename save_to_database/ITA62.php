<?php
include('../config.php');
session_start();
// ------------- ประกาศจัดซื้อจัดจ้าง -------------------
        if (isset($_POST['ITA62'])); {

            $ITA62_topic = $_POST['ITA62_topic'];
            $ITA62_date = $_POST['ITA62_date'];
        
            $file = $_FILES["ITA62_file"];
        $name = time();
        move_uploaded_file($file["tmp_name"], "../uploads/uploads_ITA62/" .$name.$file["name"]);
        
        $ITA62_file=$name.$file["name"];
        
            $sql = "INSERT INTO ita62 (ITA62_topic,ITA62_date,ITA62_file)
            VALUES ('$ITA62_topic','$ITA62_date','$ITA62_file')";
        
                        if ($conn->query($sql) === TRUE) {
                                echo "<script type='text/javascript'>";
                                echo "alert('บันทึกข้อมูลสำเร็จ');";
                                echo "window.location='../form/form_ITA62.php';";
                                echo "</script>";
                                echo "<script>";
                        } 
                }

                ?>