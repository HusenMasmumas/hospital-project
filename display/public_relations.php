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
    <title>ประกาศแผนการจัดซื้อจัดจ้าง</title>
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
                                <h2>ประกาศแผนการจัดซื้อจัดจ้าง</h2>
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
                                    <a download="<?php echo $files ?>" href="../uploads/uploads_public_relations/<?php echo $files ?>">
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
											<a href="public_relations.php?page=1" aria-label="Previous">
												<span aria-hidden="true">&laquo;</span>
											</a>
										</li>
										<?php for ($i = 1; $i <= $total_page; $i++) { ?>
											<li><a href="public_relations.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
										<?php } ?>
										<li>
											<a href="public_relations.php?page=<?php echo $total_page; ?>" aria-label="Next">
												<span aria-hidden="true">&raquo;</span>
											</a>
										</li>
									</ul>
								</nav>


                        
                  
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

</html>