
@extends('metrics.layout')
@section('content')
<div class="card">
  <div class="card-header">Inventory Page</div>
  <div class="card-body">
      
      <form action="{{ url('metric/' .$metrics->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$metrics->id}}" id="id" />
        <label>Date</label></br>
        <input type="date" name="date" id="date" value="{{$metrics->date}}" class="form-control"></br>
        <label>Type of Medicine</label></br>
        <input type="text" name="medicine" id="medicine" value="{{$metrics->medicine}}" class="form-control"></br>
        <label>Available Stock</label></br>
        <input type="text" name="stock" id="stock" value="{{$metrics->stock}}" class="form-control"></br>
        <label>Name of Client</label></br>
        <input type="text" name="client" id="client" value="{{$metrics->client}}" class="form-control"></br>
        <label>Assisted By</label></br>
        <input type="text" name="readby" id="readby" value="{{$metrics->readby}}" class="form-control"></br>
        <label>Contact Number</label></br>
        <input type="text" name="contact" id="contact" value="{{$metrics->contact}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>

@stop