@extends('adminlte::page')

@section('title', 'Calendar Event')

@section('content_header')
	<h1>Events </h1>
@stop

@section('content')
    <form method="post" action= "{{route('calendar.store')}}">
        <x-adminlte-input name="title" label="Title"/>
        <h5>Start Time </br></h5>
        <input type="datetime-local" name="start_time"/>
        <h5>End Time </br></h5>
        <input type="datetime-local" name="end_time"/>
    </form>
@stop	
