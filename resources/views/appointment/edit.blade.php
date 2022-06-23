
@extends('appointment.layout')
@section('content')
<div class="card">
  <div class="card-header">Appointment Page</div>
  <div class="card-body">
      
      <form action="{{ url('/appointment/' .$appointment->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$appointment->id}}" id="id" />
        <label>Date</label></br>
        <input type="date" name="date" id="date" value="{{$appointment->date}}" class="form-control"></br>
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$appointment->medicine}}" class="form-control"></br>
        <label> Service</label></br>
        <input type="text" name="service" id="service" value="{{$appointment->stock}}" class="form-control"></br>
        <label>email</label></br>
        <input type="text" name="email" id="email" value="{{$appointment->client}}" class="form-control"></br>
        <label>Assisted By</label></br>
        <input type="text" name="assistedby" id="assistedby" value="{{$appointment->readby}}" class="form-control"></br>
        <label>Contact Number</label></br>
        <input type="text" name="contact" id="contact" value="{{$appointment->contact}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>

@stop