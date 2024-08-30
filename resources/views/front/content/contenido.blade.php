@php
/* Display block elements by default*/
$showHeader = true;
$showFooter = true;
@endphp

@extends('front/layouts/layout')

@section('title', __('messages.meta_creative'))

@section('layoutContent')

<section class="p_interno">
  <div class="position-relative">
    <div class="padding_sections">
      <div class="bg-gray-light ">
        <div class="fix-contenido pb-1">
          <!-- hero -->
          <div class="container_page px-0">
            <div class="pattern_square px-xl-5 px-lg-4 px-4 pb-1">
              <div class="row position-relative z-10 px-3 pt-lg-5 pt-2">
                <div class="col-xl-7 px-2 pt-lg-5 pt-4 info_estrategia_top">
                  <h2><em>{!! __('messages.study_head_1') !!}</em></h2>
                  <h1>{!! __('messages.study_head_2') !!}</h1>
                  <p><span style="font-size: 18pt;"><em>{!! __('messages.study_head_3') !!}</em></span></p>
                  {{-- {!!$texto_superior!!} --}}
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
            <h1>{!! __('messages.study_marque') !!}</h1>
            {{-- {!!$marquee!!} --}}
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- info section -->
  <div class="">
    <div class="padding_sections">
      <div class="bg-gray-light position-relative container_page px-0 mx-auto pb-lg-5">
        <div class="c_videos_content">
          <ul class="c_videos video-testimony-grid">
            <li class="v1 video video-testimony-item">
              <div class="video-testimony-item__video to_viewright to_viewReset">
                <div class="video-testimony-item__video-holder">
                  {!!$video!!}
                </div>
              </div>
              <div class="video-testimony-item__text to_viewleft to_viewReset">
                {!! __('messages.study_video_des_1') !!}
                {{-- {!!$vid1!!} --}}
              </div>
            </li>
            <li class="v2 video video-testimony-item video-testimony-item--reversed">
              <div class="video-testimony-item__video to_viewleft to_viewReset">
                <div class="video-testimony-item__video-holder">
                  {!!$video2!!}
                </div>
              </div>
              <div class="video-testimony-item__text to_viewright to_viewReset">
                {!! __('messages.study_video_des_2') !!}
                {{-- {!!$vid2!!} --}}
              </div>
            </li>
            <li class="v3 video video-testimony-item">
              <div class="video-testimony-item__video to_viewright to_viewReset">
                <div class="video-testimony-item__video-holder">
                  {!!$video3!!}
                </div>
              </div>
              <div class="video-testimony-item__text to_viewleft to_viewReset">
                {!! __('messages.study_video_des_3') !!}
                {{-- {!!$vid3!!} --}}
              </div>
            </li>
            <li class="v4 video video-testimony-item video-testimony-item--reversed">
              <div class="video-testimony-item__video to_viewleft to_viewReset">
                <div class="video-testimony-item__video-holder">
                  {!!$video4!!}
                </div>
              </div>
              <div class="video-testimony-item__text to_viewright to_viewReset">
                {!! __('messages.study_video_des_4') !!}
                {{-- {!!$vid4!!} --}}
              </div>
            </li>
            <li class="v5 video video-testimony-item">
              <div class="video-testimony-item__video to_viewright to_viewReset">
                <div class="video-testimony-item__video-holder">
                  {!!$video5!!}
                </div>
              </div>
              <div class="video-testimony-item__text to_viewleft to_viewReset">
                {!! __('messages.study_video_des_5') !!}
                {{-- {!!$vid5!!} --}}
              </div>
            </li>
            <li class="v6 video video-testimony-item video-testimony-item--reversed">
              <div class="video-testimony-item__video to_viewright to_viewReset">
                <div class="video-testimony-item__video-holder">
                  {!!$video6!!}
                </div>
              </div>
              <div class="video-testimony-item__text to_viewleft to_viewReset">
                {!! __('messages.study_video_des_6') !!}
                {{-- {!!$vid6!!} --}}
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="padding_sections ">
    <div class="bg-gray-light mt_neg">

      <!-- content video -->

      <div class="py-5 ">
        <div class="text-center c_tit to_view to_viewReset">
          <h2>{!! __('messages.study_bh_title') !!}</h2>
          {{-- {!!$titulo2!!} --}}
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
          {!!$audiovisual!!}
        </div>
      </div>

      <!-- hero -->
      <div class="container_page px-4  mb-lg-5 services_list">
        <div class="row pt-5 justify-content-center">
          <div class="col-lg- to_view to_viewReset">
            <div class="c_services_list">
              <img src="{{ asset('assets/front/images/docs.jpg') }}" alt="Sazulab">
              <h5>{!! __('messages.study_content_tit_1') !!}</h5>
              <p>{!! __('messages.study_content_des_1') !!}</p>
            </div>
          </div>
          <div class="col-lg- to_view to_viewReset">
            <div class="c_services_list">
              <img src="{{ asset('assets/front/images/video.jpg') }}" alt="Sazulab">
              <h5>{!! __('messages.study_content_tit_2') !!}</h5>
              <p>{!! __('messages.study_content_des_2') !!}</p>
            </div>
          </div>
          <div class="col-lg- to_view to_viewReset">
            <div class="c_services_list">
              <img src="{{ asset('assets/front/images/cubrimien.jpg') }}" alt="Sazulab">
              <h5>{!! __('messages.study_content_tit_3') !!}</h5>
              <p>{!! __('messages.study_content_des_3') !!}</p>
            </div>
          </div>
          <div class="col-lg- to_view to_viewReset">
            <div class="c_services_list">
              <img src="{{ asset('assets/front/images/producto.jpg') }}" alt="Sazulab">
              <h5>{!! __('messages.study_content_tit_4') !!}</h5>
              <p>{!! __('messages.study_content_des_4') !!}</p>
            </div>
          </div>
          <div class="col-lg- to_view to_viewReset">
            <div class="c_services_list">
              <img src="{{ asset('assets/front/images/institucion.jpg') }}" alt="Sazulab">
              <h5>{!! __('messages.study_content_tit_5') !!}</h5>
              <p>{!! __('messages.study_content_des_5') !!}</p>
            </div>
          </div>
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

@endsection
