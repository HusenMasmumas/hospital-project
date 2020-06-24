<?php
include('../config.php');
session_start();
// ------------- ประกาศจัดซื้อจัดจ้าง -------------------
        if (isset($_POST['structure'])); {

            $str_topic = $_POST['str_topic'];
            $str_date = $_POST['str_date'];
        
            $file = $_FILES["str_file"];
        $name = time();
        move_uploaded_file($file["tmp_name"], "../uploads/uploads_structure/" .$name.$file["name"]);
        
        $str_file=$name.$file["name"];
        
            $sql = "INSERT INTO structure (str_topic,str_date,str_file)
            VALUES ('$str_topic','$str_date','$str_file')";
        
                        if ($conn->query($sql) === TRUE) {
                                echo "<script type='text/javascript'>";
                                echo "alert('บันทึกข้อมูลสำเร็จ');";
                                echo "window.location='../form/form_structure.php';";
                                echo "</script>";
                                echo "<script>";
                        } 
                }

                ?>