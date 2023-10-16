@extends('navbar')
@section('content')
 
<div class="card">
  <div class="card-header">Exams</div>
  <div class="card-body">
      
      <form action="{{ url('exams') }}" method="post">
        {!! csrf_field() !!}
        <label>Exam Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Exam ID</label></br>
        <input type="text" name="course_id" id="course_id" class="form-control"></br>
        <label>Date</label></br>
        <input type="text" name="date" id="date" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop