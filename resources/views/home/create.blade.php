@extends('layouts.layout')
@section('content')
    <h5 class="d-flex justify-content-center">Crear Nuevo Ticket de Soporte</h5>
    <div class="container">
        <form action="/dash/mesaDeAyuda" method="POST" enctype="multipart/form-data">
         @csrf
         <div class="row">
             <div class="col-md-6  ">
                 <label for="" > SOLICITANTE</label>
                 <div class=" input-group mb-3">
                     <span class="input-group-text "><i class="fa fa-user"></i></span>
                     <input class="form-control"  name="SOLICITANTE" type="text" value="{{auth()->user()->name}} ">
                 </div>
             </div>
             <div class=" col-md-6">
                 <label for="">PRIORIDAD:</label>
                 <div class="input-group mb-3">
                     <span class="input-group-text"><i class="fa fa-duotone fa-layer-group"></i></span>
                     <select name="PRIORIDAD" id="PRIORIDAD" class="form-select">
                         <option value="">Seleccione</option>
                         <option value="BAJA">BAJA</option>
                         <option value="MEDIA">MEDIA</option>
                         <option value="ALTA">ALTA</option>
                     </select>
                 </div>
             </div>
        </div>
        <?php date_default_timezone_set('America/Bogota')?>
 
         <div class="row">
           <div class="form-group col-md-6">
                 <label for="">DESCRIPCION:</label>
                 <div class=" input-group mb-3">
                     <span class="input-group-text "><i class="fa fa-file"></i></span>
                     <textarea name="DESCRIPTION" id="DESCRIPTION" class=" fas fa-file-alt form-control" rows="15"></textarea>
                 </div>
             
           </div>
 
           <div class=" form-group col-md-6">
             <label for="">AREA SOLICITUD:</label>
             <div class="input-group mb-3">
                 <span class="input-group-text"><i class="fa fa-chart-area"></i></span>
                 <select name="AREA" id="AREA" class="form-select">
                   <option value="">Seleccione</option>
                   @foreach ($area as $a)
                       <option value="{{$a->DEPARTAMENTO}}">{{$a->DEPARTAMENTO}}</option>
                   @endforeach
                 </select>
             </div>
 
             <label for="">SUBIR ARCHIVO</label>
             <div>
                 <input type="file" name="IMAGENEVIDENCIA" id="">
             </div>
 
             <label for="">TIPO DAÑO:</label>
             <div class="input-group mb-3">
                 <span class="input-group-text"><i class="fa fa-solid fa-gavel"></i></span>
                 <select name="TIPODAÑO" id="TIPODANO" class="form-select">
                 <option value="">Seleccione</option>
                 @foreach ($daños as $d)
                     <option value="{{$d->TIPODANO}}">{{$d->TIPODANO}}</option>
                 @endforeach
                 </select>
             </div>
 
             <label for="">AREA DESTINADA:</label>
             <div class="input-group mb-2">
                 <span class=" input-group-text "><i class="fa fa-solid fa-archway"></i></i></span>
                 <select name="AREADESTINO" id="AREADESTINO" class="form-select">
                   <option value="">Seleccione</option>
                     <option value="TECNOLOGÍA">TECNOLOGÍA</option>
                     <option value="MANTENIMIENTO">MANTENIMIENTO</option>
                     <option value="BIOMEDICOS">BIOMEDICOS</option>
                 </select>
             </div>
           </div>
 
         </div>
 
         <div class=" row mt-2">
           <div class="">
             <button type="submit" class=" btn btn-info text-white">Enviar Reporte y/o Daño</button>
           </div>
         </div> <br>
        </form>
    </div>
@endsection
@section('css')
   <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
   <link rel-"stylesheet" href-"/css/admin custom.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

@stop
@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"defer></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/ed8911e2fa.js" crossorigin="anonymous"></script>
   <script>
      $(document).ready(function() {
         $('#todos').DataTable();
      } );
   </script>
  <script> console.log('Hi!'); </script>
@stop