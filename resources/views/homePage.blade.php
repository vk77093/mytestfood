@extends('includes.mainpage')
@section('maincontent')
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
     <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="/assets/img/hero/01.png" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="/assets/img/hero/02.png" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="/assets/img/hero/03.png" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="/assets/img/hero/06.png" alt="Fourth slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
                <!---end Bootstrap Multiple slider--->
<!--- About us Added Section-------->
<hr>
<div class="container mt-2">
    <h5 class="text-center font-weight-bold" id="about">About Us</h5>
    <p class="text-center mr-2"><strong>Foodcoast International</strong> was started in 2009, as a trading company and set up its manufacturing base in 2010. We strive to serve consistently and innovatively the markets with best food products at competitive prices. The company is focused on planning and executing the conception, pricing, promotion and distribution of world class food products.</p>
          <p class="text-center mr-2">We are into manufacturing of Mayonnaise, Ketchup, Spreads, Salad Dressings, Indian gravies, Toppings, Crushes etc. for both Indian &amp; World cuisine, in bulk packaging for instutionalized sales.</p>
          <div class="text-center">
              <a href="/about#aboutTest"><button class="btn btn-danger text-center">Know More</button></a>
          </div>
</div>
<hr>
<div class="container mt-2">
    <div class="text-center">
        <img src="/assets/img/about/fc_rangeA.jpg" class="img-fluid hvr-grow">
    </div>
</div>
<hr>
<!--site-main start-->
    <div class="site-main">

        <!--shop-views-section-->
        <section class="shop-views-section clearfix">
             <div class="container">
                <!-- row -->
                <div class="row">

					<div class="col-lg-12">
<h2 class="text-center font-weight-bold" id="products">Our Team</h2>

                        <div class="tab-content mt-4" id="myTabContent">
                            <div class="tab-pane fade active show" id="grid" role="tabpanel">
                                <div class="row">
								<div class="col-lg-12">
                                    <div class="col-lg-12">
									 <p align="center"><img class="img-fluid pro-image-front" src="assets/img/ProductImage/img1.jpg" alt="" align="center">
                                      <h5 align="center">Mr. Harbans Lal Sharma</h5>
										<h6 align="center">2nd Feb. 1920- 2nd Dec. 2002<br>
Founder, H.R Group of Industries</h6></p>
</h6></p></p>
                                    </div>
									 </div><!-- product end -->

									<div class="col-lg-6">
									 <p align="center" ><img class="img-fluid pro-image-front" src="assets/img/ProductImage/img2.jpg" alt="" align="center">
                                      <h5 align="center">Suresh Sharma</h5>
										<h6 align="center">Managing Director<br>
</h6></p>
                                    </div>

									<div class="col-lg-6">
									 <p align="center"><img class="img-fluid pro-image-front" src="assets/img/ProductImage/img3.jpg" alt="" align="center">
                                      <h5 align="center">Sushant Sharma</h5>
										<h6 align="center">Director<br></h6></p>
                                    </div>



                                </div>
                            </div>

                        </div>

                    </div>
<!----company end---->
 {{-- <div class="col-lg-12">

                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade active show" id="grid" role="tabpanel">
                                <div class="row">
								<div class="col-lg-12">
								<p><br><br>
								<h3>In Service Since 1952.......</h3>
								<p style="font-size:18px;" align="justify">H.R. Industries originated from H.R. Group. The solid foundation of this Group was laid in 1952 by a futuristic visionary, an ex-Air Force Officer, Mr. Harbans Lal Sharma.</p>
								<p style="font-size:18px;" align="justify">In view of present market needs, we have developed H.R Industries with the latest machinery imported from Germany, USA & Taiwan. Our advanced CAD-CAM system for designing and machining of molds and dies as per customer requirement, latest forging plant, broaching and stamping machines, automatic grinding machines, PLC controlled heat treatment furnace for manufacturing high quality spanners, pliers, pincers adjustable wrenches etc . which are produced in environment friendly conditions while adhering to all safety norms & meeting customer specifications. We are ISO certified and BSCI approved for social compliance and accredited to use “GS” Quality Testing Mark from Germany on our spanners. Backed by highly experienced office staff and well trained qualified team of engineer and workers to produce world class quality. Our fully-furnished laboratory is equipped with Metal Analyzer Spectrometer, Rockwell and Vicker Hardness Testing machine along with Computerized Fatigue & Torque Testing machines, Salt Spray apparatus and others for complete testing of our products. Well managed packing and dispatch department.</p>
								<p style="font-size:18px;" align="justify">Capable of providing a comprehensive array of hand tools, H.R. Industries will always be privileged to connect and enhance relationship with its International clients.</p>
								</p>
								</div>
								</div>
								</div>
								</div>
								</div> --}}


                </div><!-- row end -->
            </div>
        </section>
        <!--team-section end-->


    </div><!--site-main end-->
    <hr>
@include('includes.promoSide')
<!---About us ended Section----->
<!--- Product Range Section------>
<hr>
 <div class="container mt-5" id="ourProduct">
<h5 class="text-center font-weight-bold" id="products">Our Unique Range of Foodcoast Products</h5>
<div class="row mt-3 text-center">
 <div class="col-sm-3 mt-3">
