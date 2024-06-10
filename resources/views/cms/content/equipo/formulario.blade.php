@php
  $isNavbar = true;
  $isMenu = true;
@endphp

@extends('cms/layouts/contentNavbarLayout')

@section('title', 'Equipo')


@if (trim($alert) != '')
  @section('toastMsg', $alert)

  @section('page-script')
    <script>
      window.addEventListener('load', function () {
        $('.toast-ok').toast('show');
      });
    </script>
  @endsection
@endif

@section('content')
  
  <h4 class="fw-bold py-3 mb-4">Modulo degestion del equipo</h4>
  <!-- Basic Layout -->
  <div class="row">
    <div class="col-xl">
      <div class="col-xl">
        <div class="card">
          <div class="card-header d-flex justify-content-between align-items-center">
            @if ((int) $edit->id > 0)
              <h5 class="mb-0">Editando un miembro del Equipo</h5> <small class="text-muted float-end">Formulario de edición</small>
            @else
              <h5 class="mb-0">Creando un nuevo miembro del equipo</h5> <small class="text-muted float-end">Formulario de
                creación</small>
            @endif
          </div>
          <div class="card-body">
            <form id="formModel" class="mb-3 row" action="{{ url('/cms/equipo') }}" method="POST" enctype="multipart/form-data">

              @csrf

              <input type="hidden" name="id" value="{{ $edit->id }}">

              <div class="mb-3 col-12 col-lg-6">
                <label class="form-label">Nombre del integrante</label>
                <input type="text" class="form-control required"  data-required="Debe diligenciar el nombre del integrante" name="nombre" value="{{ $edit->nombre }}" placeholder="Nombre del integrante"/>
              </div>

              <div class="mb-3 col-12 col-lg-6">
                <label class="form-label">Orden</label>
                <input type="number" class="form-control required" data-required="Debe diligenciar el campo orden" name="orden" value="{{ $edit->orden }}" placeholder="Orden"/>
              </div>

              <div class="mb-3 col-12 col-lg-12">
                <label class="form-label">Descripcion</label>
                <textarea class="form-control required {{-- tinymce --}}" data-required="Debe diligenciar el campo descripción" name="descripcion" placeholder="Descripción">{{ $edit->descripcion }}</textarea>
              </div>

              <div class="mb-3 col-12">
                <label class="form-label">Imagen</label>
                <input name="imagen" type="file" class="form-control {{ $edit->id ?? 'required' }}"
                       data-required="Debe seleccionar una imagen">

                @if ($edit->imagen)
                  <img src="{{ asset($edit->imagen) }}" class="mw-100" />
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

  @include('cms/content/equipo/listado')

@endsection