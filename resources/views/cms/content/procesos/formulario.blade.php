@php
  $isNavbar = true;
  $isMenu = true;
@endphp

@extends('cms/layouts/contentNavbarLayout')

@section('title', 'Procesos')

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

  <h4 class="fw-bold py-3 mb-4">Modulo de administración de procesos</h4>

  <!-- Basic Layout -->
  <div class="row">
    <div class="col-xl">
      <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
          @if ((int) $edit->id > 0)
            <h5 class="mb-0">Editando un Procesos</h5> <small class="text-muted float-end">Formulario de edición</small>
          @else
            <h5 class="mb-0">Creando un nuevo Procesos</h5> <small class="text-muted float-end">Formulario de
              creación</small>
          @endif
        </div>
        <div class="card-body">
          <form id="formModel" class="mb-3 row" action="{{ url('/cms/procesos/' . $caso) }}" method="POST"
            enctype="multipart/form-data">

            @csrf

            <input type="hidden" value="{{ $edit->id }}" name="id">

            <input type="hidden" value="{{ $id_cards }}" name="id_cards">
            <input type="hidden" value="{{ $id_casos }}" name="id_casos">

            <div class="mb-3 col-12 col-lg-6">
              <label class="form-label">Titulo</label>
              <input name="titulo" type="text" class="form-control required"
                data-required="Debe llenar el campo titulo" value="{{ $edit->titulo }}" placeholder="titulo" />
            </div>

            <div class="mb-3 col-12 col-lg-6">
              <label class="form-label">Orden</label>
              <input name="orden" type="text" class="form-control required"
                data-required="Debe llenar el campo orden" value="{{ $edit->orden }}" placeholder="orden" />
            </div>

            <div class="mb-3 col-12 col-lg-3">
              <label class="form-label">Img</label>

              <input name="img" type="file" class="form-control {{ $edit->id ?? 'required' }}"
                data-required="Debe seleccionar una imagen para el slider">

              @if ($edit->img)
                <img src="{{ asset($edit->img) }}" class="mw-100" />
              @endif
            </div>

            <div class="mb-3 col-12 col-lg-9">
              <label class="form-label">Texto</label>
              <textarea name="texto" class="form-control tinymce" placeholder="texto" data-required="Debe llenar el campo texto">{{ $edit->texto }}</textarea>
            </div>

            <div class="mb-3 col-12">
              @if ((int) $edit->id > 0)
                <a href="./../" class="btn btn-danger">Cancelar</a>
              @endif
              <button type="submit" class="btn btn-primary">Guardar</button>
            </div>

          </form>
        </div>
      </div>
    </div>

  </div>

  <hr class="my-5">

  @include('cms/content/procesos/listado')

@endsection