<div class="img hvr-float-shadow"><a href="/ourproduct.mayonnaise"><img src="/assets/img/adapt_icon/Mayo burger.png
    " class="img-fluid center-block" alt="Responsive image"></a></div>
    <p class="text-center mt-2">Mayoninse</p>

    </div>
    <div class="col-sm-3 mt-3">
<div class="img hvr-float-shadow">
   <a href="/ourproduct.sandwich"><img src="/assets/img/adapt_icon/Mayo.png" class="img-fluid center-block" alt="Responsive image"></a></div>
    <p class="text-center mt-2">Sandwich Spread & Salad Dressing</p>
    </div>
    <div class="col-sm-3 mt-3">
<div class="img hvr-float-shadow"><a href="/ourproduct.tomato"><img src="/assets/img/adapt_icon/Tomato.png" class="img-fluid center-block" alt="Responsive image"></a></div>
    <p class="text-center mt-2">Tomato Ketchups</p>
    </div>
    <div class="col-sm-3 mt-3">
<div class="img hvr-float-shadow"><a href="/ourproduct.sauces"><img src="/assets/img/adapt_icon/Sauces.png" class="img-fluid center-block" alt="Responsive image"></a></div>
    <p class="text-center mt-2">Sauces</p>
    </div>
    <div class="col-sm-3 mt-3">
<div class="img hvr-float-shadow"><a href="/ourproduct.gravies"><img src="/assets/img/adapt_icon/Gravies.png" class="img-fluid center-block" alt="Responsive image"></a></div>
    <p class="text-center mt-2">Gravies & Paste</p>
    </div>
    <div class="col-sm-3 mt-3">
<div class="img hvr-float-shadow"><a href="/ourproduct.dips"><img src="/assets/img/adapt_icon/DIP.png" class="img-fluid center-block" alt="Responsive image"></a></div>
    <p class="text-center mt-2">Dips</p>
    </div>
    <div class="col-sm-3 mt-3">
<div class="img hvr-float-shadow"><a href="/ourproduct.chocolate"><img src="/assets/img/adapt_icon/ChocolateSpread.png" class="img-fluid center-block" alt="Responsive image"></a></div>
    <p class="text-center mt-2">Chocolate & Toppings</p>
    </div>
    <div class="col-sm-3 mt-3">
<div class="img hvr-float-shadow"><a href="/ourproduct.fruits"><img src="/assets/img/adapt_icon/Crush.png" class="img-fluid center-block" alt="Responsive image"></a></div>
    <p class="text-center mt-2">Fruit Punches</p>
    </div>
</div>
 </div>
 <!--- product section End------>
<hr>
<div class="container mt-2">
    <div class="text-center">
        <a href="/assets/img/about/Foodcoast_Catalogue_2015.pdf" target="_blank"><strong class="hvr-pop font-weight-bold">Download PDF Catalogue</strong></a>
        <br>
        <a href="/assets/img/about/Foodcoast_Catalogue_2015.pdf"><img src="/assets/img/about/fc_download.jpg" class="img-fluid hvr-push"></a>
    </div>
</div>

                 {{-- <!-- About Area start -->
         <section class="about-area section-padding mt-0">
            <div class="container">
                <div class="row ">
                    <div class="col-lg-5">
                        <div class="about-caption mb-50">
                            <h3>Designing With Passion While Exploring The World.</h3>
                            <p class="pera1">Consectetur adipiscing elit, sed do eiusmod tempor ididunt ut labore et dolore magna aliqua. Quis ipsum suspendisces gravida. Risus commodo viverra sebfd dho eiusmod tempor maecenas accumsan lacus.</p>
                            <p>Consectetur adipiscing elit, sed do eiusmod tempor ididunt ut labore et dolore magna aliqua. </p>
                        </div>
                    </div>
                    <div class="col-lg-5 offset-lg-1">
                        <div class="about-caption2">
                            <h3>Any Type Of Query<br> & Discussion.</h3>
                            <p>Late talk with me</p>
                           <div class="send-cv">
                                <a href="#">hire@vijay.com</a>
                                <i class="ti-arrow-right"></i>
                           </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- About Area End -->
{{-- <hr>
@include('includes.counter') --}}
<hr>
<div class="container mb-3">
<div class="row text-center">
   <img src="/assets/img/banner/FCIBuilding.jpg" class="hvr-grow-shadow img-fluid">
</div>
</div>
<hr>
<div class="container mb-3">
 <h2 class="text-center font-weight-bold" id="certificate">Our Certificates</h2>
    <div class="row text-center mt-4">
        <div class="col-sm-6">
        <img src="/assets/img/banner/Halal Certificate.jpg" class="img-fluid hvr-grow">
        </div>
         <div class="col-sm-6">
 <img src="/assets/img/banner/FSSC 22000 Certificate.jpg" class="img-fluid hvr-grow">
        </div>
    </div>
</div>
<div class="text-center mt-2">
              <a href="/certificate"><button class="btn btn-danger text-center">Know More</button></a>
          </div>
<hr>
<div class="container mb-2" style="border-style: outset;">
    <div class="jumbotron jumbotron-fluid" style="background-color: white">
  <div class="container text-center">
    <h1 class="display-4">Upcoming Product Name</h1>
    <p class="lead">35 days Left</p>
    <div class="text-center">
              <a href="/upcoming"><button class="btn btn-danger text-center">Know More</button></a>
          </div>
  </div>
</div>
</div>


{{-- @include('includes.progress') --}}
@endsection
