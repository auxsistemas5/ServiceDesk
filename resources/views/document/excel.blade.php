<div class="">

    <div class="table-responsive">
        <table  border="1" id="tab" class="table table-bordered  " style="width:100%">
            <thead>
                <tr>
                    <th><b>ID</b></th>
                    <th class="alert alert-warning"><b>FECHA</b></th>
                    <th class="alert alert-warning"><b>AREA</b></th>
                    <th class="alert alert-warning"><b>SOLICITANTE</b></th>
                    <th class="alert alert-warning"><b>DESCRIPTION</b></th>
                    <th><b>TIPODAÑO</b></th>
                    <th><b>USUARIOASIGNADO</b></th>
                    <th>ESTADO</th>
                
                </tr>
            </thead>
            <tbody>
                <?php $resultado = 0; $total = 0; ?>
                @foreach ($casos as $caso)
                    <tr> 
                        <td width="250px">{{$caso->id}}</td>
                        <td width="250px">{{$caso->created_at}}</td>
                        <td width="250px">{{$caso->AREA}}</td>
                        <td width="250px">{{$caso->SOLICITANTE}}</td>
                        <td width="250px">{{$caso->DESCRIPTION}}</td>
                        <td width="250px">{{$caso->TIPODAÑO}}</td>
                        <td width="250px">{{$caso->USUARIOASIGNADO}}</td>
                        <td width="250px">{{$caso->ESTADO}}</td>
                        
                        <?php
                            $date1 = new DateTime($caso->created_at);
                            $date2 = new DateTime($caso->FECHA_CERRADO);
                            $diff = $date1->diff($date2);
                            $total = $total+1;
                            $resultado = $resultado + $diff->i;
                            ?>
                        <td width="250px"><?php echo $diff->i.' Minutos '. $diff->s. ' Segundos' ?></td>
                        <td width="250px">{{$caso->created_at}}</td>
                        <td width="250px">{{$caso->FECHA_CERRADO}}</td>
                    </tr>
                @endforeach
                        
            </tbody>
        </table>
    </div>

</div>