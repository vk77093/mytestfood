@extends('Marketing.MkTDash')
@section('adminWorkingSection')
<div class="container">
    <div class="card">
        <div class="card-header">
          <h5 class="info-color white-text text-center">
        <strong>Edit Upcoming Event</strong>
        </div>
        <div class="card-body">
        <form method="post" action="{{route('Marketing.mktEvent.update',$eventData->id)}}" enctype="multipart/form-data">
@csrf
@method('put')
<div class="form-group">
    <label for="event_type_id">Event Type</label>
    <select id="event_type_id" class="form-control" name="event_type_id" required>
    <option value="{{$eventData->eventType->id}}">{{$eventData->eventType->event_name}}</option>
    @forelse ($eventType as $type)
    <option value="{{$type->id}}">{{$type->event_name}}</option>
    @empty
  <option selected value disabled>No Event is there</option>
    @endforelse
    </select>
</div>

<div class="form-group">
          <label for="event_name">Event Name</label>
<input id="event_name" class="form-control" type="text" name="event_name" value="{{$eventData->event_name}}">
      </div>
<div class="form-group">
    <label for="event_place">Event Place</label>
<input id="event_place" class="form-control" type="text" name="event_place" value="{{$eventData->event_place}}">
</div>
<div class="form-group">
    <label for="event_address">Event Address Details</label>
<textarea id="event_address" class="form-control" name="event_address" rows="3" required>{{$eventData->event_address}}</textarea>
</div>
<div class="form-group">
    <label for="event_start_date">Event Start Date</label>
<input id="event_start_date" class="form-control" type="date" name="event_start_date" value="{{$eventData->event_start_date}}">
</div>
<div class="form-group">
    <label for="event_end_date">Event End Date</label>
<input id="event_end_date" class="form-control" type="date" name="event_end_date" value="{{$eventData->event_end_date}}">
</div>
<div class="form-group">
    <label for="event_doc_id">Select the file</label>
<img src="{{$eventData->fileEvent->file}}" width="100px"><input id="event_doc_id" class="form-control" type="file" name="event_doc_id" value="{{$eventData->fileEvent->file}}">

</div>
<div class="form-group">
    <label for="event_status">Event Status</label>
    <select class="form-control" name="event_status" id="event_status" required>
    <option value="{{$eventData->event_status}}">{{$eventData->event_status}}</option>
    <option value="closed">Closed</option>
<option value="open">Open</option>
    </select>
</div>
<div class="form-group">
    <button type="submit" class="btn btn-info">Update IT</button>
</div>
        </form>
        </div>
    </div>
</div>
@endsection
