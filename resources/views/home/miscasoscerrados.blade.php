@extends ('layouts.layout')
@section('title', 'Dashboard')
@section("content")
<div class="container">
      <h3 type="" class="">
      <b>MIS CASOS CERRADOS</b>
   </h3>
      <div hidden class="mt-2">
         <a class="btn btn-info" href="/dash/casos/create" type="button">Crear Caso</a>
      </div>
      <div class="table-responsive">
         <table id="todos" class="mt-3 table table-striped " style="width:100%">
            <thead>
               <tr>
                  <th>ID</th>
                  <th>AREA</th>
                  <th>DESCRIPTION</th>
                  <th>PRIORIDAD</th>
                  <th>ESTADO</th>
               </tr>
            </thead>
            <tbody>
               @foreach ($caso as $caso)
                  <tr> 
                     <td>{{$caso->id}}</td>
                     <td>{{$caso->AREA}}</td>
                     <td>{{$caso->DESCRIPTION}}</td>
                     @if ($caso->PRIORIDAD == "BAJA")
                     <td><span class="badge rounded-pill bg-success">{{$caso->PRIORIDAD}}</span></td>
                     @else
                        @if ($caso->PRIORIDAD == "MEDIA")
                        <td><span class="badge rounded-pill bg-warning">{{$caso->PRIORIDAD}}</span></td>
                        
                        @else
                        <td><span class="badge rounded-pill bg-danger">{{$caso->PRIORIDAD}}</span></td>
                        
                        @endif
                     @endif

                     @if ($caso->ESTADO == "Abierto")
                        <td><span class="badge rounded-pill bg-primary">{{$caso->ESTADO}}</span></td>
                     @else
                        @if ($caso->ESTADO == "En Desarrollo")
                        <td><span class="badge rounded-pill bg-secondary">{{$caso->ESTADO}}</span></td>

                        @else
                        <td><span class="badge rounded-pill bg-dark">{{$caso->ESTADO}}</span></td>
                        @endif
                     @endif
                  </tr>
               @endforeach
            </tbody>
         </table>
      </div>
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