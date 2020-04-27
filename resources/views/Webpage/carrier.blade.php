@extends('includes.mainpage')
@section('maincontent')
<!-- Hero Start -->
        <div class="slider-area ">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap">
                                <h2>Carrier</h2>
                                <nav aria-label="breadcrumb ">
                                    <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="">Home</a></li>
                                    <li class="breadcrumb-item"><a href="">Carrier</a></li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->
        <!--- some line about the carrier boostup----->
        <div class="container pb-top">
            <section class="intro-text">
                <blockquote class="generic-blockquote">
                    "
    At Foodcoast international, the world’s most talented engineers, designers, and thought
    leaders are shaping the future of&nbsp;online&nbsp;publishing.
  "
                </blockquote>

            </section>
        </div>

                <hr>
                <div class="container">
            <section class="intro-text">
                <h3 class="mb-30 text-center">Open Positions</h3>
                <blockquote class="generic-blockquote">
                    "
    At Foodcoast international, the world’s most talented engineers, designers, and thought
    leaders are shaping the future of&nbsp;online&nbsp;publishing.
  "
                </blockquote>

            </section>
        </div>
        <hr>
        <!--- jop card----->
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <!-- Card -->
<div class="card chart-card mb-4">

  <!-- Card content -->
  <div class="card-body pb-0">

    <!-- Title -->
    <h4 class="card-title font-weight-bold">POSITION NAME</h4>
    <!-- Text -->
    <p class="card-text mb-4">At Location some NAME</p>
    <p class="card-text mb-4">Posted date  •  Oct 16, 1:45PM</p>
    <div class="d-flex justify-content-between">
      <p class="display-4 align-self-end">05</p>
      {{-- <p class="align-self-end pb-2">887.02 (.03%)</p> --}}
    </div>

  </div>
</div>
<!-- Card -->
                </div>
          <!--- second card----->
          <div class="col-sm-4">
                    <!-- Card -->
<div class="card chart-card mb-4">

  <!-- Card content -->
  <div class="card-body pb-0">

    <!-- Title -->
    <h4 class="card-title font-weight-bold">POSITION NAME</h4>
    <!-- Text -->
    <p class="card-text mb-4">At Location some NAME</p>
    <p class="card-text mb-4">NYSE: AZHC  •  Oct 16, 1:45PM</p>
    <div class="d-flex justify-content-between">
      <p class="display-4 align-self-end">05</p>
      {{-- <p class="align-self-end pb-2">887.02 (.03%)</p> --}}
    </div>

  </div>
</div>
</div>
          <!---end of second card----->
  <!---Third Card------>
  <div class="col-sm-4">
                    <!-- Card -->
<div class="card chart-card mb-4">

  <!-- Card content -->
  <div class="card-body pb-0">

    <!-- Title -->
    <h4 class="card-title font-weight-bold">POSITION NAME</h4>
    <!-- Text -->
    <p class="card-text mb-4">At Location some NAME</p>
    <p class="card-text mb-4">NYSE: AZHC  •  Oct 16, 1:45PM</p>
    <div class="d-flex justify-content-between">
      <p class="display-4 align-self-end">05</p>
      {{-- <p class="align-self-end pb-2">887.02 (.03%)</p> --}}
    </div>

  </div>
</div>
</div>
  <!--end of Third card----->
            </div>
        </div>
        <!--end of job opening card--->
        <!--end of carrier line---->
    <!--- page pagination----->
    <nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1">Previous</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
</nav>
    <!---end of page pagination end----->
    <hr>
        <!--- send us job form------>
 <!--- my card style----->
<div class="container back">
    <div class="card">

  <div class="card-header" id="userSubmit">
       @if(Session::has('User_Resume'))
<p class="alert alert-danger">
  {{session('User_Resume')}}
</p>
@endif
   <h3 class="text-center">Apply for The Opened Job</h3>
  </div>
  <div class="card-body text-center">

  <form action="{{route('carrier.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
<div class="input-group-icon mt-10">
									<div class="icon"><i class="fa fa-graduation-cap" aria-hidden="true"></i></div>
									<div class="form-select" id="default-select" aria-required="true">
												<select name="position">
													<option selected value="disabled">Selcet Below Open Job Post</option>
										<option value="Electrical">Electrical</option>
										<option value="Sales">Sales</option>
										<option value="Newyork">Newyork</option>
										<option value="Some More">Some More</option>
										</select>
									</div>
								</div>
								<div class="mt-10">
									<input type="text" name="firstName" placeholder="First Name"
										onfocus="this.placeholder = ''" onblur="this.placeholder = 'First Name'" required
										class="single-input">
								</div>
								<div class="mt-10">
									<input type="text" name="lastName" placeholder="Last Name"
										onfocus="this.placeholder = ''" onblur="this.placeholder = 'Last Name'" required
										class="single-input">
								</div>

								<div class="mt-10">
									<input type="email" name="email" placeholder="Email address"
										onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'" required
										class="single-input">
                                </div>
                                <div class="mt-10">
									<input type="number" name="mobileNum" maxlength="10" minlength="10" placeholder="Mobile Number"
										onfocus="this.placeholder = ''" onblur="this.placeholder = 'Mobile Number'" required
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
												<select name="city">
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
												<select name="country">
													<option value=" Country">Country</option>
										<option value="Bangladesh">Bangladesh</option>
										<option value="India">India</option>
										<option value="England">England</option>
										<option value="Srilanka">Srilanka</option>
										</select>
									</div>
                                </div>

                                <div class="input-group-icon mt-10">
									<div class="icon"><i class="fa fa-flask" aria-hidden="true"></i></div>
									<div class="form-select" id="default-select"">
												<select name="experience">
													<option value="" disabled selected>Total Experience</option>
                                                        <option value="0-6 Months">0-6 Months</option>
                                                    <option value="1 year"> 1 year</option>
                                                    <option value="2 year"> 2 year</option>
                                                    <option value="3 Year">3 Year</option>
                                                        <option value="4 Year">4 Year</option>
                                                        <option value="5 year">5 year</option>
                                                        <option value="more than 5">more Than 5 year</option>
										</select>
									</div>
                                </div>
                                <div class="mt-10">
                                    <input type="text" name="currentEmp" placeholder="Current Employee"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Current Employee'" required
										class="single-input-primary">
                                </div>

                                <div class="mt-10">
                                    <input type="text" name="currentDeg" placeholder="Current Desgination"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Current Desgination'" required
										class="single-input-primary">
                                </div>

								<div class="mt-10">
									<textarea class="single-textarea" name="keySkills" placeholder="Key Skills" onfocus="this.placeholder = ''"
										onblur="this.placeholder = 'Key Skills'" required></textarea>
                                </div>
                                <div class="mt-10">
                                  <label class="text-md-right col-form-label">Upload Resume (Only .Docs & PDF)</label>
									<input type="file" name="resume_doc_id" placeholder="Uploade Resume (Only .Docs & PDF)"
										onfocus="this.placeholder = ''" onblur="this.placeholder = 'candi_docs'" required
										class="single-input">
								</div>

                                <div class="mt-10 mb-10">
                                    <button type="submit" class="btn btn-info">Send Us</button>
                                </div>
							</form>
  </div>
</div>
</div>
                        <!--end of my card style---->

        <!---end of job form------>
@endsection
