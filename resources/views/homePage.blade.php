@extends('includes.mainpage')
@section('maincontent')
<style>
..carousel-inner > .carousel-item > img {
  width:640px;
  height:160px;
}
</style>
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
          <p class="text-center mr-2">We are into manufacturing of Mayonnaise, Ketchup, Spreads, Salad Dressings, Gravies, Toppings, Crushes etc. for both Indian &amp; World cuisine, in bulk packaging for instutionalized sales.</p>
          <div class="text-center">
              <a href="/about#aboutTest"><button class="btn hero-btn"  data-animation="fadeInLeft" data-delay=".8s">Know More</button></a>
          </div>
</div>
<hr>
<div class="container mt-2">
    <div class="text-center">
        <img src="/assets/img/about/fc_rangeA.jpg" class="img-fluid hvr-grow">
    </div>
</div>
<!---Here is Team Section---->

<!--end of Team Section----------->

{{-- @include('includes.promoSide') --}}
<!---About us ended Section----->
<!--- Product Range Section------>
<hr>
 <div class="container mt-5" id="ourProduct">
<h5 class="text-center font-weight-bold" id="products">Our Unique Range of Products</h5>
<div class="row mt-3 text-center">
 <div class="col-sm-3 mt-3">
<div class="img hvr-float-shadow"><a href="/ourproduct.mayonnaise"><img src="/assets/img/adapt_icon/Mayo burger.png
    " class="img-fluid center-block" alt="Responsive image"></a></div>
    <p class="text-center mt-2">Mayoninses</p>

    </div>
    <div class="col-sm-3 mt-3">
<div class="img hvr-float-shadow">
   <a href="/ourproduct.sandwich"><img src="/assets/img/adapt_icon/Mayo.png" class="img-fluid center-block" alt="Responsive image"></a></div>
    <p class="text-center mt-2">Spreads & Salad Dressings</p>
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
    <p class="text-center mt-2">Gravies & Pastes</p>
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

<hr>
<div class="container mb-3">
<div class="row text-center">
   <img src="/assets/img/banner/FCIBuilding.jpg" class="hvr-grow-shadow img-fluid">
</div>
</div>
<hr>
<div class="container mb-3">
 <h2 class="text-center font-weight-bold" id="certificate">Certifications</h2>
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
              <a href="/certificate"><button class="btn hero-btn"  data-animation="fadeInLeft" data-delay=".8s">Know More</button></a>
          </div>
<hr>
<div class="container mb-2" style="border-style: outset;">
    <div class="jumbotron jumbotron-fluid" style="background-color: white">
  <div class="container text-center">
    <h1 class="display-4">Upcoming Product Name</h1>
    <p class="lead">35 days Left</p>
    <div class="text-center">
              <a href="/upcoming"><button class="btn hero-btn"  data-animation="fadeInLeft" data-delay=".8s">Know More</button></a>
          </div>
  </div>
</div>
</div>
@endsection
