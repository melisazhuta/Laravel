@extends('navbar')
@section('content')
 
<div class="card">
  <div class="card-header">Invoice</div>
  <div class="card-body">
      
      <form action="{{ url('invoices') }}" method="post">
        {!! csrf_field() !!}
        <label>Register ID</label></br>
       <select name="register_id" id="register_id" class="form-control">
        @foreach($registrations as $id =>$register_id)
        <option value="{{ $id }}">{{ $register_id}} </option>
        @endforeach
        </select>

        <label>Paid Date</label></br>
        <input type="text" name="paid_date" id="paid_date" class="form-control"></br>

        <label>Amount</label></br>
        <input type="text" name="amount" id="amount" class="form-control"></br>

        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop