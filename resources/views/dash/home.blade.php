@extends ('layouts.layout')
@section('title', 'Inicio')
@section("content")

    <div class=" mt-3 d-flex justify-content-center">
        <h3>SELECCIONE EL AREA 
            DE SU INTERES</h3>
    </div>
    <div class="container d-flex justify-content-center">
        <div class="col-md-12">
            
            <div class="row">
                <div class="col-md-4 justify-content-center">
                    <div class="card ">
                        <div class="card-body " style="">
                            <h5 class="card-title "><i class="far fa-question-circle"></i> MESA DE AYUDA</h5>
                            
                            <p class="card-text">Generar, ver y gestionar tickets de soporte HMFS</p>
                            <a href="/dash/mesaDeAyuda" class="btn btn-primary form-control">ACCEDER</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card ">
                        <div class="card-body " style=" ">
                            <h5 class="card-title"><i class="fas fa-reply"></i> SOLUCIONES RAPIDAS</h5>
                            <p class="card-text">Ver errores frecuentes con  solucion para ejecucion  inmediata "Hagalo usted mismo"</p>
                            <a href="#" class="btn btn-primary form-control">ACCEDER</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card ">
                        <div class="card-body" style=" ">
                        <h5 class="card-title">HMFS</h5>
                        <p class="card-text">Ver informacion y todo lo relacionado con el hospital</p>
                        <a href="/dash/info/hospital" class="btn btn-primary form-control">ACCEDER</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-2 row">

                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            APLICACIONES WEB ADMINISTRATIVAS
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
                          APLICACIONES WEB ASISTENCIALES
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
@section('css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
   
   <link rel-"stylesheet" href-"/css/admin custom.css">
   <style>
      
   </style>
@stop
@section('js')
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script> console.log('Hi!'); </script>
@stop

