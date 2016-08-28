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
            <form role="form">
              <div class="box-body">
                <div class="form-group" >
                  <label>Nombre</label>
                  <input type="text" class="form-control" placeholder="Ej. Cola de caballo." style="width: 75%;">
                  <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group">
                  <label>Descripción</label>
                  <input type="text" class="form-control" placeholder="Ej. Cascada en forma de cola de caballo." style="width: 75%;">
                  <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group">
                  <label>Tipo de atracción</label>
                  <select class="form-control select2" style="width: 25%;">
                    <option selected="selected">Alabama</option>
                    <option>Alaska</option>
                    <option>California</option>
                    <option>Delaware</option>
                    <option>Tennessee</option>
                    <option>Texas</option>
                    <option>Washington</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Municipio</label>
                  <select class="form-control select2" style="width: 25%;">
                    <option selected="selected">Alabama</option>
                    <option>Alaska</option>
                    <option>California</option>
                    <option>Delaware</option>
                    <option>Tennessee</option>
                    <option>Texas</option>
                    <option>Washington</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Dirección</label>
                  <input type="text" class="form-control" placeholder="Ej. Calle #555, Colonia. Santiago, Nuevo León." style="width: 75%;">
                  <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Subir imagen</label>
                  <input type="file" id="exampleInputFile">
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-10">

          <!-- iCheck -->
          <div class="box box-success">
            <div class="box-header">
              <h3 class="box-title">En caso de que sea evento</h3>
            </div>
            <div class="box-body">
              <!-- Minimal style -->
              <div>
                <form action="action_page.php">
                    <label>Fecha de inicio: </label>
                    <input type="date" name="bday">
                </form>
              </div>
              <br>
              <div>
                <form action="action_page.php">
                    <label>Fecha de clausura: </label>
                    <input type="date" name="bday">
                </form>
              </div>
              <br>
              <div>
                <form action="action_page.php">
                  <label>Hora de inicio: </label>
                  <input type="time" name="usr_time">
                </form>
              </div>
              <br>
              <div>
                <form action="action_page.php">
                  <label>Hora de finalización: </label>
                  <input type="time" name="usr_time">
                </form>
              </div>
            </div>
          </div>
          <!-- /.box -->
        </div>        
      </div>
      <div class="row">
        <div class="col-md-10">
          <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
        </div>
      </div>

      <!-- /.row -->
    </section>
 <!-- Select2 -->
  <link rel="stylesheet" href="/assets/plugins/select2/select2.min.css">
@stop