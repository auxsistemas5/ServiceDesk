@extends ('adminlte::page')
@section('title', 'Dashboard')
@section("content_header")
@if(auth()->user()->admin == "TECNOLOGÍA")
   <div class="card">
      <div class="card-body">
         <h3 type="" class="">
            <b>TODOS LOS CASOS </b><span class="badge bg-secondary"> {{$contador}}</span>
            </h3><br>
            
        
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
           @if (Session::has('creado'))
              <div class="cont">
                 <div class="alert alert-success d-flex align-items-center autohide" autohide role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                    <div>
                     {{Session('creado')}}
                    </div>
                 </div>
              </div>
            @endif
            @if (Session::has('actualizar'))
            <div class="alert alert-success d-flex align-items-center autohide" autohide role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                <div>
                  {{Session('actualizar')}}
                </div>
              </div>
            @endif
            @if (Session::has('cerrar'))
            <div class="alert alert-success d-flex align-items-center autohide" autohide role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                <div>
                  {{Session('cerrar')}}
                </div>
              </div>
            @endif
            @if (Session::has('error'))
                <div class="alert alert-danger d-flex align-items-center" role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                    <div>
                    An example danger alert with an icon
                    </div>
                </div>
            @endif
            
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
                       <th>SOLICITANTE</th>
                       <th>FECHA</th>
                       <th>PRIORIDAD</th>
                       <th>ACCION</th>
                    </tr>
                 </thead>
                 <tbody>
                    @foreach ($cases as $caso)
                       <tr> 
                          <td>{{$caso->id}}</td>
                          <td>{{$caso->AREA}}</td>
                          <td >{{$caso->DESCRIPTION}}</td>
                          <td>{{$caso->SOLICITANTE}}</td>
                          <td>{{$caso->created_at}}</td>
                          @if ($caso->PRIORIDAD == "BAJA")
                          <td><span class="badge rounded-pill bg-success">{{$caso->PRIORIDAD}}</span></td>
                          @else
                             @if ($caso->PRIORIDAD == "MEDIA")
                             <td><span class="badge rounded-pill bg-warning">{{$caso->PRIORIDAD}}</span></td>
                             
                             @else
                             <td><span class="badge rounded-pill bg-danger">{{$caso->PRIORIDAD}}</span></td>
                             
                             @endif
                          @endif
                          <td><a href="/dash/casos/{{$caso->id}}/edit" class="btn btn-info btn-sm">ASIGNAR</a></td>
                       </tr>
                    @endforeach
                 </tbody>
              </table>
            </div>
            @else
            <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                </symbol>
            </svg>
            <div class="alert alert-warning d-flex align-items-center" role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                <div>
                  <h5><b>USTED NO PUEDE ACCEDER A ESTE MODULO</b></h5>
                </div>
              </div>
              <div class="row">
                <div class="d-flex justify-content-center col-md-12">
                    <img src="https://www.pngitem.com/pimgs/m/162-1622413_4chan-404-pages-hd-png-download.png" width="70%" height="70%">
                </div>
            </div>
      </div>
   </div>

@endif
@stop
@section('content_header')
   <p>welcome to this beautiful adnin panel.</p>
@stop
@section('css')
  
   <link rel-"stylesheet" href-"/css/admin custom.css">
   <link rel="stylesheet" href="{{asset('css/datatables.css') }}">
   
@stop
@section('js')

   <script>
        $(document).ready(function() {
            $('#todos').DataTable();
        } );

   </script>
  <script> console.log('Hi!'); </script>
  <script src="{{ asset('js/datatables.js') }}" defer></script>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <script>
      $(document).ready(function() {
         $(".alert").hide(3000,function(){
               $(this).remove();//esconde las notificaciones//
            }); 
      });
      
      
  </script>

@stop