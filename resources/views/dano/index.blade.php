@extends ('adminlte::page')
@section('title', 'Dashboard')
@section("content_header")
   <h3 type="" class="">
   <b>TIPO DE DAÑOS</b>
</h3>
<a href="/dash/danos/create" class="btn btn-danger">CREAR DAÑO</a>

  <div class="mt-2 table-responsive">
      <table id="todos" class="mt-3 table table-striped" style="width:100%">
          <thead>
              <tr>
                  <th>TIPO DAÑO</th>
                  <th>AREA ASIGNADA AL DAÑO</th>
                  <th>ACCION</th>
              </tr>
          </thead>
          <tbody>
              @foreach ($dano as $dano)
                  
                <tr>
                    <td>{{$dano->TIPODANO}}</td>
                    <td>{{$dano->AREA}}</td>
                    <td><a href="/dash/danos/{{$dano->id}}/edit" class="btn btn-info btn-sm">EDITAR</a></td>
                </tr>
              @endforeach
          </tbody>
      </table>
  </div>
   
@stop
@section('content_header')
   <p>welcome to this beautiful adnin panel.</p>
@stop
@section('css')
   <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
   <link rel-"stylesheet" href-"/css/admin custom.css">
@stop
@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"defer></script>
   <script>
      $(document).ready(function() {
         $('#todos').DataTable();
      } );
   </script>
  <script> console.log('Hi!'); </script>
@stop