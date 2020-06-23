<?php
include('config.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>Panarae Hospital</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

</head>

<body>

    <style type="text/css">
    @media (min-width: 992px) {
        .dropdown-menu .dropdown-toggle:after {
            border-top: .3em solid transparent;
            border-right: 0;
            border-bottom: .3em solid transparent;
            border-left: .3em solid;
        }

        .dropdown-menu .dropdown-menu {
            margin-left: 0;
            margin-right: 0;
        }

        .dropdown-menu li {
            position: relative;
        }

        .nav-item .submenu {
            display: none;
            position: absolute;
            left: 100%;
            top: -7px;
        }

        .nav-item .submenu-left {
            right: 100%;
            left: auto;
        }

        .dropdown-menu>li:hover {
            background-color: #f1f1f1
        }

        .dropdown-menu>li:hover>.submenu {
            display: block;
        }
    }
    </style>
    <!-- Start header -->
    <header class="top-navbar">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="http://localhost/project/banana/index.php">
                    <img src="images/logo.png" alt="text" />
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food"
                    aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbars-rs-food">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item "><a class="nav-link" href="http://localhost/project/banana/index.php">หน้าแรก</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown-a"
                                data-toggle="dropdown">เกี่ยวกับโรงพยาบาล</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown-a">
                                <a class="dropdown-item" href="pnr1.html">ประวัติโรงพยาบาล</a>
                                <a class="dropdown-item" href="pnr2.html">วิสัยทัศน์และพันธกิจ</a>
                                <a class="dropdown-item" href="pnr3.html">เป้าประสงค์</a>
                                <a class="dropdown-item" href="pnr4.html">เข็มมุ่งค่านิยมองค์กร</a>
                                <a class="dropdown-item" href="pnr5.html">ทำเนียบุคลากร</a>



                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown-a"
                                data-toggle="dropdown">ประชาสัมพันธ์</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown-a">
                                <a class="dropdown-item" href="new1.html">ข่าวสารประชาสัมพันธ์</a>
                                <a class="dropdown-item" href="new2.html">วาระการประชุม</a>
                                <a class="dropdown-item" href="new3.html">การรับสมัครงาน</a>

                            </div>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">ITA</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown-a">
                                <a class="dropdown-item" href="ITA1.html">ITA61</a>
                                <a class="dropdown-item" href="ITA2.html">ITA62</a>
                                <a class="dropdown-item" href="ITA3.html">ITA63</a>

                            </div>



                            <div class="container">




                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"> จัดซื้อจัดจ้าง </a> 
                            
                            <ul class="submenu1 dropdown-menu">
                           
                                <li><a class="dropdown-item dropdown-toggle" href="#"> ประกาศ และร่าง </a>
                                    <ul class="submenu dropdown-menu">
                                        <?php if (isset($_SESSION['us_email'])) { ?>
                                        <li><a class="dropdown-item" href="http://localhost/project/banana/form/form_Middle_price.php">ราคากลาง</a></li>
                                        <li><a class="dropdown-item" href="http://localhost/project/banana/form/form_announce.php">ประกาศจัดซื้อจัดจ้าง</a></li>
                                        <li><a class="dropdown-item" href="">ผลการจัดซื้อจัดจ้าง</a></li>
                                        <li><a class="dropdown-item" href="">ประกาศแผนการจัดซื้อจัดจ้าง</a></li>
                                        <li><a class="dropdown-item" href="">สรุปการจัดซื้อจัดจ้าง</a></li>
                                        <?php }
                                        else if (!isset($_SESSION['us_email'])) { ?>

                                        <li><a class="dropdown-item" href="http://localhost/project/banana/display/middle_price.php">ราคากลาง</a></li>
                                        <li><a class="dropdown-item" href="http://localhost/project/banana/display/middle_price.php">ประกาศจัดซื้อจัดจ้าง</a></li>
                                        <li><a class="dropdown-item" href="">ผลการจัดซื้อจัดจ้าง</a></li>
                                        <li><a class="dropdown-item" href="">ประกาศแผนการจัดซื้อจัดจ้าง</a></li>
                                        <li><a class="dropdown-item" href="">สรุปการจัดซื้อจัดจ้าง</a></li>
                                        <?php } ?>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item dropdown-toggle" href="#">
                                        กฏระเบียบที่เกี่ยวข้องกับการจัดซื้อจัดจ้าง </a>
                                    <ul class="submenu dropdown-menu">
                                        <li><a class="dropdown-item" href="">พระราขบัญญัติการจัดซื้อจัดจ้าง</a></li>
                                        <li><a class="dropdown-item" href="">ระเบียบกระทรวงการคลัง</a></li>
                                        <li><a class="dropdown-item" href="">กฏกระทรวง</a></li>
                                        <li><a class="dropdown-item" href="">ประกาศ</a></li>
                                        <li><a class="dropdown-item" href="">หนังสือเรียน / แนวทางการปฏิบัติ</a></li>
                                        <li><a class="dropdown-item"
                                                href="">โครงสร้างผู้รับผิดชอบในกการจัดซื้อจัดจ้างของ
                                                สปสช.</a></li>
                                    </ul>
                                </li>

                            </ul>
                        </li>


                </div>



                <li class="nav-item"><a class="nav-link" href="contact.html">ติดต่อเรา</a></li>
                <?php

                        if(isset($_SESSION['us_email'])) {
    //     echo "<script>
    // window.location=('login/index.php');
    // </script>";
    // exit();
    // } else {
      $sql = "SELECT *FROM user  WHERE us_email = '".$_SESSION['us_email']."'";
			$result = $conn->query($sql);
            $row = $result->fetch_assoc();
            ?>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown-a"
                        data-toggle="dropdown"><?php echo $row['us_email']?></a>
                    <div class="dropdown-menu" aria-labelledby="dropdown-a">
                        <a class="dropdown-item" href="http://localhost/project/banana/logout/logout.php">ออกจากระบบ</a>

                        <?php
    }
    if(!isset($_SESSION['us_email'])) {
    ?>
                <li class="nav-item"><a class="nav-link" href="http://localhost/project/banana/login/index.php">เข้าสู่ระบบ</a></li>
                <?php
    }
    ?>

            </div>

            </ul>
            </div>
            </div>
        </nav>
    </header>
    <!-- End header -->


</body>

</html>