@extends('adminlte::page')

@section('title', 'oh no, our table')

@section('content_header')
  <h1>Something Went wrong</h1>
@stop

@section('content')
  <h2 style= "color:blue">404 Error :(<
  <div>Have you tried turning it on and off?...</div>
@stop

@section('css')
  
@stop

@section('js')
    <script>console.log('sup');</script>
@stop
