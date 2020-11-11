@extends('includes.mainpage')
@section('maincontent')
<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
<div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="/assets/img/carsoule/Sandwich.jpg" alt="First slide">
    </div>
  </div>
</div>
<div class="container pb-top">
              <div class="text-center">
					<div class="row ml-4">
						<div class="col-lg-12 ml-4 mr-4 blockquotepro">
							<blockquote class="blockquote text-center headtext">
                                “Pump up the flavours on your sandwich board
                                with unique combinations of Foodcoast
                                Spreads for adventurous diners”
							</blockquote>
						</div>
					</div>
                </div>
                </div>
        <!----start of Quote----->
        <section class="sample-text-area" style="margin-top: -70px;">
            <div class="container box_1170 text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4 text-center">
                            <div class="img hvr-float"><img src="/assets/img/ProductImage/Tandoori_Mayo.jpg" class="img-fluid center-block" alt="Responsive image"></div>
                        </div>
                        <div class="col-sm-8 mt-4 text-center text-heading">
                            <h3 class="text-center">All Range of Sandwich Spreads</h3>
                            <table class="table tableFont">
  <thead>
    <tr class="sandwichHead">
      <th scope="col">Product</th>
      <th scope="col">Pack Size</th>
      <th scope="col">Packaging</th>
      <th scope="col">Shelf Life</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Sandwich Spread</th>
      <td>1 kg</td>
      <td>EVOH Pouch</td>
      <td>4 months</td>
    </tr>
    <tr class="sandwichBottom">
      <th scope="row">Tandoori Mayo</th>
      <td>1 kg</td>
      <td>EVOH Pouch</td>
      <td>4 months</td>
    </tr>
    <tr>
      <th scope="row">Tandoori Pizza Gravy</th>
     <td>1 kg</td>
      <td>EVOH Pouch</td>
      <td>6 months</td>
    </tr>
    <tr class="sandwichBottom">
      <th scope="row">Junglee Sandwich Spread</th>
     <td>1 kg</td>
      <td>EVOH Pouch</td>
      <td>4 months</td>
    </tr>
     <tr>
      <th scope="row">Tartar Sauce</th>
     <td>1 kg</td>
      <td>EVOH Pouch</td>
      <td>4 months</td>
    </tr>
  </tbody>
</table>

                        </div>
                    </div>
                </div>

            </div>
              </section>
     <!---salads Range-------->
    <div class="container">
              <div class="text-center">
					<div class="row ml-4">
						<div class="col-lg-12 ml-4 mr-4">
							<blockquote class="blockquote text-center headtext">
                                “Give your Salads a makeover with over a dozen
                                Salad dressing which add a great flavour to even a simple
                                plate of greens”
							</blockquote>
						</div>
					</div>
                </div>
                </div>
<section class="sample-text-area" style="margin-top: -70px;">
            <div class="container box_1170 text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 mt-4 text-center text-heading">
                            <h3 class="text-center">All Range of Salads Dressing</h3>
                            <table class="table tableFont">
  <thead>
    <tr class="saladHead">
      <th scope="col">Product</th>
      <th scope="col">Pack Size</th>
      <th scope="col">Packaging</th>
      <th scope="col">Shelf Life</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Chezzy Dressing</th>
      <td>1 kg</td>
      <td>EVOH Pouch</td>
      <td>3 months</td>
    </tr>
    <tr class="saladBottom">
      <th scope="row">Cheese Sauce</th>
      <td>1 kg</td>
      <td>EVOH Pouch</td>
      <td>3 months</td>
    </tr>
    <tr>
      <th scope="row">Thousand Island</th>
     <td>1 kg</td>
      <td>Insti Bottle</td>
      <td>4 months</td>
    </tr>
    <tr class="saladBottom">
      <th scope="row">Chipotle</th>
     <td>1 kg</td>
      <td>EVOH Pouch</td>
      <td>4 months</td>
    </tr>
     <tr>
      <th scope="row">Honey Mustard</th>
     <td>1 kg</td>
      <td>Insti Bottle</td>
      <td>4 months</td>
    </tr>
    <tr class="saladBottom">
      <th scope="row">Sweet Onion</th>
     <td>1 kg</td>
      <td>Insti Bottle</td>
      <td>4 months</td>
    </tr>
     <tr>
      <th scope="row">South West</th>
     <td>1 kg</td>
      <td>Insti Bottle</td>
      <td>4 months</td>
    </tr>
  </tbody>
</table>

</div>
<div class="col-sm-4 text-center">
    <div class="img hvr-float"><img src="/assets/img/ProductImage/Cheesy_Dressing.jpg" class="img-fluid center-block" alt="Responsive image"></div>
</div>
</div>
</div>

</div>
</section>
@include('ProductDescription.AllCat.bottomnav')
@endsection
