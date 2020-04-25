@extends('includes.mainpage')
@section('maincontent')
<!-- Hero Start -->
        <div class="slider-area ">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap">
                                <h2>Your Brand</h2>
                                <nav aria-label="breadcrumb ">
                                    <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="">Home</a></li>
                                    <li class="breadcrumb-item"><a href="">Your Brand</a></li>
                                    </ol>
                                </nav>
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
					Through our Private label brand, Foodcoast International offers its clients the ability to control the quality, style, and feel of their brand while partnering in their passion. With years of immaculate service to boast of, we have expanded our list of Private label clients across India. We now have a PAN- India base of happy and satisfied customers.
We pride ourselves for being the trusted partners of leading FMCG giants for developing and delivering their products within a promised timeline. A dedicated team looks after private label process from receiving the order to the dispatch the goods through an efficient transit system nationwide, thereby ensuring complete peace of mind to our clients.

For dropping a private label query, please click here.
Foodcoast has an innovative in-house packaging facility installed to package from the smallest to largest packs for varying client requirements. From a tiny pouch to volume driver packs, a host of packaging options are available for Global Private label clients -5gm per unit to 5kg per unit, we have all your needs covered.
				</p>
			</div>
		</section>
        <!-- End Sample Area -->

      <!--- my card style----->
<div class="container">
    <div class="card">
  <div class="card-header">
   <h3 class="text-center">Send your Requirment</h3>
  </div>
  <div class="card-body text-center">
    {{-- <h5 class="card-title">Special title treatment</h5> --}}
<form action="#">
								<div class="mt-10">
									<input type="text" name="first_name" placeholder="First Name"
										onfocus="this.placeholder = ''" onblur="this.placeholder = 'First Name'" required
										class="single-input">
								</div>
								<div class="mt-10">
									<input type="text" name="last_name" placeholder="Last Name"
										onfocus="this.placeholder = ''" onblur="this.placeholder = 'Last Name'" required
										class="single-input">
								</div>
								<div class="mt-10">
									<input type="text" name="last_name" placeholder="Last Name"
										onfocus="this.placeholder = ''" onblur="this.placeholder = 'Last Name'" required
										class="single-input">
								</div>
								<div class="mt-10">
									<input type="email" name="EMAIL" placeholder="Email address"
										onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'" required
										class="single-input">
								</div>
								<div class="input-group-icon mt-10">
									<div class="icon"><i class="fa fa-thumb-tack" aria-hidden="true"></i></div>
									<input type="text" name="address" placeholder="Address" onfocus="this.placeholder = ''"
										onblur="this.placeholder = 'Address'" required class="single-input">
								</div>
								<div class="input-group-icon mt-10">
									<div class="icon"><i class="fa fa-plane" aria-hidden="true"></i></div>
									<div class="form-select" id="default-select"">
												<select>
													<option value=" 1">City</option>
										<option value="1">Dhaka</option>
										<option value="1">Dilli</option>
										<option value="1">Newyork</option>
										<option value="1">Islamabad</option>
										</select>
									</div>
								</div>
								<div class="input-group-icon mt-10">
									<div class="icon"><i class="fa fa-globe" aria-hidden="true"></i></div>
									<div class="form-select" id="default-select"">
												<select>
													<option value=" 1">Country</option>
										<option value="1">Bangladesh</option>
										<option value="1">India</option>
										<option value="1">England</option>
										<option value="1">Srilanka</option>
										</select>
									</div>
								</div>

								<div class="mt-10">
									<textarea class="single-textarea" placeholder="Message" onfocus="this.placeholder = ''"
										onblur="this.placeholder = 'Message'" required></textarea>
								</div>
								<div class="mt-10">
									<input type="text" name="first_name" placeholder="Primary color"
										onfocus="this.placeholder = ''" onblur="this.placeholder = 'Primary color'" required
										class="single-input-primary">
								</div>
								<div class="mt-10">
									<input type="text" name="first_name" placeholder="Accent color"
										onfocus="this.placeholder = ''" onblur="this.placeholder = 'Accent color'" required
										class="single-input-accent">
								</div>
								<div class="mt-10">
									<input type="text" name="first_name" placeholder="Secondary color"
										onfocus="this.placeholder = ''" onblur="this.placeholder = 'Secondary color'"
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
@endsection
