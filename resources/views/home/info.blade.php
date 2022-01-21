@extends('layouts.layout')
@section('content')
    <div class="container">
        <h5 class="d-flex justify-content-center">Nuestro Hospital - Intranet Hospital Marco Fidel Suárez</h5>

        <div class="mt-3">
            <p>La ESE Hospital Marco Fidel Suárez, obtuvo su personería jurídica por medio de la Resolución Nº055 del 21 de julio de 1961 emanada de la Gobernación de Antioquia, bajo el nombre de Hospital Municipal Pio XII, institución sin ánimo de lucro dedicada a prestar servicios de salud a la comunidad con origen público.

                Por Resolución Nº 063 del 28 de junio de 1985 se cambió por el nombre David Velásquez Toro, en ese entonces se consideraba como entidad de primer nivel de atención y según Resolución Nº 088 del 29 de agosto de 1986 se modificó el artículo 3º de la Resolución 063 quedando como Hospital Marco Fidel Suárez. Luego, la ordenanza No.44 del 16 de noviembre de 1994 (art.5) transformó el Hospital en una Empresa Social del Estado del orden Departamental, de segundo nivel de atención. 
                
                Desde entonces se rige por la normatividad de la ley 100 de 1993 y sus decretos reglamentarios. Su dirección está en manos de la Junta Directiva y del Gerente elegido por el señor Gobernador de una terna seleccionada por la misma.
                
                A comienzos de febrero del año 2007, un hecho trascendental parte en dos su historia: el traslado a la sede donde funcionaba la Clínica Víctor Cárdenas del Seguro Social, lo que le permite duplicar su capacidad de atención y ampliar su portafolio de servicios. Este crecimiento consolida su autonomía administrativa, económica y financiera.
                El 7 de octubre de 2010, siguiendo con el Plan de Desarrollo Departamental “Antioquia para todos, manos a la obra”, se hace la inauguración y la reapertura de la Sede Niquía con los servicios de hospitalización y urgencias pediátricas 24 horas, con el objetivo de fortalecer la red pública de atención en salud.
                
                Es así, como la ESE Hospital Marco Fidel Suárez cuenta actualmente con dos sedes, una ubicada en la Autopista Norte, prestando servicios de salud de mediana y algunos de alta complejidad y la otra ubicada en el sector de Niquía con servicios exclusivos de Pediatría, comprometidos siempre con el bienestar de todos los antioqueños.</p>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                         MISIÓN
                        </button>
                      </h2>
                      <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Somos un hospital inclusivo, que contribuye al mejoramiento de la salud de la población a través de la prestación de servicios de mediana y alta complejidad, soportados en la eficiencia, la calidad, el trato humanizado y la sostenibilidad económica.</div>
                      </div>
                    </div>
                    
                </div>
            </div>
            <div class="col-md 6">
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            VISIÓN
                        </button>
                      </h2>
                      <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">En el 2024 seremos el hospital referente en salud del norte del departamento de Antioquia, reconocidos por un modelo de atención humanizado y por la calidad e integralidad en la prestación de servicios de salud.</div>
                      </div>
                    </div>
                    
                </div>
            </div>
            
            <div class="row">

                <div class="imagen col-md-6" style="max-width: 100%;height: auto;">
                    <img src="http://ganimedes/intranet/valores.jpg">
                </div>
            </div>
        </div>
    </div>
    <style>
        @media (max-width: 768px) {
            .imagen img{
            max-width: 100%;
            height: auto;
            }
        }
    </style>
@endsection
@section('css')
    <link rel-"stylesheet" href-"/css/admin custom.css">
@endsection