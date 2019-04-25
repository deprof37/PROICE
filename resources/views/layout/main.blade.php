<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>PRO-ICE LIMITED</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/nivo-slider/css/nivo-slider.css" rel="stylesheet">
  <link href="lib/owlcarousel/owl.carousel.css" rel="stylesheet">
  <link href="lib/owlcarousel/owl.transitions.css" rel="stylesheet">
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/venobox/venobox.css" rel="stylesheet">

  <!-- Nivo Slider Theme -->
  <link href="css/nivo-slider-theme.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- Responsive Stylesheet File -->
  <link href="css/responsive.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: eBusiness
    Theme URL: https://bootstrapmade.com/ebusiness-bootstrap-corporate-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body data-spy="scroll" data-target="#navbar-example">

  <header>
    <!-- header-area start -->
    <div id="sticker" class="header-area">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12">

            <!-- Navigation -->
            <nav class="navbar navbar-default">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                </button>
                <!-- Brand -->
                <a class="navbar-brand page-scroll sticky-logo" href="{{ route('/') }}">
                  <h1 class="md" style="font-size: 35px; color: #c0b765"><span><img src="img/ProIce.png" alt="" title="#slider-direction-1" /></span>P&nbsp;R&nbsp;O&nbsp;-&nbsp;I&nbsp;C&nbsp;E&nbsp; &nbsp;L&nbsp;I&nbsp;M&nbsp;I&nbsp;T&nbsp;E&nbsp;D&nbsp;</h1>
                  <!-- Uncomment below if you prefer to use an image logo -->
                  <!-- <img src="img/logo.png" alt="" title=""> -->
                </a>
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1" id="navbar-example">
                <ul class="nav navbar-nav navbar-right">
                  <li class="active">
                    <a class="page-scroll" href="{{ route('/') }}">Home</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="{{ route('/') }}#about">About Us</a>
                  </li>
                  <li class="dropdown"><a href="" class="dropdown-toggle" data-toggle="dropdown">Solutions<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                      <li><a class="page-scroll" href="{{ route('/services') }}#bus_consult">Business Consulting</a></li>
                      <li><a class="page-scroll" href="{{ route('/services') }}#bus_digit">Digitization & Digital Transformation</a></li>
                      <li><a class="page-scroll" href="{{ route('/services') }}#bus_auto">Business & Robotic Process Automation</a></li>
                      <li><a class="page-scroll" href="{{ route('/services') }}#bus_train">Human Resources Consulting & Training Service</a></li>
                    </ul>
                  </li>
                  
                 {{-- <li class="dropdown"><a href="" class="dropdown-toggle" data-toggle="dropdown">Industries<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                      <li><a class="page-scroll" href="{{ route('/industries') }}#bus_consult">Financial Services & Banks</a></li>
                      <li><a class="page-scroll" href="{{ route('/industries') }}#bus_digit">Manufacturing & Industrial Products</a></li>
                      <li><a class="page-scroll" href="{{ route('/industries') }}#bus_auto">Consumer Products</a></li>
                      <li><a class="page-scroll" href="{{ route('/industries') }}#bus_train">Distribution & Wholesale</a></li>
                      <li><a class="page-scroll" href="{{ route('/industries') }}#bus_train">Energy & Utilities</a></li>
                      <li><a class="page-scroll" href="{{ route('/industries') }}#bus_train">Government & Public Sector</a></li>
                      <li><a class="page-scroll" href="{{ route('/industries') }}#bus_train">Health Care & Life Sciences</a></li>
                      <li><a class="page-scroll" href="{{ route('/industries') }}#bus_train">Insurance</a></li>
                      <li><a class="page-scroll" href="{{ route('/industries') }}#bus_train">Telecoms</a></li>
                      <li><a class="page-scroll" href="{{ route('/industries') }}#bus_train">Retail</a></li>
                    </ul>
                  </li>  --}}
                   <li>
                    <a class="page-scroll" href="{{ route('/industries') }}">Industries</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="{{ route('/careers') }}">Careers</a>
                  </li>

                  <li>
                    <a class="page-scroll" href="{{ route('/') }}#team">Our Team</a>
                  </li>

                  <li>
                    <a class="page-scroll" href="{{route('medias')}}">Media Center</a>
                  </li>

                  <li>
                    <a class="page-scroll" href="{{ route('/') }}#contact">Contact</a>
                  </li>
                </ul>
              </div>
              <!-- navbar-collapse -->
            </nav>
            <!-- END: Navigation -->
          </div>
        </div>
      </div>
    </div>
    <!-- header-area end -->

  </header>
  <!-- header end -->
  <div class="container">
    
  </div>


  <div class="container">  
      <div class="row">
        @yield('content')
      </div>
  </div>

  <!-- Start Footer bottom Area -->
  <footer>
    <div class="footer-area" style="background: #383838;">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <div class="footer-logo">
                  <h2 class="md" style="font-size: 28px; color: #c0b765;"><span><img src="img/ProIce.png" alt="" title="#slider-direction-1" /></span>P&nbsp;R&nbsp;O&nbsp;-&nbsp;I&nbsp;C&nbsp;E&nbsp; &nbsp;L&nbsp;I&nbsp;M&nbsp;I&nbsp;T&nbsp;E&nbsp;D&nbsp;</h2>
                </div>

                <p class="text-justify" style=" color: white;">PRO-ICE is a Business and Technology Solutions Company. We have a combined year of more than 40 years experience in providing Human Resources Services and Business Technology Solutions</p>
              </div>
            </div>
          </div>
          <!-- end single footer -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <h4 style="color: white;">information</h4>
                <p style="color: white;">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.
                </p>
                <div class="footer-contacts">
                  <p style="color: white;"><span style="color: white;">Tel:</span> +123 456 789</p>
                  <p style="color: white;"><span style="color: white;">Email:</span> contact@example.com</p>
                  <p style="color: white;"><span style="color: white;">Working Hours:</span> 9am-5pm</p>
                </div>
              </div>
            </div>
          </div>
          <!-- end single footer -->
          
            <div class="col-lg-4 col-md-4 footer-links">
            <h4 style="color: white;">Useful Links</h4>
            <ul>
              <li style="margin-bottom: 10px;"><i class="ion-ios-arrow-right" style="color: white;"></i> <a style="color: white;" href="{{ route('/') }}">Home</a></li>
              <li style="margin-bottom: 10px;"><i class="ion-ios-arrow-right" style="color: white;"></i> <a style="color: white;" href="{{ route('/') }}#about">About Us</a></li>
              <li style="margin-bottom: 10px;"><i class="ion-ios-arrow-right" style="color: white;"></i> <a style="color: white;" href="{{ route('/services') }}">Services</a></li>
              <li style="margin-bottom: 10px;"><i class="ion-ios-arrow-right" style="color: white;"></i> <a style="color: white;" href="{{ route('/careers') }}">Careers</a></li>
              <li style="margin-bottom: 10px;"><i class="ion-ios-arrow-right" style="color: white;"></i> <a style="color: white;" href="{{ route('/industries') }}">Industries</a></li>
              <li style="margin-bottom: 10px;"><i class="ion-ios-arrow-right" style="color: white;"></i> <a style="color: white;" href="{{ route('/') }}#team">Our Team</a></li>
              <li style="margin-bottom: 10px;"><i class="ion-ios-arrow-right" style="color: white;"></i> <a style="color: white;" href="{{ route('medias') }}">Media Center</a></li>
              <li style="margin-bottom: 10px;"><i class="ion-ios-arrow-right" style="color: white;"></i> <a style="color: white;" href="{{ route('/') }}#contact">Contact Us</a></li>
            </ul>
          </div>
          </div>
        </div>
      </div>
    <div class="footer-area-bottom" style="background: black; color: white">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="copyright text-center">
              <p style="color: white;">
                &copy; Copyright <strong>PRO-ICE LIMITED</strong>. All Rights Reserved
              </p>
            </div>
            <div class="credits">
              Designed by Olusola Fatoye
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/venobox/venobox.min.js"></script>
  <script src="lib/knob/jquery.knob.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/parallax/parallax.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/nivo-slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
  <script src="lib/appear/jquery.appear.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>

  

  <script src="js/main.js"></script>
</body>

</html>