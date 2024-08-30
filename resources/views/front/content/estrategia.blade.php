@php
/* Display block elements by default*/
$showHeader = true;
$showFooter = true;
@endphp

@extends('front/layouts/layout')

@section('title', __('messages.meta_strategy'))

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
                  <h2><em>{!! __('messages.strategy_head_1') !!}</em></h2>
                  <h1>{!! __('messages.strategy_head_2') !!}</h1>
                  <h2><em>{!! __('messages.strategy_head_3') !!}</em></h2>
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
          {{-- {!! $marquee !!} --}}
          <h1>{{ __('messages.strategy_marquee') }}</h1>
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
                <h1>INNOVATION IS ABOUT SOLVING PROBLEMS</h2>
                  {{-- {!! $titulot1 !!} --}}
              </div>
              <div class=" to_viewright to_viewReset">
                {{-- {!! $text1 !!} --}}
                <p>{!! __('messages.strategy_c_l_1') !!}</p>
              </div>
              <div class="mt-1 pt-lg-5">
                <div class="cifras my-5 py-3 to_viewright to_viewReset">
                  {!! __('messages.strategy_c_l_2') !!}
                  {{-- {!! $text2 !!} --}}
                </div>
                <div class="cifras my-5 py-3 to_viewright to_viewReset">
                  {!! __('messages.strategy_c_l_3') !!}
                  {{-- {!! $text3 !!} --}}
                </div>
                <div class="cifras my-5 py-3 to_viewright to_viewReset">
                  {!! __('messages.strategy_c_l_4') !!}
                  {{-- {!! $text4 !!} --}}
                </div>
              </div>
            </div>

            <div class="col-lg-5 articles_estrategia pt-5">
              <article>
                <div class="to_viewleft to_viewReset">
                  {!! __('messages.strategy_c_r_1') !!}
                  {{-- {!! $text6 !!} --}}
                </div>
              </article>
              <article>
                <div class="to_viewleft to_viewReset">
                  {!! __('messages.strategy_c_r_2') !!}
                  {{-- {!! $text6 !!} --}}
                </div>
              </article>
              <article>
                <div class="to_viewleft to_viewReset">
                  {!! __('messages.strategy_c_r_3') !!}
                  {{-- {!! $text7 !!} --}}
                </div>
              </article>
            </div>
          </div>
        </div>

        <div class="tit_d_th my-lg-4 p-4 to_view to_viewReset">
          {!! __('messages.strategy_pie') !!}
          {{-- {!! $pietext !!} --}}
        </div>

        <div class="rueda my-5 pt-4 pb-5">
          <div class="circle_estr">
            <div class=" to_view to_viewReset">
              <img src="{{ asset('assets/front/images/circle_green.svg') }}" alt="Sazulab">
            </div>
          </div>
          <div class="to_view to_viewReset h-100">
            {!! __('messages.strategy_circle') !!}
            {{-- {!! $rueda !!} --}}
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
            <h5>{!! __($item->titulo) !!}</h5>
              {!! __($item->descripcion) !!}
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

@endsection
