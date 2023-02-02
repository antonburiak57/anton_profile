<!DOCTYPE html>
<html lang="en" class="no-js">
  
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <title>Anton Buriak</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="Resume / CV " />
    <meta name="author" content="Anton Lee" />
    <!-- <link rel="shortcut icon" href="favicon4.ico"> -->


    <link rel="stylesheet" href="css/normalize.css" type="text/css">
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/main.css" type="text/css">

    <script src="js/modernizr.custom.js"></script>
  </head>

  <body class="page">

    <div class="lm-animated-bg"></div>
    
    <!-- Loading animation -->
    <div class="preloader">
      <div class="preloader-animation">
        <div class="preloader-spinner">
        </div>
      </div>
    </div>
    <!-- /Loading animation -->

    <!-- Scroll To Top Button -->
    <div class="lmpixels-scroll-to-top"><i class="lnr lnr-chevron-up"></i></div>
    <!-- /Scroll To Top Button -->

    <div class="page-scroll">
      <div id="page_container" class="page-container bg-move-effect" data-animation="transition-flip-in-right">

        <!-- Header -->
        <header id="site_header" class="header">
          <div class="header-content clearfix">
            <!-- Text Logo -->
            <div class="text-logo">
              <a href="index.php">
                <div class="logo-symbol" title="Anton Buriak">AB</div>
              </a>
            </div>
            <!-- /Text Logo -->

            <!-- Navigation -->
            <div class="site-nav mobile-menu-hide">
              <ul class="leven-classic-menu site-main-menu">

                <li class="menu-item <?php echo strpos($_SERVER['REQUEST_URI'], 'index') !== false || substr($_SERVER['REQUEST_URI'], -1, 1) == '/' ? 'active' : '' ?>" >
                  <a href="index.php">About Me</a>
                </li>

				        <!-- <li class="menu-item <?php echo strpos($_SERVER['REQUEST_URI'], 'whatdo') !== false ? 'active' : '' ?>">
                  <a href="whatdo.php">What I do</a>
                </li> -->

                <!-- <li class="menu-item <?php echo strpos($_SERVER['REQUEST_URI'], 'resume') !== false ? 'active' : '' ?>">
                  <a href="resume.php">Resume</a>
                </li> -->
                <li class="menu-item <?php echo strpos($_SERVER['REQUEST_URI'], 'portfolio') !== false ? 'active' : '' ?>">
                  <a href="portfolio.php">Portfolio</a>
                </li>

                <li class="menu-item <?php echo strpos($_SERVER['REQUEST_URI'], 'contact') !== false ? 'active' : '' ?>">
                  <a href="contact.php">Contact</a>
                </li>
              </ul>
            </div>

            <!-- Mobile Menu Toggle -->
            <a class="menu-toggle mobile-visible">
              <i class="fa fa-bars"></i>
            </a>
            <!-- Mobile Menu Toggle -->
          </div>
        </header>
        <!-- /Header -->

