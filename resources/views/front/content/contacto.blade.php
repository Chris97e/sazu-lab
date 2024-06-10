@php
  /* Display block elements by default*/
  $showHeader = true;
  $showFooter = true;
@endphp

@extends('front/layouts/layout')

@section('title', 'Contactanos')

@section('layoutContent')

  <section class="p_interno">
    <div class="position-relative">
      <div class="padding_sections">
        <div class="bg-gray-light pb-5 contacto">
          <div class="c_form pb-5">
            <div class="w-1020 pt-5 px-4">
              <div class="row px-xl-4 px-2">
                <div class="col-lg-6 pr-lg-5 pl-lg-5">
                  {{-- <h1>LET´S MAKE IT <strong>HAPPEN!</strong></h1>
                  <h5><strong>¡Manos a la obra!</strong> Completa la siguiente información para empezar:</h5> --}} 
                  {!!$texto_superior!!}
                   <ul>
                    <li>
                      <img src="{{ asset('assets/front/images/c1.svg') }}" alt="Sazulab">
                     {{-- <h6>LLÁMANOS</h6>
                      <p>Queremos oír tu voz! Ya sea para agendar una cita, cotizar o saber más información sobre nosotros
                      llámanos al +573006568714 y conversemos un rato.</p> --}}
                      {!!$texto_superior1!!}
                    </li> 
                    <li>
                      <img src="{{ asset('assets/front/images/c2.svg') }}" alt="Sazulab">
                      {{-- <h6>VISÍTANOS</h6>
                      <p>¡Nuestras puertas están abiertas! Conoce dónde generamos ideas, planteamos estrategias,
                        organizamos talleres y tomamos bastante café.</p> --}}
                        {!!$texto_superior2!!}
                    </li>
                    <li>
                      <img src="{{ asset('assets/front/images/c3.svg') }}" alt="Sazulab">
                      {{-- <h6>CHAT</h6>
                      <p>¿Prefieres escribirnos? Puedes hacerlo a nuestro whatsapp. +573006568714. Estamos esperando para
                        responderte.</p> --}}
                        {!!$texto_superior3!!}
                    </li>
                  </ul>
                </div>
                <div class="col-lg-6 pl-lg-4">
                  {{-- <h2 class="bw font-weight-bold">TRABAJÉMOS <br> JUNTOS.</h2> --}}
                  {!!$titulo!!}
                  <form action="{{ url('/gracias') }}" method="POST">

                    @csrf

                    <div>
                      <input type="text" placeholder="Nombre" required name="nombre">
                    </div>
                    <div>
                      <input type="text" placeholder="Empresa" required name="empresa">
                    </div>
                    <div>
                      <input type="email" placeholder="Email" required name="email">
                    </div>
                    <div>
                      <input type="number" placeholder="Teléfono" required name="telefono">
                    </div>
                    <div class="mt-4">
                      <textarea name="mensaje" required placeholder="Déjanos tu mensaje."></textarea>
                    </div>
                    <div class="mt-5">
                      <input type="submit" value="ENVIAR" class="btn_submit" />
                      {{-- <a href="" class="btn_submit">ENVIAR</a> --}}
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
