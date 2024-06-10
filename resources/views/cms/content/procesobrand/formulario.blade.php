@php
  $isNavbar = true;
  $isMenu = true;
@endphp

@extends('cms/layouts/contentNavbarLayout')

@section('title', 'Proceso Branding')


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
  
  <h4 class="fw-bold py-3 mb-4">Modulo Seccion Proceso dentro de Branding</h4>
  <!-- Basic Layout -->
  <div class="row">
    <div class="col-xl">
      <div class="col-xl">
        <div class="card">
          <div class="card-header d-flex justify-content-between align-items-center">
            @if ((int) $edit->id > 0)
              <h5 class="mb-0">Editando un proceso</h5> <small class="text-muted float-end">Formulario de edición</small>
            @else
              <h5 class="mb-0">Creando un nuevo proceso</h5> <small class="text-muted float-end">Formulario de
                creación</small>
            @endif
          </div>
          <div class="card-body">
            <form id="formModel" class="mb-3 row" action="{{ url('/cms/procesobrand') }}" method="POST" enctype="multipart/form-data">

              @csrf

              <input type="hidden" name="idcards" value="{{ $edit->id }}">

              <div class="mb-3 col-12 col-lg-6">
                <label class="form-label">Titulo</label>
                <input type="text" class="form-control required" name="titulo" value="{{ $edit->titulo }}" placeholder="Titulo"/>
              </div>

              <div class="mb-3 col-12 col-lg-6">
                <label class="form-label">Texto Difuminado</label>
                <input type="text" class="form-control required" name="descripcion" value="{{ $edit->texto_difuminado }}" placeholder="Texto Difuminado"/>
              </div>

              <div class="mb-3 col-12 col-lg-12">
                <label class="form-label">Descripcion</label>
                <textarea class="form-control required" id="descripcion" data-required="Debe llenar el campo descripción" name="descripcion" placeholder="Descripción">{{ $edit->descripcion }}</textarea>
              </div>

              <div class="mb-3 col-12 col-lg-6">
                <label class="form-label"># orden</label>
                <input type="text" class="form-control required" name="orden" value="{{ $edit->orden }}" placeholder="# orden"/>
              </div>

              <div class="mb-3 col-12 col-lg-6">
                <label class="form-label">Imagen Rotativa Derecha</label>
                <input name="url_img_derecha" type="file" class="form-control {{ $edit->id ?? 'required' }}"
                       data-required="Debe seleccionar una imagen">

                @if ($edit->url_img_derecha)
                  <img src="{{ asset($edit->url_img_derecha) }}" class="mw-100" />
                @endif
              </div>

              <div class="mb-3 col-12 col-lg-6">
                <label class="form-label">Imagen Izquierda</label>
                <input name="url_img" type="file" class="form-control {{ $edit->id ?? 'required' }}"
                       data-required="Debe seleccionar una imagen">

                @if ($edit->url_img_izq)
                  <img src="{{ asset($edit->url_img_izq) }}" class="mw-100" />
                @endif
              </div>

              <div class="mb-3 col-12 col-lg-6">
                <label class="form-label">Estado</label>
                <select class="form-control required" name="estado">
                  <option selected disabled>Seleccionar estado</option>
                  <option value="1">Habilitado</option>
                  <option value="0">Deshabilitado</option>
                </select>
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

  @include('cms/content/procesobrand/listado')

@endsection