@extends('includes.mainpage')
@section('maincontent')
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="/assets/img/hero/fruit1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="/assets/img/hero/fruit2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="/assets/img/hero/fruit3.jpg" alt="Third slide">
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
                 <!-- About Area start -->
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
        </section>
        <!-- About Area End -->
        <!--site-main start-->
    <div class="site-main">

        <!--shop-views-section-->
        <section class="shop-views-section clearfix">
             <div class="container">
                <!-- row -->
                <div class="row">

					<div class="col-lg-12">

                        <div class="tab-content" id="myTabContent">
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
 <div class="col-lg-12">

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
								</div>


                </div><!-- row end -->
            </div>
        </section>
        <!--team-section end-->


    </div><!--site-main end-->

@endsection
