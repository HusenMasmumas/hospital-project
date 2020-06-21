<?php
include('config.php');
$sql= "SELECT * FROM public_relations";
$query = mysqli_query($conn, $sql);

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

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <!-- Start header -->
    <header class="top-navbar">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="index.php">
                    <img src="images/logo.png" alt="text" />
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food"
                    aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbars-rs-food">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item "><a class="nav-link" href="index.php">หน้าแรก</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown-a"
                                data-toggle="dropdown">เกี่ยวกับโรงพยาบาล</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown-a">
                                <a class="dropdown-item" href="pnr1.html">ประวัติโรงพยาบาล</a>
                                <a class="dropdown-item" href="pnr2.html">วิสัยทัศน์และพันธกิจ</a>
                                <a class="dropdown-item" href="pnr3.html">เป้าประสงค์</a>
                                <a class="dropdown-item" href="pnr4.html">เข็มมุ่งค่านิยมองค์กร</a>
                                <a class="dropdown-item" href="pnr5.html">ทำเนียบุคลากร</a>
                                <a class="dropdown-item" href="pnr6.html"></a>
                                <a class="dropdown-item" href="pnr7.html"></a>


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
                                <a class="dropdown-item" href="ITA4.html"></a>


                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown-a"
                                data-toggle="dropdown">จัดซื้อจัดจ้าง</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown-a">
                                <a class="dropdown-item" href="reservation.html">Reservation</a>
                                <a class="dropdown-item" href="stuff.html">Stuff</a>
                                <a class="dropdown-item" href="gallery.html">Gallery</a>
                            </div>

                        <li class="nav-item"><a class="nav-link" href="contact.html">ติดต่อเรา</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- End header -->

    <!-- Start slides -->
    <div id="slides" class="cover-slides">
        <ul class="slides-container">
            <li class="text-center">
                <img src="images/slider-03.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>ยินดีต้อนรับ<br> โรงพยาบาลปะนาเระ</strong></h1>
                            <p class="m-b-40">See how your users experience your website in realtime or view <br>
                                trends to see any changes in performance over time.</p>
                            <p><a class="btn btn-lg btn-circle btn-outline-new-white" href="#">Reservation</a></p>
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
                            <p class="m-b-40">See how your users experience your website in realtime or view <br>
                                trends to see any changes in performance over time.</p>
                            <p><a class="btn btn-lg btn-circle btn-outline-new-white" href="#">Reservation</a></p>
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
                            <p class="m-b-40">See how your users experience your website in realtime or view <br>
                                trends to see any changes in performance over time.</p>
                            <p><a class="btn btn-lg btn-circle btn-outline-new-white" href="#">Reservation</a></p>
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

    <!-- Start About -->
    <div class="about-section-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <img src="images/about-img.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 text-center">
                    <div class="inner-column">
                        <h1>ประวัติ <span>โรงพยาบาลปะนาเระ</span></h1>

                        <p>&nbsp;&nbsp;&nbsp;
                            โรงพยาบาลปะนาเระ จังหวัดปัตตานี ตั้งอยู่ ณ ตำบลท่าข้าม อำเภอปะนาเระ จังหวัดปัตตานี
                            ห่างจากที่ว่าการอำเภอปะนาเระ ประมาณ 3 กิโลเมตร มีเนื้อที่ทั้งหมด 49 ไร่ 2 งาน
                            ดำเนินงานก่อสร้างแล้วเสร็จในปี พ.ศ.2522 แต่ยังขาดแคลนไฟฟ้า น้ำประปา และเจ้าหน้าที่
                            จึงไม่ได้เปิดทำการ ต่อมา พ.ศ.2524 ทางสำนักงานสาธารณสุขจังหวัดปัตตานี ซึ่งมีนายแพทย์จรัญ
                            กาญจนรัตน์ เป็นนายแพทย์สาธารณสุขจังหวัดปัตตานี ได้มีโครงการที่จะเปิดโรงพยาบาลปะนาเระ
                            เพื่อให้บริการด้านการรักษาพยาบาลแก่ประชาชนในเขตอำเภอปะนาเระ
                            และได้รักษาการในตำแหน่งผู้อำนวยการโรงพยาบาลปะนาเระ โดยมีพยาบาลและเจ้าหน้าที่ อื่น ๆ รวม 13
                            คน เริ่มเปิดให้บริการประชาชน ตั้งแต่วันที่ 9 เมษายน 2524 เป็นต้นมา

                            <p>ในระหว่างปี พ.ศ.2524 - 2525 มีแพทย์จากโรงพยาบาลปัตตานี
                                ผลัดเปลี่ยนกันมาปฏิบัติงานเป็นบางวัน
                                (ยังไม่มีแพทย์ประจำ) ต่อมาปี พ.ศ.2539
                                ได้รับการจัดสรรงบประมาณสำหรับสร้างอาคารผู้ป่วยนอกและผู้ป่วยใน เพื่อขยายเป็นโรงพยาบาลขนาด
                                30
                                เตียง
                                อาคารดังกล่าวแล้วเสร็จประมาณเดือนเมษายน 2539 และเปิดใช้ (อย่างไม่เป็นทางการ)
                                เดือนพฤษภาคม
                                2539 หลังจากได้เปิดให้บริการผู้ป่วยแล้ว ทางท่านเจ้าคณะอำเภอปะนาเระ มีความคิดเห็นว่า
                                โรงพยาบาลปะนาเระ ซึ่งเป็นโรงพยาบาลประจำอำเภอ น่าจะมีอาคารสงฆ์อาพาธ
                                เพื่อรองรับพระสงฆ์ในอำเภอปะนาเระ รวมถึงประขาชนทั่วไปด้วย
                                บรรดาศิษยานุศิษย์จึงได้ปรึกษาหารือกันและในการนี้ท่านเจ้าคณะอำเภอได้ให้ผู้อำนวยการโรงพยาบาลปะนาเระ
                                เรียนปรึกษากับทางสำนักงานสาธารณสุขจังหวัดปัตตานี
                                ในเรื่องของแบบแปลนและการก่อสร้างซึ่งทางโรงพยาบาลได้รับความร่วมมือและอำนวยความสะดวกให้เป็นอย่างดีจากทันตแพทย์หญิงนัยนา
                                แพร่ศรีกุล ซึ่งการก่อสร้างได้ดำเนินการมาอย่างต่อเนื่อง
                                แม้จะประสบปัญหาภาวะวิกฤติทางเศรษฐกิจ
                                แต่การก่อสร้างก็สามารถดำเนินการไปได้ด้วยดีเนื่องจากแรงศรัทธาของบรรดาศิษยานุศิษย์จนกระทั่งแล้วเสร็จในปี
                                พ.ศ.2540</p>

                            <p> ในอดีดที่ผ่านมาโรงพยาบาลปะนาเระ เริ่มตันด้วยพยาบาลและเจ้าหน้าที่อื่น ๆ 13 คน
                                โดยประกอบด้วยพยาบาลวิชาชีพ 4 คน พยาบาลเทคนิค 1 คน ซึ่งมีนายแพทย์จากโรงพยาบาลปัตตานี
                                หมุนเวียนมาตรวจผู้ป่วยทุกวันอังคารและพฤหัสบดี แต่ไม่รับผู้ป่วยไว้นอนพักในโรงพยาบาล
                                เนื่องจากไม่มีแพทย์ประจำโรงพยาบาล ต่อมาเมื่อเดือนพฤษภาคม 2526 นายแพทย์ชาญยุทธ อิ่มอุดม
                                ได้มารับตำแหน่งผู้อำนวยการโรงพยาบาลปะนาเระ เป็นคนแรก
                                และเริ่มเปิดบริการเต็มรูปแบบขึ้นโดยรับผู้ป่วยไข้นอนที่โรงพยาบาล
                                หลังจากนั้นก็เริ่มมีแพทย์มารักษาการในตำแหน่งผู้อำนวยการโรงพยาบาลเรื่อยมา
                                จนกระทั่งคนปัจจุบัน
                                เป็นคนที่ 13 ซึ่งโรงพยาบาลปะนาเระได้เปิดให้บริการตามขีดความสามารถของโรงพยาบาลขนาด 30
                                เตียง
                                แต่ทางโรงพยาบาลก็ยังประสบปัญหาอยู่
                                เนื่องจากทางโรงพยาบาลขาดแพทย์ประจำที่จะมาอยู่เพื่อทำการรักษาผู้ป่วย
                                มีเพียงผู้อำนวยการโรงพยาบาลเพียงท่านเดียวที่รับผิดชอบทั้งด้านรักษาพยาบาลผู้ป่วยและงานด้านบริหาร
                                อีกทั้งในระยะแรกที่ยังมีปัญหาเรื่องไฟฟ้าและน้ำประปา
                                แต่ปัญหาด้านสาธารณูปโภคสามารถได้รับการแก้ไขไปด้วยดีจะมีก็แต่ด้านบุคลากร
                                ซึ่งเป็นปัญหาระดับประเทศ ซึ่งทางโรงพยาบาลก็ประสบปัญหาเช่นเดียวกัน
                                แต่บุคลากรทุกคนในโรงพยาบาลทุกระดับก็ได้ตั้งใจทำงานกันอย่างเต็มความสามารถและขยันขันแข็ง
                                ซึ่งทางโรงพยาบาลได้มีคำขวัญประจำโรงพยาบาลที่ว่า “ประสานมือ ประสานใจ พร้อมให้บริการ”
                                <p>
                                </p>
                                รายนามผู้อำนวยการโรงพยาบาลปะนาเระ</p>
                            <p>
                                1.นายแพทย์ชาญยุทธ อิ่มอุดม พ.ศ. 2526 - 2528</p>
                            <p>
                                2.นายแพทย์อมร รอดคล้าย พ.ศ. 2528 - 2529</p>
                            <p>
                                3.นายแพทย์โยธิน บ่อคำ พ.ศ. 2529 - 2530</p>
                            <p>
                                4.นายแพทย์วิทยา วิบูลย์สิน พ.ศ. 2530 - 2531</p>
                            <p>
                                5.นายแพทย์ธนันต์ชัย อนุพงศ์เมธี พ.ศ. 2531 - 2533</p>
                            <p>
                                6.แพทย์หญิงปรีดาวดี สังขเกษม พ.ศ. 2533 - 2535</p>
                            <p>
                                7.นายแพทย์ปัญญา งามไตรไร พ.ศ. 2535 - 2536</p>
                            <p>
                                8.นายแพทย์วิสุทธิ์ รักษากุล พ.ศ. 2536 - 2537</p>
                            <p>
                                9.นายแพทย์นิรันดร์ วิชเศรษฐสมิต พ.ศ. 2537 - 2540</p>
                            <p>
                                10.นายแพทย์ดุษฎี คงตระกูลทรัพย์ พ.ศ. 2540 - 2542</p>
                            <p>
                                11.นายแพทย์อนุรักษ์ สารภาพ พ.ศ. 2542 - 2551</p>
                            <p>
                                12.นายแพทย์สังเกต เผ่ากันทะ พ.ศ. 2551 – 2557</p>
                            <p>
                                13.นายแพทย์อนันต์ ชินดือเระ พ.ศ. ปัจจุบัน</p>

                            <a class="btn btn-lg btn-circle btn-outline-new-white" href="#">Reservation</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About -->

    <!-- Start QT -->
    <div class="qt-box qt-background">
        <div class="container">
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto text-left">
                    <p class="lead ">
                        " If you're not the one cooking, stay out of the way and compliment the chef. "
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
                        <h2>Special Menu</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="special-menu text-center">
                        <div class="button-group filter-button-group">
                            <button class="active" data-filter="*">All</button>
                            <button data-filter=".drinks">Drinks</button>
                            <button data-filter=".lunch">Lunch</button>
                            <button data-filter=".dinner">Dinner</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row special-list">
                <?php while ($row = mysqli_fetch_assoc($query)) {?>
                <div class="col-lg-4 col-md-6 special-grid drinks">
                    <div class="gallery-single">
                    <?php $files=$row['pu_file']; ?>
                    <a download="<?php echo $files ?>" href="uploads/<?php echo $files ?>">
                            <?php

								if (isset($row['pu_image'])) {
									if (!empty($row['pu_image'])) {
										echo '<img src="images/' . $row['pu_image'] . '"class="img-fluid" alt="Images" style={height: 50px;}/>';
									}
								}
							?>
                           
                            <div class="why-text">
                                <h4>เรื่อง : <?php echo $row['pu_topic'] ?></h4>
                                <p>วันที่ : <?php echo $row['pu_date'] ?></p>
                                <p>ชื่อไฟล์ : <?php echo $row['pu_file'] ?></p>
                        </a>
                    </div>
                </div>
            </div>

            <?php } ?>

            <div class="col-lg-4 col-md-6 special-grid drinks">
                <div class="gallery-single fix">
                    <img src="images/img-02.jpg" class="img-fluid" alt="Image">
                    <div class="why-text">
                        <h4>Special Drinks 2</h4>
                        <p>Sed id magna vitae eros sagittis euismod.</p>
                        <h5> $9.79</h5>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 special-grid drinks">
                <div class="gallery-single fix">
                    <img src="images/img-03.jpg" class="img-fluid" alt="Image">
                    <div class="why-text">
                        <h4>Special Drinks 3</h4>
                        <p>Sed id magna vitae eros sagittis euismod.</p>
                        <h5> $10.79</h5>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 special-grid lunch">
                <div class="gallery-single fix">
                    <img src="images/img-04.jpg" class="img-fluid" alt="Image">
                    <div class="why-text">
                        <h4>Special Lunch 1</h4>
                        <p>Sed id magna vitae eros sagittis euismod.</p>
                        <h5> $15.79</h5>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 special-grid lunch">
                <div class="gallery-single fix">
                    <img src="images/img-05.jpg" class="img-fluid" alt="Image">
                    <div class="why-text">
                        <h4>Special Lunch 2</h4>
                        <p>Sed id magna vitae eros sagittis euismod.</p>
                        <h5> $18.79</h5>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 special-grid lunch">
                <div class="gallery-single fix">
                    <img src="images/img-06.jpg" class="img-fluid" alt="Image">
                    <div class="why-text">
                        <h4>Special Lunch 3</h4>
                        <p>Sed id magna vitae eros sagittis euismod.</p>
                        <h5> $20.79</h5>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 special-grid dinner">
                <div class="gallery-single fix">
                    <img src="images/img-07.jpg" class="img-fluid" alt="Image">
                    <div class="why-text">
                        <h4>Special Dinner 1</h4>
                        <p>Sed id magna vitae eros sagittis euismod.</p>
                        <h5> $25.79</h5>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 special-grid dinner">
                <div class="gallery-single fix">
                    <img src="images/img-08.jpg" class="img-fluid" alt="Image">
                    <div class="why-text">
                        <h4>Special Dinner 2</h4>
                        <p>Sed id magna vitae eros sagittis euismod.</p>
                        <h5> $22.79</h5>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 special-grid dinner">
                <div class="gallery-single fix">
                    <img src="images/img-09.jpg" class="img-fluid" alt="Image">
                    <div class="why-text">
                        <h4>Special Dinner 3</h4>
                        <p>Sed id magna vitae eros sagittis euismod.</p>
                        <h5> $24.79</h5>
                    </div>
                </div>
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
                                <h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Paul Mitchel</strong>
                                </h5>
                                <h6 class="text-dark m-0">Web Developer</h6>
                                <p class="m-0 pt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem
                                    tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel,
                                    semper malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse varius
                                    nibh non aliquet.</p>
                            </div>
                            <div class="carousel-item text-center">
                                <div class="img-box p-1 border rounded-circle m-auto">
                                    <img class="d-block w-100 rounded-circle" src="images/profile-3.jpg" alt="">
                                </div>
                                <h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Steve Fonsi</strong>
                                </h5>
                                <h6 class="text-dark m-0">Web Designer</h6>
                                <p class="m-0 pt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem
                                    tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel,
                                    semper malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse varius
                                    nibh non aliquet.</p>
                            </div>
                            <div class="carousel-item text-center">
                                <div class="img-box p-1 border rounded-circle m-auto">
                                    <img class="d-block w-100 rounded-circle" src="images/profile-7.jpg" alt="">
                                </div>
                                <h5 class="mt-4 mb-0"><strong class="text-warning text-uppercase">Daniel vebar</strong>
                                </h5>
                                <h6 class="text-dark m-0">Seo Analyst</h6>
                                <p class="m-0 pt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem
                                    tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel,
                                    semper malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse varius
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
                    <p>Integer cursus scelerisque ipsum id efficitur. Donec a dui fringilla, gravida lorem ac, semper
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
                            <input name="EMAIL" id="subs-email" class="form_input" placeholder="Email Address..."
                                type="email">
                            <button type="submit" class="submit">SUBSCRIBE</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                    <ul class="list-inline f-social">
                        <li class="list-inline-item"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        </li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        </li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        </li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-google-plus"
                                    aria-hidden="true"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <p class="company-name">All Rights Reserved. &copy; 2018 <a href="#">Yamifood Restaurant</a>
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