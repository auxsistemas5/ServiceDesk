@extends('layouts.layout')

@section('content')
<h5 class="mt-2 d-flex justify-content-center">MESA DE TICKETS</h5>
    <div class="container ">
        <div class="row justify-content-center align-items-center ">
            <div class="col-sm-4">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">CREAR NUEVO TICKET</h5>
                  <p class="card-text">Aqui puedes crear tickets de soporte para el ser resuelto por el equipo de TI</p>
                  <a href="/dash/mesaDeAyuda/create" class="btn btn-primary form-control">ACCEDER</a>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">MIS TICKETS ABIERTOS</h5>
                  <p class="card-text">Aqui puedes ver el estado de tus tickets y cual estan atendiendo</p>
                  <a href="/dash/mesaDeAyuda/miscasos" class="btn btn-primary form-control">ACCEDER</a>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">MIS TICKETS CERRADOS</h5>
                    <p class="card-text">Aqui puedes ver cual de tus casos ya ha sido solucionado con exito!</p>
                    <a href="/dash/mesaDeAyuda/miscasoscerrados" class="btn btn-primary form-control">ACCEDER</a>
                  </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('css')
    <link rel-"stylesheet" href-"/css/admin custom.css">
    <style>
        @media (min-width: 600px){
            .row{
                height: 100vh;
            }
        }
    </style>
@stop