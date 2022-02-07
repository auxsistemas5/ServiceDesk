@extends ('adminlte::page')
@section('title', 'Dashboard')
@section("content_header")
<h3 type="" class="">
   <b>CASOS CERRADOS </b><span class="badge bg-secondary"> {{$contador}}</span>
  </h3>
   <div class="table-responsive">
      <table id="todos" class="mt-3 table table-striped" style="width:100%"">
         <thead>
            <tr>
               <th>ID</th>
               <th>DESCRIPCION</th>
               <th>SOLICITANTE</th>
               <th>CREADO</th>
               <th>CERRADO</th>
            </tr>
         </thead>
         <tbody>
            @if($casoscerrados)
                @foreach ($casoscerrados as $caso)
                    <tr>
                        <td>{{$caso->id}}</td>
                        <td>{{$caso->DESCRIPTION}}</td>
                        <td>{{$caso->SOLICITANTE}}</td>
                        <td>{{$caso->created_at->format('d-m-Y')}}</td>
                        <td>{{$caso->updated_at->format('d-m-Y')}}</td>
                    </tr>
                @endforeach
            @else
                <p>no hay</p>
            @endif
         </tbody>
      </table>
   </div>
@stop
@section('content_header')
   <p>welcome to this beautiful adnin panel.</p>
@stop
@section('css')
   <link rel="stylesheet" href="{{asset('css/datatables.css') }}">
   <link rel-"stylesheet" href-"/css/admin custom.css">
@stop
@section('js')
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   
   <script>
      $(document).ready(function() {
         $('#todos').DataTable();
      } );
   </script>
  <script> console.log('Hi!'); </script>
  <script src="{{ asset('js/datatables.js') }}" defer></script>
  
@stop