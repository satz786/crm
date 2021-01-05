<?php
require 'session.php';
if((isset($_REQUEST['logout'])) && $_REQUEST['logout']=="success")
{
unset($_SESSION['uid']);

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>AP-Login</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Presento - v1.1.0
  * Template URL: https://bootstrapmade.com/presento-bootstrap-corporate-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <div id="bgimage" class="contact"
        style="width: 100%;text-align:center;min-height: 100%;box-sizing: border-box;overflow-x: hidden;overflow-y: hidden;">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-4"></div>
                <div class="col-md-4" style="display:inline-block;position:relative;padding-top:8% ">
                  
                
                
                <form action = "../view/login.php" method="POST" role="form" class="php-email-form"
                        style="background-color: white;">

                        <div style="text-align:center;">
                            <img src="assets/img/25439409.jpg" id="icon" alt="User Icon" style="height: 60px;" />
                        </div>

                        <div class="form-row">
                            <!-- <div class="form-group">Username : </div> -->
                            <div class="col form-group">

                                <input type="email" class="form-control" name="email" placeholder="Username"
                                    data-rule="email" data-msg="Please enter a valid email" autocomplete = "off" />
                            </div>
                        </div>
                        <div class="form-row">
                            <!-- <div class="form-group">Password : </div> -->
                            <div class="col form-group">
                                <input type="password" class="form-control" name="password"
                                    placeholder="Password" data-rule="email" data-msg="Please enter a valid email" />
                            </div>

                        </div>
                        <p><?php echo isset($loginfaile) ?$loginfaile:''; ?></p>

                        <div class="text-center"><button type="submit">Login</button></div>
                        <p><a href="../view/signup.html">Sign-Up</a></p>

                    </form>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div><!-- End Contact Section -->

    </div>
    <!-- Vendor JS Files -->
    <!-- <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="assets/vendor/counterup/counterup.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/venobox/venobox.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>  
    
    <script src="assets/js/main.js"></script> -->
</body>

</html>

<!-- https://codepen.io/maggiben/pen/KwdeaM -->






