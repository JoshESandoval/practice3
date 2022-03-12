@extends('adminlte::page')

@section('title', 'To Do List')

@section('content_header')
	<h1>Event</h1>
@stop

@section('content')
	<h2>{{ $cal_event->title;}}</h2>
@stop
