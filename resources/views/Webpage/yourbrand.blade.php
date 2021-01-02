 @extends('includes.mainpage2')
 @section('javaScript')
 <script src="http://www.codermen.com/js/jquery.js"></script>
@endsection
@section('maincontent')
<!-- Hero Start -->
        <div class="slider-area ">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap">
                                <p class="headingText">Your Brand</p>
                                {{-- <nav aria-label="breadcrumb ">
                                    <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="">Home</a></li>
                                    <li class="breadcrumb-item"><a href="">Your Brand</a></li>
                                    </ol>
                                </nav> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->
<!-- Start Sample Area -->
		<section class="sample-text-area">
			<div class="container box_1170">
				<h3 class="text-heading">Your Brand / Private Label</h3>
				<p class="sample-text">
					Through its Private label vretical, Foodcoast International offers its clients the ability to control the quality, style, and feel of their own brand while partnering in their passion. With years of immaculate service to boast of, we have expanded our list of Private label clients across global. We now have a vast base of happy and satisfied customers.
We pride ourselves for being the trusted partners of leading FMCG giants for developing and delivering their products within a promised timeline. A dedicated team looks after private label process from receiving the order to the dispatch the goods through an efficient transit system, thereby ensuring complete peace of mind to our clients.
<br><br>
For dropping a private label query, <strong>please Fill Below Your Requirment</strong>
Foodcoast has an innovative in-house packaging facility installed to package from the smallest to largest packs for varying client requirements. From a tiny pouch to volume driver packs, a host of packaging options are available for Global Private label clients -5gm per unit to 5kg per unit, we have all your needs covered.
				</p>
			</div>
		</section>
        <!-- End Sample Area -->

      <!--- my card style----->
<div class="container">
    <div class="card">
  <div class="card-header">

   <h3 class="text-center" id="brand">Send your Requirment</h3>
   @if (Session::has('Brand_data'))
      <p class="alert alert-danger">
          {{session('Brand_data')}}
      </p>
      @endif
  </div>
  <div class="card-body text-center">
    {{-- <h5 class="card-title">Special title treatment</h5> --}}
  <form action="{{route('yourbrand.store')}}" method="POST">
    @csrf
    <div class="form-group">
        <select id="label_id" class="form-control single-input" name="label_id">
            <option selected value disabled>--select the packing type----</option>
            @forelse ($labeldata as $data)
        <option value="{{$data->id}}"><img src="{{$data->labelFile}}" width="50px" height="50px" class="rounded-circle">{{$data->labelType}}</option>
            @empty
<option selected value disabled>--Currently Not any packing type Exists----</option>
            @endforelse
        </select>
    </div>
								<div class="mt-10">
									<input type="text" name="client_name" placeholder="Your Name"
										onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Name'" required
										class="single-input">
								</div>


								<div class="mt-10">
									<input type="email" name="client_email" placeholder="Email address"
										onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'" required
										class="single-input">
                                </div>
                                <div class="form-group mt-10">

                                    <input id="client_number" class="form-control single-input" type="tel" name="client_number"
                                   placeholder="Enter the Number" minlength="10" maxlength="10">
                                </div>

                                {{-- <div class="input-group-icon mt-10">
									<div class="icon"><i class="fa fa-globe" aria-hidden="true"></i></div>
									<div class="form-select" id="default-select" aria-required="true" class="form-control">
												<select name="country_id"  id="country">
                                                    <option selected value disabled>Country</option>
                                                    @foreach ($countries as $key => $country)
                                                      <option value="{{$key}}"> {{$country}}</option>
                                                    @endforeach
										</select>
									</div>
                                </> --}}
                                <div class="form-group">
                                    <select name="country_id"  id="country" class="form-control single-input">
                                                    <option selected value disabled>Country</option>
                                                    @foreach ($countries as $key => $country)
                                                      <option value="{{$key}}"> {{$country}}</option>
                                                    @endforeach
										</select>
                                </div>

                                    {{-- <div class="input-group-icon mt-10">
									<div class="icon"><i class="fa fa-plane" aria-hidden="true"></i></div>
									<div class="form-select" id="default-select" aria-required="true">
												<select name="state" id="state">
 <option selected value disabled>---Choose State-----</option>


										</select>
									</div>
                                </div> --}}
                                <div class="form-group">
                                    <select id="state" class="form-control single-input" name="state">
                                        <option selected value disabled>---Choose State-----</option>
                                    </select>
                                </div>


								{{-- <div class="input-group-icon mt-10">
									<div class="icon"><i class="fa fa-plane" aria-hidden="true"></i></div>
									<div class="form-select"id="default-select" aria-required="true">
										<select name="city" id="city">
<option selected value disabled>---Choose City----</option>

										</select>
									</div>
                                </div> --}}
                              <div class="form-group mt-10">
                                    <select id="city" class="form-control single-input" name="city">
                                        <option selected value disabled>---Choose City-----</option>
                                    </select>
                                </div>
                                   <div class="mt-10">
									<input type="text" name="client_branch" placeholder="Your Branch/Company Name"
										onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Branch/Company Name'" required
										class="single-input">
								</div>
                               <div class="input-group-icon mt-10">
									<div class="icon"><i class="fa fa-thumb-tack" aria-hidden="true"></i></div>
									<textarea class="form-control single-input" name="client_address" rows="3" cols="3" placeholder="Your Address"></textarea>
                               </div>
                               <div class="form-group mt-10">
                                   <select id="product_segment" class="form-control single-input" name="product_segment">
                                       <option selected value disabled>---Please Select the Product Segment----</option>
                                       <option value="Mayoninse">Mayoninse</option>
                                       <option value="Sandwich Spread">Sandwich Spread</option>
                                       <option value="Salad Dressing">Salad Dressing</option>
                                       <option value="Tomato Ketchups">Tomato Ketchups</option>
                                       <option value="Sauces">Sauces</option>
                                        <option value="Dips">Dips</option>
                                        <option value="Chocolate & Toppings">Chocolate & Toppings</option>
                                        <option value="Fruit Punches">Fruit Punches</option>
                                   </select>
                               </div>
                               <div class="form-group mt-10">
                                 <input type="number" name="qty_req" placeholder="Enter the Qty Required (In KG)"
										onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter the Qty Required (In KG)'" required
										class="single-input" min="100">
                               </div>
                               <div class="form-group mt-10">
                                   <select id="my-select" class="form-control single-input" name="per_size">
                                       <option selected value disabled>---Select the per PKG Size----</option>
                                       <option value="5 gm">5 gm</option>
                                       <option value="8 gm">8 gm</option>
                                       <option value="9 gm">9 gm</option>
                                       <option value="15 gm">15 gm</option>
                                       <option value="1 kg">1 kg</option>
                                       <option value="1.2 kg">1.2 kg</option>
                                       <option value="5 kg">5 kg</option>
                                   </select>
                               </div>

								<div class="mt-10">
									<textarea class="single-textarea" name="spe_note" placeholder="Special Note" onfocus="this.placeholder = ''"
										onblur="this.placeholder = 'Special Note'" required></textarea>
                                </div>

								<div class="mt-10">
                                    <label id="exp_date">Expected Date for Delivery</label>
									<input type="date" name="exp_date" placeholder="Expected Date for Delivery"
										onfocus="this.placeholder = ''" onblur="this.placeholder = 'Expected Date for Delivery'"
										required class="single-input-secondary">
                                </div>


                                <div class="mt-10 mb-10">
                                    <button type="submit" class="btn btn-info">Send Us</button>
                                </div>
							</form>
  </div>
</div>
</div>
     <!--end of my card style---->
      @section('dropdownList')
{{-- <script src="http://www.codermen.com/js/jquery.js"></script> --}}
 {{-- <link rel="stylesheet" href="http://www.codermen.com/css/bootstrap.min.css"> --}}
 <script type="text/javascript">
    $('#country').change(function(){
    var countryID = $(this).val();
    if(countryID){
        $.ajax({
           type:"GET",
           url:"{{url('/get-state-list')}}?country_id="+countryID,
           success:function(res){
            if(res){
                $("#state").empty();
                $("#state").append('<option>Select</option>');
                $.each(res,function(key,value){
                    $("#state").append('<option value="'+key+'">'+value+'</option>');
                });

            }else{
               $("#state").empty();
            }
           }
        });
    }else{
        $("#state").empty();
        $("#city").empty();
    }
   });
    $('#state').on('change',function(){
    var stateID = $(this).val();
    if(stateID){
        $.ajax({
           type:"GET",
           url:"{{url('/get-city-list')}}?state_id="+stateID,
           success:function(res){
            if(res){
                $("#city").empty();
                $.each(res,function(key,value){
                    $("#city").append('<option value="'+key+'">'+value+'</option>');
                });

            }else{
               $("#city").empty();
            }
           }
        });
    }else{
        $("#city").empty();
    }

   });
</script>
      @endsection

@endsection
