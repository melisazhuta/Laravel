@extends('navbar')
@section('content')
 
<div class="card">
  <div class="card-header">Registration</div>
  <div class="card-body">
      
      <form action="{{ url('registrations') }}" method="post">
        {!! csrf_field() !!}
        <label>Register ID</label></br>
        <input type="text" name="register_id" id="register_id" class="form-control"></br>
        <label>Exams</label></br>
       

        <select name="exam_id" id="exam_id" class="form-control">

        @foreach($exams as $id =>$name)
        <option value="{{ $id }}">{{ $name}} </option>
        @endforeach
        </select>
        
        <label>Student</label></br>
        <input type="text" name="student_id" id="student_id" class="form-control"></br>
        <label>Payment</label></br>
        <input type="text" name="fee" id="fee" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop