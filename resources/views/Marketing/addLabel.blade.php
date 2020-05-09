@extends('Marketing.MkTDash')
@section('adminWorkingSection')
<div class="container">
    <div class="card">
        <div class="card-header">
           <h5 class="info-color white-text text-center">
        <strong>Add Label Type</strong>
        </div>
        <div class="card-body">
        <form method="post" action="{{route('Marketing.labelView.labelStore')}}" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="labelType">Text</label>
        <input id="labelType" class="form-control" type="text" name="labelType" required>
    </div>
    <div class="custom-file">
        <input id="labelFile" class="custom-file-input" type="file" name="labelFile">
        <label for="my-input" class="custom-file-label">Select The file</label>
    </div>
    <div class="btn-group" role="group" aria-label="Button group">
<button class="btn btn-info" type="submit">Add IT</button>
    </div>

</form>
        </div>
    </div>
</div>
@endsection
