<div class="">
    <table id="tab" class="table table-bordered" border="1" style="width: 100%">
        <thead>
            <tr>
                <th>HOSPITAL MARCO FIDEL SUAREZ</th>
                <th >AREA DE TECNOLOGÍA</th>
                <th><?php echo "FECHA: ". date( 'd-m-Y' ); ?></th>
            </tr>
        </thead>
    </table> <br>
    
    <div class="table-responsive">
        <table  border="1" id="tab" class="table table-bordered  " style="width:100%">
            <thead>
                <tr>
                    <th>AREA</th>
                    <th>DESCRIPCIÓN</th>
                    <th>QUIEN SOLUCIONA</th>
                    <th>SOLUCIONADO EN</th>
                
                </tr>
            </thead>
            <tbody>
                <?php $resultado = 0; $total = 0; ?>
                @foreach ($casos as $caso)
                    <tr> 
                        <td>{{$caso->AREA}}</td>
                        <td>{{$caso->DESCRIPTION}}</td>
                        <td>{{$caso->USUARIOASIGNADO}}</td>
                        
                        <?php
                            $date1 = new DateTime($caso->created_at);
                            $date2 = new DateTime($caso->FECHA_CERRADO);
                            $diff = $date1->diff($date2);
                            $total = $total+1;
                            $resultado = $resultado + $diff->i;
                            ?>
                        <td><?php echo $diff->i.' Minutos '. $diff->s. ' Segundos' ?></td>
                    </tr>
                @endforeach
                        
                        <?php
                            
                                $res = $resultado / $total ;
                            
                        ?>
                        <td><?php ?></td>
                    
            </tbody>
        </table>
    </div>
    <div class="">
        <p>Este es el reporte de estadisticas en la mesa de ayuda referente a los tickets de soporte por el equipo de Tecnología</p>
        <p>El numero de tickets Cerrados estes mes son: {{$total}}</p><b></b>
        <p>El tiempo estimado de respuesta promedio es: <?php echo number_format($res) ?> Minutos</p>

    </div>

</div>
<style>
    #tab{
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100;
    }
    #tab td, #tab th {

        border: 1px solid #ddd;
        padding: 8px;
    }
    #tab th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #3197a0;
        color: #fff;
    }
</style>

<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
<link rel-"stylesheet" href-"/css/admin custom.css">


<script>
    
</script>



