@extends('layouts.main')

@section('head')
<!-- DataTables -->
<link rel="stylesheet" href="/assets/plugins/datatables/dataTables.bootstrap.css">
@stop

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Lugares turísticos de <strong>{{ $city->name }}</strong>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Tables</a></li>
    <li class="active">Data tables</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <!--div class="form-group inline">
            <label>Categorías de lugares</label> {{ Form::select('type', $types, 0, array('id'=>'typeP','class'=>"form-control select2", 'style'=>"width: 20%")) }}
          </div-->
        </div>
        <!-- /.box-header -->
        <div class="box-body" id="box-body">
          <table id="table" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>ID</th>
              <th>Nombre</th>
              <th>Categoría</th>
              <th>Dirección</th>
              <th>Descripción</th>
              <th>Editar</th>
            </tr>
            </thead>
            <tbody>
              @foreach($places as $place)
              <tr class="type-{{ $place->type }} type--">
                <td>{{ $place->id }}</td>
                <td>{{ $place->name }}</td>
                <td>{{ $types[$place->type] }}</td>
                <td>{{ $place->address }}</td>
                <td>{{ $place->desc }}</td>
                <td align="center">
                  <a href="javascript: void();" class="btn bg-purple"> Ver más </a>
                </td>
              </tr>
              @endforeach
            </tbody>
            <tfoot>
            <tr>
              <th>ID</th>
              <th>Nombre</th>
              <th>Categoría</th>
              <th>Dirección</th>
              <th>Descripción</th>
              <th>Editar</th>
            </tr>
            </tfoot>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</section>
<!-- /.content -->
@stop

@section('scripts')
<!-- DataTables -->
<script src="/assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/assets/plugins/datatables/dataTables.bootstrap.min.js"></script>
<script>
  $("#table").DataTable();
  var ant = 0;
  $("#typeP").change(function(){
    id = $(this).val();
    alert(id);
    for (var i = 1; i <= 7; i++) {
      if (i != id) $(".type-"+id).hide();
      else $(".type-"+id).show();
    }
  });
</script>
@stop