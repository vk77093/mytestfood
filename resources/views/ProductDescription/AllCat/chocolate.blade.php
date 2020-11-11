@extends('includes.mainpage')
@section('maincontent')
<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="/assets/img/carsoule/Chocolste.jpg" alt="First slide">
    </div>
  </div>
</div>
<div class="container pb-top">
              <div class="text-center">
					<div class="row ml-4">
						<div class="col-lg-12 ml-4 mr-4 blockquotepro">
							<blockquote class="blockquote text-center headtext">
                                “Treat your palates with the deliciously
                                tempting Foodcoast Toppings. A Taste that
                                leaves you wanting more....”
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
                            <div class="img hvr-float"><img src="/assets/img/ProductImage/Chococlate.png" class="img-fluid center-block" alt="Responsive image"></div>
                        </div>
                        <div class="col-sm-8 mt-4 text-center text-heading">
                            <h3 class="text-center">All Range of Chocolate & Toppings</h3>
                            <table class="table tableFont">
  <thead>
    <tr class="chocolateHead">
      <th scope="col">Product</th>
      <th scope="col">Pack Size</th>
      <th scope="col">Packaging</th>
      <th scope="col">Shelf Life</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Chocolate Dressing</th>
      <td>1.3 kg</td>
      <td>Insti Bottle</td>
      <td>1 year</td>
    </tr>
    <tr class="chocolateBottom">
      <th scope="row">Butterscotch Dressing</th>
      <td>1.3 kg</td>
      <td>Insti Bottle</td>
      <td>9 months</td>
    </tr>
    <tr>
      <th scope="row">Caramel Dressing</th>
     <td>1.3 kg</td>
      <td>Insti Bottle</td>
      <td>9 months</td>
    </tr>
    <tr class="chocolateBottom">
      <th scope="row">Hot Fudge</th>
     <td>1.3 kg</td>
      <td>Insti Bottle</td>
      <td>9 months</td>
    </tr>

  </tbody>
</table>

                        </div>
                    </div>
                </div>

            </div>
              </section>

@include('ProductDescription.AllCat.bottomnav')

@endsection
