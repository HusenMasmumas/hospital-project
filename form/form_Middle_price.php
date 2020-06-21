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
    <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="../images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="../css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="../css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../css/custom.css">



</head>

<body>
    <div id="container">
        <header>
            <?php include '../menu.php' ?>
        </header>

        <article>
            <?php
include('../config.php');
if (!isset($_SESSION['us_email'])) {
    echo "<script>
    window.location=('../login/index.php');
    </script>";
    exit();
} else {

    $sql= "SELECT * FROM public_relations";
    $query = mysqli_query($conn, $sql);
$perpage = 5;
if (isset($_GET['page'])) {
	$page = $_GET['page'];
} else {
	$page = 1;
}
$start = ($page - 1) * $perpage;

?>



            <!-- Start About -->



            <body>
                <div class="table">
                    <div class="about-section-box">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <!-- <div class="m"> -->
                                    <div class="heading-title text-center">
                                        <h2>ราคากลาง</h2>
                                        <h3>Using CSS to style an HTML Form</h3>
                                    </div>
                                    <div>
                                        <form class="box" enctype="multipart/form-data" method="post"
                                            action="../save_to_database/middle_price.php">
                                            <label for="fname">เรื่อง</label>
                                            <input type="text" id="fname" name="mid_topic" placeholder="เรื่อง..">

                                            <label for="lname">วันที่</label>
                                            <input type="date" value="<?php echo date('Y-m-d', strtotime("now")) ?>"
                                                id="lname" name="mid_date" placeholder="dd-mm-yyyy">

                                            <label for="lname">ไฟล์</label>
                                            <input type="file" name="mid_file">

                                            <input type="submit" value="Submit" name="middle_price">
                                        </form>


                                    </div>
                                    <!-- </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End About -->

                <!-- Start Contact info -->
                <div class="contact-imfo-box">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <i class="fa fa-volume-control-phone"></i>
                                <div class="overflow-hidden">
                                    <h4>Phone</h4>
                                    <p class="lead">
                                        +01 123-456-4590
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <i class="fa fa-envelope"></i>
                                <div class="overflow-hidden">
                                    <h4>Email</h4>
                                    <p class="lead">
                                        yourmail@gmail.com
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <i class="fa fa-map-marker"></i>
                                <div class="overflow-hidden">
                                    <h4>Location</h4>
                                    <p class="lead">
                                        800, Lorem Street, US
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- End Contact info -->

                <!-- Start Footer -->
                <footer class="footer-area bg-f">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <h3>About Us</h3>
                                <p>Integer cursus scelerisque ipsum id efficitur. Donec a dui fringilla, gravida lorem
                                    ac,
                                    semper
                                    magna. Aenean rhoncus ac lectus a interdum. Vivamus semper posuere dui, at ornare
                                    turpis
                                    ultrices sit amet. Nulla cursus lorem ut nisi porta, ac eleifend arcu ultrices.</p>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <h3>Opening hours</h3>
                                <p><span class="text-color">Monday: </span>Closed</p>
                                <p><span class="text-color">Tue-Wed :</span> 9:Am - 10PM</p>
                                <p><span class="text-color">Thu-Fri :</span> 9:Am - 10PM</p>
                                <p><span class="text-color">Sat-Sun :</span> 5:PM - 10PM</p>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <h3>Contact information</h3>
                                <p class="lead">Ipsum Street, Lorem Tower, MO, Columbia, 508000</p>
                                <p class="lead"><a href="#">+01 2000 800 9999</a></p>
                                <p><a href="#"> info@admin.com</a></p>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <h3>Subscribe</h3>
                                <div class="subscribe_form">
                                    <form class="subscribe_form">
                                        <input name="EMAIL" id="subs-email" class="form_input"
                                            placeholder="Email Address..." type="email">
                                        <button type="submit" class="submit">SUBSCRIBE</button>
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                                <ul class="list-inline f-social">
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"
                                                aria-hidden="true"></i></a>
                                    </li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"
                                                aria-hidden="true"></i></a>
                                    </li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"
                                                aria-hidden="true"></i></a>
                                    </li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-google-plus"
                                                aria-hidden="true"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"
                                                aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="copyright">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <p class="company-name">All Rights Reserved. &copy; 2018 <a href="#">Yamifood
                                            Restaurant</a>
                                        Design By :
                                        <a href="https://html.design/">html design</a></p>
                                </div>
                            </div>
                        </div>
                    </div>

                </footer>
                <!-- End Footer -->

                <a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>


                <!-- ALL JS FILES -->
                <script src="../js/jquery-3.2.1.min.js"></script>
                <script src="../js/popper.min.js"></script>
                <script src="../js/bootstrap.min.js"></script>
                <!-- ALL PLUGINS -->
                <script src="../js/jquery.superslides.min.js"></script>
                <script src="../js/images-loded.min.js"></script>
                <script src="../js/isotope.min.js"></script>
                <script src="../js/baguetteBox.min.js"></script>
                <script src="../js/form-validator.min.js"></script>
                <script src="../js/contact-form-script.js"></script>
                <script src="../js/custom.js"></script>
        </article>
    </div>



</body>
<?php } ?>

</html>