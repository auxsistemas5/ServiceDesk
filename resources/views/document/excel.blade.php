<div class="">

    <div class="table-responsive">
        <table  border="1" id="tab" class="table table-bordered  " style="width:100%">
            <thead>
                <tr>
                    <th><b>QUIEN SOLICITA</b></th>
                    <th class="alert alert-warning"><b>AREA</b></th>
                    <th class="alert alert-warning"><b>DESCRIPCIÓN</b></th>
                    <th class="alert alert-warning"><b>QUIEN SOLUCIONA</b></th>
                    <th class="alert alert-warning"><b>SOLUCIONADO EN</b></th>
                    <th><b>FECHA DE CREADO</b></th>
                    <th><b>FECHA DE SOLUCIONADO</b></th>
                
                </tr>
            </thead>
            <tbody>
                <?php $resultado = 0; $total = 0; ?>
                @foreach ($casos as $caso)
                    <tr> 
                        <td width="250px">{{$caso->SOLICITANTE}}</td>
                        <td width="250px">{{$caso->AREA}}</td>
                        <td width="250px">{{$caso->DESCRIPTION}}</td>
                        <td width="250px">{{$caso->USUARIOASIGNADO}}</td>
                        
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