@extends('includes.mainpage2')
@section('maincontent')
<style>

</style>
<div class="slider-area ">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap">
                                <h2>Sales Person Near You</h2>
                                <nav aria-label="breadcrumb ">
                                    <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="">Home</a></li>
                                    <li class="breadcrumb-item"><a href="">Near You</a></li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="sample-text-area">
            <div class="container">
<h3 class="text-heading">Sales Person</h3>
            <form action="/nearYou#result" method="get">

    <div class="container">
        <div class="text-center">
            <div class="form-group">
                <label for="default-select"><b>Select the Area Near to You for getting the Salesperson Details</b></label>
                <select class="form-select" name="search_area" id="default-select">
                    <option selected value disabled>--Please Select the Area---</option>
@if(request()->query('search_area'))
                <option selected value="{{request()->query('search_area')}}">{{request()->query('search_area')}}</option>
@endif
@forelse ($salesPerson as $item)
                <option value="{{$item->area}}">{{$item->area}}</option>
@empty
<option selected value disabled>---Currently No data is there----</option>
@endforelse

                </select>

            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-info">Get It</button>
            </div>
        </div>
    </div>
</form>
            </div>
        </section>
        <div class="container" id="result" style="margin-top:-40px">
    @if (request()->query('search_area'))
    <h5 class="text-center mb-5">The Nearst Salesperson AT  : <strong>{{request()->query('search_area')}}</strong>  Is Below <br>
    you can directly talk with them or send email for book your order
    </h5>
    <div class="row">
@forelse ($salesFetch as $item)
<div class="col-sm-4 mt-4">
    <div class="card">
    <div class="card-header">
    </div>
    <div class="card-body">
    <h5 class="card-title">{{$item->sal_name}}</h5>
    <div id="link_bar">
    <p class="card-text"><a href="tel:{{$item->mob_num}}">{{$item->mob_num}}</a></p>
    <p class="card-text"><a href="mailto:{{$item->email_id}}">{{$item->email_id}}</a></p>
    </div>
    </div>
</div>
</div>
@empty
<h4 class="text-center">No Result is found for your Search</h4>
@endforelse
</div>
         @endif
        </div>
        <div class="container mt-2">

        </div>
@endsection
