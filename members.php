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
    <style>
  .em-team-content-image img {
    width: 300px; 
    height: 337px; 
    object-fit: cover;
  }
</style>
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
              <h2>Current members</h2>
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
                <li><span class="current">Current members</span></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End breadcumb area -->
    <!-- single service area -->
    <!-- team area -->
    <div class="consulting_team_area">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="witr_section_title">
            </div>
            <div id="container-team"></div>
          </div>
        </div>
      </div>
    </div>
    <!-- team area -->

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
    <script>
     const myObjects = [
    {
        id: "1",
        name: "Kaisa Miettinen",
        position: "Professor",
        website: "http://www.mit.jyu.fi/miettine/",
        picture: "img/members/Kaisa.jpg",
    },
    {
        id: "2",
        name: "Michael Emmerich",
        position: "Visiting professor",
        website: "#",
        picture: "img/members/Michael.jpg",
    },
    {
        id: "3",
        name: "Bekir Afsar",
        position: "Post doctoral researcher",
        website: "#",
        picture: "img/members/Bekir.jpg",
    },
    {
        id: "4",
        name: "Giomara Lárraga",
        position: "Post doctoral researcher",
        website: "#",
        picture: "img/members/Giomara.jpg",
    },
    {
        id: "5",
        name: "Babooshka Shavazipour",
        position: "Post doctoral researcher",
        website: "#",
        picture: "img/members/Babooshka.jpg",
    },
    {
        id: "6",
        name: "Johanna Silvennoinen",
        position: "Post doctoral researcher",
        website: "#",
        picture: "img/members/Johanna.jpg",
    },
    {
        id: "7",
        name: "Bhupinder Singh Saini",
        position: "Post doctoral researcher",
        website: "#",
        picture: "img/members/Bhupinder.jpg",
    },
    {
        id: "8",
        name: "Risto Heikkinen",
        position: "Doctoral researcher",
        website: "#",
        picture: "img/members/Risto.jpg",
    },
    {
        id: "9",
        name: "MaoMao Liang",
        position: "Doctoral researcher",
        website: "#",
        picture: "img/members/MaoMao.jpg",
    },
    {
        id: "10",
        name: "Giovanni Misitano",
        position: "Doctoral researcher",
        website: "#",
        picture: "img/members/Giovanni.jpg",
    },
    {
        id: "11",
        name: "Juuso Pajasmaa",
        position: "Doctoral researcher",
        website: "#",
        picture: "img/members/Juuso.jpg",
    }
];

      const app = document.getElementById("container-team");
      let currentRow;
      myObjects.forEach((obj, index) => {
        if (index % 3 === 0) {
          // Start a new row for every three items
          currentRow = document.createElement("div");
          currentRow.className = "row";
          app.appendChild(currentRow);
        }
        const mainDiv = document.createElement("div");
        mainDiv.className = "col-lg-4 col-md-6";

        const div1 = document.createElement("div");
        div1.className = "em-team all_color_team";

        const div2 = document.createElement("div");
        div2.className = "em-team-one";

        const div3 = document.createElement("div");
        div3.className = "em-team-content-image-inner";

        const div4 = document.createElement("div");
        div4.className = "em-team-content-image";
        const img = document.createElement("img");
        img.src = obj.picture;
        img.alt = obj.name;
        img.className = "em-team-image"; // Add this line to apply the class
        div4.appendChild(img);

        div3.appendChild(div4);

        const div5 = document.createElement("div");
        div5.className = "em-team-content-waraper all_content_bg_color";

        const div6 = document.createElement("div");
        div6.className = "em-team-content-title-inner";

        const div7 = document.createElement("div");
        div7.className = "em-content-title";
        const h5 = document.createElement("h5");
        const a = document.createElement("a");
        a.href = obj.website;
        a.textContent = obj.name;
        h5.appendChild(a);
        div7.appendChild(h5);

        div6.appendChild(div7);

        const div8 = document.createElement("div");
        div8.className = "em-team-content-subtitle-inner";

        const div9 = document.createElement("div");
        div9.className = "em-content-subtitle";
        const span = document.createElement("span");
        span.textContent = obj.position;
        div9.appendChild(span);

        div8.appendChild(div9);

        div5.appendChild(div6);
        div5.appendChild(div8);

        div2.appendChild(div3);
        div2.appendChild(div5);

        div1.appendChild(div2);

        mainDiv.appendChild(div1);

        currentRow.appendChild(mainDiv);
      });
    </script>
  </body>
</html>
