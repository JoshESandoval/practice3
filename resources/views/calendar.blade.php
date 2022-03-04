@extends('adminlte::page')

@section('title' , 'Calendar')

@section('content_header')
  <h1>Calendar</h1>
@stop

@section('content')


@stop

@section('css')
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/fullcalendar@5.10.2/main.min.css">
@stop

@section('js')
  <script src="//cdn.jsdelivr.net/npm/fullcalendar@5.10.2/main.min.js" ></script>
  <script>
  $( document ).ready(function() {
      var calendar = new FullCalendar.Calendar($('#calendar')[0], {
       initialView: 'dayGridMonth',
       events: '/events-feed'
       });
    calendar.render();
  })
</script>

@stop
