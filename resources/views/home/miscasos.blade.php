@extends ('layouts.layout')
@section('title', 'Dashboard')
@section("content")
<div class="container mt-2">
    <h1 type="" class="">
        <b>MIS CASOS </b>
    </h1>
    <p class="badge bg-secondary">Acceso para ver todos los casos en atencion</p> <br>
    <div class="card">
        
        
        <div class="card-body">
            <div class="table-responsive">
                <table id="todos"  class="mt-3 table table-striped" style="width:100%">
                    <thead>
                        <tr>
                        <th>ID</th>
                        <th>AREA</th>
                        <th>DESCRIPCION</th>
                        <th>ATENCION</th>
                        <th>PRIORIDAD</th>
                        <th>ESTADO</th>
         
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($micaso as $micaso)
                            @if($micaso->SOLICITANTE == auth()->user()->name)
                                <tr> 
                                    <td>{{$micaso->id}}</td>
                                    <td>{{$micaso->AREA}}</td>
                                    <td>{{$micaso->DESCRIPTION}}</td>

                                    @if ($micaso->RESPUESTATENCION == "NULL" )
                                        <td>No se está atendiendo Aun</td>
                                    @else
                                        <td>{{$micaso->RESPUESTATENCION}}</td>
                                    @endif
                                    @if ($micaso->PRIORIDAD == "BAJA")
                                    <td><span class="badge rounded-pill bg-success">{{$micaso->PRIORIDAD}}</span></td>
                                    @else
                                        @if ($micaso->PRIORIDAD == "MEDIA")
                                        <td><span class="badge rounded-pill bg-warning">{{$micaso->PRIORIDAD}}</span></td>
                                        
                                        @else
                                        <td><span class="badge rounded-pill bg-danger">{{$micaso->PRIORIDAD}}</span></td>
                                        
                                        @endif
                                    @endif

                                    @if ($micaso->ESTADO == "Abierto")
                                        <td><span class="badge rounded-pill bg-primary">{{$micaso->ESTADO}}</span></td>
                                    @else
                                        @if ($micaso->ESTADO == "En Desarrollo")
                                        <td><span class="badge rounded-pill bg-secondary">{{$micaso->ESTADO}}</span></td>
                
                                        @else
                                        <td><span class="badge rounded-pill bg-dark">{{$micaso->ESTADO}}</span></td>
                                        @endif
                                    @endif
                                    
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
    

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