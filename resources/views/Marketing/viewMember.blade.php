@extends('Marketing.MKTDash')
@section('adminWorkingSection')
<div class="container">
    <div class="card">
        <div class="card-header">
           <h4 class="text-center">All Become A Member Data</h4>
        </div>
        <div class="card-body">
           <table class="table table-bordered table-hover">
               <thead>
                   <th>ID</th>
                   <th>Name</th>
                   <th>Business Address</th>
                   <th>Zip Code</th>
                   <th>Mobile No.</th>
                   <th>Email ID</th>
                   <th>Comment</th>
                   <th>Interested In</th>
                   <th>Added AT</th>
               </thead>
               <tbody>
@forelse ($memberData as $data)
<tr>
<td>{{$data->id}}</td>
<td>{{$data->clinet_name}}</td>
<td>{{$data->buss_address}}</td>
<td>{{$data->zipcode}}</td>
<td>{{$data->client_number}}</td>
<td>{{$data->client_email}}</td>
<td>{{$data->comment}}</td>
<td>{{$data->intersted}}</td>
<td>{{$data->created_at->diffForHumans ()}}</td>
</tr>
@empty
 <h5 class="text-center">Cuurently No Data is There</h5>
@endforelse
               </tbody>
           </table>
        </div>
    </div>
</div>
@endsection

