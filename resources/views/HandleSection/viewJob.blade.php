@extends('HandleSection.HRDash')
@section('adminWorkingSection')
<h4 class="text-center">All the applied Job</h4>
<div class="container">
    <table class="table table-bordered table-hover">
        <thead>
            <th>ID</th>
            <th>First name</th>
            <th>Last Name</th>
            <th>Applied Postion</th>
            <th>Email id</th>
            <th>Mobile Number</th>
            <th>Address</th>
            <th>City</th>
            <th>Country</th>
            <th>Experience</th>
            <th>Current Employe</th>
            <th>Current Degisation</th>
            <th>Key Skills</th>
            <th>Attached Resume</th>
            <th>Added At</th>
        </thead>
        <tbody>
@forelse ($appliedJobData as $job)
<tr>
<td>{{$job->id}}</td>
<td>{{$job->firstName}}</td>
<td>{{$job->lastName}}</td>
<td>{{$job->position}}</td>
<td>{{$job->email}}</td>
<td>{{$job->mobileNum}}</td>
<td>{{$job->address}}</td>
<td>{{$job->city}}</td>
<td>{{$job->country}}</td>
<td>{{$job->experience}}</td>
<td>{{$job->currentEmp}}</td>
<td>{{$job->currentDeg}}</td>
<td>{{$job->keySkills}}</td>
<td><a href="{{$job->fileresume->file}}" target="_blank">{{Str::limit($job->fileresume->file,8)}}</a></td>
<td>{{$job->created_at->diffForHumans()}}</td>
</tr>
@empty
   <h4 class="text-center">There are currently not any applied Job</h4>
@endforelse
       </tbody>
    </table>

    <nav aria-label="Page navigation example">
<ul class="pagination justify-content-center">
   {{$appliedJobData->render()}}
 </ul>
</nav>
</div>

@endsection
