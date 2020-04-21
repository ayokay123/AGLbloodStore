@extends('layouts.app')

@section('content')
	<form method="POST" action="{{route('donating')}}">
		@csrf
		{{ csrf_field() }} 
		<label>pick a date </label>
		<input type="date" name="date">
		<input type="submit" name="ok" value="save">
	</form>
@endsection