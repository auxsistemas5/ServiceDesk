@extends ('adminlte::page')
@section('title', 'Dashboard')
@section("content_header")
   <div class="card">
      <div class="card-body">
         <h3 type="" class="">
            <b>MIS CASOS </b><span class="badge bg-secondary"></span>
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
                      <th>CERRAR</th>
                      <th>REASIGNACION</th>
                   </tr>
                </thead>
                <tbody>
                   
                   
                   @foreach ($micaso as $micaso)
                      @if($micaso->USUARIOASIGNADO == auth()->user()->name)
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
                              <td>
                                 @if(auth()->user()->name == "TECNOLOGÍA")
                                    <a href="/dash/casos/{{$micaso->id}}/reasignar" class="btn btn-info btn-sm">REASIGNAR</a>
                                 @else
                                    <p>No disponible</p>
                                 @endif

                              </td>
                         </tr>
                         @endif
                      @endforeach
                </tbody>
             </table>
          </div>
      </div>
   </div>
@stop
@section('css')
   <link rel="stylesheet" href="{{asset('css/datatables.css') }}">
   
   <link rel-"stylesheet" href-"/css/admin custom.css">
@stop
@section('js')

   <script>
        $(document).ready(function() {
            $('#table').DataTable();
        } );

   </script>
  <script> console.log('Hi!'); </script>
  <script src="{{ asset('js/datatables.js') }}" defer></script>
@stop