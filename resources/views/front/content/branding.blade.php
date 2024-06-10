@php
/* Display block elements by default*/
$showHeader = true;
$showFooter = true;
@endphp

@extends('front/layouts/layout')

@section('title', 'Branding')

@section('layoutContent')

<section class="p_interno">
  <div class="position-relative">
    <div class="padding_sections">
      <div class="bg-gray-light pb-2">
        <div class="pb-5">
          <!-- hero -->
          <div class="container_page px-0">
            <div class="pattern_square px-xl-5 px-lg-4 px-4 pb-5">
              <div class="row position-relative z-10 px-3 pt-lg-4 pt-2">
                <div class="col-xl-8 px-2 pt-lg-5 pt-4 info_estrategia_top">
                   {{-- <h2><i>Producimos</i></h2>  --}}

                  {{--<h2><i>Para empresas que quieren <br><strong style="color:#5B4CFF;">impactar el mundo.</strong></i>
                  </h2>  --}}
                  {!!$texto_superior!!}
                </div>
                <!--    <div class="col-xl-5 pt-lg-5 pt-4 px-2">
                  <div class="ani__move_y_05 ani__infinite ani__duration-3s ani__alternate z-1 pb-lg-5 pb-4">
                    <h4><strong style="color:#5B4CFF;">“El mejor día de mi vida,</strong><br> fue cuando conocí a Sazú”.
                      </h3>
                  </div>
                  <div class="offset-lg-3 ani__move_y_05 ani__infinite ani__duration-4s ani__alternate z-1 tama_frase2">
                    <h2>“Amo a Sazú <strong style="color:#5B4CFF;">con mi vida,</strong> me solucionaron la existencia”.
                    </h2>
                  </div>
                </div>-->
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- ticker -->
      <div>
        <div class="c_ticker2">
        {{--<div class="container_page position-relative mx-auto">
            <div class="t1">
              <img src="{{ asset('assets/front/images/t4.png') }}" alt="Sazulab">
            </div>
            <div class="t2">
              <img src="{{ asset('assets/front/images/t3.png') }}" alt="Sazulab">
            </div>
          </div> --}}
          <div class="marquee m2">
            {{-- <h1>IDENTIDAD DE MARCA - PACKAGING - POP - MERCH - ESTRATEGIA DE MARCA - REBRANDING</h1> --}}
            {!!$marquee!!}
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- info section -->
  <div class="">
    <div class="padding_sections">
      <div class="bg-gray-light  container_page px-0 mx-auto">
        <!-- galeria  -->

        <div class="grid">
          @foreach ($destacados as $item)
          <div class="item to_view to_viewReset {!! $item->clase !!}">
            <div class="item-content">
              <div class="info">
                {!! $item->descripcion !!}
              </div>
              <img src="{{ asset($item->imagen) }}" />
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>

  <div class="padding_sections ">
    <div class="bg-gray-light mt_neg">

      <!-- process branding -->
      <div class="pt-5">
        <div class="text-center c_tit to_view to_viewReset">
          {{-- <h2>PROCESO DE <strong>IDENTIDAD</strong></h2>
          <h4><i>¿Qué puedes esperar en un <br> proyecto como este?</i></h4> --}}
          {!!$titulo1!!}
        </div>
        <div class="container_page px-0 pt-0 ">
          <div class="pattern_branding pl-lg-5 pl-4 pt-lg-5">
            <div class="row px-3 position-relative pt-5 z-10">
              <div class="col-xl-5 px-2 info_branding_left to_viewright to_viewReset">
                <!--      <h1>PROCESO DE BRANDING.</h1>
                <h5>¿Qué puedes esperar en un proyecto como este?</h5> <br>
                <h5>A partir de la estrategia creamos marcas poderosas, <strong><span style="color: #5B4CFF ;">difíciles
                      de scarse de la cabeza.</span></strong></h5> -->

                <a href="http://localhost/git/site-sazulab/public/contacto" class="btn_nuestra_mision btn_contact" id="btn_mision">
                  <div class="c_boton">
                    <span class="resplandor"></span>
                    <h3>CONTÁCTANOS</h3>
                  </div>
                </a>
                <!--  -->
              </div>
              <div class="col-xl-7 list_articles_branding pr-0 ">
                <article class="to_viewleft to_viewReset">
                  <div>
                    <h3>ENTENDIMIENTO</h3>
                    <div class="card_bra">
                      <img src="{{ asset('assets/front/images/bombillo.gif') }}" alt="Sazulab" class="gif">
                      <div class="card_intro">
                        <span>1.</span>
                        <div>
                          {{-- <h2>ENTENDIMIENTO</h2>
                          <p>Entendemos el negocio a profundidad. Investigamos sus audiencias, entendemos las
                            necesidades de negocio y analizamos el mercado para poder tomar decisiones estratégicas.
                            --}}
                            {!!$text1!!}
                          </p>
                        </div>
                      </div>
                      <div class="circle_animate">
                        <img src="{{ asset('assets/front/images/entendimiento.svg') }}" alt="Sazulab" class="">
                      </div>
                    </div>
                  </div>
                </article>

                <article class="to_viewleft to_viewReset">
                  <div>
                    <h3>ESTRATEGIA</h3>
                    <div class="card_bra">
                      <img src="{{ asset('assets/front/images/ajedrez.gif') }}" alt="Sazulab" class="gif">
                      <div class="card_intro">
                        <span>2.</span>
                        <div>
                          {{-- <h2>ESTRATEGIA</h2>
                          <p>Facilitamos la toma de decisiones de estrategia de marca, ayudando a nuestros clientes a
                            definir una posición única y valiosa en el mercado que les permita diferenciarse y potenciar
                            su oferta de valor. </p> --}}
                          {!!$text2!!}
                        </div>
                      </div>
                      <div class="circle_animate">
                        <img src="{{ asset('assets/front/images/estrategia.svg') }}" alt="Sazulab" class="">
                      </div>
                    </div>
                  </div>
                </article>

                <article class="to_viewleft to_viewReset">
                  <div>
                    <h3>DISEÑO</h3>
                    <div class="card_bra">
                      <img src="{{ asset('assets/front/images/2.gif') }}" alt="Sazulab" class="gif">
                      <div class="card_intro">
                        <span>3.</span>
                        <div>
                          {{-- <h2>DISEÑO</h2>
                          <p>Diseñamos una identidad visual poderosa; coherente con la estrategia y que se adapte a los
                            espacios donde vivirá la marca.</p> --}}
                          {!!$text3!!}
                        </div>
                      </div>
                      <div class="circle_animate">
                        <img src="{{ asset('assets/front/images/diseño.svg') }}" alt="Sazulab" class="">
                      </div>
                    </div>
                  </div>
                </article>

                <article class="to_viewleft to_viewReset">
                  <div>
                    <h3>IMPLEMENTACIÓN</h3>
                    <div class="card_bra">
                      <img src="{{ asset('assets/front/images/1.gif') }}" alt="Sazulab" class="gif">
                      <div class="card_intro">
                        <span>4.</span>
                        <div>
                          {{-- <h2>IMPLEMENTACIÓN</h2>
                          <p>Planeamos y ejecutamos el despliegue de la marca. Priorizamos canales, mensajes y
                            contenido, para construir el posicionamiento estratégico deseado. Somos tus aliados en el
                            proceso de desarrollar una marca potente y coherente. </p> --}}
                          {!!$text4!!}
                        </div>
                      </div>
                      <div class="circle_animate">
                        <img src="{{ asset('assets/front/images/implementacion.svg') }}" alt="Sazulab" class="">
                      </div>
                    </div>
                  </div>
                </article>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- hero -->
      <div class="container_page px-4  mb-5 services_list">
        <div class="row pt-5 justify-content-center">
          @foreach ($contenidos as $item)
          <div class="col-lg- to_view to_viewReset">
            <div class="c_services_list">
              <img src="{{ asset($item->imagen) }}" alt="Sazulab">
              <h5>{!! $item->titulo !!}</h5>
              {!! $item->descripcion !!}
            </div>
          </div>
          @endforeach
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/web-animations/2.3.2/web-animations.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/haltu/muuri@0.9.5/dist/muuri.min.js"></script>

<script>
  var grid = new Muuri('.grid', {
    dragEnabled: false,
    layout: {
      fillGaps: true
    }
  });

  // When all items have loaded refresh their
  // dimensions and layout the grid.
  window.addEventListener('load', function () {
    grid.refreshItems().layout();
    // For a little finishing touch, let's fade in
    // the images after all them have loaded and
    // they are corrertly positioned.
    document.body.classList.add('images-loaded');
  });
</script>

@endsection
