@php
  /* Display block elements by default*/
  $showHeader = true;
  $showFooter = true;
@endphp

@extends('front/layouts/layout')

@section('title', 'Contáctanos')

@section('layoutContent')

  <section class="p_interno">
    <div class="position-relative">
      <div class="padding_sections">
        <div class="bg-gray-light pb-5 contacto">
          <div class="c_form pb-5">
            <div class="w-1020 pt-5 px-4">
              <div class="row px-xl-4 px-2">
                <div class="col-lg-12 pr-lg-5 pl-lg-5">

                  <h1><strong>¡Gracias por tu mensaje!</strong> Pronto nos comunicaremos contigo</h1>

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
      </div>
    </div>
  </section>
@endsection
