
@extends('metrics.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-20">
                <div class="card">
                    <div class="card-header">INVENTORY</div>
                    <div class="card-body">
                        <a href="{{ url('/metric/create') }}" class="btn btn-success btn-sm" title="Add New Contact">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>medicine</th>
                                        <th>stock</th>
                                        <th>client</th>
                                        <th>Readby</th>
                                        <th>contact</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($metrics as $item)
                                    <tr>
                                        <!-- <td>{{ $loop->iteration }}</td> -->
                                        <td>{{ $item->date }}</td>
                                        <td>{{ $item->medicine }}</td>
                                        <td>{{ $item->stock }}</td>
                                        <td>{{ $item->client }}</td>
                                        <td>{{ $item->readby }}</td>
                                        <td>{{ $item->contact }}</td>
                                        <td>
                                            <a href="{{ url('/metric/' . $item->id) }}" title="View Metrics"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/metric/' . $item->id . '/edit') }}" title="Edit Metrics"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            <form method="POST" action="{{ url('/metric' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
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