@extends('layouts.main')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Lugar turístico
    <small>Preview</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Forms</a></li>
    <li class="active">General Elements</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <!-- left column -->
    <div class="col-md-10">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Lugar turístico</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="/save_place" method="POST">
          <div class="box-body">
            <div class="form-group">
              <label>Tipo de atracción</label>
              {{ Form::select('type', $types, 1, array('class'=>"form-control select2", 'style'=>"width: 75%")) }}
            </div>
            <div class="form-group" >
              <label>Nombre</label>
              <input name="name" type="text" class="form-control" placeholder="Ej. Cola de caballo." style="width: 75%;">
              <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <div class="form-group">
              <label>Municipio</label>
              {{ Form::select('city', $city, 1, array('class'=>"form-control select2", 'style'=>"width: 75%")) }}
            </div>
            <div class="form-group">
              <label>Descripción</label>
              <input  name="des" type="text" class="form-control" placeholder="Ej. Cascada en forma de cola de caballo." style="width: 75%;">
              <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <div class="form-group">
              <label>Dirección</label>
              <input  name="address" type="text" class="form-control" placeholder="Ej. Calle #555, Colonia. Santiago, Nuevo León." style="width: 75%;">
              <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <div class="form-group">
              <label>Teléfono</label>
              <input  name="phone" type="text" class="form-control" placeholder="Ej. 81 1526 3540." style="width: 75%;">
              <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
@stop