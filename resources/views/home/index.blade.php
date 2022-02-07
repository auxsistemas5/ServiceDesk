@extends('layouts.layout')

@section('content')
    <div class="row">
      <h3 class="mt-4 d-flex justify-content-center text-white"><b>MESA DE AYUDA T.I</b></h3>
    </div>
    <div class="container mt-3">
        <div class="row justify-content-center align-items-center ">
            <div class="col-sm-4">
              <div class="card">
                <div class="card-body">
                  <h5 class="d-flex card-title justify-content-center"><b>CREAR NUEVO TICKET</b></h5>
                  <img src="https://x6i2p6h3.rocketcdn.me/wp-content/uploads/2019/03/crearempresa.jpg" width="100%" height="299px">
                  <div class="botton">

                    <a href="/dash/mesaDeAyuda/create" class="btn btn-success btn-sm form-control">ACCEDER</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title d-flex  justify-content-center"><b>MIS TICKETS ABIERTOS</b></h5>
                  <img src="https://cdn3.f-cdn.com/contestentries/1269942/15600440/5a991c82be987_thumb900.jpg" width="100%" height="302px">
                  <div class="botton">
                    
                    <a href="/dash/mesaDeAyuda/miscasos" class="btn btn-warning btn-sm form-control">ACCEDER</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                  <div class="card-body ">
                        <h5 class="card-title d-flex justify-content-center"><b>MIS TICKETS CERRADOS</b></h5>
                        <img src="https://us.123rf.com/450wm/yupiramos/yupiramos1905/yupiramos190513885/122581245-lista-de-verificaci%C3%B3n-portapapeles-con-l%C3%A1piz-dise%C3%B1o-de-ilustraciones-vectoriales.jpg?ver=6" width="100%" height="302px">
                        <div class="botton">
                        <a href="/dash/mesaDeAyuda/miscasoscerrados" class="btn btn-primary btn-sm form-control">ACCEDER</a>
                        </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection
@section('css')
    <link rel-"stylesheet" href-"/css/admin custom.css">
    
@stop
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
<style>

    
    @media (min-width: 766px){
        
        body{
            background-image: url("https://conceptodefinicion.de/wp-content/uploads/2021/01/tecnologia-.jpg");
            width: 100%;
            height: 100%;
            background-size: cover;
            background-repeat:no-repeat;
            background-position: center center;

        }

        .card .card-body{
          height: 400px;
          justify-content: space-between;
          flex-direction: column;
          display: flex;
                      
        }

        .card .card-body .botton{
            justify-content: flex-end;
            display: flex;
        }
    }
</style>
