<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="author" content="NextGenerationDev">
   <title>Wedding, Wedding Planer & Event HTML Template</title>
   <!--Favicon img-->
   <link rel="shortcut icon" href="assets/img/favicon/favicon.png">
   <!--Bootstarp min css-->
   <link rel="stylesheet" href="assets/css/bootstrap.min.css">
   <!--Bootstarp map css-->
   <link rel="stylesheet" href="assets/css/bootstrap.css.map">
   <!--Owl Carousel css-->
   <link rel="stylesheet" href="assets/css/owl.min.css">
   <!--Owl Carousel Theme css-->
   <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
   <!--All min css-->
   <link rel="stylesheet" href="assets/css/all.min.css">
   <!--Animate css-->
   <link rel="stylesheet" href="assets/css/animate.css">
   <!--Magnific popup css-->
   <link rel="stylesheet" href="assets/css/magnific-popup.css">
   <!--Swiper min css-->
   <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
   <!--main css-->
   <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>

<!--==== Header Section Here ======= -->
<header class="header-section">
   <div class="container">
      <div class="header-wrapper">
         <div class="logo-menu">
            <a href="index.html" class="logo">
               <img src="assets/img/logo/logo1.png" alt="img">
            </a>
         </div>
         <div class="header-bar d-lg-none">
            <span></span>
            <span></span>
            <span></span>
         </div>
         <ul class="main-menu">
            <li class="active">
               <a href="index.php?paginas=inicio">Home</a>
            </li>
            <li>
               <a href="index.php?paginas=about">About</a>
            </li>
            <li>
               <a href="#0">Service <i class="fas fa-chevron-down"></i></a>
               <ul class="sub-menu">
                  <li class="subtwohober">
                     <a href="index.php?paginas=service">
                        <span>Service</span>
                     </a>
                  </li>
                  <li class="subtwohober">
                     <a href="index.php?paginas=service-single">
                        <span>Service Single</span>
                     </a>
                  </li>
               </ul>
            </li>
            <li>
               <a href="index.php?paginas=story">Our story</a>
            </li>
            <li>
               <a href="#0">Pages <i class="fas fa-chevron-down"></i></a>
               <ul class="sub-menu">
                  <li class="subtwohober">
                     <a href="index.php?paginas=event">
                        <span>Our event</span>
                     </a>
                  </li>
                  <li class="subtwohober">
                     <a href="index.php?paginas=gallery">
                        <span>Gallery</span>
                     </a>
                  </li>
                  <li class="subtwohober">
                     <a href="index.php?paginas=error">
                        <span>Error 404</span>
                     </a>
                  </li>
               </ul>
            </li>
            <li>
               <a href="#0">Blog <i class="fas fa-chevron-down"></i></a>
               <ul class="sub-menu">
                  <li class="subtwohober">
                     <a href="index.php?paginas=blog">
                        <span>Blog</span>
                     </a>
                  </li>
                  <li class="subtwohober">
                     <a href="index.php?paginas=blog-single">
                        <span>Blog Single</span>
                     </a>
                  </li>
               </ul>
            </li>
            <li>
               <a href="index.php?paginas=contact">Contact</a>
            </li>
        </ul>
      </div>
   </div>
</header>

<?php
   if (isset($_GET["paginas"])) {
      if (
         $_GET["paginas"] == "inicio" ||
         $_GET["paginas"] == "about" ||
         $_GET["paginas"] == "blog-single" ||
         $_GET["paginas"] == "blog" ||
         $_GET["paginas"] == "contact" ||
         $_GET["paginas"] == "error" ||
         $_GET["paginas"] == "event" ||
         $_GET["paginas"] == "gallery" ||
         $_GET["paginas"] == "service-single" ||
         $_GET["paginas"] == "service" ||
         $_GET["paginas"] == "story"
      ) {
         include "paginas/" . $_GET["paginas"] . ".php";
      }
   }


   ?>




   <!--Jquery 3 6 0 Min Js-->
   <script src="html/assets/js/jquery-3.6.0.min.js"></script>
   <!--Bootstrap bundle Js-->
   <script src="html/assets/js/bootstrap.bundle.min.js"></script>
   <!--Viewport Jquery Js-->
   <script src="html/assets/js/viewport.jquery.js"></script>
   <!--Wow min Js-->
   <script src="html/assets/js/wow.min.js"></script>
   <!--Owl Carousel min Js-->
   <script src="html/assets/js/owl.min.js"></script>
   <!--Swiper min Js-->
   <script src="html/assets/js/swiper-bundle.min.js"></script>
   <!--Magnific popup min Js-->
   <script src="html/assets/js/jquery.magnific-popup.min.js"></script>
   <!--main Js-->
   <script src="html/assets/js/main.js"></script>
</body>

</html>