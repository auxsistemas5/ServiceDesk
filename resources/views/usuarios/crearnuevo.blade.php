@extends ('adminlte::page')
@section('title', 'Dashboard')
@section("content_header")
   <div class="container">
        <div>
            <h3><b>CREAR USUARIOS</b></h3>
        </div>
        <form action="/dash/user/crearNuevo/new" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-6  ">
                    <label for="" > USUARIO</label>
                    <div class=" input-group mb-3">
                        <span class="input-group-text "><i class="fas fa-id-card"></i></span>
                        <input class="form-control"  name="username" type="text">
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="" >NOMBRE</label>
                    <div class=" input-group mb-3">
                        <span class="input-group-text "><i class="fa fa-user-tie"></i></span>
                        <input class="form-control"  name="name" type="text">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="" >CORREO</label>
                    <div class=" input-group mb-3">
                        <span class="input-group-text"><i class="fas fa-at"></i></span>
                        <input class="form-control"name="email" type="text">
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="" >CONTRASEÑA</label>
                    <div class=" input-group mb-3">
                        <span class="input-group-text"><i class="fas fa-key"></i></span>
                        <input class="form-control" name="password" type="password">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <button class="btn btn-success btn-sm">CREAR USUARIO</button>
                </div>
            </div>
        </form>
   </div>
   
@stop
@section('css')
    <link rel="stylesheet" href="{{asset('css/datatables.css') }}">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
@endsection
@section('js')
<!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    
    <script>
        $(document).ready(function() {
            $('#todos').DataTable();
        } );

        $(document).ready(function() {
            $(".alert").hide(3000,function(){
            $(this).remove();//esconde las notificaciones//
            }); 
        });

    </script>
    <script> console.log('Hi!'); </script>
    <script src="{{ asset('js/datatables.js') }}" defer></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endsection