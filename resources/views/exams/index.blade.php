@extends('navbar')
@section('content')
   
                <div class="card">
                    <div class="card-header">
                        <h2>Exams</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/exams/create') }}" class="btn btn-success btn-sm" title="Add New Exam">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Exam ID</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($exams as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->course_id }}</td>
                                        <td>{{ $item->date }}</td>
 
                                        <td>
                                            <a href="{{ url('/exams/' . $item->id) }}" title="View Exams"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/exams/' . $item->id . '/edit') }}" title="Edit"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
 
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
 
                    </div>
                </div>
     
@endsection


