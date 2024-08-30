<div class="c_form ">
  <div class="text-center c_tit to_view to_viewReset">
    {{-- <h2>PONTE EN <strong>CONTACTO</strong></h2> --}}
    {{-- <h2><strong>Contáctanos</strong></h2> --}}
    {{-- {!! $titulo_formulario !!} --}}
    <h2><strong>{{ __('messages.footer_contact') }}</strong></h2>
  </div>
  <form action="{{ url('/gracias') }}" method="POST">

    @csrf

    <div class="w-1020 pt-5 mt-lg-5 px-4">
      <div class="row">
        <div class="col-lg-6 pr-lg-5 to_viewright to_viewReset">
          <h1>LET´S MAKE IT <strong>HAPPEN!</strong></h1>
          <h5>{{ __('messages.form_des') }}</h5>
          <div class="mt-4 pb-5">
            <textarea name="mensaje" required placeholder="{{ __('messages.form_place') }}"></textarea>
          </div>
        </div>
        <div class="col-lg-6 pl-lg-4 to_viewleft to_viewReset">
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
          <div class="mt-5">
            <input type="submit" value="{{ __('messages.form_submit') }}" class="btn_submit" />
            {{-- <a href="" class="btn_submit">ENVIAR</a> --}}
          </div>

        </div>
      </div>
    </div>
  </form>
</div>
