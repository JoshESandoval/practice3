@extends('adminlte::page')

@section('title' , 'board')

@section('content_header')
  <h1>Main Board</h1>
@stop

@section('content')
<div class="wrapper">
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <ul class="navbar-nav">
   <li class="nav-item">
    <a class="nav-link" data-widget="pushmenu" href="#">
      <i class="fas fa-bars"></i>
      <span class="sr-only">Toggle navigation</span>
      </a>
    </li>
  </ul>


<ul class="navbar-nav ml-auto">



<li class="nav-item">


<a class="nav-link" data-widget="navbar-search" href="#" role="button">
<i class="fas fa-search"></i>
</a>


<div class="navbar-search-block">
<form class="form-inline" action="#" method="get">
<input type="hidden" name="_token" value="SEchxOtdUrdyvW6b0ClRl2r1MtgRk4s57qyUn9kQ">

<div class="input-group">


<input class="form-control form-control-navbar" type="search" name="adminlteSearch" placeholder="search" aria-label="search">


<div class="input-group-append">
<button class="btn btn-navbar" type="submit">
    <i class="fas fa-search"></i>
</button>
<button class="btn btn-navbar" type="button" data-widget="navbar-search">
    <i class="fas fa-times"></i>
</button>
</div>

</div>
</form>
</div>

</li>

<li class="nav-item">
<a class="nav-link" data-widget="fullscreen" href="#" role="button">
<i class="fas fa-expand-arrows-alt"></i>
</a>
</li>





</ul>

</nav>


<aside class="main-sidebar sidebar-dark-primary elevation-4">


<a href="https://cse4500-laravel9.herokuapp.com/admin" class="brand-link ">


<img src="https://cse4500-laravel9.herokuapp.com//vendor/adminlte/dist/img/AdminLTELogo.png" alt="AdminLTE" class="brand-image img-circle elevation-3" style="opacity:.8">


<span class="brand-text font-weight-light ">
<b>Admin</b>LTE
</span>

</a>


<div class="sidebar">
<nav class="pt-2">
<ul class="nav nav-pills nav-sidebar flex-column " data-widget="treeview" role="menu">

<li>

<div class="form-inline my-2">
<div class="input-group" data-widget="sidebar-search" data-arrow-sign="»">


<input class="form-control form-control-sidebar" type="search" placeholder="search" aria-label="search">


<div class="input-group-append">
<button class="btn btn-sidebar">
<i class="fas fa-fw fa-search"></i>
</button>
</div>

</div><div class="sidebar-search-results"><div class="list-group"><a href="#" class="list-group-item"><div class="search-title"><strong class="text-light"></strong>N<strong class="text-light"></strong>o<strong class="text-light"></strong> <strong class="text-light"></strong>e<strong class="text-light"></strong>l<strong class="text-light"></strong>e<strong class="text-light"></strong>m<strong class="text-light"></strong>e<strong class="text-light"></strong>n<strong class="text-light"></strong>t<strong class="text-light"></strong> <strong class="text-light"></strong>f<strong class="text-light"></strong>o<strong class="text-light"></strong>u<strong class="text-light"></strong>n<strong class="text-light"></strong>d<strong class="text-light"></strong>!<strong class="text-light"></strong></div><div class="search-path"></div></a></div></div>
</div>

</li>

<li class="nav-item">

<a class="nav-link  " href="https://cse4500-laravel9.herokuapp.com/todos">

<i class="far fa-fw fa-list-alt "></i>

<p>
To Do's

</p>

</a>

</li>

<li class="nav-item">

<a class="nav-link  " href="https://cse4500-laravel9.herokuapp.com/calendar">

<i class="fas fa-fw fa-calendar-alt "></i>

<p>
Calendar

</p>

</a>

</li>

<li class="nav-item">

<a class="nav-link active " href="https://cse4500-laravel9.herokuapp.com/board">

<i class="fas fa-fw fa-columns "></i>

<p>
Board

</p>

</a>

</li>

</ul>
</nav>
</div>

</aside>


<div class="content-wrapper " style="min-height: 657px;">


<div class="content-header">
<div class="container-fluid">
<h1>Board</h1>
</div>
</div>


