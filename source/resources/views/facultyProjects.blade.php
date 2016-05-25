@extends('layouts.header_footer')
@section('content')
<table class="table">
  <thead>
    <tr>
      <th>Faculty</th>
      <th>Project</th>
      <!-- <th>Description</th> -->
      <th>Starting</th>
      <th>Ending</th>
      <th>Funding agency</th>
      <th>Funding amount</th>
      <th>Principle Investigator</th>
      <th>Co-Principle Investigator</th>
      <th>Status</th>
    </tr>
  </thead>
  <tbody>
   
    @foreach($projects as $project)
    	<tr>
	      <!-- <th scope="row">{{$project->pName}}</th> -->
	      <td>{{$project->faculty->name}}</td>
	      <td>{{$project->pName}}</td>
	      
	      <td>{{$project->start_date}}</td>
	      <td>{{$project->end_date}}</td>
	      <td>{{$project->funding_agency}}</td>
        <td>{{$project->funding_amount}}</td>
	      <td>{{$project->PI}}</td>
	      <td>{{$project->co_PI}}</td>
	      <td>{{$project->status}}</td>
	      
	    </tr>
	    
    @endforeach
    
  </tbody>
</table>
@endsection