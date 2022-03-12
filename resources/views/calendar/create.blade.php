@extends('adminlte::page')

@section('title', 'Calendar Event')

@section('content_header')
	<h1>Events </h1>
@stop

@section('content')
    
    <form method="post" action= "{{route('calendar.store')}}">
        @csrf
        <x-adminlte-input name="title" label="Title"/>
        <h5>Start Time </br></h5>
        <input type="datetime-local" name="start_at"/>
        <h5>End Time </br></h5>
        <input type="datetime-local" name="end_at"/>
        <x-adminlte-button type="Submit" label="submit"/>
    </form>
@stop	

