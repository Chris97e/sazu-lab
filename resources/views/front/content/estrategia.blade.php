@php
/* Display block elements by default*/
$showHeader = true;
$showFooter = true;
@endphp

@extends('front/layouts/layout')

@section('title', 'Estrategia')

@section('layoutContent')

<section class="p_interno">
  <div class="position-relative">
    <div class="padding_sections">
      <div class="bg-gray-light ">
        <div class="fix-strategia pb-1">
          <!-- hero -->
          <div class="container_page px-0">
            <div class="pattern_square px-xl-5 px-lg-4 px-4 pb-5">
              <div class="row position-relative z-10 px-3 pt-lg-5 pt-2">
                <div class="col-md-7 px-2 pt-lg-5 pt-4 info_estrategia_top">
                  {{-- <h2><i>End to end</i></h2>
                  <h1>ESTRATEGIA<br><i>+ EJECUCIÓN</i></h1>
                  <h2><i>con metodologías de diseño para negocio, comunicaciones y marca.</i></h2> --}}
                  {!! $texto_superior !!}
                </div>
                <!--    <div class="col-xl-5 pt-lg-5 pt-4 px-2">
                            <div class="ani__move_y_05 ani__infinite ani__duration-3s ani__alternate z-1 pb-lg-5 pb-4">
                              <h4><strong style="color:#5B4CFF;">“El mejor día de mi vida,</strong><br> fue cuando conocí a Sazú”.</h3>
                            </div>
                            <div class="offset-lg-3 ani__move_y_05 ani__infinite ani__duration-4s ani__alternate z-1 tama_frase2">
                              <h2>“Amo a Sazú <strong style="color:#5B4CFF;">con mi vida,</strong> me solucionaron la existencia”.</h2>
                            </div>
                          </div> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- ticker -->
    <div>
      <div class="c_ticker">
        {{--<div class="container_page position-relative mx-auto">
          <div class="t1">
            <img src="{{ asset('assets/front/images/t1.png') }}" alt="Sazulab">
          </div>
          <div class="t2">
            <img src="{{ asset('assets/front/images/t2.png') }}" alt="Sazulab">
          </div>
        </div> --}}
        <div class="marquee fix-ticker">
          {{-- <h1>INVESTIGACIÓN - MODELOS DE NEGOCIO - PROPUESTA DE VALOR - PILARES DE COMUNICACIÓN - AGILE COACHIING -
          </h1> --}}
          {!! $marquee !!}
        </div>
      </div>
    </div>
  </div>

  <!-- info section -->
  <div class="bg-dark text-white shadow_black">
    <div class="padding_sections to_view to_viewReset">
      <div class="container_page px-lg-4 px-0 mx-auto">
        <div class="eclipse active">
          <span class="c_resplandor"></span>
          <span class="circle_blck"></span>
          <span class="brillo"></span>

        </div>
        <div class="c_cifras pb-5 ">
          <div class="row pt-3">
            <div class="col-lg-5 offset-lg-1 pt-lg-5 pt-4 ">
              <div class=" to_viewright to_viewReset">
                {{-- <h1>INNOVATION IS ABOUT SOLVING PROBLEMS</h2> --}}
                  {!! $titulot1 !!}
              </div>
              <div class=" to_viewright to_viewReset">
                {{-- <p>Usamos la estrategia como herramienta para potenciar <strong>la innovación y la
                    transformación</strong> de las empresas.</p> --}}
                {!! $text1 !!}
              </div>
              <div class="mt-1 pt-lg-5">
                <div class="cifras my-5 py-3 to_viewright to_viewReset">
                  {{-- <span class="number">PROCESO CENTRADO</span>
                  <h2>EN LAS PERSONAS</h2> --}}
                  {!! $text2 !!}
                </div>
                <div class="cifras my-5 py-3 to_viewright to_viewReset">
                  {{-- <span class="number">METODOLOGÍAS</span>
                  <h2>DE INNOVACIÓN</h2> --}}
                  {!! $text3 !!}
                </div>
                <div class="cifras my-5 py-3 to_viewright to_viewReset">
                  {{-- <span class="number">RIGUROSIDAD</span>
                  <h2>ANALÍTICA</h2> --}}
                  {!! $text4 !!}
                </div>
              </div>
            </div>

            <div class="col-lg-5 articles_estrategia pt-5">
              <article>
                <div class="to_viewleft to_viewReset">
                  {{-- <h2>NEGOCIO</h2>
                  <p>Entendemos a profundidad las necesidades de tu empresa, de su audiencia y del mercado, para
                    identificar los <strong>retos y oportunidades</strong> a los que se enfrenta, y así, articular
                    decisiones que <strong>transformen el negocio.</strong></p> --}}
                  {!! $text5 !!}
                </div>
              </article>
              <article>
                <div class="to_viewleft to_viewReset">
                  {{-- <h2>COMUNICACIONES</h2>
                  <p>Analizamos los comportamientos y creencias de la audiencia, identificando oportunidades de
                    relacionamiento y estableciendo pilares de comunicación que guíen los puntos de contacto entre tu
                    negocio y su público de una forma <strong>coherente, clara y sobre todo, efectiva.</strong></p> --}}
                  {!! $text6 !!}
                </div>
              </article>
              <article>
                <div class="to_viewleft to_viewReset">
                  {{-- <h2>MARCA</h2>
                  <p>Extraemos la esencia del negocio y lo convertimos en experiencias relevantes para su público. Desde
                    la estrategia, definimos el propósito de la marca y trazamos un plan para posicionarla y convertirla
                    en un <strong>activo valioso para sus clientes en un mercado competitivo.</strong></p> --}}
                  {!! $text7 !!}
                </div>
              </article>
            </div>
          </div>
        </div>

        <div class="tit_d_th my-lg-4 p-4 to_view to_viewReset">
          <!-- <h1>DESIGN THINKING</h1> -->
          {{-- <p>"La estrategia se trata de <strong>tomar decisiones,</strong> hacer compromisos; se trata de elegir
            deliberadamente ser diferente"</p>
          <P>Michael Porter</P> --}}
          {!! $pietext !!}
        </div>

        <div class="rueda my-5 pt-4 pb-5">
          <div class="circle_estr">
            <div class=" to_view to_viewReset">
              <img src="{{ asset('assets/front/images/circle_green.svg') }}" alt="Sazulab">
            </div>
          </div>
          <div class="to_view to_viewReset h-100">
            {{-- <ul>
              <li>
                <h5>ENTENDER</h5>
                <p>Investigamos y escuchamos</p>
              </li>
              <li>
                <h5>ANALIZAR</h5>
                <p>Encontramos oportunidades</p>
              </li>
              <li>
                <h5>IDEAR</h5>
                <p>Generamos ideas</p>
              </li>
              <li>
                <h5>DEFINIR</h5>
                <p>Priorizamos y marcamos un <br> plan de acción</p>
              </li>
              <li>
                <h5>IMPLENTAR</h5>
                <p>Llevamos a la vida el plan</p>
              </li>
            </ul> --}}
            {!! $rueda !!}
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="padding_sections ">
    <div class="bg-gray-light mt_neg">

      <!-- hero -->
      <div class="container_page px-4 pt-5 mb-lg-5 services_list">
        <div class="row pt-lg-5 justify-content-center">

          @foreach ($contenidos as $item)
          <div class="c_services_list">
            <img src="{{ asset($item->imagen) }}" alt="Sazulab">
            <h5>{!! $item->titulo !!}</h5>
            {!! $item->descripcion !!}
          </div>
          @endforeach

          {{-- <div class="col-lg- to_view to_viewReset">
            <div class="c_services_list">
              <img src="{{ asset('assets/front/images/negocio.jpg') }}" alt="Sazulab">
              <h5>ESTRATEGIA DE NEGOCIO</h5>
              <ul>
                <li>Definición de propuesta de valor</li>
                <li>Diseño de servicios</li>
                <li>Modelos de negocio</li>
                <li>Formulación de OKRs</li>
              </ul>
            </div>
          </div>
          <div class="col-lg- to_view to_viewReset">
            <div class="c_services_list">
              <img src="{{ asset('assets/front/images/comunica.jpg') }}" alt="Sazulab">
              <h5>ESTRATEGIA DE COMUNICACIÓN</h5>
              <ul>
                <li>Entendimiento de audiencia</li>
                <li>Pilares de comunicación</li>
                <li>Estrategia de contenido</li>
                <li>Plan de distribución</li>
              </ul>
            </div>
          </div>
          <div class="col-lg- to_view to_viewReset">
            <div class="c_services_list">
              <img src="{{ asset('assets/front/images/estmarca.jpg') }}" alt="Sazulab">
              <h5>ESTRATEGIA DE MARCA</h5>
              <ul>
                <li>Posicionamiento de marca</li>
                <li>Arquitectura de marca</li>
                <li>Naming</li>
                <li>Experiencia de marca</li>
              </ul>
            </div>
          </div> --}}

        </div>
      </div>

      <!-- content our work -->
      <div class="py-5">
        <div class="text-center c_tit to_view to_viewReset">
          <h2>CASOS DE <strong>ESTUDIO</strong></h2>
        </div>

        {{-- External file include --}}
        @include('front/layouts/includes/slider_casos')

      </div>

      <!-- c_form -->
      {{-- External file include --}}
      @include('front/layouts/includes/form')
    </div>
  </div>

</section>

@endsection
