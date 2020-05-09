@extends('Marketing.MKTDash')
@section('adminWorkingSection')
<div class="container">
    <div class="card">
        <div class="card-header">
           <h4 class="text-center">All Label Data</h4>
        </div>
        <div class="card-body">
<table class="table table-bordered table-hover">
    <thead>
        <th>ID</th>
        <th>Image</th>
        <th>Label Name</th>
        {{-- <th></th> --}}

    </thead>
    <tbody>
        @forelse ($labelData as $data)
<tr>
<td>{{$data->id}}</td>
<td><img src="{{$data->labelFile}}"width="50px" height="50px" class="rounded-circle"></td>
<td>{{$data->labelType}}</td>
{{-- <td>
    <a href=""><button class="btn btn-info">Edit</button></a>
</td> --}}
</tr>
        @empty
<td><h4 class="text0-center">Currentlt No data is There</h4></td>
        @endforelse
    </tbody>
</table>
        </div>
    </div>
</div>
@endsection
