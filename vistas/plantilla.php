<?php
session_start();
?>

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
   <link rel="stylesheet" href="html/assets/css/bootstrap.min.css">
   <!--Bootstarp map css-->
   <link rel="stylesheet" href="html/assets/css/bootstrap.css.map">
   <!--Owl Carousel css-->
   <link rel="stylesheet" href="html/assets/css/owl.min.css">
   <!--Owl Carousel Theme css-->
   <link rel="stylesheet" href="html/assets/css/owl.theme.default.min.css">
   <!--All min css-->
   <link rel="stylesheet" href="html/assets/css/all.min.css">
   <!--Animate css-->
   <link rel="stylesheet" href="html/assets/css/animate.css">
   <!--Magnific popup css-->
   <link rel="stylesheet" href="html/assets/css/magnific-popup.css">
   <!--Swiper min css-->
   <link rel="stylesheet" href="html/assets/css/swiper-bundle.min.css">
   <!--main css-->
   <link rel="stylesheet" href="html/assets/css/main.css">
</head>

<body>

   <!--==== Header Section Here ======= -->
   <header class="header-section">
      <div class="container">
         <div class="header-wrapper">
            <div class="logo-menu">
               <a href="index.html" class="logo">
                  <img src="html/assets/img/logo/logo1.png" alt="img">
               </a>
            </div>
            <div class="header-bar d-lg-none">
               <span></span>
               <span></span>
               <span></span>
            </div>
            <ul class="main-menu">
               <li class="active">
                  <a href="index.php?pagina=inicio">Home</a>
               </li>
               <li>
                  <a href="index.php?pagina=about">About</a>
               </li>
               <li>
                  <a href="#0">Service <i class="fas fa-chevron-down"></i></a>
                  <ul class="sub-menu">
                     <li class="subtwohober">
                        <a href="index.php?pagina=service">
                           <span>Service</span>
                        </a>
                     </li>
                     <li class="subtwohober">
                        <a href="index.php?pagina=service-single">
                           <span>Service Single</span>
                        </a>
                     </li>
                  </ul>
               </li>
               <li>
                  <a href="index.php?pagina=story">Our story</a>
               </li>
               <li>
                  <a href="#0">Pages <i class="fas fa-chevron-down"></i></a>
                  <ul class="sub-menu">
                     <li class="subtwohober">
                        <a href="index.php?pagina=event">
                           <span>Our event</span>
                        </a>
                     </li>
                     <li class="subtwohober">
                        <a href="index.php?pagina=gallery">
                           <span>Gallery</span>
                        </a>
                     </li>
                     <li class="subtwohober">
                        <a href="index.php?pagina=error">
                           <span>Error 404</span>
                        </a>
                     </li>
                  </ul>
               </li>
               <li>
                  <a href="#0">Blog <i class="fas fa-chevron-down"></i></a>
                  <ul class="sub-menu">
                     <li class="subtwohober">
                        <a href="index.php?pagina=blog">
                           <span>Blog</span>
                        </a>
                     </li>
                     <li class="subtwohober">
                        <a href="index.php?pagina=blog-single">
                           <span>Blog Single</span>
                        </a>
                     </li>
                  </ul>
               </li>
               <li>
                  <a href="index.php?pagina=contact">Contact</a>
               </li>
               <li>
                  <a href="index.php?pagina=table">Table</a>
               </li>
               <li>
                  <a href="index.php?pagina=session">Login</a>
               </li>
               <li>
                  <a href="index.php?pagina=register">Register</a>
               </li>
               <li>
                  <a href="index.php?pagina=exit">Exit</a>
               </li>
            </ul>
         </div>
      </div>
   </header>
   <!--==== Header Section End ======= -->
   

   <?php
   if (isset($_GET["pagina"])) {
      if (
         $_GET["pagina"] == "inicio" ||
         $_GET["pagina"] == "about" ||
         $_GET["pagina"] == "blog-single" ||
         $_GET["pagina"] == "blog" ||
         $_GET["pagina"] == "contact" ||
         $_GET["pagina"] == "error" ||
         $_GET["pagina"] == "event" ||
         $_GET["pagina"] == "gallery" ||
         $_GET["pagina"] == "service-single" ||
         $_GET["pagina"] == "service" ||
         $_GET["pagina"] == "story" ||
         $_GET["pagina"] == "table" ||
         $_GET["pagina"] == "session" ||
         $_GET["pagina"] == "exit" ||
         $_GET["pagina"] == "edit" ||
         $_GET["pagina"] == "register"
      ) {
         include "paginas/" . $_GET["pagina"] . ".php";
      } else {
         include "paginas/error.php";
      }
   } else {
      include "paginas/inicio.php";
   }
   ?>

   <!--=========== Footer Section Here ========= -->
   <div class="footer__section">
      <div class="container">
         <div class="border__area">
            <div class="container">
               <div class="footer__logo center">
                  <a href="index.html">
                     <img src="assets/img/logo/logo.png" alt="footer__logo">
                  </a>
               </div>
               <div class="footer__bottom center">
                  <p>© 2023 All Rights Reserved. Designed by <a href="#0" class="text-base-2">NextGenerationDev</a></p>
                  <ul class="footer__icon">
                     <li>
                        <a href="#0"><i class="fa-brands fa-facebook-f"></i></a>
                     </li>
                     <li>
                        <a href="#0"><i class="fa-brands fa-twitter"></i></a>
                     </li>
                     <li class="active">
                        <a href="#0"><i class="fa-brands fa-linkedin-in"></i></a>
                     </li>
                     <li>
                        <a href="#0"><i class="fa-brands fa-whatsapp"></i></a>
                     </li>
                     <li class="mr-none">
                        <a href="#0"><i class="fa-brands fa-instagram"></i></a>
                     </li>
                  </ul>
                  <ul class="footer__menu">
                     <li><a href="index.html">home</a></li>
                     <li><a href="about.html">about</a></li>
                     <li><a href="service.html">service</a></li>
                     <li><a href="story.html">Story</a></li>
                     <li><a href="gallery.html">gallery</a></li>
                     <li><a href="blog.html">blog</a></li>
                     <li class="mr-none"><a href="contact.html">contact</a></li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!--=========== Footer Section End ========= -->




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