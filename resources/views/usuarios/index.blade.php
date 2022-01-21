@extends ('adminlte::page')
@section('title', 'Dashboard')
@section("content_header")
@if(auth()->user()->admin == "TECNOLOGÍA")
    <h1>Todos los usuarios</h1>
    
    <div class="table-responsive">
        <table class="table bg-dark">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NOMBRE</th>
                    <th>CORREO</th>
                    <th>TIPO DE ROL</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $d)
                    <tr> 
                    <td>{{$d->id}}</td>
                    <td>{{$d->name}}</td>
                    <td>{{$d->email}}</td>
                    @if ($d->type_rol == 1)
                        <td>ADMINISTRADOR</td>
                    @else
                        <td>USUARIO</td>
                    @endif
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @else
            <h3>Usted no tiene permisos para ver este modulo</h3>
    @endif
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