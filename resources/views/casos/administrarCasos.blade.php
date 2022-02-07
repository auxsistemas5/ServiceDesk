@extends ('adminlte::page')
@section('title', 'Dashboard')
@section("content_header")
   <h1>Administrar Casos</h1> <br>
   <div class="mt-2">
      <a href="" type="button">Crear Caso</a>
   </div>
@stop
@section('css')
<link rel="stylesheet" href="{{asset('css/datatables.css') }}">
    <link rel-"stylesheet" href-"/css/admin custom.css">
@stop
@section('js')
  <script> console.log('Hi!'); </script>
  <script src="{{ asset('js/datatables.js') }}" defer></script>
@stop