@extends('adminlte::page')

@section('title' , 'To-Do Page')

@section('content_header')
  <h1>To-Do List</h1>
@stop

@section('content')
<div class="card">
  <div class="card-body">
    <table id="table" class="table table-bordered">
      <thead>
        <tr>
          <th style="width: 10px">#</th><th>Task</th><th>Progress</th><th style="width: 40px">Label</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1.</td>
          <td>Learn postgres</td>
          <td><div class="progress progress-xs"><div class="progress-bar progress-bar-danger" style="width: 5%"></div></div></td>
          <td><span class="badge bg-danger">5%</span></td>
        </tr>
        <tr>
          <td>2.</td>
          <td>Clean room</td>
          <td><div class="progress progress-xs"><div class="progress-bar bg-warning" style="width: 90%"></div></div></td>
          <td><span class="badge bg-warning">90%</span></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
@stop

@section('css')
  
@stop

@section('js')
    <script>$(document).ready(function() {
        $('#table').DataTable();
    } );</script>
@stop
