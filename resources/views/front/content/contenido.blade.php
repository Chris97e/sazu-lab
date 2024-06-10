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
      <div class="bg-gray-light pb-2">
        <div class="pb-5">
          <!-- hero -->
          <div class="container_page px-0">
            <div class="pattern_square px-xl-5 px-lg-4 px-4 pb-5">
              <div class="row position-relative z-10 px-3 pt-lg-5 pt-2">
                <div class="col-xl-7 px-2 pt-lg-5 pt-4 info_estrategia_top">
                  {{-- <h2><i>Producimos</i></h2>
                  <h1>CONTENIDO</h1>
                  <h2>que construye<strong style="color:#5B4CFF;"> <i>relaciones reales</i></strong> <br>con tu
                    audiencia, promoviendo <br> el <strong style="color:#5B4CFF;"> <i>crecimiento
                        sostenible.</i></strong></h2> --}}
                  {!!$texto_superior!!}
                </div>
                <!-- <div class="col-xl-5 pt-lg-5 pt-4 px-2">
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
      <!-- ticker -->
      <div>
        <div class="c_ticker2">
        {{--<div class="container_page position-relative mx-auto">
            <div class="t1">
              <img src="{{ asset('assets/front/images/t2.png') }}" alt="Sazulab">
            </div>
            <div class="t2">
              <img src="{{ asset('assets/front/images/t6.png') }}" alt="Sazulab">
            </div>
            <div class="t3">
              <img src="{{ asset('assets/front/images/t5.png') }}" alt="Sazulab">
            </div>
          </div>
          --}}
          <div class="marquee m2">
            {{-- <h1>DOCUMENTALES - COMERCIALES - CAMPAÑAS - RRSS - VIDEO/FOTO PRODUCTO - CASOS DE ÉXITO - CORTOMETRAJES -
              ANIMACIONES -&nbsp;</h1> --}}
              {!!$marquee!!}
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- info section -->
  <div class="">
    <div class="padding_sections">
      <div class="bg-gray-light position-relative container_page px-0 mx-auto pb-lg-5">
        <div class="tit_h2 to_viewleft to_viewReset cifrass">
          {{-- <h2 class="mb-0"><i>Videos</i></h2>
          <p>que emocionan, enganchan <br> y ¡llevan a la acción!</p> --}}
          {!!$vid1!!}
        </div>
        <div class="c_videos_content">
          <div class="c_videos">
            <div class="v1 video">
              <h6 class="to_viewleft to_viewReset">Storytelling</h6>
              {{-- <div class="c_video">
                <iframe width="552" height="982" src="https://www.youtube.com/embed/poKxWOP3vnE" title="Porkcolombia"
                  frameborder="0"
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                  allowfullscreen></iframe>
              </div>--}}
              {!!$video!!}
            </div>
            <div class="v2 video">
              {{-- <div class="c_video">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/mX0oY4Ewcv0"
                  title="YouTube video player" frameborder="0"
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                  allowfullscreen></iframe>
              </div> --}}
              {!!$video2!!}
            </div>
            <div class="v3 video">
              <!-- <div class="to_viewleft to_viewReset tit1">
                <h2 class="font-weight-bold font-italic mb-0">Contenido</h2>
                <p><i>para redes sociales que llega donde tiene que llegar</i></p>
              </div> -->
              <h6 class="to_viewleft to_viewReset">Comerciales</h6>
              <h6 class="to_viewleft to_viewReset">Casos de éxito</h6>
              {{-- <div class="c_video">
                <iframe width="552" height="982" src="https://www.youtube.com/embed/XC5BA7xAzQk"
                  title="YouTube video player" frameborder="0"
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                  allowfullscreen></iframe>
              </div> --}}
              {!!$video3!!}
            </div>
            <div class="v4 video">
              <h6 class="to_viewleft to_viewReset">Animación</h6>
              <h6 class="to_viewleft to_viewReset">Producción</h6>
              {{-- <div class="c_video">
                <iframe width="552" height="982" src="https://www.youtube.com/embed/njM_Rs-DAMs"
                  title="DEUNA I Checkout" frameborder="0"
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                  allowfullscreen></iframe>
              </div> --}}
              {!!$video4!!}
            </div>
            <div class="v5 video">
              {{-- <div class="c_video">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/ZiUZ5fkuVkY"
                  title="YouTube video player" frameborder="0"
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                  allowfullscreen></iframe>
              </div> --}}
              {!!$video5!!}
            </div>
            <div class="v6 video">
              {{-- <div class="c_video">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/2kYFq7ciOd8"
                  title="YouTube video player" frameborder="0"
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                  allowfullscreen></iframe>
              </div> --}}
              {!!$video6!!}
            </div>
          </div>
        </div>

        <div class="cifrass">
          <div class="c1 to_viewleft to_viewReset">
            {{-- <h2>Guiones</h2>
            <p>que le dan vida a la ideas</p> --}}
            {!!$vid2!!}
          </div>
          <div class="c4 to_viewleft to_viewReset">
            {{-- <h2>Contenido</h2>
            <p>para redes sociales que llega donde tiene que llegar</p> --}}
            {!!$vid3!!}
          </div>
          <div class="c2 to_viewleft to_viewReset">
            {{-- <h2>Documentales</h2>
            <p>que despiertan emociones</p> --}}
            {!!$vid4!!}
          </div>
          <div class="c3 to_viewleft to_viewReset">
            {{-- <h2>Mensajes</h2>
            <p>poderosos que tocan fibras y son efectivos</p> --}}
            {!!$vid5!!}
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="padding_sections ">
    <div class="bg-gray-light mt_neg">

      <!-- content video -->

      <div class="py-5 ">
        <div class="text-center c_tit to_view to_viewReset">
          {{-- <h2>DETRÁS <strong>DE CÁMARAS</strong></h2> --}}
          {!!$titulo2!!}
        </div>

        <div class="c_gal_detalle mt-5">
          <div class="row no-gutters">
            <div class="col-md-6 px-2 to_view to_viewReset mb-3">
              <img src="{{ asset('assets/front/images/grupocon1.jpg') }}" alt="Sazulab">
            </div>
            <div class="col-md-6 px-2 to_view to_viewReset mb-3">
              <img src="{{ asset('assets/front/images/grupocon2.jpg') }}" alt="Sazulab">
            </div>
          </div>
        </div>

      </div>

      <div class="container_page px-0 mt-lg-5 py-4 c_video_home  to_view to_viewReset">
        <div class="videoWrapper">
          {{-- <iframe width="100%" height="720" src="https://www.youtube.com/embed/zs8YasF82Vs" title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen>
          </iframe> --}}
          {!!$audiovisual!!}
        </div>
      </div>

      <!-- hero -->
      <div class="container_page px-4  mb-lg-5 services_list">
        <div class="row pt-5 justify-content-center">
          <div class="col-lg- to_view to_viewReset">
            <div class="c_services_list">
              <img src="{{ asset('assets/front/images/docs.jpg') }}" alt="Sazulab">
              <h5>DOCUMENTALES</h5>
              <p>Investigamos, escribimos, producimos y editamos documentales de la más alta calidad para marcas que
                quieren <strong>contar historias y despertar emociones.</strong> </p>
            </div>
          </div>
          <div class="col-lg- to_view to_viewReset">
            <div class="c_services_list">
              <img src="{{ asset('assets/front/images/video.jpg') }}" alt="Sazulab">
              <h5>VIDEO</h5>
              <p>Nos inventamos historias increíbles y llevamos las ideas de tu equipo hacia un producto que no solo
                <strong>emocione</strong> sino que <strong>cumpla los objetivos</strong> de tu marca.</strong>
              </p>
            </div>
          </div>
          <div class="col-lg- to_view to_viewReset">
            <div class="c_services_list">
              <img src="{{ asset('assets/front/images/cubrimien.jpg') }}" alt="Sazulab">
              <h5>CUBRIMIENTOS</h5>
              <p>¿Quién dijo que un cubrimiento es aburrido? tenemos las mejores ideas para producir memorias
                audiovisuales fieles al <strong>espíritu de tu empresa.</strong></p>
            </div>
          </div>
          <div class="col-lg- to_view to_viewReset">
            <div class="c_services_list">
              <img src="{{ asset('assets/front/images/producto.jpg') }}" alt="Sazulab">
              <h5>VIDEO PRODUCTO</h5>
              <p><strong>Destacamos lo mejor</strong> de tu producto para crear piezas que valga la pena repetir una y
                otra vez. </p>
            </div>
          </div>
          <div class="col-lg- to_view to_viewReset">
            <div class="c_services_list">
              <img src="{{ asset('assets/front/images/institucion.jpg') }}" alt="Sazulab">
              <h5>INSTITUCIONAL</h5>
              <p>Creamos contenido de valor para tu empresa, alineado con tu estrategia. Creamos comunidad,
                <strong>potenciamos las comunicaciones</strong> internas y externas, y construimos <strong>mensajes
                  efectivos</strong>
              </p>
            </div>
          </div>
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

@endsection
