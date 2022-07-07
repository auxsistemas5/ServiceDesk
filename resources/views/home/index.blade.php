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
                  
                  <img src="https://drive.google.com/uc?id=1fQs9a4-XcGVU9xjN1Fl1sN_DledNIUcH" width="100%" height="302px">
                  <div class="botton">

                    <a href="/dash/mesaDeAyuda/create" class="btn btn-success btn-sm form-control">ACCEDER</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="card">
                <div class="card-body">
                  
                  
                  <img src="https://drive.google.com/uc?id=1H2MqQPRSrhKh7KDpdPzEo3FN_O0uwN3t" width="100%" height="302px">
                  <div class="botton">
                    
                    
                    <a href="/dash/mesaDeAyuda/miscasos" class="btn btn-warning btn-sm form-control">ACCEDER</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                  <div class="card-body ">
                        
                        <img src="https://drive.google.com/uc?id=1zoc1gjPsvdT7pw8SU-04SrvyB0MZyyjV" width="100%" height="302px">
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
