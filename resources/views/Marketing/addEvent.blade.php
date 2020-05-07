@extends('Marketing.MkTDash')
@section('adminWorkingSection')
    <div class="container">
        <div class="card">
            <div class="card-header">
               <h5 class="info-color white-text text-center">
        <strong>Add Upcoming Event</strong>
    </h5>
            </div>
            <div class="card-body">
                <form method="post" action="{{ route('Marketing.mktEvent.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="event_type_id">Event Type</label>
                        <select class="form-control" id="event_type_id" name="event_type_id" required>
                            <option selected value disabled>---Choose the Event Type---</option>
@forelse ($eventType as $type)
    <option value="{{$type->id}}">{{$type->event_name}}</option>
@empty
  <option selected value disabled>---Currently there is nOt Any event type Added----</option>
@endforelse
                        </select>
                    </div>
      <div class="form-group">
          <label for="event_name">Event Name</label>
          <input id="event_name" class="form-control" type="text" name="event_name">
      </div>
<div class="form-group">
    <label for="event_place">Event Place</label>
    <input id="event_place" class="form-control" type="text" name="event_place">
</div>
<div class="form-group">
    <label for="event_address">Event Address Details</label>
    <textarea id="event_address" class="form-control" name="event_address" rows="3" required></textarea>
</div>
<div class="form-group">
    <label for="event_start_date">Event Start Date</label>
    <input id="event_start_date" class="form-control" type="date" name="event_start_date">
</div>
<div class="form-group">
    <label for="event_end_date">Event End Date</label>
    <input id="event_end_date" class="form-control" type="date" name="event_end_date">
</div>
<div class="form-group">
    <label for="event_doc_id">Select the file</label>
    <input id="event_doc_id" class="form-control" type="file" name="event_doc_id">
</div>
<div class="form-group">
    <button type="submit" class="btn btn-info">Add IT</button>
</div>
                </form>
            </div>
        </div>
    </div>
@endsection
