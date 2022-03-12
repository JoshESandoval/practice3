@extends('adminlte::page')

@section('title', 'Calendar Event')

@section('content_header')
	<h1>Events </h1>
@stop

@section('content')
    <form method="post" action= "{{route('calendar.store')}}">
        <x-adminlte-input name="title" label="Title"/>
        <h4>Start Time </br></h4>
        <input type="datetime-local" name="start_time"/>
        <h4>End Time </br></h4>
        <input type="datetime-local" name="end_time"/>
    </form>
@stop	
