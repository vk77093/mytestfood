<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>FoodCoast</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

		<!-- CSS here -->
            <link rel="stylesheet" href="{{URL::asset('assets/css/bootstrap.min.css')}}">
            {{-- <link rel="stylesheet" href="assets/css/owl.carousel.min.css"> --}}
            <link rel="stylesheet" href="assets/css/slicknav.css">
            <link rel="stylesheet" href="assets/css/flaticon.css">
            <link rel="stylesheet" href="assets/css/animate.min.css">
            <link rel="stylesheet" href="assets/css/magnific-popup.css">
            <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
            <link rel="stylesheet" href="assets/css/themify-icons.css">
            <link rel="stylesheet" href="assets/css/slick.css">
            <link rel="stylesheet" href="assets/css/nice-select.css">
            <link rel="stylesheet" href="assets/css/style.css">
             <link rel="stylesheet" href="assets/css/mycss.css">
              <link rel="stylesheet" href="assets/css/hover-min.css">

<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

   </head>
<body>

<!-- Preloader Start -->
    {{-- <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/loder.jpg" alt="">
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
        <div class="header-area">
                <div class="main-header  header-sticky">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-2 col-lg-2 col-md-1">
                                <div class="logo">
                                    <a href="/"><img src="assets/img/logo/FCILogo.jpg" alt="FCI LOGO"></a>
                                </div>
                            </div>
                            <div class="col-xl-10 col-lg-10 col-md-10">
                                <div class="menu-main d-flex align-items-center justify-content-end">
                                    <!-- Main-menu -->
                                    <div class="main-menu f-right d-none d-lg-block">
                                        <nav>
                                            <ul id="navigation">
                                                <li><a href="/">Home</a></li>
                                                <li><a href="/about">About</a> </li>
                                                <li><a href="">Food Services</a>
                                                <ul class="submenu">
                                                    <li><a href="/ourproduct">Product Range</a></li>
                                                    <li><a href="nationPresent">Nationwise Present</a></li>
                                                    <li><a href="/whoweserve">Who We Serve</a></li>
                                                </ul>
                                                </li>
                                                <li><a href="">Brands</a>
                                                <ul class="submenu">
                                                    <li><a href="/ourbrand">Our Brand</a></li>
                                                    <li><a href="/yourbrand">Your Brand</a></li>
                                                </ul>
                                                </li>
                                                <li><a href="#">Participation</a>
                                                    <ul class="submenu">
                                                        <li><a href="/ourparticipation">Our Participation</a></li>
                                                        <li><a href="/upcoming">Upcoming Events</a></li>

                                                    </ul>
                                                </li>
                                                <li><a href="">Contact</a>
                                                    <ul class="submenu">
                                                        <li><a href="contact">Contact Us</a></li>
                                                        <li><a href="carrier">Carrier</a></li>
                                                    </ul>

                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <div class="header-right-btn f-right d-none d-xl-block ml-20">
                                        <a href="#" class="btn header-btn">Export</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <!-- Header End -->
    </header>
    <main>
  @yield('maincontent')

         </main>
<!-- Footer -->
<footer class="page-footer font-small footer-back">

  <!-- Footer Links -->
  <div class="container text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-4 mx-auto">

        <!-- Content -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4 footer-back text-center">Address</h5>
        {{-- <p class="footer-back">Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit amet,
          consectetur
          adipisicing elit.</p> --}}
          <ul class="widget_info_text">
             <li class="text-center"><i class="fa fa-location-arrow fa-2x" aria-hidden="true"></i> A-23/A Focal Point </li>
             <li class="text-center">Jalandhar, Punjab</li>
             <li class="text-center"><i class="fa fa-envelope fa-2x" aria-hidden="true"></i>  info@foodcoast.com </li>
             <li class="text-center mr-3"><i class="fa fa-phone fa-2x"></i> 0181-5077771/72</li>

          </ul>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-4 mx-auto">

        <!-- Links -->
        {{-- <h5 class="font-weight-bold text-uppercase text-center mt-3 mb-4 footer-back">Maps</h5> --}}

        <ul class="list-unstyled">
            <br>
         <span class=""><a href="https://goo.gl/maps/fa8x7wAGPq7Atwmz7" target="_blank"><img src="/assets/img/hero/MAPSecond.png"></a></span>
        </ul>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-4 mx-auto">

        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4 footer-back text-center">Follow us</h5>

<ul class="list-unstyled list-inline text-center">
    <li class="list-inline-item">
      <a class="btn-floating btn-fb mx-1">
        <i class="fab fa-facebook-f" id="social-fb"> </i>
      </a>
    </li>
    <li class="list-inline-item">
      <a class="btn-floating btn-tw mx-1">
        <i class="fab fa-twitter" id="social-tw"> </i>
      </a>
    </li>
    <li class="list-inline-item">
      <a class="btn-floating btn-gplus mx-1">
        <i class="fab fa-google-plus-g" id="social-gp"> </i>
      </a>
    </li>
  </ul>
<div class="container mt-5 text-center">

    <ul class="list-unstyled list-inline ">
        <li class="list-inline-item"><a href="">Certificate</a></li>
        <li class="list-inline-item"><a href="">Upcoming</a></li>
        <li class="list-inline-item"><a href="">Jion Us</a></li>
    </ul>

</div>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <hr>
  <div class="container text-center text-md-left">
      <div class="row">
<div class="col-md-4 mx-auto">
<h5 class="font-weight-bold text-uppercase mt-3 mb-4 footer-back text-center">About us</h5>
<p class="span text-center footer-back">FOODCOAST is a name synonymous with premium quality food products in the
    Indian and the world market. Its relationship with the food industry dates back to over a decade.
 <a href="/about#aboutTest"><button class="btn btn-primary">Read More</button></a></p>
</div>
<div class="col-md-4 mx-auto">
<h5 class="font-weight-bold text-uppercase mt-3 mb-4 footer-back text-center">Our Brands</h5>
<ul class="list-unstyled list-inline text-center">
    <li class="list-inline-item">
        <a href="" class="mx-1">Foodcoast</a>
      {{-- <a href="" class="mx-1"><img src="assets/img/logo/FCILogo.jpg"></a> --}}
    </li>
    <li class="list-inline-item">
     <a href="" class="mx-1">Aaria</a>
    </li>
    <li class="list-inline-item">
       <a href="" class="mx-1">Trru</a>
    </li>
    <li class="list-inline-item">
       <a href="" class="mx-1">Afrin</a>
    </li>
    <li class="list-inline-item">
      <a href="" class="mx-1">Retail</a>
    </li>
  </ul>
</div>
<div class="col-md-4 mx-auto">
   <h5 class="font-weight-bold text-uppercase mt-3 mb-4 footer-back text-center">Export</h5>
   <p class="span text-center footer-back">Additionally, Bootstrap also includes an .mx-auto class for horizontally
    centering fixed-width block level content—that is, content that has display:
    block and a width set—by setting the horizontal <button class="btn btn-primary">Read More</button></p>
</div>
      </div>
  </div>
 <hr>

  <!-- Call to action -->
  <ul class="list-unstyled list-inline text-center py-2">
    <li class="list-inline-item">
      <h5 class="mb-1 footer-back">Our Main Range</h5>
    </li>
  </ul>
  <ul class="list-unstyled list-inline text-center mt-3">
      <li class="list-inline-item"><a href="">Mayoninse |</a></li>
      <li class="list-inline-item"><a href="">Sandwich Spread |</a></li>
      <li class="list-inline-item"><a href="">Salad Dressing |</a></li>
      <li class="list-inline-item"><a href="">Tomato Ketchups |</a></li>
      <li class="list-inline-item"><a href="">Sauces |</a></li>
      <li class="list-inline-item"><a href="">Dips |</a></li>
       <li class="list-inline-item"><a href="">Chocolate & Toppings |</a></li>
        <li class="list-inline-item"><a href="">Fruit Punches |</a></li>

  </ul>
  <!-- Call to action -->

  <hr>



  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright: BY
    <a href="https://www.foodcoast.com"> Foodcoast</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
<!---end of footer--->
    <!-- Scroll Up -->
    <div id="back-top" >
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

    <!-- JS here -->
		<!-- All JS Custom Plugins Link Here here -->
        <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
		<!-- Jquery, Popper, Bootstrap -->
		<script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="./assets/js/popper.min.js"></script>
        <script src="./assets/js/bootstrap.min.js"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="./assets/js/jquery.slicknav.min.js"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="./assets/js/owl.carousel.min.js"></script>
        <script src="./assets/js/slick.min.js"></script>
		<!-- One Page, Animated-HeadLin -->
        <script src="./assets/js/wow.min.js"></script>
		<script src="./assets/js/animated.headline.js"></script>
        <script src="./assets/js/jquery.magnific-popup.js"></script>

		<!-- Nice-select, sticky -->
        <script src="./assets/js/jquery.nice-select.min.js"></script>
		<script src="./assets/js/jquery.sticky.js"></script>

        <!-- contact js -->
        <script src="./assets/js/contact.js"></script>
        <script src="./assets/js/jquery.form.js"></script>
        <script src="./assets/js/jquery.validate.min.js"></script>
        <script src="./assets/js/mail-script.js"></script>
        <script src="./assets/js/jquery.ajaxchimp.min.js"></script>

		<!-- Jquery Plugins, main Jquery -->
        <script src="./assets/js/plugins.js"></script>
        <script src="./assets/js/main.js"></script>

    </body>
</html>
