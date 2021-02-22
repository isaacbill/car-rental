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
<form method="post" action="{{ route('booking.store') }}" enctype="multipart/form-data">

 @csrf
 <div class="form-group">
  <label class="col-md-4 text-right">Enter Your Name</label>
  <div class="col-md-8">
   <input type="text" name="name" class="form-control input-lg" />
  </div>
 </div>
 <br />
 <div class="form-group">
  <label class="col-md-4 text-right">Phone Number</label>
  <div class="col-md-8">
   <input type="Number" name="phone" class="form-control input-lg" />
  </div>
 </div>
 <br />
 
 <div class="form-group">
  <label class="col-md-4 text-right">VehicleType booked</label>
  <div class="col-md-8">
   <input type="text" name="vehicletype" class="form-control input-lg" />
  </div>
 </div>
 <br />
 <div class="form-group">
  <label class="col-md-4 text-right">Duration</label>
  <div class="col-md-8">
   <input type="text" name="duration" class="form-control input-lg" />
  </div>
 </div>
 <br />
 
 <div class="form-group text-center">
  <input type="submit" name="Book" class="btn btn-primary input-lg" value="Book" />
 </div>

</form>

@endsection
