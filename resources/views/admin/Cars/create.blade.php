@extends('layouts.app')

@section('content')
@if($errors->any())
<div class="alert alert-danger">
 <ul>
  @foreach($errors->all() as $error)
  <li>{{ $error }}</li>
  @endforeach
 </ul>
</div>
@endif
<div align="right">
 <a href="{{ route('Crud.index') }}" class="btn btn-primary">Back</a>
</div>

<form method="post" action="{{ route('Crud.store') }}" enctype="multipart/form-data">

 @csrf
 <div class="form-group">
  <label class="col-md-4 text-right">Enter Vehicle title</label>
  <div class="col-md-8">
   <input type="text" name="VehiclesTitle" class="form-control input-lg" />
  </div>
 </div>
 <br />
 <div class="form-group">
  <label class="col-md-4 text-right">Enter vehicle brand</label>
  <div class="col-md-8">
   <input type="text" name="VehiclesBrand" class="form-control input-lg" />
  </div>
 </div>
 <br />
 <div class="form-group">
  <label class="col-md-4 text-right">Enter Model Year</label>
  <div class="col-md-8">
   <input type="text" name="ModelYear" class="form-control input-lg" />
  </div>
 </div>
 <br />
 <div class="form-group">
  <label class="col-md-4 text-right">Enter fuel type</label>
  <div class="col-md-8">
   <input type="text" name="FuelType" class="form-control input-lg" />
  </div>
 </div>
 <br />
 <div class="form-group">
  <label class="col-md-4 text-right">Enter price per day</label>
  <div class="col-md-8">
   <input type="text" name="PricePerDay" class="form-control input-lg" />
  </div>
 </div>
 <br />
 <div class="form-group">
  <label class="col-md-4 text-right">Seating Capacity</label>
  <div class="col-md-8">
   <input type="text" name="SeatingCapacity" class="form-control input-lg" />
  </div>
 </div>
 <br />
 <div class="form-group">
  <label class="col-md-4 text-right">Select vehicle's Image</label>
  <div class="col-md-8">
   <input type="file" name="image" />
  </div>
 </div>
 <br /><br /><br />
 <div class="form-group text-center">
  <input type="submit" name="add" class="btn btn-primary input-lg" value="Add" />
 </div>

</form>

@endsection
