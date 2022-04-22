@extends ('adminlte::page')
@section('title', 'Dashboard')
@section("content_header")
@if(auth()->user()->admin == "TECNOLOGÍA")
    <h1><b>ADMINISTRAR USUARIOS</b></h1>
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
        </symbol>
        <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
        </symbol>
        <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
        <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
        </symbol>
    </svg>

    @if (Session::has('actualizado'))
      <div class="cont">
         <div class="alert alert-success d-flex align-items-center autohide" autohide role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
            <div>
             {{Session('actualizado')}}
            </div>
         </div>
      </div>
    @endif
    
    <div class="table-responsive">
        <table id="todos" class="table ">
            <thead>
                <tr class="bg-dark">
                    <th>ID</th>
                    <th>USUARIO</th>
                    <th>NOMBRE</th>
                    <th>CORREO</th>
                    <th>TIPO DE ROL</th>
                    <th>ADMINISTRADOR</th>
                    <th>ACCIONES</th>
                </tr>
            </thead>
            <tbody>
                
                @foreach ($users as $users)
                    <tr> 
                        <form action="/dash/users/{{$users->id}}/actualizar" method="POST">
                            @csrf
                            @method('PUT')
                            <td>{{$users->id}}</td>
                            <td>{{$users->username}}</td>
                            <td>{{$users->name}}</td>
                            <td>{{$users->email}}</td>

                            @if ($users->type_rol == 1)
                                <td><select name="type_rol" id="" class="form-control">
                                    <option value="1">ADMINISTRADOR</option>
                                    <option value="0">USUARIO</option>
                                </select></td>
                            @else
                                <td><select name="type_rol" id="" class="form-control">
                                    <option value="0    ">USUARIO</option>
                                    <option value="1">ADMINISTRADOR</option>
                                </select></td>
                            @endif
                            @if ($users->admin == "No")
                                <td><select name="admin" id="" class="form-control">
                                    <option value="No">NINGUNO</option>
                                    <option value="TECNOLOGÍA">TECNOLOGÍA</option>
                                    <option value="MANTENIMIENTO">MANTENIMIENTO</option>
                                    <option value="BIOMEDICOS">BIOMEDICOS</option>
                                    <option value="SOPORTE">SOPORTE</option>
                                </select></td>
                            @else
                                @if ($users->admin == "TECNOLOGÍA")
                                    <td><select name="admin" id="" class="form-control">
                                        <option value="TECNOLOGÍA">TECNOLOGÍA</option>
                                        <option value="MANTENIMIENTO">MANTENIMIENTO</option>
                                        <option value="BIOMEDICOS">BIOMEDICOS</option>
                                        <option value="SOPORTE">SOPORTE</option>
                                        <option value="No">NINGUNO</option>
                                    </select></td>
                                @else
                                    @if ($users->admin == "SOPORTE")
                                        <td><select name="admin" id="" class="form-control">
                                            <option value="SOPORTE">SOPORTE</option>
                                            <option value="TECNOLOGÍA">TECNOLOGÍA</option>
                                            <option value="MANTENIMIENTO">MANTENIMIENTO</option>
                                            <option value="BIOMEDICOS">BIOMEDICOS</option>
                                            <option value="No">NINGUNO</option>
                                        </select></td>
                                    @endif
                                @endif
                            @endif

                            <td><button type="submit" class="btn btn-success btn-sm">ADMINISTRAR</button></td>
                        </form>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @else
        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
            <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
            </symbol>
        </svg>
        <div class="alert alert-warning d-flex align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
            <div>
            <h5><b>USTED NO PUEDE ACCEDER A ESTE MODULO</b></h5>
            </div>
        </div>
        <div class="row">
            <div class="d-flex justify-content-center col-md-12">
                <img src="https://www.pngitem.com/pimgs/m/162-1622413_4chan-404-pages-hd-png-download.png" width="80%" height="70%">
            </div>
        </div>
        
    @endif
@stop
@section('css')
    <link rel="stylesheet" href="{{asset('css/datatables.css') }}">
@endsection
@section('js')

    
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
