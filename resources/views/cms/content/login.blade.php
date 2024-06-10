@php
  $isNavbar = true;
  $isMenu = true;
  /* $container = 'container-fluid';
   $containerNav = 'container-fluid'; */
@endphp

@extends('cms/layouts/blankLayout')
{{-- @extends('cms/layouts/contentNavbarLayout') --}}

@section('title', 'Inicio de sesión')

{{-- Show a success message --}}
@if (trim($alert) != '')
  @section('page-script')
    <script>
      window.addEventListener("load", function() {
        showErrorValidation(null, "{{ $alert }}");
      });
    </script>
  @endsection
@endif

@if ($errors->any())
  @section('page-script')
    <script>
      window.addEventListener("load", function() {
        @foreach ($errors->all() as $error)
          showErrorValidation(null, "{{ $error }}");
        @endforeach
      });
    </script>
  @endsection
@endif

@section('page-style')
  <!-- Page -->
  <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/page-auth.css') }}">
  <style>
    body {
      {{-- background-image: url({{ asset('assets/front/images/fondo.jpg') }}); --}} background-image: url({{ asset('assets/front/images/fondo.png') }});
    }
  </style>
@endsection

@section('content')
  <div class="container-xxl">
    <div class="authentication-wrapper authentication-basic container-p-y">
      <div class="authentication-inner">
        <!-- Register -->
        <div class="card">
          <div class="card-body">
            <!-- Logo -->
            <div class="app-brand justify-content-center">
              <a href="{{ url('/') }}" class="app-brand-link gap-2">
                <span class="app-brand-logo">@include('cms._partials.macros', ['width' => 200])</span>
              </a>
            </div>
            <!-- /Logo -->
            <h4 class="mb-2">Bienvenido a {{ config('variables.templateName') }}!</h4>
            <p class="mb-4">Por favor inicia sesión con tus datos de cuenta</p>

            <form id="formAuthentication" class="mb-3" action="{{ route('cms.login') }}" method="POST">

              @csrf

              <div class="mb-3">
                <label for="email" class="form-label">Correo electrónico</label>
                <input type="text" class="form-control form-control-lg required" data-required="Debe llenar el campo de correo electronico" id="email" name="correo"
                  placeholder="Ingresa tu correo electrónico" autofocus>
              </div>
              <div class="mb-3 form-password-toggle">
                <div class="d-flex justify-content-between">
                  <label class="form-label" for="password">Contraseña</label>
                  {{-- <a href="{{ url('auth/forgot-password-basic') }}">
                    <small>Recordar contraseña</small>
                  </a> --}}
                </div>
                <div class="input-group input-group-merge">
                  <input type="password" id="password" class="form-control form-control-lg required" data-required="Debe escribir su contraseña" name="pass"
                    placeholder="Ingresa tu contraseña" aria-describedby="password" />
                  <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                </div>
              </div>
              {{-- <div class="mb-3">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="remember-me">
                  <label class="form-check-label" for="remember-me">
                    Recuerdame
                  </label>
                </div>
              </div> --}}
              <div class="mb-3">
                <button class="btn btn-primary d-grid w-100" type="submit">Ingresar</button>
              </div>
            </form>

            {{-- <p class="text-center">
              <span>¿Eres nuevo en la plataforma?</span>
              <a href="{{ url('auth/register-basic') }}">
                <span>Crear una cuenta</span>
              </a>
            </p> --}}

          </div>
        </div>
      </div>
      <!-- /Register -->
    </div>
  </div>
  </div>
@endsection
