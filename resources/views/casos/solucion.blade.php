@extends ('adminlte::page')
@section('title', 'Dashboard')
@section("content_header")
    <div class="card">
        <div class="card-body">
            <h3><b>Solucionar Caso</b></h3>
            <form action="/dash/casos/miscasos/{{$caso->id}}/cerrarCaso" id="solucionar" method="POST">
            @csrf
            @method('PUT')
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <label for="">ESTADO</label>
                    <select class="form-control" name="ESTADO" id="">
                        <option value="Abierto">Abierto</option>
                        <option value="Cerrado">Cerrado</option>
                    </select>
                </div>
                <div class="col-md-12">
                    <label for="">RESPUESTA:</label>
                    <textarea class="form-control" name="RESPUESTAUSUARIOASIGNADO" id="respuesta"  rows="8"></textarea>
                </div>
            </div>
            <button class="mt-3 btn btn-primary form-control">FINALIZAR</button>
    </form>
        </div>
    </div>
@stop
@section('content_header')
   <p>welcome to this beautiful adnin panel.</p>
@stop
@section('css')
    <link rel-"stylesheet" href-"/css/admin custom.css">
@stop
@section('js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>

        $('#solucionar').submit(function(e){
            respuesta = document.getElementById('respuesta');
            if(respuesta.value == ""){
                e.preventDefault();
                Swal.fire({
                position: 'top-end',
                icon: 'error',
                title: 'NO PUEDE CERRAR EL CASO SIN UNA RESPUESTA',
                showConfirmButton: false,
                timer: 2000
                })
            }else{

                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: 'CASO CERRADO CON EXITO!',
                    showConfirmButton: false,
                    timer: 2000
                })
            }
        })
    </script>
@stop