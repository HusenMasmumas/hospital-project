<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>สรุปการจัดซื้อจัดจ้าง</title>
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
                                        <h2>สรุปการจัดซื้อจัดจ้าง</h2>
                                        <h3>Using CSS to style an HTML Form</h3>
                                    </div>
                                    <div>
                                        <form class="box" id="contactForm" enctype="multipart/form-data" method="post"
                                            action="../save_to_database/conclude.php">
                                            <label for="fname">เรื่อง</label>
                                            <div class="form-group">
                                                <input type="text" class="form-control1" name="con_topic"
                                                    placeholder="เรื่อง.." required data-error="กรุณาป้อนหัวข้อเรื่อง">
                                                <div class="help-block with-errors"></div>
                                            </div>

                                            <label for="lname">วันที่</label>
                                            <div class="form-group">
                                                <input type="date" value="<?php echo date('Y-m-d', strtotime("now")) ?>"
                                                    class="form-control1" name="con_date" placeholder="dd-mm-yyyy"
                                                    required data-error="กรุณาป้อนวันที่">
                                                <div class="help-block with-errors"></div>
                                            </div>

                                            <label for="lname">ไฟล์</label>
                                            <div class="form-group">
                                                <input type="file" class="form-control1" name="con_file" required
                                                    data-error="กรุณาเลือกไฟล์">
                                                <div class="help-block with-errors"></div>
                                            </div>

                                            <input type="submit" value="Submit" name="conclude">
                                        </form>


                                    </div>
                                    <!-- </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End About -->

        </article>
    </div>
    <nav>
        <?php include '../lower.php' ?>
    </nav>

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

</body>


<?php } ?>

</html>