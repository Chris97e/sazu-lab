<div class="c_slider_our to_view to_viewReset">

  <div class="slider_our">

    @if (isset($cards))
      @foreach ($cards as $item)
        <div class="pt-5">

          <a href="{{ url('/' . $item->url) }}" class="c_card">
            <img src="{{ asset($item->img_listado) }}" alt="Sazulab">
            <h5>{!! $item->titulo !!}</h5>
            <p>{!! $item->descripcion !!}</p>
          </a>

        </div>
      @endforeach
    @endif

    {{-- <div class="pt-5">
      <a href="{{ url('/casetekniplex') }}" class="c_card">
        <img src="{{ asset('assets/front/images/slider2.png') }}" alt="Sazulab">
        <h5>CASO TEKNIPLEX
        </h5>
        <p>Reducir la alta accidentalidad de uno de los líderes en fabricación de empaques por medio de una
          estrategia de comunicación.
        </p>
      </a>
    </div>

    <div class="pt-5">
      <a href="{{ url('/caseccd') }}" class="c_card">
        <img src="{{ asset('assets/front/images/slider3.png') }}" alt="Sazulab">
        <h5>CASO CCD
        </h5>
        <p>Proteger los derechos de la población migrante venezolana y promover su integración e inclusión
          social en el territorio colombiano.
        </p>
      </a>
    </div> --}}

    {{-- <div class="pt-5">
      <a href="{{ url('/case-scotiabank') }}" class="c_card">
        <img src="{{ asset('assets/front/images/slider1.png') }}" alt="Sazulab">
        <h5>CASO SCOTIATECH
        </h5>
        <p>Desarrollando y gestionando una marca empleadora que conquiste a los perfiles de tecnología en LATAM.
        </p>
      </a>
    </div> --}}

    {{-- <div class="pt-5">
      <a href="{{ url('/estrategia') }}" class="c_card">
        <img src="{{ asset('assets/front/images/slider4.jpg') }}" alt="Sazulab">
        <h5>BOSQUENIBLE
        </h5>
        <p>Definir una propuesta de valor y un modelo de negocio viable en el ecosistema de consultoría en
          sostenibilidad.
        </p>
      </a>
    </div>

    <div class="pt-5">
      <a href="{{ url('/branding') }}" class="c_card">
        <img src="{{ asset('assets/front/images/slider5.jpg') }}" alt="Sazulab">
        <h5>ORIGO PRODUCTIONS
        </h5>
        <p>Estrategia de marca, proceso de naming y una identidad visual para una empresa de entretenimiento
          cultural
        </p>
      </a>
    </div>

    <div class="pt-5">
      <a href="{{ url('/contenido') }}" class="c_card">
        <img src="{{ asset('assets/front/images/slider6.jpg') }}" alt="Sazulab">
        <h5>PERNOD RICARD
        </h5>
        <p>Diseñamos experiencias a partir de productos para que acompañen al público en sus mejores momentos.
        </p>
      </a>
    </div> --}}

  </div>

</div>
