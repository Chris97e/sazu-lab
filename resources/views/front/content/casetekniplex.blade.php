@php
/* Display block elements by default*/
$showHeader = true;
$showFooter = true;
@endphp

@extends('front/layouts/layout')

@section('title', 'Contenido')

@section('layoutContent')

<section class="p_interno">
  <div class="position-relative">
    <div class="padding_sections">
      <div class="bg-gray-light pb-5">
        <!-- hero -->
        <div style="background: url({{ asset('assets/front/images/tekni.jpg') }});">
          <div class="row no-gutters hero_detalle align-items-center">
            <span class="shadow" style="background: #F5F5F5;background: linear-gradient(0deg,  #F5F5F5 20%, rgba(255,255,255,0) 100%);"></span>
            <div class="col-lg-7 p-5">
              <h2 style="color: #fff;"><i>Caso de estudio</i></h2>
              <h1 style="color: #fff;"><strong>TEKNIPLEX / PHOENIX</strong></h1>
              <h2 style="color: #fff;"><i>Reducir la alta accidentalidad de uno de los líderes en fabricación de
                  empaques por medio de una estrategia de comunicación.</i></h2>
            </div>
          </div>
        </div>

        <!-- info basic project  -->

        <div class="py-lg-5 px-4">
          <div class="row justify-content-center info_basic py-lg-5 py-4">
            <div class="col-lg-3 col-md-4 col-12 to_view to_viewReset">
              <img class="mb-3" src="{{ asset('assets/front/images/phoenix.svg') }}" alt="Sazulab">
              <img src="{{ asset('assets/front/images/teknilogo.svg') }}" alt="Sazulab">
              <div class="mt-3 c_resplandor_f">
                <h5><strong>Estatus:</strong> Finalizado</h5>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-12 px-md-5 info_list to_view to_viewReset py-md-0 py-4">
              <h5>INDUSTRIA</h5>
              <p>Empaques</p>
              <h5>UBICACIÓN</h5>
              <p>Bogotá y Cartagena,<br>Colombia</p>
            </div>
            <div class="col-lg-3 col-md-4 col-12 info_list to_view to_viewReset">
              <h5>SERVICIO</h5>
              <p>Estrategia de comunicación <br>Creación de campaña <br>Contenido audiovisual <br>Contenido gráfico
                <br>Intervención de espacios
            </div>
          </div>
        </div>

        <!-- results  -->

        <div class="py-5 ">
          <div class="text-center c_tit to_view to_viewReset">
            <h2>KEY <strong>RESULTS</strong></h2>
          </div>
          <div class="row no-gutters justify-content-center results py-lg-5 py-4 px-md-0 px-2">
            <div class="col-md-5 px-md-4  to_view to_viewReset py-md-0 py-4">
              <h2 class="mb-2">32 %</h2>
              <h5>En reducción de accidentalidad.</h5>
            </div>
            <div class="col-md-5 px-md-4  to_view to_viewReset py-md-0 py-4">
              <h2 class="mb-2">82 %</h2>
              <h5>En reconocimiento sobre la campaña implementada.</h5>
            </div>
            <div class="col-md-5 px-md-4  to_view to_viewReset py-md-0 py-4">
              <h2 class="mb-2">3 meses</h2>
              <h5>Entre Bogotá y Cartagena sin un solo accidente en planta.</h5>
            </div>
            <div class="col-md-5 px-md-4  to_view to_viewReset py-md-0 py-4">
              <!-- <h2 class="mb-2">3 meses</h2>
              <h5 class="mb-5">Entre Bogotá y Cartagena sin un solo accidente en planta.</h5> -->
            </div>
          </div>
        </div>

        <!-- contexto -->

        <div class="contexto py-lg-5 py-4 mb-5 px-lg-0 px-4 to_viewleft to_viewReset">
          <div class="p-lg-5 p-4">
            <h4>CONTEXTO</h2>
              <h5>Tekniplex, líder en el diseño, fabricación y comercialización de empaques en América tenía un reto:
                <strong style="color:#5B4CFF;">reducir la accidentalidad en sus fábricas de Colombia.</strong> <br>
                <br>
                ¿La causa? Una alta rotación del personal dificultaba la transmisión y apropiación de cultura de
                seguridad y cuidado personal.
            </h4>
          </div>
        </div>

        <!-- galeria -->

        <div class="c_gal_detalle">
          <div class="row no-gutters">
            <div class="col-md-6 px-2 to_view to_viewReset mb-3">
              <img src="{{ asset('assets/front/images/grupo1tek.jpg') }}" alt="Sazulab">
            </div>
            <div class="col-md-6 px-2 to_view to_viewReset mb-3">
              <img src="{{ asset('assets/front/images/grupo2tek.jpg') }}" alt="Sazulab">
            </div>
          </div>
        </div>

        <!-- mision -->
        <div class="py-5">
          <div class="row c_mision no-gutters align-items-center" id="c_mision">
            <div class="col-md-5 to_viewright to_viewReset">
              <a href="javascript:;" class="btn_nuestra_mision" id="btn_mision">
                <div class="c_boton">
                  <span class="resplandor"></span>
                  <span class="hand"></span>
                  <h3>NUESTRA MISION</h3>
                </div>
                <span class="active_green"></span>
              </a>
            </div>
            <div class="col-md-6 to_viewleft to_viewReset pb-md-0 pb-5 mb-md-0 mb-5">
              <div class="info_intro px-md-0 px-4">
                <img src="{{ asset('assets/front/images/frase.svg') }}" alt="Sazulab">
              </div>
              <div class="info_mision p-lg-5 p-4">
                <h4>NUESTRA MISIÓN</h3>
                  <h5>Crear una <strong style="color:#5B4CFF;">estrategia de comunicación robusta,</strong> coherente y
                    consistente a través de un <strong style="color:#5B4CFF;">entendimiento profundo de las necesidades
                      y aspiraciones</strong> de los jóvenes talentos tech en Colombia, para crear una oferta de valor
                    atractiva como marca empleadora por medio de la <strong style="color:#5B4CFF;">implementación de
                      contenidos</strong> que sigan los valores corporativos y los lineamientos de comunicación
                    establecidos. </p>
              </div>
            </div>
          </div>
        </div>

        <div class="c_listado_info">
          <div class="text-center c_tit to_view to_viewReset">
            <h2>NUESTRO <strong>PROCESO</strong></h2>
          </div>
          <div class="px-4">
            <div class="c_detalle pb-5 ">
              <span class="abre_close"></span>
              <div>
                <article>
                  <div class="info_detalle to_view to_viewReset">
                    <h2>ESTRATEGIA.</h2>
                    <p>Partimos de un diagnóstico para entender el <strong style="color:#5B4CFF;">contexto laboral, las
                        necesidades, dolores y motivaciones</strong> tanto de personal administrativo como de los
                      operarios. A partir de estos hallazgos, trabajamos en sesiones de análisis que nos <strong style="color:#5B4CFF;">permitieron encontrar patrones de comportamiento para identificar las
                        principales necesidades</strong> de los trabajadores y llegar a la estrategia de
                      comunicación creando mensajes poderosos enfocados en la audiencia <strong style="color:#5B4CFF;">para permear en la cultura de la organización.</strong></p>
                  </div>
                  <img src="{{ asset('assets/front/images/estrategiatek.jpg') }}" alt="Sazulab" class="to_viewleft to_viewReset">
                </article>
                <article>
                  <div class="info_detalle to_view to_viewReset">
                    <h2>UNIVERSO VISUAL.</h2>
                    <p>A partir de los hallazgos y mensajes identificados, desarrollamos un sistema gráfico para la
                      campaña, buscando <strong style="color:#5B4CFF;">llamar la atención del público y así generar mayor
                        impacto entre los trabajadores.</strong> Esto a través del diseño gráfico, implementación física y
                      señalización en las plantas.</p>
                  </div>
                  <img src="{{ asset('assets/front/images/visualtek.jpg') }}" alt="Sazulab" class="to_viewleft to_viewReset">
                </article>
                <article>
                  <div class="info_detalle to_view to_viewReset">
                    <h2>GESTIÓN Y PRODUCCIÓN<br> DE CONTENIDO.</h2>
                    <p>A través de la creación de contenido gráfico, audiovisual y editorial, desarrollamos productos para
                      miembros de la empresa, sobre todo los más expuestos a los accidentes diariamente, <strong style="color:#5B4CFF;">logrando así una apropiación de buenas prácticas y como consecuencia,
                        reducir la accidentalidad.</strong><br>
                      <br>
                      El propósito de la campaña se basó en sensibilizar y generar cambios en la audiencia desde la
                      emoción, el aprendizaje y la concientización.
                    </p>
                  </div>
                  <img src="{{ asset('assets/front/images/producctek.jpg') }}" alt="Sazulab" class="to_viewleft to_viewReset">
                </article>
                <article>
                  <div class="info_detalle to_view to_viewReset">
                    <h2>INTERVENCIÓN <br> DE ESPACIOS.</h2>
                    <p>Conocer a fondo las dinámicas, los espacios y la cultura empresarial frente a la seguridad, para
                      encontrar oportunidades de implementar la señalización y así optimizar el impacto de la
                      campaña. Diseñamos, produjimos e instalamos piezas bidimensionales <strong style="color:#5B4CFF;">para generar cambios e impacto en los espacios de trabajo,</strong>
                      rediseñando también algunas zonas clave al interior de las plantas. </p>
                  </div>
                  <img src="{{ asset('assets/front/images/espacitek.jpg') }}" alt="Sazulab" class="to_viewleft to_viewReset">
                </article>
                <article>
                  <div class="info_detalle to_view to_viewReset">
                    <h2>EVENTO DE LANZAMIENTO<br>CAMPAÑA.</h2>
                    <p>Planeamos y ejecutamos el día cero de la campaña de comunicación, creando una experiencia
                      inolvidable para los más de 2000 empleados de las fábricas. Por medio de una actividad lúdica,
                      introdujimos al equipo a los conceptos claves de la campaña de seguridad y motivamos con la entrega
                      de souvenirs, tulas y fotos.</p>
                  </div>
                  <img src="{{ asset('assets/front/images/campatek.jpg') }}" alt="Sazulab" class="to_viewleft to_viewReset">
                </article>
              </div>
              <h5 class="text-primary bw font-weight-bold text-center mt-5 pt-5">LET'S MAKE IT HAPPEN!</h5>
            </div>

          </div>
        </div>

        <!-- content video -->
        <div class="container_page px-0 my-lg-5 py-4 c_video_home to_view to_viewReset">
          <div class="videoWrapper"><iframe width="100%" height="720" src="https://www.youtube.com/embed/PF9pso5AAFk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></div>
        </div>
        <div class="bg-gray-light">

          {{-- External file include --}}
          @include('front/layouts/includes/form')

        </div>
      </div>
      <!-- c_form -->

    </div>
  </div>

</section>

@endsection