@extends('navbar')
@section('content')
 
 
<div class="card">
  <div class="card-header">Invoice</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Register ID: {{ $item->registration->registration_id }}</h5>
        <p class="card-text">Paid Date: {{ $item->paid_date  }}</p>
        <p class="card-text">Amount: {{ $item->amount  }}</p>
  </div>
       
    </hr>
  
  </div>
</div>
@endsection