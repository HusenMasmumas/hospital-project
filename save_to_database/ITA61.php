<?php
include('../config.php');
session_start();
// ------------- ประกาศจัดซื้อจัดจ้าง -------------------
        if (isset($_POST['ITA61'])); {

            $ITA61_topic = $_POST['ITA61_topic'];
            $ITA61_date = $_POST['ITA61_date'];
        
            $file = $_FILES["ITA61_file"];
        $name = time();
        move_uploaded_file($file["tmp_name"], "../uploads/uploads_ITA61/" .$name.$file["name"]);
        
        $ITA61_file=$name.$file["name"];
        
            $sql = "INSERT INTO ita61 (ITA61_topic,ITA61_date,ITA61_file)
            VALUES ('$ITA61_topic','$ITA61_date','$ITA61_file')";
        
                        if ($conn->query($sql) === TRUE) {
                                echo "<script type='text/javascript'>";
                                echo "alert('บันทึกข้อมูลสำเร็จ');";
                                echo "window.location='../form/form_ITA61.php';";
                                echo "</script>";
                                echo "<script>";
                        } 
                }

                ?>