<?php
include('../config.php');
session_start();
// ------------- ประกาศจัดซื้อจัดจ้าง -------------------
        if (isset($_POST['book'])); {

            $boo_topic = $_POST['boo_topic'];
            $boo_date = $_POST['boo_date'];
        
            $file = $_FILES["boo_file"];
        $name = time();
        move_uploaded_file($file["tmp_name"], "../uploads/uploads_book/" .$name.$file["name"]);
        
        $boo_file=$name.$file["name"];
        
            $sql = "INSERT INTO book (boo_topic,boo_date,boo_file)
            VALUES ('$boo_topic','$boo_date','$boo_file')";
        
                        if ($conn->query($sql) === TRUE) {
                                echo "<script type='text/javascript'>";
                                echo "alert('บันทึกข้อมูลสำเร็จ');";
                                echo "window.location='../form/form_book.php';";
                                echo "</script>";
                                echo "<script>";
                        } 
                }

                ?>