
@extends('metrics.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Inventory Page</div>
  <div class="card-body">
      
      <form action="{{ url('metric') }}" method="post">
        {!! csrf_field() !!}
        <label>Date</label></br>
        <input type="date" name="date" id="date" class="form-control"></br>
        <label>Type of Medicine Available</label></br>
        <input type="text" name="medicine" id="medicine" class="form-control"></br>
        <label>Available Stock</label></br>
        <input type="text" name="stock" id="stock" class="form-control"></br>
        <label>Name of Client</label></br>
        <input type="text" name="client" id="client" class="form-control"></br>
        <label>Assisted by</label></br>
        <input type="text" name="readby" id="readby" class="form-control"></br>
        <label>Contact Number</label></br>
        <input type="text" name="contact" id="contact" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>

@stop

