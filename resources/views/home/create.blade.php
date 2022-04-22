@extends('layouts.layout')
@section('content')
    <h3 class="mt-2 d-flex justify-content-center"><b>CREAR NUEVO TICKET DE SOPORTE</b></h3>
    <div class="container mt-3 ">
        <form action="/dash/mesaDeAyuda" method="POST" id="crear" enctype="multipart/form-data">
         @csrf
         <div class="row">
             <div class="col-md-6  ">
                 <label for="" > <b>SOLICITANTE:</b></label>
                 <div class=" input-group mb-3">
                     <span class="input-group-text "><i class="fa fa-user"></i></span>
                     <input class="form-control" id="nombre"  name="SOLICITANTE" type="text" value="{{auth()->user()->name}} ">
                 </div>
             </div>
             <div class=" col-md-6">
                 <label for=""><b>PRIORIDAD:</b></label>
                 <div class="input-group mb-3">
                     <span class="input-group-text"><i class="fa fa-duotone fa-layer-group"></i></span>
                     <select name="PRIORIDAD" id="PRIORIDAD" class="form-select">
                         <option value="Seleccione">Seleccione</option>
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
                 <label for=""><b>DESCRIPCION:</b></label>
                 <div class=" input-group mb-3">
                     <span class="input-group-text "><i class="fa fa-file"></i></span>
                     <textarea name="DESCRIPTION" id="DESCRIPTION" class=" fas fa-file-alt form-control" rows="13"></textarea>
                 </div>
             
           </div>
 
           <div class=" form-group col-md-6">
             <label for=""><b>AREA SOLICITUD:</b></label>
             <div class="input-group mb-3">
                 <span class="input-group-text"><i class="fa fa-chart-area"></i></span>
                 <select name="AREA" id="AREA" class="form-select">
                   <option value="Seleccione">Seleccione</option>
                   @foreach ($area as $a)
                       <option value="{{$a->DEPARTAMENTO}}">{{$a->DEPARTAMENTO}}</option>
                   @endforeach
                 </select>
             </div>
 
             <label for=""><b>SUBIR ARCHIVO</b></label>
             <div>
                 <input type="file" name="IMAGENEVIDENCIA" id="">
             </div>
 
             <label for=""><b>TIPO DAÑO:</b></label>
             <div class="input-group mb-3">
                 <span class="input-group-text"><i class="fa fa-solid fa-gavel"></i></span>
                 <select name="TIPODAÑO" id="TIPODANO" class="form-select">
                 <option value="Seleccione">Seleccione</option>
                 @foreach ($daños as $d)
                     <option value="{{$d->TIPODANO}}">{{$d->TIPODANO}}</option>
                 @endforeach
                 </select>
             </div>
 
             <label for=""><b>AREA DESTINADA:</b></label>
             <div class="input-group mb-2">
                 <span class=" input-group-text "><i class="fa fa-solid fa-archway"></i></i></span>
                 <select name="AREADESTINO" id="AREADESTINO" class="form-select">
                   <option value="Seleccione">Seleccione</option>
                     <option value="TECNOLOGÍA">TECNOLOGÍA</option>
                     <option hidden value="MANTENIMIENTO">MANTENIMIENTO</option>
                     <option  hidden value="BIOMEDICOS">BIOMEDICOS</option>
                 </select>
             </div>
           </div>
 
         </div>
 
         <div class=" row mt-2">
           <div class="">
                <button type="submit" class="btn btn-info  text-white">Crear Caso</button>
           </div>
         </div> <br>
        </form>
    </div>
@endsection

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">
<link rel-"stylesheet" href-"/css/admin custom.css">


<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js" defer></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script>
   $(document).ready(function() {
      $('#todos').DataTable();
   } );
</script>
<script> console.log('Hi!'); </script>
@section('js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        nombre = document.getElementById('nombre');
        descripcion = document.getElementById('DESCRIPTION');
        destino = document.getElementById('AREADESTINO');
        
        tipoDano = document.getElementById('TIPODANO');
        area = document.getElementById('AREA');
        prioridad = document.getElementById('PRIORIDAD');
    
    
        $('#crear').submit(function(e){
            console.log(prioridad.value);
    
            if(nombre.value == "" || descripcion.value == "" || destino.value == "Seleccione" || tipoDano.value == "Seleccione" || area.value == "Seleccione" || prioridad.value =="Seleccione"){                
                e.preventDefault();
                Swal.fire({
                    position: 'top-end',
                    icon: 'error',
                    title: 'ERROR REVISE LOS CAMPOS NUEVAMENTE',
                    showConfirmButton: false,
                    timer: 1500
                })
            }else{
                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: 'CASO CREADO CON EXITO!',
                    showConfirmButton: false,
                    timer: 1500
                })
            }
            
        })
    </script>
@endsection

