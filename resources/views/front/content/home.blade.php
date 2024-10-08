@php
  /* Display block elements by default*/
  $showHeader = true;
  $showFooter = true;
@endphp

@extends('front/layouts/layout')

@section('title', __('messages.welcome'))

@section('layoutContent')

  <section class="p_interno">

    <div class="frase_left">YOU MAKE IT HAPPEN, <strong>WE MAKE IT MATTER!</strong></div>
    <div class="frase_right">YOU MAKE IT HAPPEN, <strong>WE MAKE IT MATTER!</strong></div>

    <div class="padding_sections">
      <div class="bg-gray-light overflow-hidden">
        <!-- content_hero -->
        <div class="container_page px-4 c_hero pt-xl-5 pt-4">
          <div class="position-relative z-10">
            <div class="row no-gutters px-xl-4 px-lg-4 px-2">

              <div class="col-xl-6 px-xl-5 pt-lg-5 pt-2">

                {{-- {!! $texto_superior !!} --}}
                <h4 style="line-height: 1;">{{ __('messages.home_banner_1') }}</h4>
                <h3 style="line-height: 1.1; max-width:500px;"><span style="font-size: 24pt;"><strong>{{ __('messages.home_banner_2') }}</strong></span></h3>
                <h5 style="line-height: 1.3;"><em>{!! __('messages.home_banner_3') !!}</em></h5>

              </div>

              <div class="col-lg-6 pt-4 mt-2 c_circle_home">
                <img src="{{ asset('assets/front/images/circle_animate.svg') }}" alt="Sazulab" class="circle">
                <img src="{{ asset('assets/front/images/planet.svg') }}" alt="Sazulab" class="planet">
              </div>
              <div class="col-lg-6 pt-4">
                <div class="m_home">
                  <ul>
                    <li><a href="{{ url('/estrategia') }}">{{ __('messages.home_strategy') }}</a></li>
                    <li><a class="fix-link-banner" href="{{ url('/estudio-creativo') }}">{{ __('messages.home_creative') }}</a></li>
                    <li><a href="{{ url('/branding') }}">{{ __('messages.home_branding') }}</a></li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="c_alien">
              <svg width="28" height="20" viewBox="0 0 28 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_3_1329)">
                  <path
                    d="M25 12.5V7.5H22.5V5H20V2.5H22.5V0H17.5V5H10V0H5V2.5H7.5V5H5V7.5H2.5V12.5H0V17.5H2.5V15H5V20H10V17.5H7.5V15H20V17.5H17.5V20H22.5V15H25V17.5H27.5V12.5H25ZM10 10H7.5V7.5H10V10ZM20 10H17.5V7.5H20V10Z"
                    fill="black" />
                </g>
                <defs>
                  <clipPath id="clip0_3_1329">
                    <rect width="27.5" height="20" fill="white" />
                  </clipPath>
                </defs>
              </svg>
            </div>
            <div class="img_alien">
              <div class="padding_sections">
                <div class="container_page px-4">
                  <h1>YOU MAKE IT HAPPEN, <br><strong>WE MAKE IT MATTER.</strong></h1>
                </div>
              </div>
              <img src="{{ asset('assets/front/images/bg.jpg') }}" alt="Sazulab">
            </div>
          </div>
        </div>

        <!-- content clients -->
        <div class="c_slider_our {{-- mt-4 --}} mt-5">
          <div class="text-center c_tit ">
            <h2>{!! __('messages.home_clients') !!}</h2>
          </div>
          <div class="slider_clients py-5 my-lg-5 to_view to_viewReset">

            @foreach ($clientes as $item)
              <div>
                <img src="{{ asset($item->img) }}" alt="Sazulab">
              </div>
            @endforeach

          </div>
        </div>

        <!-- content our work -->
        <div class="{{-- py-lg-5 py-4 --}} mt-5">
          <div class="text-center c_tit  to_view to_viewReset">
            <h2>{!! __('messages.home_studies') !!}</h2>
          </div>
          {{-- External file include --}}
          @include('front/layouts/includes/slider_casos')
        </div>

        <!-- content video -->
        <div class="container_page px-0 mt-5 {{-- py-4 --}} c_video_home  to_view to_viewReset">
          <div class="videoWrapper">
            {!! $manifiesto !!}
          </div>
        </div>

        <!-- content our team-->
        <div class="mt-5">
          <div class="text-center c_tit to_view to_viewReset">
            <h2>{!! __('messages.home_team') !!}</h2>
          </div>
          <div class="row no-gutters py-5">

            @foreach ($equipos as $item)
              <div class="col-xl-4 col-md-6 c_card_team to_view to_viewReset">
                <div class="row no-gutters">
                  <figure class="col-sm-6">
                    {{-- <img src="{{ asset('assets/front/images/img_profile1.png') }}" alt="Sazulab"> --}}
                    <img src="{{ asset($item->imagen) }}" alt="Sazulab">
                  </figure>
                  <div class="col-sm-6 c_info">

                    <div class="row h-100 align-items-center">
                      <div class="col-12">
                        <h4><strong>{{ $item->nombre }}</strong></h4>
                        <h5>{{ $item->descripcion }}</h5>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            @endforeach

          </div>
        </div>

        <!-- content social network-->
        <div class="mt-5">

          <div class="text-center c_tit to_view to_viewReset">
            <h2>{!! __('messages.home_follow') !!}</h2>
          </div>

          <div class="d-flex social to_view to_viewReset">

            @foreach ($redes as $item)
              <a href="{!! $item->enlace !!}" target="_blank" class="{!! $item->clase !!}"></a>
            @endforeach

          </div>

          <!-- embed feed instagram -->
          <div class="my-5 py-lg-4 to_view to_viewReset text-center">
            <!-- LightWidget WIDGET --><script src="https://cdn.lightwidget.com/widgets/lightwidget.js"></script><iframe src="https://cdn.lightwidget.com/widgets/9e9653d757b65f398c8d1a6a02d9b29d.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width:100%;border:0;overflow:hidden;"></iframe>
          </div>

        </div>

        <!-- c_form -->
        {{-- External file include --}}
        @include('front/layouts/includes/form')

      </div>
    </div>
  </section>

@endsection
