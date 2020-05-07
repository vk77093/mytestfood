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
 <!---Event Added in Tabbed manner---->
{{-- <section class="services-area">
    <div class="container pb-top">
        <div class="project-heading mb-35">
            <div class="row align-items-end">
                <div class="col-lg-8">
                 <div class="section-tittle">
                <h2>Our upcoming Events</h2>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="properties__button">
                        <nav>
                            <div class="nav nav-tabs row-align-center" id="nav-tab" role="tablist">
                            @forelse ($eventType as $event)

                            <a class="nav-item nav-link" id="{{$event->event_name}}-tab" data-toggle="tab" href="#nav-{{$event->event_name}}" role="tab" aria-controls="nav-{{$event->event_name}}" aria-selected="false">{{$event->event_name}}</a>
                            @empty
                              <h4 class="text-center">No category is Still</h4>
                            @endforelse
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
<!--- row side for the tab list---->
        <div class="row">
            <div class="col-12">
@forelse ($eventData as $data)
            <div class="tab-pane fade" id="nav-{{$data->eventType->event_name}}"  role="tabpanel" aria-labelledby="nav-{{$data->eventType->event_name}}-tab" >
       <!-- our upcoming Events ---->
<div class="container">

    <div class="section-top-border">
         <h3>Our Upcoming Events</h3>
        <h3 class="text-center">Event Type :</h3> --}}
      {{---- <div class="col md-4">
<!-- Card Wider -->
  <div class="card card-cascade wider mt-2 mb-3">

    <!-- Card image -->

    <div class="view view-cascade overlay hvr-shrink">
    <img  class="myimage" src="{{$data->fileEvent->file}}" alt="Card image cap">
      <a href="#!">
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>

    <!-- Card content -->
    <div class="card-body card-body-cascade text-center">

      <!-- Title -->
    <h4 class="card-title"><strong>{{$data->event_name}}</strong></h4>
      <!-- Subtitle -->
    <h5 class="blue-text pb-2"><strong>{{$data->event_place}}</strong></h5>
    <h5 class="blue-text pb-2"><strong>From --- {{$data->event_start_date}} ---TO---  {{$data->event_end_date}}</strong></h5>
      <!-- Text -->
      <p class="card-text">{{$data->event_address}} </p>

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
             </div>
@empty

@endforelse

            </div>
        </div>
    </div>
</section> --}}


        <!-- our upcoming Events ---->
{{-- <div class="container">

    <div class="section-top-border">
        <h3>Our Upcoming Events</h3>
        <h3 class="text-center">Event Type :</h3>
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
       <h5 class="blue-text pb-2"><strong>From --- 25-5-2020 ---TO---  27-5-2020</strong></h5>
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
</div> --}}
<!---end of upcoming events----->

<!--- my TabBar----->
<section class="services-area">
    <div class="container pb-top">
<ul class="nav nav-tabs nav-justified md-tabs indigo" id="myTabJust" role="tablist">
    @forelse ($eventData as $event)
     @if ($event->eventType->event_type_id==1)
       <li class="nav-item">
       <a class="nav-link active" id="{{$event->eventType->event_name}}-tab-just" data-toggle="tab" href="#{{$event->eventType->event_name}}-just" role="tab" aria-controls="{{$event->eventType->event_name}}-just"
      aria-selected="true">{{$event->eventType->event_name}}</a>
  </li>
     @else
 <li class="nav-item">
 <a class="nav-link" id="{{$event->eventType->event_name}}-tab-just" data-toggle="tab" href="#{{$event->eventType->event_name}}-just" role="tab" aria-controls="{{$event->eventType->event_name}}-just"
      aria-selected="false">{{$event->eventType->event_name}}</a>
  </li>
     @endif
    @empty

    @endforelse
</ul>
<div class="tab-content card pt-5" id="myTabContentJust">
  @forelse ($eventData as $data)
      @if ($data->event_type_id ==1)
       <div class="container">
<div class="tab-pane fade show active" id="{{$data->eventType->event_name}}-just" role="tabpanel" aria-labelledby="{{$data->eventType->event_name}}-tab-just">
 <!-- our upcoming Events ---->


    <div class="section">
        {{-- <h3>Our Upcoming Events</h3> --}}
    {{-- <h3 class="text-center">Event Type : {{$data->eventType->event_name}}</h3> --}}
        <div class="col md-4">
<!-- Card Wider -->
  <div class="card card-cascade wider mt-2 mb-3">

    <!-- Card image -->

    <div class="view view-cascade overlay hvr-shrink">
    <img  class="myimage" src="{{$data->fileEvent->file}}" alt="Card image cap">
      <a href="#!">
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>

    <!-- Card content -->
    <div class="card-body card-body-cascade text-center">

      <!-- Title -->
    <h4 class="card-title"><strong>{{$data->event_name}}</strong></h4>
      <!-- Subtitle -->
    <h5 class="blue-text pb-2"><strong>{{$data->event_place}}</strong></h5>
    <h5 class="blue-text pb-2"><strong>From --- {{$data->event_start_date}} ---TO---  {{$data->event_end_date}}</strong></h5>
      <!-- Text -->
    <p class="card-text">{{$data->event_address}}</p>

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
    </div>
      @else
<div class="tab-pane fade" id="{{$data->eventType->event_name}}-just" role="tabpanel" aria-labelledby="{{$data->eventType->event_name}}-tab-just">

 <!-- our upcoming Events ---->
 <div class="container">

    <div class="section">
        {{-- <h3>Our Upcoming Events</h3> --}}
    {{-- <h3 class="text-center">Event Type : {{$data->eventType->event_name}}</h3> --}}
        <div class="col md-4">
<!-- Card Wider -->
  <div class="card card-cascade wider mt-2 mb-3">

    <!-- Card image -->

    <div class="view view-cascade overlay hvr-shrink">
    <img  class="myimage" src="{{$data->fileEvent->file}}" alt="Card image cap">
      <a href="#!">
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>

    <!-- Card content -->
    <div class="card-body card-body-cascade text-center">

      <!-- Title -->
    <h4 class="card-title"><strong>{{$data->event_name}}</strong></h4>
      <!-- Subtitle -->
    <h5 class="blue-text pb-2"><strong>{{$data->event_place}}</strong></h5>
    <h5 class="blue-text pb-2"><strong>From --- {{$data->event_start_date}} ---TO---  {{$data->event_end_date}}</strong></h5>
      <!-- Text -->
    <p class="card-text">{{$data->event_address}}</p>

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

  </div>
      @endif
 @empty
<h5 class="text-center">Currently No event is added</h5>
  @endforelse

</div>
    </div>
</section>



@endsection
