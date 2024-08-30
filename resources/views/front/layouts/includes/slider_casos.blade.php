<div class="c_slider_our to_view to_viewReset">

  <div class="slider_our">

    @if (isset($cards))
      @foreach ($cards as $item)
        <div class="pt-5">

          <a href="{{ url('/' . $item->url) }}" class="c_card">
            <img src="{{ asset($item->img_listado) }}" alt="Sazulab">
            <h5>{!!  __($item->titulo) !!}</h5>
            <p>{!! __($item->descripcion) !!}</p>
          </a>

        </div>
      @endforeach
    @endif
  </div>

</div>
