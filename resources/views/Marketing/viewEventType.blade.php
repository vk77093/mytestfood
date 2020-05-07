@extends('Marketing.MKTDash')
@section('adminWorkingSection')
<h4 class="text-center">All the Added Event Type</h4>
<div class="container">
    @if(Session::has(''))
    <p class="alert alert-danger">
        {{session('')}}
    </p>
@endif
<div class="card">
    <div class="card-body">
        <table class="table table-bordered table-hover">
    <thead>
        <th>ID</th>
        <th>Event Name</th>
    </thead>
        @forelse ($eventType as $type)
         <tbody>
    <td>{{$type->id}}</td>
    <td>{{$type->event_name}}</td>
        @empty
<h4 class="text-center">Currently No Event Type is Still Added</h4>
        @endforelse
    </tbody>
</table>
    </div>
</div>
</div>
@endsection
