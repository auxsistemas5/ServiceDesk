@extends ('layouts.layout')
@section('title', 'Dashboard')
@section("content")
<div class="container">
      <h1><b>MIS CASOS CERRADOS</b></h1>
      <p class="mt-3 badge bg-warning text-dark">Acceso para validar los tickets ya cerrados por el equipo de T.I</p> <br>
      <div class="card">
         <div class="card-body">
            <div class="table-responsive">
               <table id="todos" class="mt-3 table table-striped " style="width:100%">
                  <thead>
                     <tr>
                        <th>ID</th>
                        <th>AREA</th>
                        <th>DESCRIPTION</th>
                        <th>PRIORIDAD</th>
                        <th>ESTADO</th>
                     </tr>
                  </thead>
                  <tbody>
                     @foreach ($caso as $caso)
                        <tr> 
                           <td>{{$caso->id}}</td>
                           <td>{{$caso->AREA}}</td>
                           <td>{{$caso->DESCRIPTION}}</td>
                           @if ($caso->PRIORIDAD == "BAJA")
                           <td><span class="badge rounded-pill bg-success">{{$caso->PRIORIDAD}}</span></td>
                           @else
                              @if ($caso->PRIORIDAD == "MEDIA")
                              <td><span class="badge rounded-pill bg-warning">{{$caso->PRIORIDAD}}</span></td>
                              
                              @else
                              <td><span class="badge rounded-pill bg-danger">{{$caso->PRIORIDAD}}</span></td>
                              
                              @endif
                           @endif
      
                           @if ($caso->ESTADO == "Abierto")
                              <td><span class="badge rounded-pill bg-primary">{{$caso->ESTADO}}</span></td>
                           @else
                              @if ($caso->ESTADO == "En Desarrollo")
                              <td><span class="badge rounded-pill bg-secondary">{{$caso->ESTADO}}</span></td>
      
                              @else
                              <td><span class="badge rounded-pill bg-dark">{{$caso->ESTADO}}</span></td>
                              @endif
                           @endif
                        </tr>
                     @endforeach
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
@stop
@section('content_header')
   <p>welcome to this beautiful adnin panel.</p>
@stop

<!-- CSS only -->
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
  
