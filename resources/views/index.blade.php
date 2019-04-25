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

  <div id="preloader"></div>
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
                    <a class="page-scroll" href="#home">Home</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="#about">About Us</a>
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
                      <li><a class="page-scroll" href="{{ route('/industries') }}#fin">Financial Services & Banks</a></li>
                      <li><a class="page-scroll" href="{{ route('/industries') }}#man">Manufacturing & Industrial Products</a></li>
                      <li><a class="page-scroll" href="{{ route('/industries') }}#con">Consumer Products</a></li>
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
                    <a class="page-scroll" href="{{route('/careers')}}">Careers</a>
                  </li>

                  <li>
                    <a class="page-scroll" href="#team">Our Team</a>
                  </li>

                  <li>
                    <a class="page-scroll" href="{{route('medias')}}">Media Center</a>
                  </li>

                  <li>
                    <a class="page-scroll" href="#contact">Contact</a>
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

      <!-- Start Slider Area -->
  <div id="home" class="slider-area">
    <div class="bend niceties preview-2">
      <div id="ensign-nivoslider" class="slides">
        <img src="img/slider/slider1.jpg" alt="" title="#slider-direction-1" />
        <img src="img/slider/slider2.jpg" alt="" title="#slider-direction-2" />
        <img src="img/slider/slider3.jpg" alt="" title="#slider-direction-3" />
        <img src="img/slider/slider4.jpg" alt="" title="#slider-direction-2" />
        <img src="img/slider/slider5.jpg" alt="" title="#slider-direction-1" />
  </div>

      <!-- direction 1 -->

      <div id="slider-direction-1" class="slider-direction slider-one">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content">
                <!-- layer 1 -->
                <div class="layer-1-1 hidden-xs wow slideInDown" data-wow-duration="2s" data-wow-delay=".2s">
                  <!--h2 class="title1">The Best Business Information </h2-->
                </div>
                <!-- layer 2 -->
                <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                  <!--h1 class="title2">We're In The Business Of Helping You Start Your Business</h1-->
                </div>
                <!-- layer 3 -->
                <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <!--a class="ready-btn right-btn page-scroll" href="#services">See Services</a-->
                  <!--a class="ready-btn page-scroll" href="#about">Learn More</a-->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- direction 2 -->
      <div id="slider-direction-2" class="slider-direction slider-two">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content text-center">
                <!-- layer 1 -->
                <div class="layer-1-1 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <!--h2 class="title1">The Best Business Information </h2>
                </div-->
                <!-- layer 2 -->
                <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                  <!--h1 class="title2">We're In The Business Of Get Quality Business Service</h1-->
                </div>
                <!-- layer 3 -->
                <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <!--a class="ready-btn right-btn page-scroll" href="#services">See Services</a-->
                  <!--a class="ready-btn page-scroll" href="#about">Learn More</a-->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
      <!-- direction 3 -->
      <div id="slider-direction-3" class="slider-direction slider-two">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content">
                <!-- layer 1 -->
                <div class="layer-1-1 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <!--h2 class="title1">The Best business Information </h2-->
                </div>
                <!-- layer 2 -->
                <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                  <!--h1 class="title2">Helping Business Security  & Peace of Mind for Your Family</h1-->
                </div>
                <!-- layer 3 -->
                <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <!--a class="ready-btn right-btn page-scroll" href="#services">See Services</a-->
                  <!--a class="ready-btn page-scroll" href="#about">Learn More</a-->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    

  <!-- direction 4 -->
      <div id="slider-direction-3" class="slider-direction slider-two">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content">
                <!-- layer 1 -->
                <div class="layer-1-1 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <!--h2 class="title1">The Best business Information </h2-->
                </div>
                <!-- layer 2 -->
                <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                  <!--h1 class="title2">Helping Business Security  & Peace of Mind for Your Family</h1-->
                </div>
                <!-- layer 3 -->
                <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <!--a class="ready-btn right-btn page-scroll" href="#services">See Services</a-->
                  <!--a class="ready-btn page-scroll" href="#about">Learn More</a-->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- direction 5 -->
      <div id="slider-direction-2" class="slider-direction slider-two">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content text-center">
                <!-- layer 1 -->
                <div class="layer-1-1 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <!--h2 class="title1">The Best Business Information </h2>
                </div-->
                <!-- layer 2 -->
                <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                  <!--h1 class="title2">We're In The Business Of Get Quality Business Service</h1-->
                </div>
                <!-- layer 3 -->
                <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <!--a class="ready-btn right-btn page-scroll" href="#services">See Services</a-->
                  <!--a class="ready-btn page-scroll" href="#about">Learn More</a-->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </div>
  <!-- End Slider Area -->

  <!-- Start About area -->
  <div id="about" class="about-area area-padding">
    
    <div class="container">

        <header class="section-header" align="left">
          <br>
          
          <div class="single-well">
            <p class="text-justify"><strong style="font-size: 22px; color:#c0b765">PRO-ICE</strong> is a Business and Technology Solutions Company. We have a combined year of more than 40 years experience in providing Human Resources Services and Business Technology Solutions, including:
            <ul>
                <li><i class="fa fa-check"></i>Digitization & Digital Transformation</li>
                <li><i class="fa fa-check"></i>Business Automation & Robotic Process Automation</li>
                <li><i class="fa fa-check"></i>HR Consulting & Training Services</li>
                <li><i class="fa fa-check"></i>Business Consulting/Advisory Services and Change Management</li>
            </ul>
          </p>
        </div>
          <p>And now Robotic Process Automation, which we have partnered with UiPath to help our clients to journey through digital transformation.</p>
        </header>

        <div class="row about-cols">

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
            <div class="about-col">
              <div class="img">
                <img src="img/about/about-vision.jpg" alt="" class="img-fluid">
                  <div class="icon"><i class="ion-ios-eye-outline"></i></div>
              </div>
              <h2 class="title" style="color:#4286f4;">Our Vision</h2>
              <p class="lead text-justify">
                To be the most sought-after business enablers in Nigeria.
              </p>
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp">
            <div class="about-col">
                <div class="img">
                    <img src="img/about/about-mission.jpg" alt="" class="img-fluid">
                    <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
                </div>
              <h2 class="title" style="color:#4286f4;">Our Mission</h2>
              <p class="lead text-justify">
                To surpass clients' expectations on every assignment.
              </p>
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
            <div class="about-col">
              <div class="img">
                <img src="img/about/about-plan.jpg" alt="" class="img-fluid">
                  <div class="icon"><i class="ion-ios-list-outline"></i></div>
              </div>
              <h2 class="title" style="color:#4286f4;">Our Approach</h2>
              <p class="text-justify">
                Our Approach is simply sustainable partnership, so we partner and collaborate in developing client specific user friendly and intuitive solutions and we train the people to use them, resulting in more efficient service delivery, happy employee, huge cost savings and profitable outcomes.
              </p>
            </div>
          </div>
        </div>

      </div>
  </div>
  <!-- End About area -->

  <!-- Start Service area -->
  <div id="services" class="about-area area-padding">
    
    <div class="container">

        <header class="section-header" align="center">
          <br><br>
          <h3 style="color: #757575"><strong><button type="button" id="ourSer">Our Services</button></strong></h3>
        </header>
        <br>
        <div class="row about-cols" id="srv">

          <div class="col-md-3 wow fadeInUp">
            <div class="about-col">
              <a href="{{ route('/services') }}#bus_auto">
                <div class="img">
                    <img src="img/slider/slider2.jpg" alt="" class="img-fluid">
                </div>
              <h2 class="title mc" style="font-size:22px; color:#757575; margin-top: 0px;">Business Automation & <br>Robotic Process Automation</h2></a><br>
            {{--  <p class="text-justify">
                One of the ways we drive digital transformation at PRO-ICE LTD  is through the use of Robotic Process Automation (RPA), which is capable of supporting the coordination of a project team and company management — as well as all involved employees — is a key driver in success.
                <br><br>

                <a href="#" class="btn btn-primary">Read More...</a>
              </p> --}}
            </div>
          </div>

          <div class="col-md-3 wow fadeInUp" data-wow-delay="0.2s">
            <div class="about-col">
            <a href="{{ route('/services') }}#bus_consult">
              <div class="img">
                <img src="img/slider/slider3.jpg" alt="" class="img-fluid">
              </div>
              <h2 class="title mc" style="font-size:22px; color:#757575; margin-top: 0px;">Business Consulting</h2>
            </a><br>
          {{--    <p class="text-justify">
                At PRO-ICE, we learn and understand your organization, your peculiarities, strengths and weaknesses to proffer tailor-made solutions
              </p>
              <p class="text-justify">
                At PRO-ICE, we learn and understand your organization, your peculiarities, strengths and weaknesses to proffer tailor-made solutions
                <br><br>

                <a href="#" class="btn btn-primary">Read More...</a>
              </p>  --}}
                
            </div>
          </div>

          <div class="col-md-3 wow fadeInUp" data-wow-delay="0.1s">
            <div class="about-col">
            <a href="{{ route('/services') }}#bus_digit">
              <div class="img">
                <img src="img/slider/slider4.jpg" alt="" class="img-fluid">
              </div>
              <h2 class="title mc" style=" font-size:22px;color:#757575; margin-top: 0px;">Digitization & Digital Transformation</h2>
            </a><br>
            {{--  <p class="text-justify">
                With technological advances in Artificial Intelligence and Robotics, significant number of business processes is continually being automated.
              </p>
              <p class="text-justify">
                We are positioned to take advantage of the continuous merge between machines and AI, by designing and automating processes on behalf our clients
                <br><br>

                <a href="#" class="btn btn-primary">Read More...</a>
              </p> --}}

            </div>
          </div>

          <div class="col-md-3 wow fadeInUp" data-wow-delay="0.2s">
            <div class="about-col">
            <a href="{{ route('/services') }}#bus_train">
              <div class="img">
                <img src="img/slider/slider5.jpg" alt="" class="img-fluid">
              </div>
              <h2 class="title mc" style="font-size:22px; color:#757575; margin-top: 0px;">Human Recources Consulting & Training Services</h2>
            </a><br>
          {{--    <p class="text-justify">
                Organizations are increasingly facing political, technological, environmental economic disruptions, thereby requiring a new breed of workers who are agile-minded to tap into the opportunities this evolving environment presents
              </p class="text-justify">
              <p class="text-justify">At PRO-ICE, enabling, developing and sharing knowledge with people is at the core of our services.
              <br><br>

                <a href="#" class="btn btn-primary">Read More...</a> 
              </p>  --}}

            </div>
          </div>

        </div>

      </div>
  </div>
  <!-- End Service area -->

  

  <!--Embeded Video -->
  <div class="container">
    <div class="row">
      <div class="container-fluid">
        <div class="embed-container"><iframe width="560" height="315" src="{{$url->url}}" frameborder="0" allowfullscreen=""> </iframe> </div> 
      </div>
    </div>
  </div>



  

  <!-- Start team Area -->
  <div id="team" class="our-team-area area-padding" style="background: #9b9b9b;">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <br><br>
            <h2 style="color: #232ca3;">Our Team</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="team-top">
          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="single-team-member">
              <div class="team-img">
                <a href="#"><img src="img/team/1.jpg" alt=""></a>
                <div class="team-social-icon text-center">
                  <ul>
                    <li>
                      <a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-instagram"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="team-content text-center">
                <h4>Jhon Mickel</h4>
                <p>Seo</p>
              </div>
            </div>
          </div>
          <!-- End column -->
          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="single-team-member">
              <div class="team-img">
                <a href="#"> <img src="img/team/2.jpg" alt=""></a>
                <div class="team-social-icon text-center">
                  <ul>
                    <li>
                      <a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-instagram"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="team-content text-center">
                <h4>Andrew Arnold</h4>
                <p>Web Developer</p>
              </div>
            </div>
          </div>
          <!-- End column -->
          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="single-team-member">
              <div class="team-img">
                <a href="#"><img src="img/team/3.jpg" alt=""></a>
                <div class="team-social-icon text-center">
                  <ul>
                    <li>
                      <a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-instagram"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="team-content text-center">
                <h4>Lellien Linda</h4>
                <p>Web Design</p>
              </div>
            </div>
          </div>
          <!-- End column -->
          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="single-team-member">
              <div class="team-img">
                <a href="#"><img src="img/team/4.jpg" alt=""></a>
                <div class="team-social-icon text-center">
                  <ul>
                    <li>
                      <a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-instagram"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="team-content text-center">
                <h4>Jhon Powel</h4>
                <p>Seo Expert</p>
              </div>
            </div>
          </div>
          <!-- End column -->
        </div>
      </div>
    </div>
  </div>
  <!-- End Team Area -->

  <br>

   
  <!--==========================
      Partners Section
    ============================-->
    <!--div id="clients" class="wow fadeInUp">
      <div class="container">
        <div class="row">
        <header class="section-header" align="center">
          <h3>Our Clients</h3>
        </header>

        <div class="col-md-4 col-sm-6 col-xs-6">
          <img src="img/partner/uipath.jpg" alt="">
        </div>
        <div class="col-md-4 col-sm-6 col-xs-6">
          <img src="img/partner/sbsc.png" alt="">
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
          <img src="img/partner/nasnav.jpeg" alt="">
        </div>
        </div>

      </div>
      </div>
    </div><!-- #clients -->

    <!--==========================
      Partners Section
    ============================-->
    
  

 <!-- Start contact Area -->
  <div id="contact" class="contact-area">
    <div class="contact-inner area-padding">
      <div class="contact-overly"></div>
      <div class="container ">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <br><br>
              <h2>Contact us</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- Start contact icon column -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="contact-icon text-center">
              <div class="single-icon">
                <i class="fa fa-mobile"></i>
                <p>
                  Call: +1 5589 55488 55<br>
                  <span>Monday-Friday (9am-5pm)</span>
                </p>
              </div>
            </div>
          </div>
          <!-- Start contact icon column -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="contact-icon text-center">
              <div class="single-icon">
                <i class="fa fa-envelope-o"></i>
                <p>
                  Email: info@example.com<br>
                  <span>Web: www.example.com</span>
                </p>
              </div>
            </div>
          </div>
          <!-- Start contact icon column -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="contact-icon text-center">
              <div class="single-icon">
                <i class="fa fa-map-marker"></i>
                <p>
                  Location: A108 Adam Street<br>
                  <span>NY 535022, USA</span>
                </p>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </div>
  <!-- End Contact Area -->

  <!-- Start Footer bottom Area -->
  <footer>
    <div class="footer-area" style="background: #383838;">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <div class="footer-logo">
                  <h2 style="font-size: 18px; color: #c0b765;"><span><img src="img/ProIce.png" alt="" title="#slider-direction-1" /></span>PRO-ICE LIMITED</h2>
                </div>

                <p class="text-justify" style=" color: white;">PRO-ICE is a Business and Technology Solutions Company. We have a combined year of more than 40 years experience in providing Human Resources Services and Business Technology Solutions</p>
              </div>
            </div>
          </div>
          <!-- end single footer -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <h4 style="color: white;">INFORMATION</h4>
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
              <li style="margin-bottom: 10px;"><i class="ion-ios-arrow-right" style="color: white;"></i> <a style="color: white;" href="#home">Home</a></li>
              <li style="margin-bottom: 10px;"><i class="ion-ios-arrow-right" style="color: white;"></i> <a style="color: white;" href="#about">About Us</a></li>
              <li style="margin-bottom: 10px;"><i class="ion-ios-arrow-right" style="color: white;"></i> <a style="color: white;" href="">Services</a></li>
              <li style="margin-bottom: 10px;"><i class="ion-ios-arrow-right" style="color: white;"></i> <a style="color: white;" href="{{ route('/careers') }}">Careers</a></li>
              <li style="margin-bottom: 10px;"><i class="ion-ios-arrow-right" style="color: white;"></i> <a style="color: white;" href="{{ route('/industries') }}">Industries</a></li>
              <li style="margin-bottom: 10px;"><i class="ion-ios-arrow-right" style="color: white;"></i> <a style="color: white;" href="#team">Our Team</a></li>
              <li style="margin-bottom: 10px;"><i class="ion-ios-arrow-right" style="color: white;"></i> <a style="color: white;" href="{{ route('medias') }}">Media Center</a></li>
              <li style="margin-bottom: 10px;"><i class="ion-ios-arrow-right" style="color: white;"></i> <a style="color: white;" href="#contact">Contact Us</a></li>
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

<script>
    // $(document).ready(function(){
    //     $('#srv').hide();

    //     $('#ourSer').on('click', function(){
    //         $('#srv').show();
    //     })
    // })
</script>