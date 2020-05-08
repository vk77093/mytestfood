@extends('includes.mainpage')
@section('maincontent')
<!-- Hero Start -->
        <div class="slider-area ">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap">
                                <h2>Become A Member</h2>
                                <nav aria-label="breadcrumb ">
                                    <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="">Home</a></li>
                                    <li class="breadcrumb-item"><a href="">Become A Member</a></li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->
        <!--- some line for Member---->
        <div class="container pb-top">
            <section class="intro-text">
                <blockquote class="generic-blockquote">
                    "
  <strong>Thank you for your interest in Foodcoast International! We are grateful for the opportunity to show you why Foodcoast International is the superior choice for your business.</strong>
  "
  <br>
  " <span class="innovative">Food and fresh ideas are at the heart of the food industry. Foodcoast’s unparalleled selection of innovative ingredients and cutting-edge products connects your business to an industry leading distribution network – keeping you stocked with the freshest products, trends and ideas.</span> "
                </blockquote>

            </section>
        </div>

        <!--- end of member line---->
        <div class="container">
<section class="intro-text">
            <div class="card">
                <div class="card-header" id="memberData">
                    @if (Session::has('memberData'))
                    <p class="alert alert-danger">
                        {{session('memberData')}}
                    </p>
                    @endif
              <h3 class="text-center">Get Started With Us</h3>
              <p class="text-center">Please Enter Your Contact Information Below and Hit Enter</p>
                </div>
                <div class="crad-body">
                <form method="post" action="{{route('Become-A-Member.store')}}">
@csrf
<div class="form-group mt-4">
<input class="form-control" type="text" name="clinet_name" placeholder="Enter Name" required>
</div>
<div class="form-group mt-4">
    <input class="form-control" type="text" name="buss_address" placeholder="Enter The Business Enter" required>
</div>
<div class="form-group mt-4">
    <input class="form-control" type="number" name="zipcode" placeholder="Enter The Zip Code" required>
</div>
<div class="form-group mt-4">
    <input class="form-control" type="tel" maxlength="10" minlength="10"  name="client_number" placeholder="Your Contact Number" required>
</div>
<div class="form-group mt-4">
    <input type="email" class="form-control" name="client_email" placeholder="Your Email Address" required>
</div>
<div class="form-group mt-4">
    <textarea class="form-control" rows="3" cols="3" name="comment" required placeholder="Enter Your comment here"></textarea>
</div>
<div class="form-group mt-4">
   <select class="form-control" name="intersted" required>
        <option selected value disabled>---Interested In As---</option>
        <option value="C&F">C&F</option>
        <option value="Distributor">Distributor</option>
        <option value="SuperStockist">Super Stockist</option>
        <option value="Products">Products</option>
    </select>
</div>
<br>
<div class="form-group mt-4">
    <button type="submit" class="btn btn-primary">SUBMIT</button>
</div>
</form>

            </div>
</section>
        </div>

@endsection
