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
    src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap">
    </script>
</div>

            <!-- Start Contact info -->
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