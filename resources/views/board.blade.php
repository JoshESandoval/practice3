@extends('adminlte::page')

@section('title' , 'board')

@section('content_header')
  <h1>Main Board</h1>
@stop

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-3 col-sm-6 col-12">
      <div class="card card-row card-secondary">
        <div class="card-header">
          <h3 class="card-title">Backlog</h3>
        </div>
        <div class="card-body">
          <div class="card card-info card-outline">
            <div class="card-header">
              <h5 class="card-title">Make Music</h5>
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
                  <label for="customCheckbox1" class="custom-control-label">Battle</label>
                </div>
              <div class="custom-control custom-checkbox">
                <input class="custom-control-input" type="checkbox" id="customCheckbox2" disabled="">
                <label for="customCheckbox2" class="custom-control-label">Main-menu</label>
              </div>
              <div class="custom-control custom-checkbox">
                <input class="custom-control-input" type="checkbox" id="customCheckbox3" disabled="">
                <label for="customCheckbox3" class="custom-control-label">City</label>
              </div>
              <div class="custom-control custom-checkbox">
                <input class="custom-control-input" type="checkbox" id="customCheckbox4" disabled="">
                <label for="customCheckbox4" class="custom-control-label">Gameover Screen</label>
              </div>
            </div>
          </div>
          <div class="card card-primary card-outline">
            <div class="card-header">
              <h5 class="card-title">Create Enemys</h5>
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
                <label for="customCheckbox1_1" class="custom-control-label">Zombie</label>
              </div>
              <div class="custom-control custom-checkbox">
                <input class="custom-control-input" type="checkbox" id="customCheckbox1_2" disabled="">
                <label for="customCheckbox1_2" class="custom-control-label">Dire Wolf</label>
              </div>
              <div class="custom-control custom-checkbox">
                <input class="custom-control-input" type="checkbox" id="customCheckbox1_2" disabled="">
                <label for="customCheckbox1_2" class="custom-control-label">Vampire</label>
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
      <h5 class="card-title">Create Game Objects</h5>
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
      <h5 class="card-title">Research Bugs</h5>
      <div class="card-tools">
      <a href="#" class="btn btn-tool btn-link">#2</a>
      <a href="#" class="btn btn-tool">
      <i class="fas fa-pen"></i>
      </a>
      </div>
      </div>
      <div class="card-body">
      <p>
      Access-Controll-Allow-Origin
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
      <h5 class="card-title">Funny Music</h5>
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
@stop

@section('css')
  
@stop

@section('js')
    <script>console.log('sup');</script>
@stop
