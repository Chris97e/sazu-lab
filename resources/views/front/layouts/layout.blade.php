@php
  /* Display block elements by default*/
  $showHeader = $showHeader ?? true;
  $showFooter = $showFooter ?? true;
@endphp

<!doctype html>

<head>

  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-XSR07K434N"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'G-XSR07K434N');
  </script>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>@yield('title') | Sazú Lab | {!! __('messages.meta_head') !!}</title>
  {{-- <meta name="description" content="@yield('description')"> --}}
  <meta name="description"
    content="En Sazú transformamos tu empresa con estrategias de impacto y producción de comunicaciones. Somos expertos en crear relaciones reales entre marcas y audiencias. ¡Descubre cómo potenciar tu marca con nosotros!">
  <link rel="canonical" href="https://www.sazulab.com/{{ request()->path() }}" />
  <link rel="shortlink" href="https://www.sazulab.com/{{ request()->path() }}" />
  {{-- <meta name="google-site-verification" content=""> --}}
  {{-- <meta name="Copyright" content=""> --}}
  <meta name="DC.title" content="@yield('title') | Sazú Lab | Consultoría y Producción Creativa para Marcas">
  {{-- <meta name="DC.creator" content=""> --}}
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
  <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/front/images/apple-touch-icon.png') }}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/front/images/favicon-32x32.png') }}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/front/images/favicon-16x16.png') }}">
  <link rel="manifest" href="{{ asset('assets/front/images/site.webmanifest') }}">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('assets/front/styles/main.css?v=6') }}">

  <style>
    .slick-list {
      overflow: inherit
    }

    .c_slider_our {
      overflow: hidden;
    }
    }
  </style>
</head>

<body>

  <div id="loader"></div>

  <main>
    {{-- External file include --}}
    @include('front/layouts/includes/header')

    <div class="page transition">

      {{-- External content include --}}
      @yield('layoutContent')

      {{-- External file include --}}
      @include('front/layouts/includes/footer')

    </div>

  </main>

  {{-- External file include --}}
  @include('front/layouts/includes/scripts')

</body>

</html>
