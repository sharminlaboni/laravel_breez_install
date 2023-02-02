<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Anyar Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('frontend/style.css') }}">

  <!-- Favicons -->
  <link href="frontend/assets/img/favicon.png" rel="icon">
  <link href="frontend/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="frontend/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="frontend/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="frontend/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="frontend/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="frontend/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="frontend/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="frontend/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="frontend/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Anyar - v4.10.0
  * Template URL: https://bootstrapmade.com/anyar-free-multipurpose-one-page-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="fixed-top d-flex align-items-center ">
    <div class="container d-flex align-items-center justify-content-center justify-content-md-between">
      <!-- <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope-fill"></i><a href="mailto:contact@example.com">info@example.com</a>
        <i class="bi bi-phone-fill phone-icon"></i> +1 5589 55488 55
      </div>
      <div class="cta d-none d-md-block">
        <a href="#about" class="scrollto">Get Started</a>
      </div> -->
    </div>
  </div>

  <!-- ======= Header ======= -->
  <x-frontend.partials.header/>


  <!-- End Header -->
  {{ $slot }}


  <!-- ======= Hero Section ======= -->
 <!-- End Hero -->

  <!-- End #main -->

  <!-- ======= Footer ======= -->
  <x-frontend.partials.footer/>


 <!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="frontend/assets/vendor/aos/aos.js"></script>
  <script src="frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="frontend/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="frontend/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="frontend/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="frontend/assets/js/main.js"></script>

</body>

</html>