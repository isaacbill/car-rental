@extends('layouts.app')

@section('content')

<div class="jumbotron text-center">
 <div align="right">
  <a href="{{ route('Crud.index') }}" class="btn btn-success">Back</a>
 </div>
 <br />
 <img src="{{ URL::to('/') }}/images/{{ $data->image }}" class="img-thumbnail" width="50%" />
 <h3 align="left">Vehicle title - {{ $data->VehiclesTitle }} </h3>
 <h3 align="left">Vehicle brand - {{ $data->VehiclesBrand }}</h3>
 <h3 align="left">Model year - {{ $data->ModelYear }}</h3>
 <h3 align="left">Fuel type - {{ $data->FuelType }}</h3>
 <h3 align="left">Price per day - {{ $data->PricePerDay }}</h3>
 <h3 align="left">Seating capacity - {{ $data->SeatingCapacity }}</h3>

  <a href="{{ route('booking.create') }}" class="btn btn-success">Book This Car</a>
</div>

@endsection
