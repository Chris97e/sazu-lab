<!DOCTYPE html>

<html class="light-style layout-menu-fixed" data-theme="theme-default" data-assets-path="{{ asset('/assets') . '/' }}"
  data-base-url="{{ url('/') }}" data-framework="laravel" data-template="vertical-menu-laravel-template-free">

<head>
  <meta charset="utf-8" />
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>@yield('title') | SAZULAB</title>
  <meta name="description"
    content="{{ config('variables.templateDescription') ? config('variables.templateDescription') : '' }}" />
  <meta name="keywords" content="{{ config('variables.templateKeyword') ? config('variables.templateKeyword') : '' }}">
  <!-- laravel CRUD token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- Canonical SEO -->
  <link rel="canonical" href="{{ config('variables.productPage') ? config('variables.productPage') : '' }}">
  <!-- Favicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/front/images/apple-touch-icon.png') }}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/front/images/favicon-32x32.png') }}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/front/images/favicon-16x16.png') }}">
  {{-- <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/favicon/favicon.ico') }}" /> --}}

  <!-- Include Styles -->
  @include('cms/layouts/sections/styles')

  <!-- Include Scripts for customizer, helper, analytics, config -->
  @include('cms/layouts/sections/scriptsIncludes')
</head>

<body>

  <!-- Layout Content -->
  @yield('layoutContent')
  <!--/ Layout Content -->

  <!-- Toast with Placements -->
  <div class="bs-toast toast toast-ok toast-placement-ex m-2 top-0 end-0 @yield('toastBg', 'bg-success')" role="alert"
    aria-live="assertive" aria-atomic="true" data-delay="10000">
    <div class="toast-header">
      <i class='bx bx-bell me-2'></i>
      <div class="me-auto fw-semibold">@yield('toastTitle', 'Éxito')</div>
      <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body">
      @yield('toastMsg', 'La acción solicitada se ha realizado exitosamente')
    </div>
  </div>
  <div class="bs-toast toast toast-danger bg-danger toast-placement-ex m-2 top-0 end-0" role="alert"
    aria-live="assertive" aria-atomic="true" data-delay="10000">
    <div class="toast-header">
      <i class='bx bx-bell me-2'></i>
      <div class="me-auto fw-semibold">Error</div>
      <small>Revisa tu formulario</small>
      <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body error-msg">
      Error por defecto.
    </div>
  </div>
  <!-- Toast with Placements -->

  <!-- Include Scripts -->
  @include('cms/layouts/sections/scripts')

</body>

</html>
