<footer>
  <div class="padding_sections ">
    <div class="bg-gray-light pt-lg-5 px-4">
      <div class="row pt-5 justify-content-center text-center align-items-center">
        <div class="px-5 my-lg-0 my-lg-4">
          <img src="{{ asset('assets/front/images/logo_footer.svg') }}" alt="Sazulab">
        </div>
        <div class="col-lg col-12 order-lg-first my-lg-0 my-4">
          <div class="d-flex icons_footer justify-content-lg-end justify-content-center">
            <a href="https://maps.app.goo.gl/5wQVk2Zrwx5bwgeL6" target="_blank" class="ico1">
              <img src="{{ asset('assets/front/images/ico1.svg') }}" alt="Mapa">
            </a>
            <a href="tel:3006568714" class="ico2 px-1">
              <img src="{{ asset('assets/front/images/ico2.svg') }}" alt="Teléfono">
            </a>
            <a href="mailto:mariana@sazulab.com" class="ico3">
              <img src="{{ asset('assets/front/images/ico3.svg') }}" alt="Mail">
            </a>
          </div>
        </div>

        <div class="col-lg col-12 ">
          <div class="d-flex social justify-content-lg-start">

            @foreach ($redes as $item)
              @if ($item)
                <a href="{!! $item->enlace !!}" target="_blank" class="{!! $item->clase !!}"></a>
              @endif
            @endforeach

          </div>
        </div>
      </div>
      <div class="text-center mt-lg-5 pt-5">
        <a href="{{ url('/contacto') }}" class="btn_outline">{{ __('messages.footer_title') }}</a>
      </div>
      <div class="row justify-content-center info_footer py-5">
        <div class="border_right pr-md-5">
          <h5>{{ __('messages.footer_services') }}</h5>
          <ul>
            <li><a href="{{ url('/estrategia') }}">{{ __('messages.home_strategy') }}</a></li>
            <li><a href="{{ url('/estudio-creativo') }}">{{ __('messages.home_creative') }}</a></li>
            <li><a href="{{ url('/branding') }}">{{ __('messages.home_branding') }}</a></li>
          </ul>
        </div>
        <div class="pl-md-5">
          <h5>{{ __('messages.footer_contact') }}</h5>
          <p>{{ __('messages.footer_phone') }} <br>{{ __('messages.footer_mail') }} <a href="mailto:Comercial@sazulab.com">mariana@sazulab.com</a><br>{{ __('messages.footer_address') }}</p>
        </div>
      </div>
    </div>
  </div>
</footer>
