@extends('HandleSection.HRDash')
@section('adminWorkingSection')
<h4 class="text-center">All The added Job</h4>
<div class="container">
    @if (Session::has('jobAdded'))
    <p class="alert alert-danger">
        {{session('jobAdded')}}
    </p>
    @endif
    <table class="table table-bordered table-hover">
        <thead>
            <th>ID</th>
            <th>Position Name</th>
            <th>Location</th>
            <th>Postion Number</th>
            <th>Current Status</th>
            <th>Create date</th>
        </thead>
        <tbody>
            @forelse ($jobData as $job)
             <tr>
             <td>{{$job->id}}</td>
             <td>{{$job->position->positionName}}</td>
             <td>{{$job->location}}</td>
             <td>{{$job->number_of_position}}</td>
             <td>{{$job->job_status}}</td>
             <td>{{$job->created_at->diffForHumans()}}</td>
            </tr>
            @empty
            <h4 class="text-center">There are currently no any job is added</h4>
             @endforelse
        </tbody>
    </table>
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
            {{$jobData->render()}}
        </ul>
    </nav>
</div>

@endsection
