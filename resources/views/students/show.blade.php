@extends('navbar')
@section('content')
 
 
<div class="card">
  <div class="card-header">Students Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Name : {{ $students->name }}</h5>
        <p class="card-text">Surname : {{ $students->surname }}</p>
        <p class="card-text">Mobile : {{ $students->mobile }}</p>
        <p class="card-text">Month : {{ $students->month }}</p>
  </div>
       
    </hr>
  
  </div>
</div>
@endsection