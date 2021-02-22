@extends('layouts.app')

@section('content')

<div class="container">
    @if(isset($details))
        <p> The Search results for your query <b> {{ $query }} </b> are :</p>
    <h2>Car details</h2>
    <table class="table table-striped">
        <thead>
            <tr>
  <th width="10%">Vehicle's Title</th>
  <th width="10%">Vehicle's Brand</th>
  <th width="10%">Model Year</th>
  <th width="10%">Fuel Type</th>
  <th width="10%">Price per day</th>
  <th width="10%">Seating Capacity</th>
            </tr>
        </thead>
        <tbody>
            @foreach($details as $cruds)
            <tr>
                <td>{{$cruds->VehiclesTitle}}</td>
                <td>{{$cruds->VehiclesBrand}}</td>
                <td>{{$cruds->ModelYear}}</td>
                <td>{{$cruds->FuelType}}</td>
                <td>{{$cruds->PricePerDay}}</td>
                <td>{{$cruds->SeatingCapacity}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
</div>
@endsection