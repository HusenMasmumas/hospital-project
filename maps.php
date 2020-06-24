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
         
            <div class="table">
      
            <!-- End QT -->
            <style>
       /* Set the size of the div element that contains the map */
      #map {
        height: 900px;  /* The height is 400 pixels */
        width: 100%;  /* The width is the width of the web page */
       }
    </style>
        <h3>My Google Maps Demo</h3>
        <div id="map"></div>
    <script>

      // This example displays a marker at the center of Australia.
      // When the user clicks the marker, an info window opens.
      // The maximum width of the info window is set to 200 pixels.

      function initMap() {
        var uluru = {lat: 6.8400694, lng: 101.4861527};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 9,
          center: uluru
        });

        var contentString = '<div id="content">'+
            '<div id="siteNotice">'+
            '</div>'+
            '<h1 id="firstHeading" class="firstHeading">โรงพยาบาลปะนาเระ​</h1>'+
            '<div id="bodyContent">'+
            '<p><b>โรงพยาบาลปะนาเระ</b>, จังหวัดปัตตานี <b>ตั้งอยู่ </b>, ณ ตำบลท่าข้าม ' +
            'อำเภอปะนาเระ จังหวัดปัตตานี ห่างจากที่ว่าการอำเภอปะนาเระ '+
            'ประมาณ 3 กิโลเมตร มีเนื้อที่ทั้งหมด 49 ไร่ 2 งาน ดำเนินงานก่อสร้างแล้วเสร็จในปี พ.ศ.2522  '+
            '</p>'+
            '<p>Attribution: Uluru, <a href="https://www.google.com/maps/place/%E0%B9%82%E0%B8%A3%E0%B8%87%E0%B8%9E%E0%B8%A2%E0%B8%B2%E0%B8%9A%E0%B8%B2%E0%B8%A5%E0%B8%9B%E0%B8%B0%E0%B8%99%E0%B8%B2%E0%B9%80%E0%B8%A3%E0%B8%B0%E2%80%8B/@6.8400694,101.4861527,15z/data=!4m2!3m1!1s0x0:0x1cba85d714c197b0?sa=X&ved=2ahUKEwiHj735xJrqAhUJzzgGHTD_CJQQ_BIwCnoECBIQCA">'+
            'https://www.google.com/maps</a> '+
            '</p>'+
            '</div>'+
            '</div>';

        var infowindow = new google.maps.InfoWindow({
          content: contentString,
          maxWidth: 200
        });

        var marker = new google.maps.Marker({
          position: uluru,
          map: map,
          title: 'Uluru (Ayers Rock)'
        });
        marker.addListener('click', function() {
          infowindow.open(map, marker);
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAQZ4NeIjWNkDiygDt0E7nvF-shQT2SwyY&callback=initMap">
    </script>
</div>

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
        </article>
    </div>



</body>

</html>