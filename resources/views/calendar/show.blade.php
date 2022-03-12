@extends('adminlte::page')

@section('title', 'Events')

@section('content_header')
	<h1>Event</h1>
@stop

@section('content')
    <p>im showing</p>
	<h2>{{ $cal_event->title;}}</h2>
    <p>Start at {{ $cal_event->start_at;}}</p>
    <p>End at {{ $cal_event->end_at;}}</p>
    <a  class = "btn btn-default btn-sm" href="{{ route('calendar.edit', ['cal_event'=>$cal_event->id] )}}" >Edit</a>
    
@stop
