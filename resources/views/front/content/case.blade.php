@php
  /* Display block elements by default*/
  $showHeader = true;
  $showFooter = true;
@endphp

@extends('front/layouts/layout')

@section('title', $card->titulo)

@section('layoutContent')

  <section class="p_interno">
    <div class="position-relative">
      <div class="padding_sections">
        <div class="bg-gray-light pb-5">
          <!-- hero -->
          <div style="background: url({{ asset($caso->imagen_background) }});">
            <div class="row no-gutters hero_detalle align-items-center">
              <span class="shadow"
                style="background: #F5F5F5;background: linear-gradient(0deg,  #F5F5F5 20%, rgba(255,255,255,0) 100%);"></span>
              <div class="col-lg-7 p-5">
                {!! $caso->header !!}
                {{-- <h2 style="color: #fff;"><i>Caso de estudio</i></h2>
              <h1 style="color: #fff;"><strong>TEKNIPLEX / PHOENIX</strong></h1>
              <h2 style="color: #fff;"><i>Reducir la alta accidentalidad de uno de los líderes en fabricación de
                  empaques por medio de una estrategia de comunicación.</i></h2> --}}
              </div>
            </div>
          </div>

          <!-- info basic project  -->
          <div class="py-lg-5 px-4">
            <div class="row justify-content-center info_basic py-lg-5 py-4">
              <div class="col-lg-3 col-md-4 col-12 to_view to_viewReset">
                {!! $caso->col1 !!}
              </div>
              <div class="col-lg-3 col-md-4 col-12 px-md-5 info_list to_view to_viewReset py-md-0 py-4">
                {!! $caso->col2 !!}
              </div>
              <div class="col-lg-3 col-md-4 col-12 info_list to_view to_viewReset">
                {!! $caso->col3 !!}
              </div>
            </div>
          </div>

          <!-- results  -->
          <div class="py-5 ">
            <div class="text-center c_tit to_view to_viewReset">
              <h2>KEY <strong>RESULTS</strong></h2>
            </div>
            <div class="row no-gutters justify-content-center results py-lg-5 py-4 px-md-0 px-2">
              @foreach ($resultados as $item)
                <div class="col-md-5 px-md-4  to_view to_viewReset py-md-0 py-4">
                  <h2 class="mb-2">{!! $item->titulo !!}</h2>
                  <h5>{!! $item->texto !!}</h5>
                </div>
              @endforeach
              <div class="col-md-5 px-md-4  to_view to_viewReset py-md-0 py-4"></div>
            </div>
          </div>

          <!-- contexto -->

          <div class="contexto py-lg-5 py-4 mb-5 px-lg-0 px-4 to_viewleft to_viewReset">
            <div class="p-lg-5 p-4">
              {!! $caso->contexto !!}
            </div>
          </div>

          <!-- galeria -->

          <div class="c_gal_detalle">
            <div class="row no-gutters">
              <div class="col-md-6 px-2 to_view to_viewReset mb-3">
                <img src="{{ asset($caso->img_left) }}" alt="Sazulab">
              </div>
              <div class="col-md-6 px-2 to_view to_viewReset mb-3">
                <img src="{{ asset($caso->img_right) }}" alt="Sazulab">
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
                    <h3>NUESTRA MISIÓN</h3>
                  </div>
                  <span class="active_green"></span>
                </a>
              </div>
              <div class="col-md-6 to_viewleft to_viewReset pb-md-0 pb-5 mb-md-0 mb-5">
                <div class="info_intro px-md-0 px-4">
                  <img src="{{ asset($caso->mision_img) }}" alt="Sazulab">
                </div>
                <div class="info_mision p-lg-5 p-4">
                  <h4>NUESTRA MISIÓN</h4>
                  {!! $caso->mision_text !!}
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
                  @foreach ($procesos as $item)
                    <article>
                      <div class="info_detalle to_view to_viewReset">
                        <h2>{!! $item->titulo !!}</h2>
                        {!! $item->texto !!}
                      </div>
                      <img src="{{ asset($item->img) }}" alt="Sazulab" class="to_viewleft to_viewReset">
                    </article>
                  @endforeach
                </div>
                <h5 class="text-primary bw font-weight-bold text-center mt-5 pt-5">LET'S MAKE IT HAPPEN!</h5>
              </div>

            </div>
          </div>

          <!-- content video -->
          <div class="container_page px-0 my-lg-5 py-4 c_video_home to_view to_viewReset">
            <div class="videoWrapper">
              {!! $caso->iframe !!}
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
