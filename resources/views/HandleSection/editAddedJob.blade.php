@extends('HandleSection.HRDash')
@section('adminWorkingSection')
<div class="container">
    <div class="card">
        <div class="card-header text-center">
            <h4>Update the Job</h4>
        </div>
        <div class="card-body">
        <form action="{{route('HRdepartmentHrJob.update',$jobData->id)}}" method="POST">
            @csrf
            @method('put')
            <div class="form-group">
<div class="form-group">
    <label for="position_id">Postion Type</label>
<select class="form-control" id="position_id" name="position_id" required>
<option value="{{$jobData->position->id}}">{{$jobData->position->positionName}}</option>
@forelse ($position as $pos)
    <option value="{{$pos->id}}">{{$pos->positionName}}</option>
    @empty
<h5>No Position is still Not added</h5>
    @endforelse
</select>
</div>
<div class="form-group">
    <label for="location">Location Area</label>
<input type="text" class="form-control" id="location" name="location" value="{{$jobData->location}}" required>
</div>
<div class="form-group">
        <label for="number">Number Of Position</label>
<input type="number" id="number" name="number_of_position" class="form-control" value="{{$jobData->number_of_position}}" required>
    </div>
    <div class="form-group">
       <label for="status">Status Of Job</label>
       <select class="form-control" id="status" name="job_status" required>
       <option value="{{$jobData->job_status}}">{{$jobData->job_status}}</option>

<option value="closed">Closed</option>
<option value="open">Open</option>
       </select>
    </div>
    <div class="form-group">
       <button type="submit" class="btn btn-info">Update IT</button>
   </div>

            </div>
        </div>
    </div>
</div>
@endsection
