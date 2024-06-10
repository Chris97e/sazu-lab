@php
  $isNavbar = true;
  $isMenu = true;
@endphp

@extends('cms/layouts/contentNavbarLayout')

@section('title', 'Imagenes')


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

  <h4 class="fw-bold py-3 mb-4">Modulo Imagenes</h4>
  <!-- Basic Layout -->
  <div class="row">
    <div class="col-xl">
      <div class="col-xl">
        <div class="card">
          <div class="card-header d-flex justify-content-between align-items-center">
            @if ((int) $edit->id > 0)
              <h5 class="mb-0">Editando una Imagen</h5> <small class="text-muted float-end">Formulario de edición</small>
            @else
              <h5 class="mb-0">Creando una nueva Imagen</h5> <small class="text-muted float-end">Formulario de
                creación</small>
            @endif
          </div>
          <div class="card-body">
            <form id="formModel" class="mb-3 row" enctype="multipart/form-data"
              action="{{ url('/cms/imagen/' . $ubicacion) }}" method="POST">

              @csrf

              <input type="hidden" name="id" value="{{ $edit->id }}">
              <input type="hidden" name="ubicacion" value="{{ $ubicacion }}" />

              <div class="mb-3 col-12 col-lg-6">
                <label class="form-label">Identificador del texto a cambiar</label>
                <input type="text" class="form-control required" name="identificador"
                  value="{{ $edit->identificador }}" placeholder="Identificador del texto a cambiar" />
              </div>

              <div class="mb-3 col-12 col-lg-6">
                <label class="form-label">Imagen</label>
                <input name="img" type="file" class="form-control {{ $edit->id ?? 'required' }}"
                  data-required="Debe seleccionar una imagen">

                @if ($edit->img)
                  <img src="{{ asset($edit->img) }}" class="mw-100" />
                @endif
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

    @include('cms/content/imagen/listado')

  @endsection
