@php
  $isNavbar = true;
  $isMenu = true;
@endphp

@extends('cms/layouts/contentNavbarLayout')

@section('title', 'Casos')

{{-- Show a success message --}}
@if (trim($alert) != '')
  @section('toastMsg', $alert)

  @section('page-script')
    <script>
      window.addEventListener("load", function() {
        $(".toast-ok").toast("show");
      });
    </script>
  @endsection
@endif

{{-- Show a error message --}}
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

@section('content')

  <h4 class="fw-bold py-3 mb-4">Modulo de administración de casos</h4>

  <!-- Basic Layout -->
  <div class="row">
    <div class="col-xl">
      <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
          @if ((int) $edit->id > 0)
            <h5 class="mb-0">Editando un Casos</h5> <small class="text-muted float-end">Formulario de edición</small>
          @else
            <h5 class="mb-0">Creando un nuevo Casos</h5> <small class="text-muted float-end">Formulario de
              creación</small>
          @endif
        </div>
        <div class="card-body">
          <form id="formModel" class="mb-3 row" action="{{ url('/cms/casos/' . $id_cards) }}" method="POST" enctype="multipart/form-data">

            @csrf

            <input type="hidden" value="{{ $edit->id }}" name="id">
            <input type="hidden" name="id_cards" value="{{ $id_cards }}">

            <div class="mb-3 col-12 col-lg-3">
              <label class="form-label">Imagen header</label>
              <input name="imagen_background" type="file" class="form-control {{ $edit->id ?? 'required' }}"
                data-required="Debe seleccionar una imagen">
              @if ($edit->imagen_background)
                <img src="{{ asset($edit->imagen_background) }}" style="max-width: 200px" />
              @endif
            </div>

            <div class="mb-3 col-12 col-lg-9">
              <label class="form-label">Texto header</label>
              <textarea name="header" class="form-control tinymce">{{ $edit->header }}</textarea>
            </div>

            {{-- <div class="mb-3 col-12 col-lg-6">
              <label class="form-label">Titulo</label>
              <input name="titulo" type="text" class="form-control required"
                data-required="Debe llenar el campo titulo" value="{{ $edit->titulo }}" placeholder="titulo" />
            </div>

            <div class="mb-3 col-12 col-lg-6">
              <label class="form-label">Texto</label>
              <textarea name="texto" class="form-control required" placeholder="texto" data-required="Debe llenar el campo texto">{{ $edit->texto }}</textarea>
            </div> --}}

            <div class="mb-3 col-12 col-lg-6">
              <label class="form-label">Col1</label>
              <textarea name="col1" class="form-control tinymce" placeholder="col1" data-required="Debe llenar el campo col1">{{ $edit->col1 }}</textarea>
            </div>

            <div class="mb-3 col-12 col-lg-6">
              <label class="form-label">Col2</label>
              <textarea name="col2" class="form-control tinymce" placeholder="col2" data-required="Debe llenar el campo col2">{{ $edit->col2 }}</textarea>
            </div>

            <div class="mb-3 col-12 col-lg-6">
              <label class="form-label">Col3</label>
              <textarea name="col3" class="form-control tinymce" placeholder="col3" data-required="Debe llenar el campo col3">{{ $edit->col3 }}</textarea>
            </div>

            <div class="mb-3 col-12 col-lg-6">
              <label class="form-label">Contexto</label>
              <textarea name="contexto" class="form-control tinymce" placeholder="contexto"
                data-required="Debe llenar el campo contexto">{{ $edit->contexto }}</textarea>
            </div>

            <div class="mb-3 col-12 col-lg-6">
              <label class="form-label">Img Left</label>
              <input name="img_left" type="file" class="form-control {{ $edit->id ?? 'required' }}"
                data-required="Debe seleccionar una imagen">
              @if ($edit->img_left)
                <img src="{{ asset($edit->img_left) }}" style="max-width: 200px" />
              @endif
            </div>

            <div class="mb-3 col-12 col-lg-6">
              <label class="form-label">Img Right</label>
              <input name="img_right" type="file" class="form-control {{ $edit->id ?? 'required' }}"
                data-required="Debe seleccionar una imagen">
              @if ($edit->img_right)
                <img src="{{ asset($edit->img_right) }}" style="max-width: 200px" />
              @endif
            </div>

            <div class="mb-3 col-12">
              <label class="form-label">Iframe</label>
              <textarea name="iframe" class="form-control tinymce" placeholder="iframe" data-required="Debe llenar el campo iframe">{{ $edit->iframe }}</textarea>
            </div>

            <div class="mb-3 col-12">
              @if ((int) $edit->id > 0)
                <a href="{{ url('/cms/cards') }}" class="btn btn-danger">Cancelar</a>
              @endif
              <button type="submit" class="btn btn-primary">Guardar</button>
            </div>

          </form>
        </div>
      </div>
    </div>

  </div>

  {{-- <hr class="my-5">

  @include('cms/content/casos/listado') --}}

@endsection
