@extends ('adminlte::page')
@section('title', 'Dashboard')
@section("content_header")
   <h3 type="" class="">
   <b>CREAR DAÑO</b>
</h3>

    <form action="/dash/danos" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <label for="">NOMBRE DEL DAÑO:</label>
                <input type="text" name="TIPODANO" class="form-control">
            </div>
            <div class="col-md-6">
                <label for="">AREA ASIGNADA AL DAÑO:</label>
                <select name="AREA" id="" class="form-select">
                    <option value="N/A">SELECCIONE</option>
                    <option value="BIOMEDICOS">BIOMEDICOS</option>
                    <option value="MANTENIMIENTO">MANTENIMIENTO</option>
                    <option value="TECNOLOGIA">TECNOLOGÍA</option>
                </select>
            </div>
                
        </div>
        <div class="mt-2">
            <button class="btn btn-danger">AGREGAR DAÑO</button>
        </div>
    </form>

   
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