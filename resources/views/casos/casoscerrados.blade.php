@extends ('adminlte::page')
@section('title', 'Dashboard')
@section("content_header")
@if(auth()->user()->admin == "TECNOLOGÍA")
   <div class="card">
      <div class="card-body">
         <h3 type="" class="">
            <b>CASOS CERRADOS </b><span class="badge bg-secondary"> {{$contador}}</span>
           </h3>
            <div class="table-responsive">
               <table id="todos" class="mt-3 table table-striped" style="width:100%"">
                  <thead>
                     <tr>
                        <th>ID</th>
                        <th>DESCRIPCION</th>
                        <th>SOLICITANTE</th>
                        <th>CREADO</th>
                        <th>CERRADO</th>
                        <th>CONFIRMADO USUARIO</th>
                     </tr>
                  </thead>
                  <tbody>
                     @if($casoscerrados)
                         @foreach ($casoscerrados as $caso)
                             <tr>
                                 <td>{{$caso->id}}</td>
                                 <td>{{$caso->DESCRIPTION}}</td>
                                 <td>{{$caso->SOLICITANTE}}</td>
                                 <td>{{$caso->created_at->format('d-m-Y h:i:s')}}</td>
                                 <td>{{$caso->updated_at->format('d-m-Y h:i:s')}}</td>
                                 @if ($caso->CONFIRMADO == 1)
                                    <td align="center">SI</td>
                                 @else
                                    <td align="center">NO</td>
                                 @endif
                             </tr>
                         @endforeach
                     @else
                         <p>no hay</p>
                     @endif
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
   <link rel="stylesheet" href="{{asset('css/datatables.css') }}">
   <link rel-"stylesheet" href-"/css/admin custom.css">
@stop
@section('js')
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   
   <script>
      $(document).ready(function() {
         $('#todos').DataTable();
      } );
   </script>
  <script> console.log('Hi!'); </script>
  <script src="{{ asset('js/datatables.js') }}" defer></script>
  
@stop