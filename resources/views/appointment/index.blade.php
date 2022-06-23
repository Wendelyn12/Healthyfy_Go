
@extends('appointment.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-20">
                <div class="card">
                    <div class="card-header">APPOINTMENT</div>
                    <div class="card-body">
                        <a href="{{ url('/appointment/create') }}" class="btn btn-success btn-sm" title="Add New Contact">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                    <th>Date</th>
                                        <th>name</th>
                                        <th>service</th>
                                        <th>email</th>
                                        <th>assitedby</th>
                                        <th>contact</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($appointment as $item)
                                    <tr>
                                        <!-- <td>{{ $loop->iteration }}</td> -->
                                        <td>{{ $item->date }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->service }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->assistedby }}</td>
                                        <td>{{ $item->contact }}</td>
                                        <td>
                                            <a href="{{ url('/appointment/' . $item->id) }}" title="View Appointment"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/appointment/' . $item->id . '/edit') }}" title="Edit Appointment"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            <form method="POST" action="{{ url('/appointment' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Contact" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection