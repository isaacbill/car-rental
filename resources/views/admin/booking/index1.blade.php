@extends('layouts.app')

@section('content')

<table class="table table-bordered table-striped">
 <tr>
  <th width="10%">Name</th>
  <th width="10%">Phone</th>
  <th width="10%">Vehicle type</th>
  <th width="10%">Duration</th>
  
 </tr>
 @foreach($data as $row)
  <tr>
   <td>{{ $row->name }}</td>
   <td>{{ $row->phone }}</td>
   <td>{{ $row->vehicletype}}</td>
   <td>{{ $row->duration }}</td>
 
  </tr>
 @endforeach
</table>
@endsection
