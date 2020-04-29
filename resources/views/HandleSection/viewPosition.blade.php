@extends('HandleSection.HRDash')
@section('adminWorkingSection')
<h4 class="text-center">All The Postion till Added</h4>
   <div class="container">
       @if(Session::has('position'))
       <p class="alert alert-danger">
           {{session('position')}}
       </p>
       @endif
       <table class="table table-bordered table-hover">
           <thead>
              <th>ID</th>
              <th>Position Name</th>
              <th>Created_at</th>
           </thead>
           <tbody>
               @forelse ($position as $pos)
<tr>
<td>{{$pos->id}}</td>
<td>{{$pos->positionName}}</td>
<td>{{$pos->created_at->diffForHumans()}}</td>
               </tr>
               @empty
<h4 class="text-center">There are currently not any Position Added</h4>
               @endforelse

           </tbody>
       </table>
       <nav aria-label="Page navigation example">
<ul class="pagination justify-content-center">
   {{$position->render()}}
 </ul>
</nav>
   </div>
@endsection
