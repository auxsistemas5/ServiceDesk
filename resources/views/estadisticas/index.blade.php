@extends ('adminlte::page')
@section('title', 'Dashboard')
@section("content_header")
@if(auth()->user()->admin == "TECNOLOGÍA")
    <div class="card">
        <div class="card-body">
            <div>
                <h2><b>ESTADISTICAS</b></h3>
                    
            </div>
            
            <div class="row">
                <div class="col-md-5">
                    <H4><b>REPORTE ANUAL DE CASOS</b></H4>
                    <canvas id="myChart" width="140" height="120"></canvas>
                </div>
                <div class="hidden col-md-1">
                    <p></p>
                </div>
                <div class=" col-md-4">
                    <h4><b>TICKETS POR USUARIOS</b></h4>
                    <div class="d-flex justify-content-center">
                        <canvas id="users" width="50" height="80"></canvas>
                    </div>
                </div>
            </div>
            <BR></BR>
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class='table' border='1' style='WIDTH:100%'>
                            <thead style='background-color: orange'>
                                <tr style='text-align:center'>
                                    <td ><B>PERSONA</B></td>
                                    <td ><B>TICKETS ABIERTOS</B></td>
                                    <td ><B>TICKETS CERRADOS</B></td>
                                    <td><B>TOTAL DE CASOS</B></td>
                                    <td><B>PORCENTAJE DE CUMPLIMIENTO</B></td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr style='text-align:center'>
                                    <td>BRUCER LEE RONCALLO</td>
                                    <td>{{$abierto1}}</td>
                                    <td>{{$cerrado1}}</td>
                                    <td> {{$total1}}</td>
                                    <td>{{round($cerrado1 * 100 / $total1, 2)}}%</td>
                                </tr>
                                <tr style='text-align:center'>
                                    <td>JARLEY ESTIVERD SALDARIAGA </td>
                                    <td>{{$abierto2}}</td>
                                    <td>{{$cerrado2}}</td>
                                    <td> {{$total2}}</td>
                                    <td>{{round($cerrado2 * 100 / $total2, 2)}}%</td>
                                </tr>
                                <tr style='text-align:center'>
                                    <td>JEAN CARLOS MARIN</td>
                                    <td>{{$abierto3}}</td>
                                    <td>{{$cerrado3}}</td>
                                    <td> {{$total3}}</td>
                                    <td>{{round($cerrado3 * 100 / $total3, 2)}}%</td>
                                </tr>
                                <tr style='text-align:center'>
                                    <td>JUAN DAVID VALENCIA</td>
                                    <td>{{$abierto4}}</td>
                                    <td>{{$cerrado4}}</td>
                                    <td> {{$total4}}</td>
                                    <td>{{round($cerrado4 * 100 / $total4, 2)}}%</td>
                                </tr>
                                <tr style='text-align:center'>
                                    <td>SOPORTE</td>
                                    <td>{{$abierto5}}</td>
                                    <td>{{$cerrado5}}</td>
                                    <td> {{$total5}}</td>
                                    <td>{{round($cerrado5 * 100 / $total5, 2)}}%</td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <br> 
            <div class="row">
                <div class="col-md-12">
                    <h4><B>CASOS POR SU TIPIFICACIÓN</B></h4>
                    <div class="table-responsive">
                        <table class='table'  border='1' style='WIDTH:100%'>
                            <thead style='background-color: aquamarine; color:black;text-align:center;'>
                                <tr >
                                    <th>TIPIFICACIÓN</th>
                                    <th>ABIERTOS</th>
                                    <TH>CERRADOS</TH>
                                    <th>TOTAL</th>
                                </tr>
                            </thead>
                            <tbody style='text-align:center'>
                                <tr>
                                    <td>DINAMICA</td>
                                    <td>{{$tipiabierto1}}</td>
                                    <td>{{$tipicerrado1}}</td>
                                    <td>{{$tipificado1}}</td>
                                </tr>

                                <tr>
                                    <td>IMPRESORAS</td>
                                    <td>{{$tipiabierto2}}</td>
                                    <td>{{$tipicerrado2}}</td>
                                    <td>{{$tipificado2}}</td>
                                </tr>

                                <tr>
                                    <td>ESCANER</td>
                                    <td>{{$tipiabierto3}}</td>
                                    <td>{{$tipicerrado3}}</td>
                                    <td>{{$tipificado3}}</td>
                                </tr>

                                <tr>
                                    <td>EQUIPOS</td>
                                    <td>{{$tipiabierto4}}</td>
                                    <td>{{$tipicerrado4}}</td>
                                    <td>{{$tipificado4}}</td>
                                </tr>

                                <tr>
                                    <td>CAMARAS</td>
                                    <td>{{$tipiabierto5}}</td>
                                    <td>{{$tipicerrado5}}</td>
                                    <td>{{$tipificado5}}</td>
                                </tr>

                                <tr>
                                    <td>CORREOS</td>
                                    <td>{{$tipiabierto6}}</td>
                                    <td>{{$tipicerrado6}}</td>
                                    <td>{{$tipificado6}}</td>
                                </tr>

                                <tr>
                                    <td>CREACIÓN USUARIOS</td>
                                    <td>{{$tipiabierto7}}</td>
                                    <td>{{$tipicerrado7}}</td>
                                    <td>{{$tipificado7}}</td>
                                </tr>
                                <tr>
                                    <td>INTRANET</td>
                                    <td>{{$tipiabierto8}}</td>
                                    <td>{{$tipicerrado8}}</td>
                                    <td>{{$tipificado8}}</td>
                                </tr>
                                <tr>
                                    <td>TELEFONIA</td>
                                    <td>{{$tipiabierto9}}</td>
                                    <td>{{$tipicerrado9}}</td>
                                    <td>{{$tipificado9}}</td>
                                </tr>
                                <tr>
                                    <td>SERVIDORES</td>
                                    <td>{{$tipiabierto10}}</td>
                                    <td>{{$tipicerrado10}}</td>
                                    <td>{{$tipificado10}}</td>
                                </tr>
                                <tr>
                                    <td>VARIOS(Switch, Informes, Convertir Archivos, VPN, Puntos de Red, SAIA)</td>
                                    <td></td>
                                    <td></td>
                                    <td>{{$septiembre-$totalCasos}}</td>
                                </tr>
                                <tr>
                                    <td>TOTAL DE CASOS</td>
                                    <td></td>
                                    <td></td>
                                    <td>{{$septiembre}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div hidden class="valores por mes">
                <input id="julio" value="{{$julio}}">
                <input id="agosto" value="{{$agosto}}">
                <input id="septiembre" value="{{$septiembre}}">

                <input id="usuario1" value="{{$usuario1}}">
                <input id="usuario2" value="{{$usuario2}}">
                <input id="usuario3" value="{{$usuario3}}">
                <input id="usuario4" value="{{$usuario4}}">
                <input id="usuario5" value="{{$usuario5}}">

            </div> <br>

            <div hidden class="valores por mes">
                



                

            </div>
        
            <div class="row">
                <div class="col-md-12">

                    <a class='btn btn-warning form-control' href="">GENERAR REPORTE(EN MANTENIMIENTO)</a>
                </div>
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
        </div>
    </div>
    
@endif
@endsection
@section('js')
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.0/dist/chart.min.js"></script>
    <script>
        //grafica los valores segun el mes dentro del grafico
        const ctx = document.getElementById('myChart').getContext('2d');
        const usr = document.getElementById('users').getContext('2d');
    

        var julio = document.getElementById('julio').value;
        var agosto = document.getElementById('agosto').value;
        var septiembre = document.getElementById('septiembre').value;

        var usuario5 = document.getElementById('usuario5').value;
        var usuario4 = document.getElementById('usuario4').value;
        var usuario3 = document.getElementById('usuario3').value;
        var usuario2 = document.getElementById('usuario2').value;
        var usuario1 = document.getElementById('usuario1').value;

        


        const myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['JULIO','AGOSTO','SEPTIEMBRE'],
                datasets: [{
                    label: 'CASOS SOLUCIONADOS POR MES',
                    data: [julio,agosto,septiembre],
                    backgroundColor: [
                        'rgba(255, 45, 0)',
                        'rgba(0, 128, 255 )',
                        'rgba(101, 194, 44 )',
                        'rgba(255, 243, 0 )',
                        'rgba(142, 44, 194 )',
                        'rgba(246, 173, 18 )',
                        'rgba(246, 18, 94 )',
                        'rgba(239, 169 ,74)',
                        'rgba(194, 176 ,120)'
                    ],
                   
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        

        const users = new Chart(usr, {
            type: 'pie',
            data: {
                labels: ['BRUCER RONCALLO', 'JUAN VALENCIA', 'JARLEY SALDARRIAGA','SOPORTE','JEAN CARLOS MARIN OSPINA'],
                datasets: [{
                    label: 'CASOS SOLUCIONADOS POR SOPORTE',
                    data: [usuario2, usuario1, usuario3, usuario4,usuario5],
                    backgroundColor: [
                        'rgba(18, 246, 153 )',
                        'rgba(92, 128, 201 )',
                        'rgba(246, 187, 18  )',
                        'rgba(240, 120, 120 )',
                        'rgba(255, 87, 51)'
                       
                    ],
                    
                    
                    
                }]
            },
    
        });

        
    </script>
@endsection