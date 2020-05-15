@extends('HandleSection.HRDash')
@section('adminWorkingSection')
{{-- <h4 class="text-center">Hello Edit section</h4> --}}
<div class="container">
    <div class="card">
        <div class="card-header">
            <h4 class="text-center">Add The Sales Data</h4>
        </div>
        <div class="card-body">
        <form method="post" action="{{route('HRdepartmentsalesPer.update',$salesPerson->id)}}">
             @csrf
             @method('PATCH')
             <div class="form-group">
    <label for="sal_name">Sales Person Name</label>
             <input id="sal_name" class="form-control" type="text" name="sal_name" value="{{$salesPerson->sal_name}}" required>
</div>
<div class="form-group">
    <label for="state">Sales Person Looking State</label>
<input id="state" class="form-control" type="text" name="state" value="{{$salesPerson->state}}" required>
</div>
<div class="form-group">
    <label for="area">His Particular Looking Area</label>
    <input id="area" class="form-control" type="text" name="area" value="{{$salesPerson->area}}" required>
</div>
<div class="form-group">
    <label for="mob_num">Contact Number</label>
    <input id="mob_num" class="form-control" type="tel" name="mob_num" value="{{$salesPerson->mob_num}}" maxlength="10" minlength="10" required>
</div>
<div class="form-group">
    <label for="email_id">Email Id </label>
<input id="email_id" class="form-control" type="email" name="email_id" value="{{$salesPerson->email_id}}" required>
</div>
<div class="form-group">
    <label for="status">Status</label>
    <select id="status" class="form-control" name="status">
    <option value="{{$salesPerson->status}}">{{$salesPerson->status}}</option>
        @if ($salesPerson->status==='active')
<option value="deactive">Deactive</option>

        @else
<option value="active">Active</option>
        @endif

    </select>
</div>
<div class="form-group">
    <button type="submit" class="btn btn-primary px-2">Update IT</button>
</div>
            </form>
        </div>
    </div>
</div>
@endsection
