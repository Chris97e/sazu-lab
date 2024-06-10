<footer>
  <div class="padding_sections ">
    <div class="bg-gray-light pt-lg-5 px-4">
      <div class="row pt-5 justify-content-center text-center align-items-center">
        <div class="px-5 my-lg-0 my-lg-4">
          <img src="{{ asset('assets/front/images/logo_footer.svg') }}" alt="Sazulab">
        </div>
        <div class="col-lg col-12 order-lg-first my-lg-0 my-4">
          <div class="d-flex icons_footer justify-content-lg-end justify-content-center">
            <a href="{{ url('/contacto') }}" class="ico1">
              <img src="{{ asset('assets/front/images/ico1.svg') }}" alt="Sazulab">
            </a>
            <a href="{{ url('/contacto') }}" class="ico2 px-1">
              <img src="{{ asset('assets/front/images/ico2.svg') }}" alt="Sazulab">
            </a>
            <a href="{{ url('/contacto') }}" class="ico3">
              <img src="{{ asset('assets/front/images/ico3.svg') }}" alt="Sazulab">
            </a>
          </div>
        </div>

        <div class="col-lg col-12 ">
          <div class="d-flex social justify-content-lg-start">

            @foreach ($redes as $item)
              <a href="{!! $item->enlace !!}" target="_blank" class="{!! $item->clase !!}"></a>
            @endforeach

            {{-- <a href="https://www.instagram.com/sazu_lab/" target="_blank" class="icon-instagram"></a>
            <a href="#" class="icon-tiktok"></a>
            <a href="https://www.instagram.com/sazu_lab/" target="_blank" class="icon-linkedin"></a> --}}
          </div>
        </div>
      </div>
      <div class="text-center mt-lg-5 pt-5">
        <a href="{{ url('/contacto') }}" class="btn_outline">TRABAJEMOS JUNTOS</a>
      </div>
      <div class="row justify-content-center info_footer py-5">
        <div class="border_right pr-md-5">
          <h5>SERVICIOS</h5>
          <ul>
            <li><a href="{{ url('/estrategia') }}">Estrategia</a></li>
            <li><a href="{{ url('/contenido') }}">Contenidos</a></li>
            <li><a href="{{ url('/branding') }}">Identidad Visual</a></li>
          </ul>
        </div>
        <div class="pl-md-5">
          <h5>CONTÁCTANOS</h5>
          <p>Tel: 3006568714 <br>Mail: <a href="mailto:Comercial@sazulab.com">mariana@sazulab.com</a><br>Dir: Cra 10 #
            96 - 79</p>
        </div>
      </div>
    </div>
  </div>
</footer>
