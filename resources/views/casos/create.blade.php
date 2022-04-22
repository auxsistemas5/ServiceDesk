@extends ('adminlte::page')
@section('title', 'Dashboard')
@section("content_header")
   <h1><b>AGREGAR CASO</b></h1>

   <div class=" container">
       <form action="/dash/casos" id="crear" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-6  ">
                <label for="" > SOLICITANTE</label>
                <div class=" input-group mb-3">
                    <span class="input-group-text "><i class="fa fa-user"></i></span>
                    <input class="form-control " id="nombre"  name="SOLICITANTE" type="text" value="{{auth()->user()->name}} ">
                </div>
            </div>
            <div class=" col-md-6">
                <label for="">PRIORIDAD:</label>
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
        
        <div class="row">
          <div class="form-group col-md-6">
                <label for="">DESCRIPCION:</label>
                <div class=" input-group mb-3">
                    <span class="input-group-text "><i class="fa fa-file"></i></span>
                    <textarea name="DESCRIPTION" id="DESCRIPTION" class=" fas fa-file-alt form-control" rows="12"></textarea>
                </div>
            
          </div>

          <div class=" form-group col-md-6">
            <label for="">AREA SOLICITUD:</label>
            <div class="input-group mb-3">
                <span class="input-group-text"><i class="fa fa-chart-area"></i></span>
                <select name="AREA" id="AREA" class="form-select">
                  <option value="Seleccione">Seleccione</option>
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
                <option value="Seleccione">Seleccione</option>
                @foreach ($daños as $d)
                    <option value="{{$d->TIPODANO}}">{{$d->TIPODANO}}</option>
                @endforeach
                </select>
            </div>

            <label for="">AREA DESTINADA:</label>
            <div class="input-group mb-2">
                <span class=" input-group-text "><i class="fa fa-solid fa-archway"></i></i></span>
                <select name="AREADESTINO" id="AREADESTINO" class="form-select">
                    <option value="Seleccione">Seleccione</option>
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
        </div>
       </form>
   </div>
@stop
@section('css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel-"stylesheet" href-"/css/admin custom.css">
@stop
@section('js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/ed8911e2fa.js" crossorigin="anonymous"></script>
  <script> console.log('Hi!'); </script>
  <script>
        nombre = document.getElementById('nombre');
        descripcion = document.getElementById('DESCRIPTION');
        destino = document.getElementById('AREADESTINO');
	   
        tipoDano = document.getElementById('TIPODANO');
        area = document.getElementById('AREA');
        prioridad = document.getElementById('PRIORIDAD');


        

        $('#crear').submit(function(e){
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
@stop