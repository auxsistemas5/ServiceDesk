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
                <div class="col-md-6">
        
                    <p>El total de casos cerrados hasta hoy: {{$total}}</p>
                </div>
                <div class="col-md-6">
                    <p>Casos cerrados este mes: {{$julio}}</p>
                </div>
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
            <div hidden class="valores por mes">
                <input id="enero" value="{{$enero}}">
                <input id="febrero" value="{{$febrero}}">
                <input id="marzo" value="{{$marzo}}">
                <input id="julio" value="{{$julio}}">
            </div> <br>
        
            <div class="row">
                <div class="col-md-4">
                    <a href="/reporte/casos/exportar" class="btn btn-secondary btn-small">EXPORTAR CASOS CERRADOS POR MES PDF</a> <br>
                </div>
                <div class="col-md-4">
                    <a href="/reporte/casos/exportarExcel" class="btn btn-secondary btn-small">EXPORTAR DATOS A EXCEL</a>
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

        const myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['JULIO'],
                datasets: [{
                    label: 'CASOS SOLUCIONADOS POR MES',
                    data: [13],
                    backgroundColor: [
                        'rgba(255, 45, 0)',
                        'rgba(0, 128, 255 )',
                        'rgba(255, 243, 0 )',
                        'rgba(101, 194, 44 )',
                        'rgba(142, 44, 194 )',
                        'rgba(246, 173, 18 )',
                        'rgba(246, 18, 94 )'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
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
                labels: ['BRUCER BRONCALLO', 'JUAN VALENCIA', 'JARLEY SALDARRIAGA'],
                datasets: [{
                    label: 'CASOS SOLUCIONADOS POR SOPORTE',
                    data: [enero, 8, 7],
                    backgroundColor: [
                        'rgba(18, 246, 153 )',
                        'rgba(92, 128, 201 )',
                        'rgba(246, 187, 18  )'
                       
                    ],
                    
                    borderColor: [
                        'rgba(72, 180, 124 )',
                        'rgba(46, 80, 149  )',
                        'rgba(222, 195, 26 )'
                    ],
                    borderWidth: 1
                }]
            },
    
        });

        
    </script>
@endsection