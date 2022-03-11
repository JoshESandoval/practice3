@extends('adminelte::page')

@section('title', 'To Do List')

@section('content_header')
  <h1>Edit To Do Item</h1>
@stop

@section('content')
<form method="post" action={{route('todos.update'), $id}}>
   @csrf
  <x-adminlte-input name='title' label='Title' placeholder={{$todo->title;}} />
  <x-adminlte-input name='progress' label='progress' type='number' min=0 max=100 placeholder={{$todo->progress;}} />
  <x-adminlte-button type="Submit" label="Submit" />
  </form>
@stop
