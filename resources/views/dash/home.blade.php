@extends ('layouts.layout')
@section('title', 'Inicio')
@section("content")
    <div class=" d-flex justify-content-center ">
        <h3><b>SELECCIONE EL AREA 
            DE SU INTERES</b></h3>
    </div>
    <div class="container d-flex justify-content-center">
        <div class="col-md-12">
            
            <div class="row mt-4 ">
                <div class="col-md-4  targ">
                    <div class="card ">
                        <div class="card-body" style="">
                            <h5 class="card-title d-flex justify-content-center"><i class="far fa-question-circle"></i> <b>MESA DE TICKETS</b></h5>
                            
                            <img src="https://integralplm.com/wp-content/uploads/2018/06/soporte-tecnico-1.jpg" width="100%" height="302px">
                            <div class="botton mt-1 ">
                                <a href="/dash/mesaDeAyuda" class="btn btn-success btn-sm form-control ">ACCEDER</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 targ">
                    <div class="card ">
                        <div class="card-body " style=" ">
                            <h5 class="card-title d-flex justify-content-center"><i class="fas fa-reply"></i> <b>SOLUCIONES RAPIDAS</b></h5>
                            <img src="https://i.mkt.lu/cont/2514882/350/1024/productividad-trabajo-multitasking-art.jpg" width="100%" height="302px">
                            <div class="botton">

                                <a href="#" class="btn btn-primary btn-sm  form-control">EN MANTENIMIENTO</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 targ">
                    <div class="card ">
                        <div class="card-body" style=" ">
                        <h5 class="d-flex justify-content-center card-title"><b>HMFS</b></h5>
                        <img src="https://siproweb.blob.core.windows.net/contenido/2020/565c3dff-de5d-42e1-91ac-9bffbc8255d4/LOGO%20HMFS.png" width="100%" height="301px">
                        <div class="botton">
                            <a href="http://ganimedes/intranet/iniciosesion.php" target="_blank" class="btn btn-dark btn-sm form-control">ACCEDER</a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div hidden class="mt-2 row">

                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            <b>APLICACIONES WEB ADMINISTRATIVAS</b>
                        </button>
                      </h2>
                      <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <div class="row">
                                <div class="col-sm-4">
                                  <div class="card">
                                    <div class="card-body">
                                      <h5 class="card-title"><i class="fas fa-building"></i> GESTIÓN CARTERA</h5>
                                      <p class="card-text">HMFS - ADMINISTRATIVO</p>
                                      <a href="http://danthos/gestioncartera/usuarios/inicio_sesion.html" target="_blank" class="btn btn-primary form-control">ACCEDER</a>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="card">
                                        <div class="card-body">
                                        <h5 class="card-title"><i class="fas fa-building"></i> INVENTARIO FARMACIA </h5>
                                        <p class="card-text">HMFS - ADMINISTRATIVO</p>
                                        <a href="http://danthos/farmacia/usuarios/inicio_sesion2.php" class="btn btn-primary form-control" target="_blank">ACCEDER</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title"><i class="fas fa-building"></i> SEGUIMIENTO FACTURACIÓN</h5>
                                            <p class="card-text">HMFS - ADMINISTRATIVO</p>
                                            <a href="http://danthos/seguimientofacturacion/" target="_blank" class="btn btn-primary form-control">ACCEDER</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title"><i class="fas fa-building"></i> CONTROL HISTORIA CLÍNICA </h5>
                                            <p class="card-text">HMFS - ADMINISTRATIVO</p>
                                            <a href="http://danthos/trazabilidadhistoriaclinica/usuarios/inicio_sesion2.php" target="_blank" class="btn btn-primary form-control">ACCEDER</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title"><i class="fas fa-building"></i> EQUIPOS BIOMÉDICOS </h5>
                                            <p class="card-text">HMFS - ADMINISTRATIVO</p>
                                            <a href="#" class="btn btn-primary form-control">ACCEDER</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title"><i class="fas fa-building"></i> MARCOSTOS</h5>
                                            <p class="card-text">HMFS - ADMINISTRATIVO</p>
                                            <a href="http://danthos//marcostos/usuarios/inicio_sesion.html" target="_blank" class="btn btn-primary form-control">ACCEDER</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title"><i class="fas fa-building"></i> HOJA DE VIDA HARDWARE</h5>
                                            <p class="card-text">HMFS - ADMINISTRATIVO</p>
                                            <a href="http://danthos/hojavidahardware/usuarios/inicio_sesion2.php" target="_blank" class="btn btn-primary form-control">ACCEDER</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title"><i class="fas fa-building"></i> PAGARÉ</h5>
                                            <p class="card-text">HMFS - ADMINISTRATIVO</p>
                                            <a href="http://danthos/pagare/usuarios/inicio_sesion.html" class="btn btn-primary form-control" target="_blank">ACCEDER</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                          <b>APLICACIONES WEB ASISTENCIALES</b>
                        </button>
                      </h2>
                      <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <div class="row">
                                <div class="col-sm-4">
                                  <div class="card">
                                    <div class="card-body">
                                      <h5 class="card-title">LECTURA PRODIAGNOTICO</h5>
                                      <p class="card-text">HMFS - ASISTENCIAL</p>
                                      <a href="http://portalprodiagnostico.com.co/HMFS/contenido/RIS/Home.php" target="_blank" class="btn btn-primary form-control">ACCEDER</a>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-sm-4">
                                  <div class="card">
                                    <div class="card-body">
                                      <h5 class="card-title">EVENTOS ADVERSOS</h5>
                                      <p class="card-text">HMFS - ASISTENCIAL</p>
                                      <a href=" http://danthos/gestionpas/gestionpas.php" target="_blank" class="btn btn-primary  form-control">ACCEDER</a>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="card">
                                      <div class="card-body">
                                        <h5 class="card-title">CIRUGÍA</h5>
                                        <p class="card-text">HMFS - ASISTENCIAL</p>
                                        <a href="http://danthos/programaciondecirugia/index.php" target="_blank" class="btn btn-primary  form-control">ACCEDER</a>
                                      </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-4">
                                  <div class="card">
                                    <div class="card-body">
                                      <h5 class="card-title">REMISIONES</h5>
                                      <p class="card-text">HMFS - ASISTENCIAL</p>
                                      <a href="http://danthos/remisiones/usuarios/inicio_sesion.php" target="_blank" class="btn btn-primary  form-control">ACCEDER</a>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="card">
                                      <div class="card-body">
                                        <h5 class="card-title">IMAGENOLOGIA</h5>
                                        <p class="card-text">HMFS - ASISTENCIAL</p>
                                        <a href="http://danthos/imagenologia/usuarios/inicio_sesion.html" target="_blank" class="btn btn-primary  form-control">ACCEDER</a>
                                      </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="card">
                                      <div class="card-body">
                                        <h5 class="card-title">ADMINISTRACION URGENCIAS</h5>
                                        <p class="card-text">HMFS - ASISTENCIAL</p>
                                        <a href="http://danthos/administraciondeurgencias/" target="_blank" class="btn btn-primary  form-control">ACCEDER</a>
                                      </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-4">
                                  <div class="card">
                                    <div class="card-body">
                                      <h5 class="card-title">MUESTRA LABORATORIO</h5>
                                      <p class="card-text">HMFS - ASISTENCIAL</p>
                                      <a href="http://danthos/trazabilidadmuestraspatologicas/usuarios/inicio_sesion2.php" target="_blank" class="btn btn-primary  form-control">ACCEDER</a>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="card">
                                      <div class="card-body">
                                        <h5 class="card-title">ADMINISTRACION DE CAMAS</h5>
                                        <p class="card-text">HMFS - ASISTENCIAL</p>
                                        <a href="http://danthos/administraciondecamas/" target="_blank" class="btn btn-primary  form-control">ACCEDER</a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-sm-4">
                                    <div class="card">
                                      <div class="card-body">
                                        <h5 class="card-title">RECEPCION DE PACIENTES</h5>
                                        <p class="card-text">HMFS - ASISTENCIAL</p>
                                        <a href="http://danthos/recepcionpacientes/" target="_blank" class="btn btn-primary  form-control">ACCEDER</a>
                                      </div>
                                    </div>
                                  </div>

                            </div>

                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="card">
                                      <div class="card-body">
                                        <h5 class="card-title">REFERENCIA Y CONTRAREFERENCIA NIQUIA</h5>
                                        <p class="card-text">HMFS - ASISTENCIAL</p>
                                        <a href="http://danthos/referidosnq/usuarios/inicio_sesion.php" class="btn btn-primary  form-control" target="_blank">ACCEDER</a>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="col-sm-4">
                                      <div class="card">
                                        <div class="card-body">
                                          <h5 class="card-title">ADMINISTRACION AYUDAS DIAGNOSTICAS</h5>
                                          <p class="card-text">HMFS - ASISTENCIAL</p>
                                          <a href="http://danthos/administracionayudasdiagnosticas/" target="_blank" class="btn btn-primary  form-control">ACCEDER</a>
                                        </div>
                                      </div>
                                  </div>
                               
                                <div class="col-sm-4">
                                    <div class="card">
                                      <div class="card-body">
                                        <h5 class="card-title">REFERENCIA Y CONTRAREFERENCIA</h5>
                                        <p class="card-text">HMFS - ASISTENCIAL</p>
                                        <a href="http://danthos/referidos/usuarios/inicio_sesion.php" target="_blank" class="btn btn-primary  form-control">ACCEDER</a>
                                      </div>
                                    </div>
                                </div>
                                
                            </div>

                            <div class="row">
                                <div class="col-sm-12">
                                  <div class="card">
                                    <div class="card-body">
                                      <h5 class="card-title"><i class="fas fa-stethoscope"> REFERENCIA Y CONTRAREFERENCIA AMBULATORIA</i></h5>
                                      <p class="card-text">HMFS - ASISTENCIAL</p>
                                      <a href="http://danthos//referenciaycontrareferencia/usuarios/inicio_sesion.php" target="_blank" class="btn btn-primary  form-control">ACCEDER</a>
                                    </div>
                                  </div>
                                </div>
                                
                                
                            </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
               
        </div>
    </div>   
</div>
@stop
@section('content_header')
   <p>welcome to this beautiful admin panel.</p>
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

<style>
    
    @media(min-width: 766px){

        body{
            background-image: url("https://s1.1zoom.me/b4147/86/Keyboard_Toys_Macro_Closeup_Laptops_Police_520947_1366x768.jpg");
            width: 100%;
            height: 100%;
            background-size: cover;
            background-repeat:no-repeat;
            background-position: center center;
        }

        .card .card-body{
            height: 400px;
            justify-content: space-between;
            flex-direction: column;
            display: flex;
                        
        }

        .card .card-body .botton{
            justify-content: flex-end;
            display: flex;
        }
    }
</style>

