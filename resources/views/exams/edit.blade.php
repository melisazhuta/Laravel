@extends('navbar')
@section('content')
 
<div class="card">
  <div class="card-header">Edit</div>
  <div class="card-body">
      
      <form action="{{ url('exams/' .$exams->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$exams->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$exams->name}}" class="form-control"></br>
        <label>Exam ID</label></br>
        <input type="text" name="course_id" id="course_id" value="{{$exams->course_id}}" class="form-control"></br>
        <label>Date</label></br>
        <input type="text" name="date" id="date" value="{{$exams->date}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop