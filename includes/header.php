<?php
  $titleOfPage = $_SERVER['PHP_SELF'];
  $titleOfPage = substr($titleOfPage, (strrpos($titleOfPage, '/')+1));
  $titleOfPage = substr($titleOfPage,0, strrpos($titleOfPage,'.'));
  $titleOfPage = strtoupper($titleOfPage);
  if ($titleOfPage == 'INDEX'){
    $titleOfPage = 'WELCOME';
  }
?>

<!DOCTYPE html>
<html dir="ltr" lang="zxx">

  <head>
    <meta charset="utf-8">
    <title>GOLIN PG | <?php echo $titleOfPage; ?></title>
    <meta name="description" content="The Project a Bootstrap-based, Responsive HTML5 Template">
    <meta name="author" content="author">
    <meta name="robots" content="noimageindex">
    <noscript>
      <META http-equiv="refresh" content="0;URL=js-error.html">
    </noscript>
    <!-- PHP MAILER -->
    <?php 
      use PHPMailer\PHPMailer\PHPMailer;
      use PHPMailer\PHPMailer\Exception;

      // require 'includes/mail-src/Exception.php';
      // require 'includes/mail-src/PHPMailer.php';
      // require 'includes/mail-src/SMTP.php';
    ?>
    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <!-- Login Page Style -->
    <link rel="stylesheet" href="includes/css_for_login.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script> 
    <!-- Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=PT+Serif" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Font Awesome CSS -->
    <link href="admin/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- Plugins -->
    <link href="css/plugins/magnific-popup/magnific-popup.css" rel="stylesheet">
    <link href="css/plugins/rs-plugin-5/css/settings.css" rel="stylesheet">
    <link href="css/plugins/rs-plugin-5/css/layers.css" rel="stylesheet">
    <link href="css/plugins/rs-plugin-5/css/navigation.css" rel="stylesheet">
    <link href="css/css/animations.css" rel="stylesheet">
    <link href="css/plugins/slick/slick.css" rel="stylesheet">



    <!-- icon in tab of browser -->
    <link REL="SHORTCUT ICON" HREF="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSqoTnsfDMjCZEgaU4SLp6UztRlHaURDINz1C6q81TA9R-N24yG">
    
    <!-- Core CSS file -->
    <!-- Use css/rtl_style.css for RTL version -->
    <link href="css/css/style.css" rel="stylesheet" >
    
    <!-- Use css/rtl_typography-default.css for RTL version -->
    <link href="css/css/typography-default.css" rel="stylesheet" >
   
    <link href="css/css/skins/light_blue.css" data-style="styles-no-cookie" rel="stylesheet">
    <link href="css/style-switcher/style-switcher.css" rel="stylesheet">

    <!-- Custom css -->
    <link href="css/custom.css" rel="stylesheet">
    
  </head>

 
  <body class="front-page" style="background-color: black !important; ">

    <!-- scrollToTop -->
    <!-- ================ -->
    <div class="scrollToTop circle"><i class="fa fa-angle-up"></i></div>

    <!-- page wrapper start -->
    <!-- ================ -->
    <div class="page-wrapper back_color">
      <!-- header-container start -->
      <div class="header-container">
        <!-- header-top start -->
        <!-- classes:  -->
        <!-- "dark": dark version of header top e.g. class="header-top dark" -->
        <!-- ================ -->
        <div class="header-top" style="background-color: #f2cd29;">
          <div class="container">
            <div class="row">
              <div class="col-2 col-md-5">
                <!-- header-top-first start -->
                <!-- ================ -->
                <div class="header-top-first clearfix" >
               
                </div>
                <!-- header-top-first end -->
              </div>
              <div class="col-10 col-md-7">

                <!-- header-top-second start -->
                <!-- ================ -->
                <div id="header-top-second"  class="clearfix text-right">
                  <ul class="list-inline">
                    <li class="list-inline-item"><a href="#"><img src="img/SocialNetworks/twiter.svg" style="width: 15px; height: 15px;" alt=""></a></li>
                    <li class="list-inline-item"><a href="#"><img src="img/SocialNetworks/linkedin.svg" style="width: 15px; height: 15px;" alt=""></a></li>
                    <li class="list-inline-item"><a href="#"><img src="img/SocialNetworks/fb.svg" style="width: 15px; height: 15px;" alt=""></a></li>
                    <li class="list-inline-item"><a href="#"><img src="img/SocialNetworks/instagram.svg" style="width: 15px; height: 15px;" alt=""></a>
                  </ul>
                </div>
                <!-- header-top-second end -->

              </div>
            </div>
          </div>
        </div>
        <!-- header-top end -->

        <!-- header start -->
        
        <header class="header dark fixed fixed-desktop clearfix">
          <div class="container">
            <div class="row">
              <div class="col-md-auto hidden-md-down pl-3">
                <!-- header-first start -->
                <!-- ================ -->
                <div class="header-first">

                  <!-- logo -->
                  <div id="log" class="lo">
                    <a href="index.php"><img id="logo_img" src="img/Logo GolinPG.svg" alt="" style="width: 200px; height: 80px;"></a>
                  </div>

                  

                </div>
                <!-- header-first end -->

              </div>
              <div class="col-lg-8 ml-lg-auto">
          
                <!-- header-second start -->
                <!-- ================ -->
                <div class="header-second clearfix">
                  
                <!-- main-navigation start -->
                <!-- ================ -->
                <div class="main-navigation animated main-navigation--mega-menu  animated" >
                  <nav class="navbar navbar-expand-lg navbar-light p-0">
                    <div class="navbar-brand clearfix hidden-lg-up">

                      <!-- logo -->
                      <div id="logo-mobile" class="logo">
                        <a href="index.php"><img id="logo-img-mobile" src="img/Logo GolinPG.svg" alt=""></a>
                      </div>

                      <!-- name-and-slogan -->
                      <div class="site-slogan">
                        ________________________
                      </div>

                    </div>
                    
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse-1" aria-controls="navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse link_nav" id="navbar-collapse-1">
                      <ul class="navbar-nav ml-xl-auto" style="padding: 20px; margin-top: 20px; padding-right: 0px;">
                          <li class="nav-item">
                          <a class="link_nav" style="font-size:12px;" href="index.php#PREM">PR AND COMUNICATIONS</a>
                          </li>
                          <li class="nav-item">
                          <a  style="font-size:12px;" class="link_nav" href="index.php#EM">EVENT MANAGMENT</a>
                          </li>
                          <li class="nav-item">
                          <a class="link_nav"  style="font-size:12px;" href="index.php#CL">CLIENTS</a>
                          </li>
                          <li class="nav-item">
                          <a style="font-size:12px;" class="link_nav" href="index.php#AU">ABOUT US</a>
                          </li>
                          <li class="nav-item">
                          <a class="link_nav" style="font-size:12px;" href="index.php#OFF">OFFICES</a>
                          </li>
                          <li class="nav-item">
                          <a class="link_nav" style="font-size:12px;" href="index.php#CONT">CONTACT US</a>
                          </li>
                          <li class="nav-item">
                          <a class="link_nav" style="font-size:12px;" href="login.php">LOGIN</a>
                          </li>
                      </ul>
                    </div>
                  </nav>
                </div>
                <!-- main-navigation end -->
                </div>
                <!-- header-second end -->

              </div>
             
            </div>
          </div>
        </header>
        <!-- header end -->
      </div>
      <!-- header-container end -->