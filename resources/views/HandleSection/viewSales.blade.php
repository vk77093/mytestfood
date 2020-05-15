@extends('HandleSection.HRDash')
@section('adminWorkingSection')

<div class="container">
<div class="card">
    <div class="card-header">
       @if (Session::has('sales_data'))
  <p class="alert alert-primary">
      {{session('sales_data')}}
  </p>
@endif
<h4 class="text-center">All the Sales Person Data</h4>
    </div>
    <div class="card-body">
       <table class="table table-hover">
           <thead>
               <th>ID</th>
               <th>Name</th>
               <th>State</th>
               <th>Area</th>
               <th>Contact No.</th>
               <th>Email ID</th>
               <th>Status</th>
               <th></th>
           </thead>
           <tbody>
@forelse ($salesPerson as $item)
   <tr>
   <td>{{$item->id}}</td>
   <td>{{$item->sal_name}}</td>
   <td>{{$item->state}}</td>
   <td>{{$item->area}}</td>
   <td>{{$item->mob_num}}</td>
   <td>{{$item->email_id}}</td>
   <td>{{$item->status}}</td>
   <td>
   <a href="{{route('HRdepartmentsalesPer.edit',$item->id)}}">
   <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{$item->id}}">
  Edit
</button>
</a>
   </td>
               </tr>
@empty
   <h4 class="text-center">Currently No Data is There</h4>
@endforelse
           </tbody>
       </table>
    </div>
</div>
<nav aria-label="Page navigation">
    <ul class="pagination">
        <li class="page-item">
           {{$salesPerson->render()}}
        </li>
    </ul>
</nav>
</div>


@endsection
