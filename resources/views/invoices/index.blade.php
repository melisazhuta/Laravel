@extends('navbar')
@section('content')
   
                <div class="card">
                    <div class="card-header">
                        <h2>Invoice</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/invoices/create') }}" class="btn btn-success btn-sm" title="Add New Course">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Registration ID</th>
                                        <th>Paid Date</th>
                                        <th>Amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($invoices as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->registration->register_id??'None'}}</td>
                                        <td>{{ $item->paid_date }}</td>
                                        <td>{{ $item->amount }}</td>

                                        <td>
                                            <a href="{{ url('/report/report1/' . $item->id) }}" title="Print"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Print</button></a>
                                         
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
 
                    </div>
                </div>
   
@endsection


