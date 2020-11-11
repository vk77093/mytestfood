@extends('includes.mainpage')
@section('maincontent')
<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="/assets/img/carsoule/Mayo.jpg" alt="First slide">
    </div>
  </div>
</div>
<div class="container pb-top">
              <div class="text-center">
					<div class="row ml-4">
						<div class="col-lg-12 ml-4 mr-4 blockquotepro">
							<blockquote class="blockquote text-center headtext">
                                “Enrich your taste buds with the delectable thick creamy
                                 mayonnaise that blends all flavours in a perfect equilibrium”
							</blockquote>
						</div>
					</div>
                </div>
                </div>
        <!----start of Quote----->
        <section class="sample-text-area blockquotepro">
            <div class="container box_1170 text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4 text-center">
                            <div class="img hvr-float"><img src="/assets/img/ProductImage/ClassicMayo.png" class="img-fluid center-block" alt="Responsive image"></div>
                        </div>
                        <div class="col-sm-8 mt-4 text-center text-heading">
                            <h3 class="text-center">All Range of Mayonnaise</h3>
                            <table class="table tableFont">
  <thead>
    <tr class="mayoHead">
      <th scope="col">Product</th>
      <th scope="col">Pack Size</th>
      <th scope="col">Packaging</th>
      <th scope="col">Shelf Life</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th>Real Mayo</th>
      <td>1 kg</td>
      <td>EVOH Pouch</td>
      <td>4 months</td>
    </tr>
    <tr class="mayoBottom">
      <th scope="row">Classic Mayo</th>
      <td>1 kg</td>
      <td>EVOH Pouch</td>
      <td>4 months</td>
    </tr>
    <tr>
      <th scope="row">Mayo Lite</th>
     <td>1 kg</td>
      <td>EVOH Pouch</td>
      <td>4 months</td>
    </tr>
    <tr class="mayoBottom">
      <th scope="row">Tomato Chilli Mayo</th>
     <td>1 kg</td>
      <td>Insti Bottle</td>
      <td>4 months</td>
    </tr>
     <tr>
      <th scope="row">Tomato Cheese Chilli Mayo</th>
     <td>1 kg</td>
      <td>Insti Bottle</td>
      <td>4 months</td>
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
