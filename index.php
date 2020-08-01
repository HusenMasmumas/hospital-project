<?php
include('config.php');
$sql= "SELECT * FROM public_relations";
$query = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html>

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

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <script src="js/bootstrap1.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->

    <link rel="stylesheet" href="css/boot.min.css">
    <link rel="stylesheet" href="css/custom.css">





</head>

<body>
    <div id="container">
        <header>
            <?php include 'menu.php' ?>
        </header>

        <article>
            <!-- Start slides -->

            <div id="slides" class="cover-slides">
                <ul class="slides-container">
                    <li class="text-center">
                        <img src="images/slider-03.jpg" alt="">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <h1 class="m-b-20"><strong>ยินดีต้อนรับ<br> โรงพยาบาลปะนาเระ</strong></h1>
                                    <p class="m-b-40">See how your users experience your website in realtime or view
                                        <br>
                                        trends to see any changes in performance over time.</p>
                                    <p><a class="btn btn-lg btn-circle btn-outline-new-white" href="#">Reservation</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="text-center">
                        <img src="images/11.jpg" alt="">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <h1 class="m-b-20"><strong>ยินดีต้อนรับ<br> โรงพยาบาลปะนาเระ</strong></h1>
                                    <p class="m-b-40">See how your users experience your website in realtime or view
                                        <br>
                                        trends to see any changes in performance over time.</p>
                                    <p><a class="btn btn-lg btn-circle btn-outline-new-white" href="#">Reservation</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="text-center">
                        <img src="images/slider-01.jpg" alt="">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <h1 class="m-b-20"><strong>ยินดีต้อนรับ<br> โรงพยาบาลปะนาเระ</strong></h1>
                                    <p class="m-b-40">See how your users experience your website in realtime or view
                                        <br>
                                        trends to see any changes in performance over time.</p>
                                    <p><a class="btn btn-lg btn-circle btn-outline-new-white" href="#">Reservation</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="slides-navigation">
                    <a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
                    <a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
                </div>
            </div>
            <!-- End slides -->


            <!-- Start QT -->
            <div class="qt-box qt-background">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 ml-auto mr-auto text-left">
                            <p class="lead ">
                                " เป็นโรงพยาบาลชุมชนที่มีคุณภาพ ผู้ให้บริการมีความสุข ประชาชนพึงพอใจ "
                            </p>
                            <span class="lead">Michael Strahan</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End QT -->

            <!-- Start Menu -->
            <div class="menu-box">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="heading-title text-center">
                                <h2>ข่าวประชาสัมพันธ์</h2>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="special-menu text-center">
                                <div class="button-group filter-button-group">
                                    <button class="active" data-filter="*">ทั้งหมด</button>
                                    <button data-filter=".drinks">เดือนที่ผ่านมา</button>
                                    <button data-filter=".lunch">เดือนนี้</button>
                                    <button data-filter=".dinner">เดือนที่จะถึง</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row special-list">
                        <?php 
                        $nuble1=0;
                        while ($row = mysqli_fetch_assoc($query)) {
                            $tim = date('Y-m-d', strtotime("now"));
                            $time1 = new DateTime($row['pu_date']);
                            $date = $time1->format('n');
                            $time = new DateTime($tim);
                            $date1 = $time->format('n');
                            if($date == $date1 - 1){
                            ?>
                        <div class="col-lg-4 col-md-6 special-grid drinks">
                            <div class="gallery-single">
                                <?php $files=$row['pu_file']; ?>

                                <?php

                            $nuble1=$nuble1+1;

								if (isset($row['pu_image'])) {
									if (!empty($row['pu_image'])) {
										echo '<img src="images/' . $row['pu_image'] . '"class="img-fluid" alt="Images" style={height: 50px;}/>';
									}
								}else if (!isset($row['pu_image'])) {
                                    echo '<img src="images/no_image.png"class="img-fluid2" alt="Images" style={height: 50px; }/>';
                                }
							?>

                                <div class="why-text">
                                    <h4>เรื่อง : <?php echo $row['pu_topic'] ?></h4>
                                    <p>วันที่ : <?php echo $row['pu_date'] ?></p>
                                    <a download="<?php echo $files ?>" href="uploads/<?php echo $files ?>">
                                        <p>ชื่อไฟล์ : <?php echo $row['pu_file'] ?></p>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <?php 
                            }
                        if($nuble1 ==9){
                        break;
                        }
                        }
                        
                        $nuble1=0;
              $sql1= "SELECT * FROM public_relations";
              $query1 = mysqli_query($conn, $sql1);
                       while ($row1 = mysqli_fetch_assoc($query1)) {
                        $tim = date('Y-m-d', strtotime("now"));
                        $time1 = new DateTime($row1['pu_date']);
                        $date = $time1->format('n');
                        $time = new DateTime($tim);
                        $date1 = $time->format('n');
                        if($date == $date1){

                            $nuble1=$nuble1+1;
                            ?>
                        <div class="col-lg-4 col-md-6 special-grid lunch">
                            <div class="gallery-single fix">
                                <?php $files=$row1['pu_file']; ?>

                                <?php

                                if (isset($row1['pu_image'])) {
                                    if (!empty($row1['pu_image'])) {
                                        echo '<img src="images/' . $row1['pu_image'] . '"class="img-fluid" alt="Images" style={height: 50px;}/>';
                                    }
                                }else if (!isset($row1['pu_image'])) {
                                    echo '<img src="images/no_image.png"class="img-fluid2" alt="Images" style={height: 50px; }/>';
                                }
                            ?>

                                <div class="why-text">
                                    <h4>เรื่อง : <?php echo $row1['pu_topic'] ?></h4>
                                    <p>วันที่ : <?php echo $row1['pu_date'] ?></p>
                                    <a download="<?php echo $files ?>" href="uploads/<?php echo $files ?>">
                                        <p>ชื่อไฟล์ : <?php echo $row1['pu_file'] ?></p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <?php }  
                        if($nuble1 ==9){
                        break;
                        }
                        }
                        $nuble1=0;
                         $sql1= "SELECT * FROM public_relations";
                         $query1 = mysqli_query($conn, $sql1);
                                  while ($row1 = mysqli_fetch_assoc($query1)) {
                                    $tim = date('Y-m-d', strtotime("now"));
                                    $time1 = new DateTime($row1['pu_date']);
                                    $date = $time1->format('n');
                                    $time = new DateTime($tim);
                                    $date1 = $time->format('n');
                                    if($date == $date1+1){

                                        $nuble1=$nuble1+1;
                                    ?>



                        <div class="col-lg-4 col-md-6 special-grid dinner">
                            <div class="gallery-single fix">
                                <?php $files=$row1['pu_file']; ?>

                                <?php

if (isset($row1['pu_image'])) {
    if (!empty($row1['pu_image'])) {
        echo '<img src="images/' . $row1['pu_image'] . '"class="img-fluid" alt="Images" style={height: 50px;}/>';
    }
}else if (!isset($row1['pu_image'])) {
    echo '<img src="images/no_image.png"class="img-fluid2" alt="Images" style={height: 50px; }/>';
}
?>

                                <div class="why-text">
                                    <h4>เรื่อง : <?php echo $row['pu_topic'] ?></h4>
                                    <p>วันที่ : <?php echo $row['pu_date'] ?></p>
                                    <a download="<?php echo $files ?>" href="uploads/<?php echo $files ?>">
                                        <p>ชื่อไฟล์ : <?php echo $row['pu_file'] ?></p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <?php } 
                    if($nuble1 ==9){
                    break;
                    }} ?>



                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 text-center1">
                        <div class="inner-column">
                            <a class="btn btn-lg btn-circle btn-outline-new-white"
                                href="display/public_relations.php">อ่านเพิ่มเติม</a>
                        </div>


                    </div>
                </div>
            </div>
            <!-- End Menu -->



            <!-- Start Gallery -->
            <div class="gallery-box">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="heading-title text-center">
                                <h2>Gallery</h2>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                            </div>
                        </div>
                    </div>
                    <div class="tz-gallery">
                        <div class="row">
                            <div class="col-sm-12 col-md-4 col-lg-4">
                                <a class="lightbox" href="images/gallery-img-01.jpg">
                                    <img class="img-fluid" src="images/gallery-img-01.jpg" alt="Gallery Images">
                                </a>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <a class="lightbox" href="images/gallery-img-02.jpg">
                                    <img class="img-fluid" src="images/gallery-img-02.jpg" alt="Gallery Images">
                                </a>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <a class="lightbox" href="images/gallery-img-03.jpg">
                                    <img class="img-fluid" src="images/gallery-img-03.jpg" alt="Gallery Images">
                                </a>
                            </div>
                            <div class="col-sm-12 col-md-4 col-lg-4">
                                <a class="lightbox" href="images/gallery-img-04.jpg">
                                    <img class="img-fluid" src="images/gallery-img-04.jpg" alt="Gallery Images">
                                </a>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <a class="lightbox" href="images/gallery-img-05.jpg">
                                    <img class="img-fluid" src="images/gallery-img-05.jpg" alt="Gallery Images">
                                </a>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <a class="lightbox" href="images/gallery-img-06.jpg">
                                    <img class="img-fluid" src="images/gallery-img-06.jpg" alt="Gallery Images">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Gallery -->

            <!-- Start Customer Reviews -->
            <div class="customer-reviews-box">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="heading-title text-center">
                                <h2>Customer Reviews</h2>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 mr-auto ml-auto text-center">
                            <div id="reviews" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner mt-4">
                                    <div class="carousel-item text-center active">
                                        <div class="img-box p-1 border rounded-circle m-auto">
                                            <img class="d-block w-100 rounded-circle" src="images/profile-1.jpg" alt="">
                                        </div>
                                        <h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Paul
                                                Mitchel</strong>
                                        </h5>
                                        <h6 class="text-dark m-0">Web Developer</h6>
                                        <p class="m-0 pt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam
                                            eu sem
                                            tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis
                                            vel,
                                            semper malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse
                                            varius
                                            nibh non aliquet.</p>
                                    </div>
                                    <div class="carousel-item text-center">
                                        <div class="img-box p-1 border rounded-circle m-auto">
                                            <img class="d-block w-100 rounded-circle" src="images/profile-3.jpg" alt="">
                                        </div>
                                        <h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Steve
                                                Fonsi</strong>
                                        </h5>
                                        <h6 class="text-dark m-0">Web Designer</h6>
                                        <p class="m-0 pt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam
                                            eu sem
                                            tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis
                                            vel,
                                            semper malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse
                                            varius
                                            nibh non aliquet.</p>
                                    </div>
                                    <div class="carousel-item text-center">
                                        <div class="img-box p-1 border rounded-circle m-auto">
                                            <img class="d-block w-100 rounded-circle" src="images/profile-7.jpg" alt="">
                                        </div>
                                        <h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Daniel
                                                vebar</strong>
                                        </h5>
                                        <h6 class="text-dark m-0">Seo Analyst</h6>
                                        <p class="m-0 pt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam
                                            eu sem
                                            tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis
                                            vel,
                                            semper malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse
                                            varius
                                            nibh non aliquet.</p>
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#reviews" role="button" data-slide="prev">
                                    <i class="fa fa-angle-left" aria-hidden="true"></i>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#reviews" role="button" data-slide="next">
                                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Customer Reviews -->




        </article>
    </div>
    <nav>
        <?php include 'lower.php' ?>
    </nav>


    <!-- ALL JS FILES -->

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/jquery.superslides.min.js"></script>
    <script src="js/images-loded.min.js"></script>
    <script src="js/isotope.min.js"></script>
    <script src="js/baguetteBox.min.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>