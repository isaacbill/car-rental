@extends('layouts.app')

@section('content')
<form action="/search" method="POST" role="search">
    {{ csrf_field() }}
    <div class="input-group">
        <input type="text" class="form-control" name="q"
            placeholder="Search cars"> <span class="input-group-btn">
            <button type="submit" class="btn btn-default">
                <span class="glyphicon glyphicon-search"></span>
            </button>
        </span>
    </div>
</form>

 @can('manage-users')
<div align="right">
    <a href="{{ route('Crud.create')}}" class="btn btn-success btn-sm">Add</a>
</div>
@endcan
<table class="table table-bordered table-striped">
 <tr>
  <th width="10%">Image</th>
  <th width="10%">Vehicle's Title</th>
  <th width="10%">Vehicle's Brand</th>
  <th width="10%">Model Year</th>
  <th width="10%">Fuel Type</th>
  <th width="10%">Price per day</th>
  <th width="10%">Seating Capacity</th>
  <th width="15%">Action</th>
 </tr>
 @foreach($data as $row)
  <tr>
   <td><img src="{{ URL::to('/') }}/images/{{ $row->image }}" class="img-thumbnail" width="75" /></td>
   <td>{{ $row->VehiclesTitle }}</td>
   <td>{{ $row->VehiclesBrand }}</td>
   <td>{{ $row->ModelYear }}</td>
   <td>{{ $row->FuelType }}</td>
   <td>{{ $row->PricePerDay }}</td>
   <td>{{ $row->SeatingCapacity }}</td>
   <td>
      <a href="{{route('Crud.show', $row->id)}}" class="btn btn-primary">Show</a>
      
      @can('manage-users')
      <a href="{{route('Crud.edit', $row->id)}}" class="btn btn-warning">Edit</a>
      @endcan
      @can('delete-users')
      <form action="{{route('Crud.destroy', $row->id)}}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
      </form>
      @endcan
   </td>
  </tr>
 @endforeach
</table>
{!! $data->links() !!}
@endsection
