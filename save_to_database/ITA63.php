<?php
include('../config.php');
session_start();
// ------------- ประกาศจัดซื้อจัดจ้าง -------------------
        if (isset($_POST['ITA63'])); {

            $ITA63_topic = $_POST['ITA63_topic'];
            $ITA63_date = $_POST['ITA63_date'];
        
            $file = $_FILES["ITA63_file"];
        $name = time();
        move_uploaded_file($file["tmp_name"], "../uploads/uploads_ITA63/" .$name.$file["name"]);
        
        $ITA63_file=$name.$file["name"];
        
            $sql = "INSERT INTO ita63 (ITA63_topic,ITA63_date,ITA63_file)
            VALUES ('$ITA63_topic','$ITA63_date','$ITA63_file')";
        
                        if ($conn->query($sql) === TRUE) {
                                echo "<script type='text/javascript'>";
                                echo "alert('บันทึกข้อมูลสำเร็จ');";
                                echo "window.location='../form/form_ITA63.php';";
                                echo "</script>";
                                echo "<script>";
                        } 
                }

                ?>