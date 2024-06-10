@php
  $isNavbar = true;
  $isMenu = true;
@endphp

@extends('cms/layouts/contentNavbarLayout')

@section('title', 'Textos')


@if (trim($alert) != '')
  @section('toastMsg', $alert)

  @section('page-script')
    <script>
      window.addEventListener('load', function() {
        $('.toast-ok').toast('show');
      });
    </script>
  @endsection
@endif

@section('content')

  @if ((int) $edit->id > 0)

    <h4 class="fw-bold py-3 mb-4">Modulo edicion de textos de la sección: {{ $ubicacion }}</h4>
    <!-- Basic Layout -->
    <div class="row">
      <div class="col-xl">
        <div class="col-xl">
          <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
              @if ((int) $edit->id > 0)
                <h5 class="mb-0">Editando Texto</h5> <small class="text-muted float-end">Formulario de edición</small>
              @else
                <h5 class="mb-0">Creando un nuevo texto</h5> <small class="text-muted float-end">Formulario de
                  creación</small>
              @endif
            </div>
            <div class="card-body">

              <form id="formModel" class="mb-3 row" action="{{ url('/cms/textos_ubica/' . $ubicacion) }}" method="POST">

                @csrf

                <input type="hidden" name="id" value="{{ $edit->id }}">
                <input type="hidden" name="ubicacion" value="{{ $ubicacion }}" />

                <div class="mb-3 col-12 col-lg-6">
                  <label class="form-label">Ubicacion del texto</label>
                  <input type="text" class="form-control" disabled value="{{ $ubicacion }}" />
                </div>

                <div class="mb-3 col-12 col-lg-6">
                  <label class="form-label">Identificador del texto a cambiar</label>
                  <input type="text" class="form-control required" name="identificador"
                    value="{{ $edit->identificador }}" placeholder="Identificador del texto a cambiar" />
                </div>

                <div class="mb-3 col-12 col-lg-12">
                  <label class="form-label">Texto</label>
                  <textarea class="form-control tinymce" id="descripcion" data-required="Debe llenar el campo descripción"
                    name="descripcion" placeholder="Descripción">
                  {{ $edit->descripcion }}
                </textarea>
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
      
  @endif

  @include('cms/content/textos_ubica/listado')

@endsection
