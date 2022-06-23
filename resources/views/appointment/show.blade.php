
@extends('appointment.layout')
@section('content')
<div class="card">
  <div class="card-header">Appointment</div>
  <div class="card-body">
  
        <div class="card-body">
        <p class="card-title">Date : {{ $appointment->date }}</p>
        <p class="card-text">name : {{ $appointment->name }}</p>
        <p class="card-text">service : {{ $appointment->service }}</p>
        <p class="card-title">email : {{ $appointment->email }}</p>
        <p class="card-text">assistedby : {{ $appointment->assistedby }}</p>
        <p class="card-text">contact : {{ $appointment->contact }}</p>
  </div>
      
    </hr>
  
  </div>
</div>
