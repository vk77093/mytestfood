@extends('HandleSection.HRDash')
@section('adminWorkingSection')
<div class="container">
    <div class="card">
        <div class="card-header text-center">
<h4>Please Post the Job Here</h4>
        </div>
        <div class="card-body">

<form action="{{route('HrJob.store')}}" method="POST">
    @csrf
    <div class="form-group">
        <label for="position_id">Postion Type</label>
        <select class="form-control" id="position_id" name="position_id" required>
<option selected value disabled>---Please select the Position----</option>
@forelse ($position as $pos)
        <option value="{{$pos->id}}">{{$pos->positionName}}</option>
@empty
   <h5>No Position is still Not added</h5>
@endforelse
        </select>
    </div>
    <div class="form-group">
        <label for="location">Loaction/Area</label>
        <input type="text" id="location" name="location" class="form-control" placeholder="Enter the Location where you want open the job" required>
    </div>
    <div class="form-group">
        <label for="number">Number Of Position</label>
        <input type="number" id="number" name="number_of_position" class="form-control" placeholder="Enter the Number of position for the Job" required>
    </div>
   <div class="form-group">
       <button type="submit" class="btn btn-info">Add IT</button>
   </div>
</form>

        </div>
    </div>
</div>
@endsection
