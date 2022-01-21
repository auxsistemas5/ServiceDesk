@extends ('adminlte::page')
@section('title', 'Dashboard')
@section("content_header")
<h3><b>Solucionar Caso</b></h3>
    <form action="/dash/casos/miscasos/{{$caso->id}}/cerrarCaso" method="POST">
        @csrf
        @method('PUT')
        <div class="row justify-content-center">
            <div class="col-md-5">
                <label for="">ESTADO</label>
                <select class="form-control" name="ESTADO" id="">
                    <option value="Abierto">Abierto</option>
                    <option value="Cerrado">Cerrado</option>
                </select>
            </div>
            <div class="col-md-5">
                <label for="">RESPUESTA:</label>
                <textarea class="form-control" name="RESPUESTAUSUARIOASIGNADO" id=""  rows="8"></textarea>
            </div>
        </div>
        <button class="btn btn-warning">FINALIZAR</button>
    </form>
@stop
@section('content_header')
   <p>welcome to this beautiful adnin panel.</p>
@stop
@section('css')
    <link rel-"stylesheet" href-"/css/admin custom.css">
@stop
@section('js')
  <script> console.log('Hi!'); </script>
@stop