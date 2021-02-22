@extends('layouts.app')

@section('content')
            
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div align="right">
                <a href="{{ route('Crud.index') }}" class="btn btn-default">Back</a>
            </div>
            <br />
     <form method="post" action="{{ route('Crud.update', $data->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
      <div class="form-group">
       <label class="col-md-4 text-right">Enter vehicle title</label>
       <div class="col-md-8">
        <input type="text" name="vehicle_title" value="{{ $data->vehicle_title }}" class="form-control input-lg" />
       </div>
      </div>
      <br />
      <div class="form-group">
       <label class="col-md-4 text-right">Enter vehicle brand</label>
       <div class="col-md-8">
        <input type="text" name="vehicle_brand" value="{{ $data->vehicle_brand }}" class="form-control input-lg" />
       </div>
      </div>
      <br />
      <div class="form-group">
       <label class="col-md-4 text-right">Enter model year</label>
       <div class="col-md-8">
        <input type="text" name="model_year" value="{{ $data->model_year }}" class="form-control input-lg" />
       </div>
      </div>
      <br />
      <div class="form-group">
       <label class="col-md-4 text-right">Enter fuel type</label>
       <div class="col-md-8">
        <input type="text" name="fuel_type" value="{{ $data->fuel_type }}" class="form-control input-lg" />
       </div>
      </div>
      <br />
      <div class="form-group">
       <label class="col-md-4 text-right">Enter price per day</label>
       <div class="col-md-8">
        <input type="text" name="priceperday" value="{{ $data->priceperday }}" class="form-control input-lg" />
       </div>
      </div>
      <br />
      <div class="form-group">
       <label class="col-md-4 text-right">Seating Capacity</label>
       <div class="col-md-8">
        <input type="text" name="seating_capacity" value="{{ $data->seating_capacity }}" class="form-control input-lg" />
       </div>
      </div>
      <br />
      <div class="form-group">
       <label class="col-md-4 text-right">Select vehicle Image</label>
       <div class="col-md-8">
        <input type="file" name="image" />
              <img src="{{ URL::to('/') }}/images/{{ $data->image }}" class="img-thumbnail" width="100" />
                        <input type="hidden" name="hidden_image" value="{{ $data->image }}" />
       </div>
      </div>
      <br /><br /><br />
      <div class="form-group text-center">
       <input type="submit" name="edit" class="btn btn-primary input-lg" value="Edit" />
      </div>
     </form>

@endsection