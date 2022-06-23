
@extends('metrics.layout')
@section('content')
<div class="card">
  <div class="card-header">Healthyfy Go Inventory of Medicines</div>
  <div class="card-body">
  
        <div class="card-body">
        <p class="card-title">Date : {{ $metric->date }}</p>
        <p class="card-text">medicine : {{ $metric->medicine }}</p>
        <p class="card-text">stock : {{ $metric->stock }}</p>
        <p class="card-title">client : {{ $metric->client }}</p>
        <p class="card-text">Readby : {{ $metric->readby }}</p>
        <p class="card-text">contact : {{ $metric->contact }}</p>
  </div>
      
    </hr>
  
  </div>
</div>
