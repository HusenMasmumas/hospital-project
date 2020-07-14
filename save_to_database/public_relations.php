<?php
include('../config.php');
session_start();
// ------------- ประกาศจัดซื้อจัดจ้าง -------------------
        if (isset($_POST['public_relations'])); {

            $pu_topic = $_POST['pu_topic'];
            $pu_date = $_POST['pu_date'];
        
            $file = $_FILES["pu_file"];
        $name = time();
        move_uploaded_file($file["tmp_name"], "../uploads/uploads_public_relations/" .$name.$file["name"]);
        
        $pu_file=$name.$file["name"];
        
            $sql = "INSERT INTO public_relations (pu_topic,pu_date,pu_file)
            VALUES ('$pu_topic','$pu_date','$pu_file')";
        
                        if ($conn->query($sql) === TRUE) {
                                echo "<script type='text/javascript'>";
                                echo "alert('บันทึกข้อมูลสำเร็จ');";
                                echo "window.location='../form/form_public_relations.php';";
                                echo "</script>";
                                echo "<script>";
                        } 
                }

                ?>