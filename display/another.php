<?php
include('../config.php');
$sql= "SELECT * FROM public_relations";
$query = mysqli_query($conn, $sql);


$perpage = 15;
if (isset($_GET['page'])) {
	$page = $_GET['page'];
} else {
	$page = 1;
}
$start = ($page - 1) * $perpage;

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>ข่าวประชาสัมพันธ์</title>
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



            <!-- Start About -->
           
            <div class="table">
            <div class="about-section-box">
                <div class="container">
                <div class="row">
                        <div class="col-lg-12">
                            <div class="heading-title text-center">
                                <h2>ข่าวประชาสัมพันธ์</h2>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                            </div>
                        </div>
                    </div>
               
                        <table>
                            <thead>
                                <tr class="table">
                                    <th class="column1">ลำดับ</th>
                                    <th class="column2">เรื่อง</th>
                                    <th class="column3">วันที่</th>
                                    <th class="column3">ดาวน์โหลด</th>
                                
                                </tr>
                            </thead>
                            <tbody>

                                <?php
										while ($fetch = mysqli_fetch_assoc($query)) {

											?>
                                <tr>
                                    <td class="column1"><?php echo $fetch['pu_id'] ?></td>
                                    <td class="column2"><?php echo $fetch['pu_topic'] ?></td>
                                    <td class="column3"><?php echo $fetch['pu_date'] ?></td>
                                    <td class="column4">
                                    <?php $files=$fetch['pu_file']; ?>
                                    <a download="<?php echo $files ?>" href="uploads/<?php echo $files ?>">
                                             <?php echo $fetch['pu_file'] ?>
                                            </td>
                                    

                                </tr>

                                <?php

										}

										?>
                            </tbody>
                        </table>

                        <?php
								$sql2 = "select * from public_relations ";
								$query2 = mysqli_query($conn, $sql2);
								$total_record = mysqli_num_rows($query2);
								$total_page = ceil($total_record / $perpage);
								?>

								<nav>
									<ul class="pagination">
										<li>
											<a href="another.php?page=1" aria-label="Previous">
												<span aria-hidden="true">&laquo;</span>
											</a>
										</li>
										<?php for ($i = 1; $i <= $total_page; $i++) { ?>
											<li><a href="another.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
										<?php } ?>
										<li>
											<a href="another.php?page=<?php echo $total_page; ?>" aria-label="Next">
												<span aria-hidden="true">&raquo;</span>
											</a>
										</li>
									</ul>
								</nav>


                        
                  
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
                            <p>Integer cursus scelerisque ipsum id efficitur. Donec a dui fringilla, gravida lorem ac,
                                semper
                                magna. Aenean rhoncus ac lectus a interdum. Vivamus semper posuere dui, at ornare turpis
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

</html>