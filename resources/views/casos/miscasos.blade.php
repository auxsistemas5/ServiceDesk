@extends ('adminlte::page')
@section('title', 'Dashboard')
@section("content_header")
   <h3 type="" class="">
     <b>MIS CASOS </b><span class="badge bg-secondary"> {{$contador}}</span>
    </h3>
   <div class="table-responsive">
      <table id="table" id="todos" class="mt-3 table table-striped" style="width:100%">
         <thead>
            <tr>
               <th>ID</th>
               <th>AREA</th>
               <th>DESCRIPCION</th>
               <th>SOLICITANTE</th>
               <th>PRIORIDAD</th>
               <th>ACCION</th>
            </tr>
         </thead>
         <tbody>
            @foreach ($micaso as $micaso)
               <tr> 
                  <td>{{$micaso->id}}</td>
                  <td>{{$micaso->AREA}}</td>
                  <td>{{$micaso->DESCRIPTION}}</td>
                  <td>{{$micaso->SOLICITANTE}}</td>
                  @if ($micaso->PRIORIDAD == "BAJA")
                  <td><span class="badge rounded-pill bg-success">{{$micaso->PRIORIDAD}}</span></td>
                  @else
                     @if ($micaso->PRIORIDAD == "MEDIA")
                     <td><span class="badge rounded-pill bg-warning">{{$micaso->PRIORIDAD}}</span></td>
                     
                     @else
                     <td><span class="badge rounded-pill bg-danger">{{$micaso->PRIORIDAD}}</span></td>
                     
                     @endif
                  @endif
                  
                  <td><a href="/dash/casos/miscasos/{{$micaso->id}}/solucionarCaso" class="btn btn-success btn-sm">SOLUCIONAR</a></td>
               </tr>
            @endforeach
         </tbody>
      </table>
   </div>
@stop
@section('css')
   <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
   <link rel-"stylesheet" href-"/css/admin custom.css">
@stop
@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js" defer></script>
   <script>
        $(document).ready(function() {
            $('#todos').DataTable();
        } );

   </script>
  <script> console.log('Hi!'); </script>
@stop