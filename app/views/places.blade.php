@extends('layouts.main')

@section('head')
<!-- DataTables -->
<link rel="stylesheet" href="/assets/plugins/datatables/dataTables.bootstrap.css">
@stop

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Lugares y Eventos turísticos
    <small><strong>{{ $city->name }}</strong></small>
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
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="table" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>ID</th>
              <th>Nombre</th>
              <th>Dirección</th>
              <th>Descripción</th>
              <th>Editar</th>
            </tr>
            </thead>
            <tbody>
              @foreach($places as $place)
              <tr>
                <td>{{ $place->id }}</td>
                <td>{{ $place->name }}</td>
                <td>{{ $place->address }}</td>
                <td>{{ $place->desc }}</td>
                <td align="center">
                  <a href="#" class="btn bg-purple"> Ver más </a>
                </td>
              </tr>
              @endforeach
            </tbody>
            <tfoot>
            <tr>
              <th>ID</th>
              <th>Nombre</th>
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
</script>
@stop