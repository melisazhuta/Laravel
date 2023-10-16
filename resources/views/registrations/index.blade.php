@extends('navbar')
@section('content')
   
                <div class="card">
                    <div class="card-header">
                        <h2>Registration</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/registrations/create') }}" class="btn btn-success btn-sm" title=" Register exams">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Register id</th>
                                        <th>ExamId</th>
                                        <th>Student</th>
                                        <th>Fee</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($registrations as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->register_id}}</td>
                                        <td>{{ $item->exam_id }}</td>
                                        <td>{{ $item->student_id}}</td> 
                                        <td>{{ $item->fee }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
 
                    </div>
                </div>
   
@endsection


