@extends('HandleSection.HRDash')
@section('adminWorkingSection')

<div class="container">
    <div class="card">
<div class="card-header">
    <h5 class="info-color white-text text-center">
        <strong>Add Position</strong>
    </h5>
</div>
<div class="card-body text-center">
<form action="{{route('position.storePos')}}" method="POST">
        @csrf
<div class="form-group">
    <label for="postion">Enter the Position Name</label>
    <input type="text" id="postion" name="positionName" class="form-control" placeholder="Enter the Position Name">
</div>
<div class="form=group">
    <div class="text-center">
        <button type="submit" class="btn btn-info">Add IT</button>
    </div>
</div>
    </form>
</div>
    </div>
</div>
@endsection
