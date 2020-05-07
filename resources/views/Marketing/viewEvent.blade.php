@extends('Marketing.MKTDash')
@section('adminWorkingSection')
<div class="container">
    <div class="card">
        <div class="card-header">
<h4 class="text-center">All the Added Event</h4>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-hover">
                <thead>
                    <th>Id</th>
                    <th>Added Image</th>
                    <th>Event Type</th>
                    <th>Event Name</th>
                    <th>Event Place</th>
                    <th>Event Address</th>
                    <th>Start Data</th>
                    <th>End Data</th>
                    <th>Status</th>
                    <th></th>
                </thead>
                <tbody>
@forelse ($eventData as $data)
        <tr>
        <td>{{$data->id}}</td>
        <td><img src="{{$data->fileEvent->file}}" width="100" height="100"></td>
        <td>{{$data->eventType->event_name}}</td>
        <td>{{$data->event_name}}</td>
        <td>{{$data->event_place}}</td>
        <td>{{$data->event_address}}</td>
        <td>{{$data->event_start_date}}</td>
        <td>{{$data->event_end_date}}</td>
        <td>{{$data->event_status}}</td>
        <td><a href="{{route('Marketing.mktEvent.edit',$data->id)}}">
            <button type="submit" class="btn btn-info">Edit</button></a>
        </td>
        </tr>
@empty

@endforelse

                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
