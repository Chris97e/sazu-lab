@php
  $isNavbar = true;
  $isMenu = true;
@endphp

@extends('cms/layouts/contentNavbarLayout')

@section('title', 'Cards')


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
  
  <h4 class="fw-bold py-3 mb-4">Modulo Cards</h4>
  <!-- Basic Layout -->
  <div class="row">
    <div class="col-xl">
      <div class="col-xl">
        <div class="card">
          <div class="card-header d-flex justify-content-between align-items-center">
            @if ((int) $edit->id > 0)
              <h5 class="mb-0">Editando un card</h5> <small class="text-muted float-end">Formulario de edición</small>
            @else
              <h5 class="mb-0">Creando un nuevo card</h5> <small class="text-muted float-end">Formulario de
                creación</small>
            @endif
          </div>
          <div class="card-body">
            <form id="formModel" class="mb-3 row" action="{{ url('/cms/card') }}" method="POST">

              @csrf

              <input type="hidden" name="id" value="{{ $edit->id }}">

              <div class="mb-3 col-12 col-lg-6">
                <label class="form-label">Titulo</label>
                <input type="text" class="form-control required" name="titulo" value="{{ $edit->titulo }}" placeholder="Titulo"/>
              </div>

              <div class="mb-3 col-12 col-lg-6">
                <label class="form-label">Descripcion</label>
                <input type="text" class="form-control required" name="descripcion" value="{{ $edit->descripcion }}" placeholder="Descripcion"/>
              </div>

              <div class="mb-3 col-12 col-lg-6">
                <label class="form-label"># orden</label>
                <input type="text" class="form-control required" name="orden" value="{{ $edit->orden }}" placeholder="# orden"/>
              </div>

              <div class="mb-3 col-12 col-lg-6">
                <label class="form-label">Imagen</label>
                <input name="url_img" type="file" class="form-control {{ $edit->id ?? 'required' }}"
                       data-required="Debe seleccionar una imagen">

                @if ($edit->url_img)
                  <img src="{{ asset($edit->url_img) }}" class="mw-100" />
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

              <div class="mb-3 col-12 col-lg-6">
                <label class="form-label">Ubicación</label>
                <select class="form-control required" name="ubicaciones">
                  <option selected disabled>Seleccionar ubicación</option>
                  <option value="Home">Home</option>
                  <option value="Estrategia">Estrategia</option>
                  <option value="Brandig">Branding</option>
                  <option value="Contenido">Contenido</option>
                  <option value="Contacto">Contacto</option>
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

  @include('cms/content/card/listado')

@endsection