@php
  /* Display block elements by default*/
  $showHeader = true;
  $showFooter = true;
@endphp

@extends('front/layouts/layout')

@section('title', __('messages.meta_contact'))

@section('layoutContent')

  <section class="p_interno">
    <div class="position-relative">
      <div class="padding_sections">
        <div class="bg-gray-light pb-5 contacto">
          <div class="c_form pb-5">
            <div class="w-1020 pt-5 px-4">
              <div class="row px-xl-4 px-2">
                <div class="col-lg-6 pr-lg-5 pl-lg-5">
                  <h1>LET´S MAKE IT <strong>HAPPEN!</strong></h1>
                  <h5>{{ __('messages.form_des') }}</h5>
                  {{-- {!!$texto_superior!!} --}}
                   <ul>
                    <li>
                      <img src="{{ asset('assets/front/images/c1.svg') }}" alt="Sazulab">
                      <h6>{{ __('messages.form_call') }}</h6>
                      <p>{{ __('messages.form_call_des') }}</p>
                    </li>
                    <li>
                      <img src="{{ asset('assets/front/images/c2.svg') }}" alt="Sazulab">
                      <h6>{{ __('messages.form_visit') }}</h6>
                      <p>{{ __('messages.form_visit_des') }}</p>
                        {{-- {!!$texto_superior2!!} --}}
                    </li>
                    <li>
                      <img src="{{ asset('assets/front/images/c3.svg') }}" alt="Sazulab">
                      <h6>{{ __('messages.form_chat') }}</h6>
                      <p>{{ __('messages.form_chat_des') }}<strong> <a href="https://wa.me/573006568714" target="_blank" rel="noopener">+57 3006568714&nbsp;</a></strong></p>
                      <h5 style="line-height: 1;"><a href="https://www.designrush.com/agency/profile/sazu-lab" target="_blank" rel="noopener" data-saferedirecturl="https://www.google.com/url?q=https://www.designrush.com/agency/profile/sazu-lab&amp;source=gmail&amp;ust=1703625928580000&amp;usg=AOvVaw28kPUUeQr8RL5-LZkCaqMY">designrush.com/<wbr>agency/profile/sazu-lab</a></h5>
                        {{-- {!!$texto_superior3!!} --}}
                    </li>
                  </ul>
                </div>
                <div class="col-lg-6 pl-lg-4">
                  <h2 class="bw font-weight-bold">{!! __('messages.form_work') !!}</h2>
                  {{-- {!!$titulo!!} --}}
                  <form action="{{ url('/gracias') }}" method="POST">

                    @csrf

                    <div>
                      <input type="text" placeholder="{{ __('messages.form_name') }}" required name="nombre">
                    </div>
                    <div>
                      <input type="text" placeholder="{{ __('messages.form_company') }}" required name="empresa">
                    </div>
                    <div>
                      <input type="email" placeholder="{{ __('messages.form_email') }}" required name="email">
                    </div>
                    <div>
                      <input type="number" placeholder="{{ __('messages.form_phone') }}" required name="telefono">
                    </div>
                    <div class="mt-4">
                      <textarea name="mensaje" required placeholder="{{ __('messages.form_place') }}"></textarea>
                    </div>
                    <div class="mt-5">
                      <input type="submit" value="{{ __('messages.form_submit') }}" class="btn_submit" />
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>

          <div class="w-1020 c_map mt-5 to_view to_viewReset">
            <span></span>
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15906.074219380154!2d-74.0441141!3d4.6795466!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9b149637273d%3A0x1c54375ded5351ad!2zU2F6w7ogTGFi!5e0!3m2!1ses!2sco!4v1680454239877!5m2!1ses!2sco"
              width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
        <!-- c_form -->

      </div>
    </div>


  </section>
@endsection
