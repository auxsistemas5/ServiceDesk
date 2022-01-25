@extends ('adminlte::page')
@section('title', 'Dashboard')
@section("content_header")
    <div>
        <h2><b>ESTADISTICAS</b></h3>
            
    </div>
    <div class="">
        <p>El total de casos cerrados hasta hoy: {{$total}}</p>
        <p>Casos cerrados este mes: {{$enero}}</p>
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
        <input id="abril" value="{{$abril}}">
    </div> <br>

    <a href="/reporte/casos/exportar" class="btn btn-secondary btn-small">EXPORTAR CASOS CERRADOS POR MES PDF</a> <br>
    
@endsection
@section('js')
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.0/dist/chart.min.js"></script>
    <script>
        //grafica los valores segun el mes dentro del grafico
        const ctx = document.getElementById('myChart').getContext('2d');
        const usr = document.getElementById('users').getContext('2d');
        var enero = document.getElementById('enero').value;
        var febrero = document.getElementById('febrero').value;
        var marzo = document.getElementById('marzo').value;
        var abril = document.getElementById('abril').value;

        const myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['ENERO', 'FEBRERO', 'MARZO', 'ABRIL', 'MAYO', 'JUNIO', 'JULIO', 'AGOSTO','SEPTIEMBRE', 'OCTUBRE', 'NOVIEMBRE', 'DICIEMBRE'],
                datasets: [{
                    label: 'CASOS SOLUCIONADOS POR MES',
                    data: [enero, 19, 3, 5, 2, 3, 2],
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
                    data: [enero, 19, 3],
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