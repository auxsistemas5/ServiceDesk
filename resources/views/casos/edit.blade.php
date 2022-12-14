@extends ('adminlte::page')
@section('title', 'Dashboard')
@section("content_header")
   <div class="card">
       <div class="card-body">
        <h1><b>ASIGNAR CASO</b></h1>

        <div>
            <form action="/dash/casos/{{$caso->id}}" id="editar" method="POST">
                 @csrf
                 @method('PUT')
                 <div class="row">
                     <div class="col-md-6">
                         <label for="">QUIEN SOLICITA:</label>
                         <div class=" input-group mb-3">
                             <span class="input-group-text "><i class="fa fa-user"></i></span>
                             <input readonly class="form-control" type="text" name="SOLICITANTE" value="{{$caso->SOLICITANTE}}">
                         </div>
                     </div>
                     <div class="col-md-6">
                         
                         <label for="">PRIORIDAD:</label>
                         <div class="input-group mb-3">
                             <span class="input-group-text"><i class="fa fa-duotone fa-layer-group"></i></span>
                             <select name="PRIORIDAD" id="" class="form-select">
                                 <option  name="PRIORIDAD"  class="form-control" type="text" value="{{$caso->PRIORIDAD}}">{{$caso->PRIORIDAD}}</option>
                                 <option value="BAJA">BAJA</option>
                                 <option value="MEDIA">MEDIA</option>
                                 <option value="ALTA">ALTA</option>
                             </select>
                         </div>
                         
                     </div>
                 </div>
                 <div class="row">
                     <div class="col-md-8">
                         <label for="">ASIGNAR TICKET A:</label>
                         <div class="input-group mb-3">
                             <span class="input-group-text"><i class="fa fa-solid fa-user-tag"></i></span>
                             <select name="USUARIOASIGNADO" class="form-select" name="USUARIOASIGNADO" id="">r
                                 <option value="{{$caso->USUARIOASIGNADO}}">{{$caso->USUARIOASIGNADO}}</option>
                                 @foreach ($users as $users)
                                     <option value="{{$users->name}}">{{$users->name}}</option>
                                 @endforeach
                             </select>
                         </div>
                     </div>
                     <div class="col-md-4">
                         <label for="">EVIDENCIA:</label>
                         <div class="input-group mb-3">
                             @if ($caso->IMAGENEVIDENCIA == NULL or $caso->IMAGENEVIDENCIA == "")
                                 <p>No hay Evidencia para mostrar</p>
                             @else
                                 <a class="btn btn-info btn-sm" href="/dash/casos/{{$caso->id}}/edit/image"> mostrar </a>
                             @endif
                         </div>
                     </div>
                 </div>
     
                 <div class="row">
                     <div class="col-md-6">
                         <label for="">DESCRIPCION:</label>
                         <div class=" input-group mb-3">
                             <span class="input-group-text "><i class="fa fa-file"></i></span>
                             <textarea  name="DESCRIPTION" id="DESCRIPTION" class="form-control" rows="8">{{$caso->DESCRIPTION}}</textarea>
                         </div>
                     
                     </div>
     
                     <div class="col-md-6">
                         <label for="">AREA SOLICITUD:</label>
                         <div class="input-group mb-3">
                             <span class="input-group-text"><i class="fa fa-chart-area"></i></span>
                             <select class="form-select" name="AREA" id="">
                                 <option value="{{$caso->AREA}}">{{$caso->AREA}}</option>
                                 @foreach ($area as $a)
                                     <option value="{{$a->DEPARTAMENTO}}">{{$a->DEPARTAMENTO}}</option>
                                 @endforeach
                             </select>
                         </div>
     
                         <label for="">TIPO DA??O:</label>
                         <div class="input-group mb-3">
                             <span class="input-group-text"><i class="fa fa-solid fa-gavel"></i></span>
                             <select class="form-select" name="TIPODA??O" id="">
                             <option value="{{$caso->TIPODA??O}}">{{$caso->TIPODA??O}}</option>
                             @foreach ($da??os as $d)
                                 <option value="{{$d->TIPODANO}}">{{$d->TIPODANO}}</option>
                             @endforeach
                             </select>
                         </div>
     
                         <label for="">AREA DESTINADA:</label>
                         <div class="input-group mb-2">
                             <span class=" input-group-text "><i class="fa fa-solid fa-archway"></i></i></span>
                             <select class="form-select" name="AREADESTINO" id="">
                                 <option value="{{$caso->AREADESTINO}}">{{$caso->AREADESTINO}}</option>
                                 <option value="BIOMEDICOS">BIOMEDICOS</option>
                                 <option value="MANTENIMIENTO">MANTENIMIENTO</option>
                                 <option value="SOPORTE">SOPORTE</option>
                                 <option value="TECNOLOG??A">TECNOLOG??A</option>
                             </select>
                         </div>
         
                     </div>
     
                 </div>
                 
                 <div hidden>
                     <input type="text" name="ESTADO" value="En Desarrollo">
                 </div>
                 <div hidden class="">
                     <input name="RESPUESTATENCION" type="text" value="Se esta atendiendo el ticket en este momento!">
                 </div>
     
                 <div class="mt-2">
                     <button class="btn btn-info text-white" type="submit">ACTUALIZAR CASO</button>
                 </div>
     
             </form>
       </div>
   </div>

@stop
@section('css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel-"stylesheet" href-"/css/admin custom.css">
@stop
@section('js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script>
      $('#editar').submit(function(e){
        Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: 'CASO ASIGNADO CON EXITO',
            showConfirmButton: false,
            timer: 2000
        })
      })
  </script>
@stop