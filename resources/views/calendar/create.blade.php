@extends('adminlte::page')

@section('title', 'Calendar Event')

@section('content_header')
	<h1>Events </h1>
@stop

@section('content')
<form method= "post" action = "{{ route('calendar') }}" >
	@csrf
	<x-adminlte-input name="title" label="Title"/>
	<x-adminlte-input name="progress" type="number" min=0 max=100  />
	<x-adminlte-button type="Submit" label="Submit" />
</form>
@stop	
