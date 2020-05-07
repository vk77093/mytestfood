@extends('includes.mainpage')
@section('maincontent')
<!-- Hero Start -->
        <div class="slider-area ">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap">
                                <h2>Participation</h2>
                                <nav aria-label="breadcrumb ">
                                    <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="">Home</a></li>
                                    <li class="breadcrumb-item"><a href="">Participation</a></li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->

      <!--- image gallery----->
      <div class="container">
<div class="section-top-border">
					<h3>View Our Lastest Participation</h3>
					<div class="row gallery-item">
@forelse ($eventData as $data)
  <div class="col-md-4">
  <a href="{{$data->fileEvent->file}}" class="img-pop-up">
  <div class="single-gallery-image img-fluid" data-size="1600x1067" style="background: url('{{$data->fileEvent->file}}');"></div>
  <h3 class="text-center my-3">{{$data->event_name}}</h3>
</a>
</div>
@empty

@endforelse

						{{--<div class="col-md-4">
							<a href="assets/img/elements/g3.jpg" class="img-pop-up">
                                <div class="single-gallery-image img-fluid" data-size="1600x1067" style="background: url(assets/img/elements/g3.jpg);"></div>
                                 <h3 class="text-center my-3">Photo title</h3>
							</a>
						</div>
						<div class="col-md-4">
							<a href="assets/img/elements/g4.jpg" class="img-pop-up">
								<div class="single-gallery-image" style="background: url(assets/img/elements/g4.jpg);"></div>
                            <h3 class="text-center my-3">Photo title</h3>
                            </a>
						</div>
						<div class="col-md-4">
							<a href="assets/img/elements/g5.jpg" class="img-pop-up">
								<div class="single-gallery-image" style="background: url(assets/img/elements/g5.jpg);"></div>
                            <h3 class="text-center my-3">Photo title</h3>
                            </a>
                        </div>
                        <div class="col-md-4">
							<a href="assets/img/elements/g4.jpg" class="img-pop-up">
								<div class="single-gallery-image" style="background: url(assets/img/elements/g4.jpg);"></div>
                            <h3 class="text-center my-3">Photo title</h3>
                            </a>
						</div>
						<div class="col-md-4">
							<a href="assets/img/elements/g6.jpg" class="img-pop-up">
								<div class="single-gallery-image" style="background: url(assets/img/elements/g6.jpg);"></div>
                            <h3 class="text-center my-3">Photo title</h3>
                            </a>
						</div>
						<div class="col-md-4">
							<a href="assets/img/elements/g7.jpg" class="img-pop-up">
								<div class="single-gallery-image" style="background: url(assets/img/elements/g7.jpg);"></div>
                            <h3 class="text-center my-3">Photo title</h3>
                            </a>
						</div>
						<div class="col-md-4">
							<a href="assets/img/elements/g8.jpg" class="img-pop-up">
								<div class="single-gallery-image" style="background: url(assets/img/elements/g8.jpg);"></div>
                            <h3 class="text-center my-3">Photo title</h3>
                            </a>
                        </div> --}}
					</div>
					</div>
                </div>

      <!--end of image gallery---->

@endsection
