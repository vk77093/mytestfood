@extends('Marketing.MKTDash')
@section('adminWorkingSection')
<div class="container">
  <div class="card-header">
           <h4 class="text-center">All Submitted Data of the Your Brand Form</h4>
        </div>
        <table class="table table-bordered table-hover">
            <thead>
              <th>ID</th>
              <th>Label Type</th>
              <th>Name</th>
              <th>Email</th>
              <th>Number</th>
              <th>Country</th>
              <th>State</th>
              <th>City</th>
              <th>Company Name</th>
              <th>Address</th>
              <th>Segment</th>
              <th>Qty Required</th>
              <th>Qty per Size</th>
              <th>Special Note</th>
              <th>Expected Date</th>
            </thead>
            <tbody>
                @forelse ($brandData as $data)
<tr>
<td>{{$data->id}}</td>
<td>{{$data->label->labelType}}</td>
<td>{{$data->client_name}}</td>
<td>{{$data->client_email}}</td>
<td>{{$data->client_number}}</td>
<td>{{$data->country_id}}</td>
</tr>
                @empty

                @endforelse
            </tbody>
        </table>
</div>

@endsection
