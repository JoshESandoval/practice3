@extends('adminlte::page')

@section('title', 'To do List')

@section('content_header')
	<h1>To Do's </h1>
@stop

@section('content')
<form method= "post" action = "{{ route('todos.store') }}" >
	@csrf
	<x-adminlte-input name="title" label="Title"/>
	<x-adminlte-input name="progress" type="number" min=0 max=100  />
	<x-adminlte-button type="Submit" label="Submit" />
</form>
@stop	
