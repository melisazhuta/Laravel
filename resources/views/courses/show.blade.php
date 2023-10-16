@extends('navbar')
@section('content')
 
 
<div class="card">
  <div class="card-header">Courses</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Name : {{ $courses->name }}</h5>
        <p class="card-text">Semester : {{ $courses->semester }}</p>
     
  </div>
       
    </hr>
  
  </div>
</div>
@endsection