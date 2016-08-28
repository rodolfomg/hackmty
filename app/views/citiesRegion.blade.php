@extends('layouts.main')

@section('head')
<!-- DataTables -->
<link rel="stylesheet" href="/assets/plugins/datatables/dataTables.bootstrap.css">
@stop

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Municipios de la region {{ $region }}
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
              <th>Ver</th>
            </tr>
            </thead>
            <tbody>
              @foreach($cities as $city)
              <tr>
                <td>{{ $city->id }}</td>
                <td>{{ $city->name }}</td>
                <td align="center">
                  <a href="/municipios/{{ $city->id }}" class="btn bg-purple"> Ver más </a>
                </td>
              </tr>
              @endforeach
            </tbody>
            <tfoot>
            <tr>
              <th>ID</th>
              <th>Nombre</th>
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