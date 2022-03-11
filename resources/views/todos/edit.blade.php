@extends('adminlte::page')

@section('title', 'To Do List')

@section('content_header')
  <h1>Edit To Do Item</h1>
@stop

@section('content')
<form method="post" action={{route('todos.update', $todo->id)}}>
    @csrf   
   @method('PUT')
  <x-adminlte-input name="title" label="Title" value="{{$todo->title}}"/>
  <x-adminlte-input name='progress' label='progress' type='number' min=0 max=100 value="{{$todo->progress}}" />
  <x-adminlte-button type="Submit" label="Submit" />
  </form>
@stop