<div class="content">
<div class="container-fluid">
<div class="row">
<div class="col-md-3 col-sm-6 col-12">
<div class="card card-row card-secondary">
<div class="card-header">
<h3 class="card-title">
Backlog
</h3>
</div>
<div class="card-body">
<div class="card card-info card-outline">
<div class="card-header">
<h5 class="card-title">Create Labels</h5>
<div class="card-tools">
<a href="#" class="btn btn-tool btn-link">#3</a>
<a href="#" class="btn btn-tool">
<i class="fas fa-pen"></i>
</a>
</div>
</div>
<div class="card-body">
<div class="custom-control custom-checkbox">
<input class="custom-control-input" type="checkbox" id="customCheckbox1" disabled="">
<label for="customCheckbox1" class="custom-control-label">Bug</label>
</div>
<div class="custom-control custom-checkbox">
<input class="custom-control-input" type="checkbox" id="customCheckbox2" disabled="">
<label for="customCheckbox2" class="custom-control-label">Feature</label>
</div>
<div class="custom-control custom-checkbox">
<input class="custom-control-input" type="checkbox" id="customCheckbox3" disabled="">
<label for="customCheckbox3" class="custom-control-label">Enhancement</label>
</div>
<div class="custom-control custom-checkbox">
<input class="custom-control-input" type="checkbox" id="customCheckbox4" disabled="">
<label for="customCheckbox4" class="custom-control-label">Documentation</label>
</div>
<div class="custom-control custom-checkbox">
<input class="custom-control-input" type="checkbox" id="customCheckbox5" disabled="">
<label for="customCheckbox5" class="custom-control-label">Examples</label>
</div>
</div>
</div>
<div class="card card-primary card-outline">
<div class="card-header">
<h5 class="card-title">Create Issue template</h5>
<div class="card-tools">
<a href="#" class="btn btn-tool btn-link">#4</a>
<a href="#" class="btn btn-tool">
<i class="fas fa-pen"></i>
</a>
</div>
</div>
<div class="card-body">
<div class="custom-control custom-checkbox">
<input class="custom-control-input" type="checkbox" id="customCheckbox1_1" disabled="">
<label for="customCheckbox1_1" class="custom-control-label">Bug Report</label>
</div>
<div class="custom-control custom-checkbox">
<input class="custom-control-input" type="checkbox" id="customCheckbox1_2" disabled="">
<label for="customCheckbox1_2" class="custom-control-label">Feature Request</label>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="col-md-3 col-sm-6 col-12">
<div class="card card-row card-primary">
<div class="card-header">
<h3 class="card-title">
To Do
</h3>
</div>
<div class="card-body">
<div class="card card-primary card-outline">
<div class="card-header">
<h5 class="card-title">Create first milestone</h5>
<div class="card-tools">
<a href="#" class="btn btn-tool btn-link">#5</a>
<a href="#" class="btn btn-tool">
<i class="fas fa-pen"></i>
</a>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="col-md-3 col-sm-6 col-12">
<div class="card card-row card-default">
<div class="card-header bg-info">
<h3 class="card-title">
In Progress
</h3>
</div>
<div class="card-body">
<div class="card card-light card-outline">
<div class="card-header">
<h5 class="card-title">Update Readme</h5>
<div class="card-tools">
<a href="#" class="btn btn-tool btn-link">#2</a>
<a href="#" class="btn btn-tool">
<i class="fas fa-pen"></i>
</a>
</div>
</div>
<div class="card-body">
<p>
Post application address in the Readme.
</p>
</div>
</div>
</div>
</div>
</div>

<div class="col-md-3 col-sm-6 col-12">
<div class="card card-row card-success">
<div class="card-header">
<h3 class="card-title">
Done
</h3>
</div>
<div class="card-body">
<div class="card card-primary card-outline">
<div class="card-header">
<h5 class="card-title">Create repo</h5>
<div class="card-tools">
<a href="#" class="btn btn-tool btn-link">#1</a>
<a href="#" class="btn btn-tool">
<i class="fas fa-pen"></i>
</a>
</div>
</div>
</div>
</div>
</div>
</div>
<div>

</div>
</div>

</div>





</div>


<script src="https://cse4500-laravel9.herokuapp.com//vendor/jquery/jquery.min.js"></script>
<script src="https://cse4500-laravel9.herokuapp.com//vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="https://cse4500-laravel9.herokuapp.com//vendor/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>


<script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="//cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cse4500-laravel9.herokuapp.com//vendor/adminlte/dist/js/adminlte.min.js"></script>








</div><div id="sidebar-overlay"></div></div>
@stop

@section('css')
  
@stop

@section('js')
    <script>console.log('sup');</script>
@stop
