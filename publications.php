<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Multiobjective Optimization Group</title>
    <meta name="description" content="" />
    <meta
      name="viewport"
      content="wicorporateh=device-wicorporateh, initial-scale=1"
    />
    <!-- Favicon Icon -->
    <link rel="icon" type="image/png" href="img/favicon.png" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="venobox/venobox.css" />
    <link rel="stylesheet" type="text/css" href="css/plugin_theme_css.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/corporate_style.css" />
    <link rel="stylesheet" type="text/css" href="css/responsive.css" />
    <link
      rel="stylesheet"
      type="text/css"
      href="css/corporate-responsive.css"
    />
    <!-- modernizr js -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
  </head>
  <body>
  <div class="em40_header_area_main">
  <?php include 'header.php'?>
      <!-- END HEADER TOP AREA -->
      <div class="corporate-main-menu one_page hidden-xs hidden-sm witr_h_h10">
        <div class="corporate_nav_area scroll_fixed postfix">
          <div class="container-fluid">
            <div class="row logo-left">
              <div class="col-md-3 col-sm-3 col-xs-4">
                <div class="logo">
                  <a class="main_sticky_main_l" href="index.php" title="MOG">
                    <img src="img/logo1.png" alt="MOG" />
                  </a>
                  <a class="main_sticky_l" href="index.php" title="MOG">
                    <img src="img/logo2.png" alt="MOG" />
                  </a>
                </div>
              </div>
              <!-- MAIN MENU -->
              <div class="col-md-9 col-sm-9 col-xs-8">
                <div class="tx_mmenu_together">
                <?php include 'menu.php'?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- MOBILE MENU Logo AREA -->
    <div class="mobile_logo_area hidden-md hidden-lg">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="mobile_menu_logo text-center">
              <a href="index.php" title="poket">
                <img src="img/logo1.png" alt="image" />
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- MOBILE MENU AREA -->
    <div class="home-2 mbm hidden-md hidden-lg header_area main-menu-area">
      <div class="menu_area mobile-menu">
      <?php include 'menu.php'?>
      </div>
    </div>
    <!-- END MOBILE MENU AREA  -->
    <!-- breadcumb area -->
    <div class="breadcumb-area">
      <div class="container">
        <div class="row">
          <div class="col-md-12 txtc text-center ccase">
            <div class="brpt">
              <h2>Publications</h2>
            </div>
            <div class="breadcumb-inner">
              <ul>
                <li>
                  You are currently here! <i class="fas fa-angle-right"></i>
                </li>
                <li>
                  <a href="index.php" rel="v:url" property="v:title">Home</a>
                </li>
                <li><i class="fas fa-angle-right"></i></li>
                <li><span class="current">Publications</span></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End breadcumb area -->
    <!-- single service area -->
    <div class="single_service_area">
      <div class="container">
      <?php $contents = file_get_contents("https://bibbase.org/show?bib=https://dblp.org/pid/21/4895.bib&noBootstrap=1&group0=year&group1=type"); print_r($contents); ?>

      </div>
    </div>
    <!-- footer area -->
    <?php include 'footer.php'?>
    <!-- Include All JS -->
    <script src="js/vendor/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.nivo.slider.pack.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="venobox/venobox.min.js"></script>
    <script src="js/jquery.appear.js"></script>
    <script src="js/jquery.knob.js"></script>
    <script src="js/BeerSlider.js"></script>
    <script src="js/theme-pluginjs.js"></script>
    <script src="js/jquery.meanmenu.js"></script>
    <script src="js/ajax-mail.js"></script>
    <script src="js/theme.js"></script>
  </body>
</html>
