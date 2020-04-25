@extends('includes.mainpage')
@section('maincontent')

<!-- Hero Start -->
        <div class="slider-area ">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap">
                                <h2>Upcoming Events</h2>
                                <nav aria-label="breadcrumb ">
                                    <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="">Home</a></li>
                                    <li class="breadcrumb-item"><a href="">Upcoming Events</a></li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- our upcoming Events ---->
<div class="container">
    <div class="section-top-border">
        <h3>Our Upcoming Events</h3>
        <div class="col md-4">
<!-- Card Wider -->
  <div class="card card-cascade wider mt-2 mb-3">

    <!-- Card image -->

    <div class="view view-cascade overlay hvr-shrink">
      <img  class="myimage" src="https://mdbootstrap.com/img/Photos/Others/photo6.jpg" alt="Card image cap">
      <a href="#!">
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>

    <!-- Card content -->
    <div class="card-body card-body-cascade text-center">

      <!-- Title -->
      <h4 class="card-title"><strong>AAHAR - 45</strong></h4>
      <!-- Subtitle -->
      <h5 class="blue-text pb-2"><strong>Some place name</strong></h5>
      <!-- Text -->
      <p class="card-text">Address and venue details and much more content for the user </p>

      <!-- Dribbble -->
      <a class="btn-floating btn-fb mx-1"href="https://www.facebook.com/sharer.php?u=http%3A%2F%2Fcss-tricks.com%2F" target="_blank"><i class="fab fa-facebook-f" id="social-fb"></i></a>
      <!-- Linkedin -->
      <a class="px-2 fa-lg li-ic" href="https://www.linkedin.com/shareArticle?..." target="_blank"><i class="fab fa-linkedin-in"></i></a>
      <!-- Twitter -->
      <a class="px-2 fa-lg tw-ic" href="https://twitter.com/intent/tweet?..." target="_blank"><i class="fab fa-twitter"></i></a>


    </div>

  </div>
  <!-- Card Wider -->

        </div>
    </div>
</div>
<!---end of upcoming events----->


@endsection
