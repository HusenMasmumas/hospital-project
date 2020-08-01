<?php
include('../config.php');
session_start();
// ------------- ประกาศจัดซื้อจัดจ้าง -------------------
        if (isset($_POST['public_relations'])); {

            $pu_topic = $_POST['pu_topic'];
            $pu_date = $_POST['pu_date'];
        
            $file = $_FILES["pu_file"];
            if (!empty($_FILES['pu_image']['name'])) {
                $filename =  md5($_FILES['pu_image']['name'] . time());
                $ext = explode('.', $_FILES['pu_image']['name']);
                $dest =  __DIR__ . DIRECTORY_SEPARATOR . '../images' . DIRECTORY_SEPARATOR . $filename . '.' . $ext[1];
                if (!copy($_FILES['pu_image']['tmp_name'], $dest)) {
                        echo 'upload Error';
                        exit();
                }
                $pu_image = $filename . '.' . $ext[1];
        }
        
        $name = time();
        move_uploaded_file($file["tmp_name"], "../uploads/uploads_public_relations/" .$name.$file["name"]);
        
        $pu_file=$name.$file["name"];
        if (empty($_FILES['pu_image']['name'])) {
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
       else if (!empty($_FILES['pu_image']['name'])) {
            $sql = "INSERT INTO public_relations (pu_topic,pu_image,pu_date,pu_file)
            VALUES ('$pu_topic','$pu_image','$pu_date','$pu_file')";
        
                        if ($conn->query($sql) === TRUE) {
                                echo "<script type='text/javascript'>";
                                echo "alert('บันทึกข้อมูลสำเร็จ');";
                                echo "window.location='../form/form_public_relations.php';";
                                echo "</script>";
                                echo "<script>";
                        }
                }
                        

}
   
                 

                ?>