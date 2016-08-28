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
        <a href="javascript: void();" class="btn bg-purple"> Ver más </a>
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
<script>
  $( document ).ready(
    $("#table").DataTable();
  );
</script>