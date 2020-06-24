<?php
include('../config.php');
session_start();
// ------------- ประกาศจัดซื้อจัดจ้าง -------------------
        if (isset($_POST['inform'])); {

            $inf_topic = $_POST['inf_topic'];
            $inf_date = $_POST['inf_date'];
        
            $file = $_FILES["inf_file"];
        $name = time();
        move_uploaded_file($file["tmp_name"], "../uploads/uploads_inform/" .$name.$file["name"]);
        
        $inf_file=$name.$file["name"];
        
            $sql = "INSERT INTO inform (inf_topic,inf_date,inf_file)
            VALUES ('$inf_topic','$inf_date','$inf_file')";
        
                        if ($conn->query($sql) === TRUE) {
                                echo "<script type='text/javascript'>";
                                echo "alert('บันทึกข้อมูลสำเร็จ');";
                                echo "window.location='../form/form_inform.php';";
                                echo "</script>";
                                echo "<script>";
                        } 
                }

                ?>