<?php
include('../config.php');
session_start();
// ------------- ประกาศจัดซื้อจัดจ้าง -------------------
        if (isset($_POST['announce'])); {

            $ann_topic = $_POST['ann_topic'];
            $ann_date = $_POST['ann_date'];
        
            $file = $_FILES["ann_file"];
        $name = time();
        move_uploaded_file($file["tmp_name"], "../uploads/uploads_announce/" .$name.$file["name"]);
        
        $ann_file=$name.$file["name"];
        
            $sql = "INSERT INTO announce (ann_topic,ann_date,ann_file)
            VALUES ('$ann_topic','$ann_date','$ann_file')";
        
                        if ($conn->query($sql) === TRUE) {
                                echo "<script type='text/javascript'>";
                                echo "alert('บันทึกข้อมูลสำเร็จ');";
                                echo "window.location='../form/form_announce.php';";
                                echo "</script>";
                                echo "<script>";
                        } 
                }

                ?>