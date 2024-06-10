@php
  /* Display block elements by default*/
  $showHeader = true;
  $showFooter = true;
@endphp

@extends('front/layouts/layout')

@section('title', 'Caso CCD/PACT')

@section('layoutContent')

  <section class="p_interno">
    <div class="position-relative">
      <div class="padding_sections">
        <div class="bg-gray-light pb-5">
          <!-- hero -->
          <div style="background: url({{ asset('assets/front/images/ccd.jpg') }});">
            <div class="row no-gutters hero_detalle align-items-center">
              <span class="shadow"
                style="background: #F5F5F5;background: linear-gradient(0deg,  #F5F5F5 20%, rgba(255,255,255,0) 100%);"></span>
              <div class="col-lg-7 p-5">
                <h2 style="color: #5680DE;"><i>Caso de estudio</i></h2>
                <h1 style="color: #5680DE;"><strong>CCD/PACT</strong></h1>
                <h2 style="color: #5680DE;"><i>Visibilizar las iniciativas del programa Conectando Caminos por los
                    Derechos de Pact. Para proteger los derechos de la población migrante venezolana y promover su
                    integración e inclusión social en el territorio colombiano.  </i></h2>
              </div>
            </div>
          </div>

          <!-- info basic project  -->

          <div class="py-lg-5 px-4">
            <div class="row justify-content-center info_basic py-lg-5 py-4">

              <div class="col-md-3 col-12 to_view to_viewReset">
                <img src="{{ asset('assets/front/images/logopact.svg') }}" alt="Sazulab">
                <div class="mt-3 c_resplandor_f">
                  <h5><strong>Estatus:</strong> Finalizado</h5>
                </div>
              </div>

              <div class="col-md-3 col-12 px-md-5 info_list to_view to_viewReset py-md-0 py-4">
                <h5>INDUSTRIA</h5>
                <p>Organización internacional
                  sin ánimo de lucro.</p>
                <h5>UBICACIÓN</h5>
                <p>Colombia</p>
              </div>

              <div class="col-md-3 col-12 info_list to_view to_viewReset">
                <h5>SERVICIO</h5>
                <p>Estrategia de comunicación. <br>Producción de contenido <br>audiovisual y gráfico. <br>Relaciones
                  públicas. <br>Gestión en prensa.</p>
              </div>

            </div>
          </div>

          <!-- results  -->

          <div class="py-5 ">
            <div class="text-center c_tit to_view to_viewReset">
              <h2>KEY <strong>RESULTS</strong></h2>
            </div>
            <div class="row no-gutters justify-content-center results py-lg-5 py-4 px-md-0 px-4">
              <div class="col-md-5 px-md-4 to_view to_viewReset py-md-0 py-4">
                <h2 class="mb-2">$ 10.2 M</h2>
                <h5>Gestionamos <strong style="color:#5B4CFF;">“Free-press”</strong> en medios digitales por
                  valores equivalentes a más de 10 millones de pesos si hubieran sido pagos.</h5>
              </div>
              <div class="col-md-5 px-md-4 to_view to_viewReset py-md-0 py-4">
                <h2 class="mb-2">8 talleres</h2>
                <h5>Planeamos y lideramos con éxito más de 8 talleres de co-creación con socios estratégicos
                  de la organización.</h5>
              </div>
              <div class="col-md-5 px-md-4 to_view to_viewReset py-md-0 py-4">
                <h2 class="mb-2">78,000</h2>
                <h5>Personas alcanzadas a través de <strong style="color:#5B4CFF;">“Free-press”</strong> en medios
                  impresos, un equivalente a más de 30 millones de pesos si hubieran sido pagos.</h5>
              </div>
              <div class="col-md-5 px-md-4 to_view to_viewReset py-md-0 py-4">
                <h2 class="mb-2">3 campañas</h2>
                <h5>Creamos 3 campañas de comunicación orientadas a potenciar la protección de derechos de la población
                  migrante venezolana en Colombia y mejorar la cohesión comunitaria y seguridad ciudadana.</h5>
              </div>
            </div>
          </div>

          <!-- contexto -->

          <div class="contexto py-lg-5 py-4 mb-5 px-lg-0 px-4 to_viewleft to_viewReset">
            <div class="p-lg-5 p-4">
              <h4>CONTEXTO</h4>
              <h5>Conectando Caminos por los Derechos (CCD) es uno de los programas de PACT. Este busca <strong
                  style="color:#5B4CFF;">proteger y prevenir la violación de derechos humanos de la población migrante
                  venezolana en Colombia,</strong> así como mejorar la cohesión comunitaria y la seguridad ciudadana.
                Entre las poblaciones priorizadas se encuentran, mujeres, niñas,  niños, jóvenes y adolescentes y
                población LGBTIQ+. <br>
                <br>
                El programa opera en 11 municipios caracterizados por tener una amplia población migrante, estos son:
                Riohacha, Maicao, Cúcuta, Bucaramanga, Santa Marta, Cartagena, Barranquilla, Cali, Medellín, Bogotá,
                Pasto e Ipiales.
              </h5>
            </div>
          </div>

          <!-- galeria -->

          <div class="c_gal_detalle">
            <div class="row no-gutters">
              <div class="col-md-6 px-2 to_view to_viewReset mb-3">
                <img src="{{ asset('assets/front/images/grupo3.jpg') }}" alt="Sazulab">
              </div>
              <div class="col-md-6 px-2 to_view to_viewReset mb-3">
                <img src="{{ asset('assets/front/images/grupo4.jpg') }}" alt="Sazulab">
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
                <div class="info_intro px-md-0 px-2">
                  <!-- <img src="{{ asset('assets/front/images/groupcoment.png') }}" alt="Sazulab"> -->
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
                      <h2>ESTRATEGIA DE COMUNICACIÓN.</h2>
                      <p>Trabajamos en 3 grandes campañas. Partimos de organizar talleres de co-creación con socios
                        estratégicos para definir productos y mensajes a comunicar. Definimos los contenidos, pilares y
                        audiencia que respondieran a los objetivos de cada una de las campañas.</p>
                    </div>
                    <img src="{{ asset('assets/front/images/ccdestrate.jpg') }}" alt="Sazulab"
                      class="to_viewleft to_viewReset">
                  </article>
                  <article>
                    <div class="info_detalle to_view to_viewReset">
                      <h2>ESTRATEGIA DE <br>CONTENIDOS</h2>
                      <p>Realizamos 5 contenidos independientes que estuvieran orientados a cumplir y apoyar el propósito
                        de
                        la campaña, potenciar la cohesión comunitaria y la seguridad ciudadana.</p>
                    </div>
                    <img src="{{ asset('assets/front/images/ccdconten.jpg') }}" alt="Sazulab"
                      class="to_viewleft to_viewReset">
                  </article>
                  <article>
                    <div class="info_detalle to_view to_viewReset">
                      <h2>GESTIÓN Y PRODUCCIÓN<br> DE CONTENIDO.</h2>
                      <p>A través del diseño de piezas gráficas y de la producción audiovisual, desarrollamos e
                        implementamos contenidos que respondieron a las 3 campañas y a los 5 contenidos independientes.
                        Con
                        esto, buscamos que la información técnica estuviera en un lenguaje cercano a la audiencia para
                        facilitar su comprensión. Los formatos producciones fueron: infografías, videos motion graphics,
                        afiches, videos, cuñas, material para rrss.</p>
                    </div>
                    <img src="{{ asset('assets/front/images/ccdproduc.jpg') }}" alt="Sazulab"
                      class="to_viewleft to_viewReset">
                  </article>
                  <article>
                    <div class="info_detalle to_view to_viewReset">
                      <h2>GESTIÓN EN <br> PRENSA</h2>
                      <p>Realizamos un mapeo de los principales medios de comunicación de los 11 municipios. Gestionamos
                        con
                        diferentes medios como Caracol Radio, RCN Radio, Canal Capital y W radio para publicar diferentes
                        notas de prensa.</p>
                    </div>
                    <img src="{{ asset('assets/front/images/ccdtelefono.png') }}" alt="Sazulab"
                      class="to_viewleft to_viewReset">
                  </article>
                  <article>
                    <div class="info_detalle to_view to_viewReset">
                      <h2>PÁGINA WEB.</h2>
                      <p>Creamos contenido audiovisual y tipo blog para publicar en el micrositio de Pact. Publicamos y
                        editamos entradas  en el micrositio que respondieran a los objetivos y al contenido propuesto en
                        cada campaña  y contenido.</p>
                    </div>
                    <img src="{{ asset('assets/front/images/ccdpagina.jpg') }}" alt="Sazulab"
                      class="to_viewleft to_viewReset">
                  </article>
                  <h5 class="text-primary bw font-weight-bold text-center mt-5 pt-5">LET'S MAKE IT HAPPEN!</h5>
                </div>
              </div>

            </div>
          </div>

          <!-- content video -->
          <div class="container_page px-0 my-lg-5 py-4 c_video_home to_view to_viewReset">
            <div class="videoWrapper"><iframe width="100%" height="720"
                src="https://www.youtube.com/embed/hhbq2GJ-0z4" title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe></div>
          </div>

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
