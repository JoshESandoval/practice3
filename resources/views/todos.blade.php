@extends('adminlte::page')

@sectin('title, 'To-Do Page')

@section('content_header')
  <h1>To-Do List</h1>
@stop

@section('content')
  <div>
    <ul>
      <li>Learn postgres</li>
      <li>Submit Homework</li>
      <li>Make website</li>
  </div>
@stop

@section('css')
  <link rel="stylesheet" href="css/admin_custom.css">
@stop

@section('js')
    console.log('sup');
