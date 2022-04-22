<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <div>
        <h3 class="alert alert-dark text-white">NOTIFICACION MESA DE AYUDA</h3>
    </div>
    <div>
        <p>EL EQUIPO DE TECNOLOGIA DEL HOSPITAL MARCO FIDEL SUAREZ QUIERE INFORMARTE QUE EL CASO: </p> <br>

        <b>SOLICITADO POR: </b>  {{$caso['SOLICITANTE']}}<br>
        <b>CREADO EL DIA: </b> {{$caso['created_at']}}<br>
        <b>CON ASUNTO: </b> {{$caso['DESCRIPTION']}}<br>
        <b>PARA EL AREA:</b> {{$caso['AREADESTINO']}}<br>
        <b>TIPO DAÑO: </b> {{$caso['TIPODAÑO']}}<br>
        <b>PRIORIDAD: </b> {{$caso['PRIORIDAD']}}<br>

        <b>SE ENCUENTRA EN ESTE MOMENTO EN ESTADO: </b> {{$caso['ESTADO']}}<br>
        <b>FUE SOLUCIONADO POR EL INGENIERO: </b>{{$caso['USUARIOASIGNADO']}}<br>
        <b>Y RESPONDIO AL CASO: </b>{{$caso['RESPUESTAUSUARIOASIGNADO']}}<br><br>

        SE SOLUCIONO DE MANERA EXITOSA!<br>
         
        <p><b>AREA DE TECNOLOGÍA HMFS</b></p>
        <img src="https://www.hmfs.gov.co/wp-content/uploads/2021/08/LOGO-ENCABEZADOFF-8.png" width="250"height="60">
    </div>
</body>
</html>