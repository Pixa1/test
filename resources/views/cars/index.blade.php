@extends('layouts.master')

@section('content')
<div class="col-auto">

    <div class="table-responsive">
	  <table class="table table-sm table-bordered">
    	  <thead class="thead-light">
			    <tr>
			      <th scope="col">Marka</th>
			      <th scope="col">Model</th>
			      <th scope="col">Boja</th>
			      <th scope="col">Registarska oznaka</th>
			      <th scope="col"></th>
			    </tr>
		  </thead>
				@foreach($cars as $car)

					@include('cars.show')

				@endforeach

		</table>

@endsection