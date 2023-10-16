@extends('navbar')
@section('content')
 
<div class="card">
  <div class="card-header">Edit</div>
  <div class="card-body">
      
      <form action="{{ url('profs/' .$profs->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$profs->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$profs->name}}" class="form-control"></br>
        <label>Surname</label></br>
        <input type="text" name="surname" id="surname" value="{{$profs->surname}}" class="form-control"></br>
        <label>Subject</label></br>
        <input type="subject" name="subject" id="subject" value="{{$profs->subject}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop