@php
/* Display block elements by default*/
$showHeader = true;
$showFooter = true;
@endphp

@extends('front/layouts/layout')

@section('title', __('messages.meta_branding'))

@section('layoutContent')

<section class="p_interno">
  <div class="position-relative">
    <div class="padding_sections">
      <div class="bg-gray-light ">
        <div class="fix-branding pb-1">
          <!-- hero -->
          <div class="container_page px-0">
            <div class="pattern_square px-xl-5 px-lg-4 px-4 pb-1">
              <div class="row position-relative z-10 px-3 pt-lg-4 pt-2">
                <div class="col-xl-8 px-2 pt-lg-5 pt-4 info_estrategia_top">
                  {{-- {!!$texto_superior!!} --}}
                  <h2 style="line-height: 1;"><em>{{ __('messages.branding_head_1') }}</em></h2>
                  <h1 style="line-height: 1;"><span >{!! __('messages.branding_head_2') !!}</span></h1>
                  <h2 style="line-height: 1;"><em>{!! __('messages.branding_head_3') !!}</em></h2>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- ticker -->
      <div>
        <div class="c_ticker2">
          <div class="marquee m2 fix-ticker">
            <h1>{{ __('messages.branding_marquee') }}</h1>
            {{-- {!!$marquee!!} --}}
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
                {!! __($item->descripcion) !!}
                {{-- {!! $item->descripcion !!} --}}
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
          <h2>{!! __('messages.branding_proccess') !!}</h2>
          <h4><em>{!! __('messages.branding_proccess_des') !!}</em></h4>
          {{-- {!!$titulo1!!} --}}
        </div>
        <div class="container_page px-0 pt-0 ">
          <div class="pattern_branding pl-lg-5 pl-4 pt-lg-5">
            <div class="row px-3 position-relative pt-5 z-10">
              <div class="col-xl-5 px-2 info_branding_left to_viewright to_viewReset">
                <!--      <h1>PROCESO DE BRANDING.</h1>
                <h5>¿Qué puedes esperar en un proyecto como este?</h5> <br>
                <h5>A partir de la estrategia creamos marcas poderosas, <strong><span style="color: #5B4CFF ;">difíciles
                      de scarse de la cabeza.</span></strong></h5> -->

                <a href="{{ url('/contacto') }}" class="btn_nuestra_mision btn_contact" id="btn_mision">
                  <div class="c_boton">
                    <span class="resplandor"></span>
                    <h3>{!! __('messages.home_contact') !!}</h3>
                  </div>
                </a>
                <!--  -->
              </div>
              <div class="col-xl-7 list_articles_branding pr-0 ">
                <article class="to_viewleft to_viewReset">
                  <div>
                    <h3>{!! __('messages.branding_card_1_ti') !!}</h3>
                    <div class="card_bra">
                      <img src="{{ asset('assets/front/images/bombillo.gif') }}" alt="Sazulab" class="gif">
                      <div class="card_intro">
                        <span>1.</span>
                        <div>
                            {{-- {!!$text1!!} --}}
                            {!! __('messages.branding_card_1_de') !!}
                          </p>
                        </div>
                      </div>
                      <div class="circle_animate">
                        <img src="{{ asset(__('messages.branding_image_1')) }}" alt="Sazulab" class="">
                      </div>
                    </div>
                  </div>
                </article>

                <article class="to_viewleft to_viewReset">
                  <div>
                    <h3>{!! __('messages.branding_card_2_ti') !!}</h3>
                    <div class="card_bra">
                      <img src="{{ asset('assets/front/images/ajedrez.gif') }}" alt="Sazulab" class="gif">
                      <div class="card_intro">
                        <span>2.</span>
                        <div>
                          {{-- {!!$text2!!} --}}
                          {!! __('messages.branding_card_2_de') !!}
                        </div>
                      </div>
                      <div class="circle_animate">
                        <img src="{{asset(__('messages.branding_image_2')) }}" alt="Sazulab" class="">
                      </div>
                    </div>
                  </div>
                </article>

                <article class="to_viewleft to_viewReset">
                  <div>
                    <h3>{!! __('messages.branding_card_3_ti') !!}</h3>
                    <div class="card_bra">
                      <img src="{{ asset('assets/front/images/2.gif') }}" alt="Sazulab" class="gif">
                      <div class="card_intro">
                        <span>3.</span>
                        <div>
                          {{-- {!!$text3!!} --}}
                          {!! __('messages.branding_card_3_de') !!}
                        </div>
                      </div>
                      <div class="circle_animate">
                        <img src="{{ asset(__('messages.branding_image_3')) }}" alt="Sazulab" class="">
                      </div>
                    </div>
                  </div>
                </article>

                <article class="to_viewleft to_viewReset">
                  <div>
                    <h3>{!! __('messages.branding_card_4_ti') !!}</h3>
                    <div class="card_bra">
                      <img src="{{ asset('assets/front/images/1.gif') }}" alt="Sazulab" class="gif">
                      <div class="card_intro">
                        <span>4.</span>
                        <div>
                          {{-- {!!$text4!!} --}}
                          {!! __('messages.branding_card_4_de') !!}
                        </div>
                      </div>
                      <div class="circle_animate">
                        <img src="{{ asset(__('messages.branding_image_4')) }}" alt="Sazulab" class="">
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
              <h5>{!! __($item->titulo) !!}</h5>
              {!! __($item->descripcion) !!}
            </div>
          </div>
          @endforeach
        </div>
      </div>

      <!-- content our work -->
      <div class="py-5">
        <div class="text-center c_tit to_view to_viewReset">
          <h2>{!! __('messages.home_studies') !!}</h2>
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
