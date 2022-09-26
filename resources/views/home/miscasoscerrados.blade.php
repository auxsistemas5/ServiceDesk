@extends ('layouts.layout')
@section('title', 'Dashboard')
@section("content")
<div class="container">
   <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
      <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
      <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
      </symbol>
      <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
      <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
      </symbol>
      <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
      <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
      </symbol>
  </svg>
 @if (Session::has('CERRADO'))
    <div class="cont">
       <div class="alert alert-success d-flex align-items-center autohide" autohide role="alert">
          <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
          <div>
           {{Session('CERRADO')}}
          </div>
       </div>
    </div>
  @endif
      <h1><b>MIS CASOS CERRADOS</b></h1>
      <p class="mt-3 badge bg-warning text-dark">Acceso para validar los tickets ya cerrados por el equipo de T.I</p> <br>
      <div class="card">
         <div class="card-body">
            <div class="table-responsive">
               <table id="todos" class="mt-3 table table-striped " style="width:100%">
                  <thead>
                     <tr>
                        <th>ID</th>
                        <th>AREA</th>
                        <th>DESCRIPCIÓN</th>
                        <th>PRIORIDAD</th>
                        <th>OBSERVACIÓN</th>
                        <th>RESPUESTA DE REVISIÓN</th>
                        <th>CONFIRMACIÓN DE CASO</th>
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
                              <td><span class="badge rounded-pill bg-primary">Caso sin Revisar</span></td>
                           @else
                              @if ($caso->ESTADO == "En Desarrollo")
                              <td><span class="badge rounded-pill bg-secondary">Revisando Caso</span></td>
      
                              @else
                              <td><span class="badge rounded-pill bg-dark">Revisado por Tecnología</span></td>
                              @endif
                           @endif
                           @if($caso->RESPUESTAUSUARIOASIGNADO == '')
                              <td>SIN RESPONDER</td>
                           @else
                              <td>{{$caso->RESPUESTAUSUARIOASIGNADO}}</td>
                           @endif
                           @if ($caso->CONFIRMADO == 0)
                              <td><a href="/dash/mesaDeAyuda/miscasoscerrados/{{$caso->id}}/cerrar" class="btn btn-success btn-sm">CASO POR CERRAR</a></td>
                           @else
                              <td>CERRADO</td>
                           @endif
                        </tr>
                     @endforeach
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
@stop
@section('content_header')
   <p>welcome to this beautiful adnin panel.</p>
@stop

<!-- CSS only -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">
   <link rel-"stylesheet" href-"/css/admin custom.css">


<!-- JavaScript Bundle with Popper -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
   <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js" defer></script>
   <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
   <script>
      $(document).ready(function() {
        $('#todos').DataTable({
            "language": {
            "url": "https://cdn.datatables.net/plug-ins/1.11.4/i18n/es_es.json"
            }
        });
      });
      $(document).ready(function() {
         $('#todos').DataTable();
      } );

      $(document).ready(function() {
         $(".alert").hide(3000,function(){
               $(this).remove();//esconde las notificaciones//
            }); 
      });
   </script>
  <script> console.log('Hi!'); </script>
  
