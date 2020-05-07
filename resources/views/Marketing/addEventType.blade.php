@extends('Marketing.MkTDash')
@section('adminWorkingSection')
<div class="container">
    <div class="card">
        <div class="card-header">
    <h5 class="info-color white-text text-center">
        <strong>Add Event Type</strong>
    </h5>
</div>
        <div class="card-body">
        <form action="{{route('Marketing.eventType.eventStore')}}" method="POST">
    @csrf
    <div class="form-group">
        <label for="event_name">Enter the Event Type Name</label>
        <input name="event_name" id="event_name" type="text" placeholder="Enter the event type name" class="form-control" required>
    </div>
    <div class="form-group">
    <button type="submit" class="btn btn-info">Add IT</button>
    </div>
</div>
</form>

</div>
    </div>
</div>
@endsection
