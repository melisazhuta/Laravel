@extends('navbar')
@section('content')
 
<div class="card">
  <div class="card-header">Professor</div>
  <div class="card-body">
      
      <form action="{{ url('profs') }}" method="post">
        {!! csrf_field() !!}
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Surname</label></br>
        <input type="text" name="surname" id="surname" class="form-control"></br>
        <label>Subject</label></br>
        <input type="text" name="subject" id="subject" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop