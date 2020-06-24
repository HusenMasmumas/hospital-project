<?php
include('../config.php');
session_start();
// ------------- ประกาศจัดซื้อจัดจ้าง -------------------
        if (isset($_POST['ministry_regulations'])); {

            $min_topic = $_POST['min_topic'];
            $min_date = $_POST['min_date'];
        
            $file = $_FILES["min_file"];
        $name = time();
        move_uploaded_file($file["tmp_name"], "../uploads/uploads_ministry_regulations/" .$name.$file["name"]);
        
        $min_file=$name.$file["name"];
        
            $sql = "INSERT INTO ministry_regulations (min_topic,min_date,min_file)
            VALUES ('$min_topic','$min_date','$min_file')";
        
                        if ($conn->query($sql) === TRUE) {
                                echo "<script type='text/javascript'>";
                                echo "alert('บันทึกข้อมูลสำเร็จ');";
                                echo "window.location='../form/form_ministry_regulations.php';";
                                echo "</script>";
                                echo "<script>";
                        } 
                }

                ?>