@extends('adminlte::page')

@section('title', 'oh no, our table')

@section('content_header')
  <h1 style="color:yellow; font-weight:bold;">Something Went wrong Error 404</h1>
@stop

@section('content')
  <div>Have you tried turning it on and off?...</div>
@stop

@section('css')
  
@stop

@section('js')
    <script>console.log('sup');</script>
@stop
