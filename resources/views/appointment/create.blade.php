
@extends('appointment.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Book Appointment Page</div>
  <div class="card-body">
      
      <form action="{{ url('appointment') }}" method="post">
        {!! csrf_field() !!}
        <label>Date</label></br>
        <input type="date" name="date" id="date" class="form-control"></br>
        <label>Name</label></br>
        <input list="text" name="name" id="name" class="form-control"></br>
        
        <label>Service</label></br>
        <input type="text" name="service" id="service" class="form-control"></br>
        
        <label>Email</label></br>
        <input type="text" name="email" id="email" class="form-control"></br>
        <label>Assisted by</label></br>
        <input type="text" name="assistedby" id="assistedby" class="form-control"></br>
        <label>Contact Number</label></br>
        <input type="text" name="contact" id="contact" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>

@stop

