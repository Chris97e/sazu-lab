<header id="header">
  <div class="padding_sections  position-relative">
    <div class="container_page px-0">
      <div class="d-flex justify-content-between align-items-center">
        <h1><a href="{{ url('/') }}"><img src="{{ asset('assets/front/images/logo.svg') }}" alt="Sazulab"></a></h1>
        <div>
          <div class="d-flex icons_header">
            <a href="https://maps.app.goo.gl/5wQVk2Zrwx5bwgeL6" target="_blank" class="ico1">
              <img src="{{ asset('assets/front/images/ico1.svg') }}" alt="Mapa">
            </a>
            <a href="tel:3006568714" class="ico2">
              <img src="{{ asset('assets/front/images/ico2.svg') }}" alt="Teléfono">
            </a>
            <a href="mailto:mariana@sazulab.com" class="ico3">
              <img src="{{ asset('assets/front/images/ico3.svg') }}" alt="Mail">
            </a>
            <a href="https://api.whatsapp.com/send/?phone=573006568714" target="_blank" class="ico3 hide-on-mobile">
              <img src="{{ asset('assets/front/images/ico4.png') }}" alt="whatsapp">
            </a>
          </div>
        </div>
      </div>
    </div>

    <a href="javascript:;" class="ico_menu" id="ico_menu">
      <div class="c_ico"></div>
    </a>
    <nav id="menu" class="drawer-menu">
      <ul>
        <li><a href="{{ url('/') }}">INICIO</a>  </li>
        <li><a href="{{ url('/estrategia') }}">ESTRATEGIA</a></li>
        <li><a href="{{ url('/estudio-creativo') }}">ESTUDIO CREATIVO</a></li>
        <li><a href="{{ url('/branding') }}">BRANDING</a></li>
        <li><a href="{{ url('/contacto') }}">CONTÁCTANOS</a></li>
      </ul>

    </nav>

  </div>

</header>
