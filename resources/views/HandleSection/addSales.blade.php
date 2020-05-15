@extends('HandleSection.HRDash')
@section('adminWorkingSection')
<div class="container">
    <div class="card">
        <div class="card-header text-center">
           <h4>Please Add the Sales Person</h4>
        </div>
        <div class="card-body">
        <form method="post" action="{{route('HRdepartmentsalesPer.store')}}">
@csrf
<div class="form-group">
    <label for="sal_name">Sales Person Name</label>
    <input id="sal_name" class="form-control" type="text" name="sal_name" required>
</div>
<div class="form-group">
    <label for="state">Sales Person Looking State</label>
    <input id="state" class="form-control" type="text" name="state" required>
</div>
<div class="form-group">
    <label for="area">His Particular Looking Area</label>
    <input id="area" class="form-control" type="text" name="area" required>
</div>
<div class="form-group">
    <label for="mob_num">Contact Number</label>
    <input id="mob_num" class="form-control" type="tel" name="mob_num" maxlength="10" minlength="10" required>
</div>
<div class="form-group">
    <label for="email_id">Email Id </label>
    <input id="email_id" class="form-control" type="email" name="email_id" required>
</div>
<div class="form-group">
    <button type="submit" class="btn btn-primary px-2">Add IT</button>
</div>
           </form>
        </div>
    </div>
</div>
@endsection
