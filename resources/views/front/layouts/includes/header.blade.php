<header id="header">
  <div class="padding_sections  position-relative">
    <div class="container_page px-0">
      <div class="d-flex justify-content-between align-items-center">
        <h1><a href="{{ url('/') }}"><img src="{{ asset('assets/front/images/logo.svg') }}" alt="Sazulab"></a></h1>
        <div>
          <div class="d-flex icons_header">
            <a href="{{ url('/contacto') }}" class="ico1">
              <img src="{{ asset('assets/front/images/ico1.svg') }}" alt="Sazulab">
            </a>
            <a href="{{ url('/contacto') }}" class="ico2">
              <img src="{{ asset('assets/front/images/ico2.svg') }}" alt="Sazulab">
            </a>
            <a href="{{ url('/contacto') }}" class="ico3">
              <img src="{{ asset('assets/front/images/ico3.svg') }}" alt="Sazulab">
            </a>
          </div>
        </div>
      </div>
    </div>

    <a href="javascript:;" class="ico_menu" id="ico_menu">
      <div class="c_ico"></div>
    </a>
    <nav id="menu">
      <ul>
        <li><a href="{{ url('/') }}">INICIO</a>  </li>
        <li><a href="{{ url('/estrategia') }}">ESTRATEGIA</a></li>
        <li><a href="{{ url('/contenido') }}">CONTENIDO</a></li>
        <li><a href="{{ url('/branding') }}">BRANDING</a></li>
        <li><a href="{{ url('/contacto') }}">CONTÁCTANOS</a></li>  
      </ul>
      
    </nav>
   
  </div>

</header>