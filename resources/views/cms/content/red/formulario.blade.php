@php
  $isNavbar = true;
  $isMenu = true;
@endphp

@extends('cms/layouts/contentNavbarLayout')

@section('title', 'Redes Sociales')


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
  
  <h4 class="fw-bold py-3 mb-4">Modulo Redes Sociales</h4>
  <!-- Basic Layout -->
  <div class="row">
    <div class="col-xl">
      <div class="col-xl">
        <div class="card">
          <div class="card-header d-flex justify-content-between align-items-center">
            @if ((int) $edit->id > 0)
              <h5 class="mb-0">Editando una red social</h5> <small class="text-muted float-end">Formulario de edición</small>
            @else
              <h5 class="mb-0">Creando una nueva red social</h5> <small class="text-muted float-end">Formulario de
                creación</small>
            @endif
          </div>
          <div class="card-body">
            <form id="formModel" class="mb-3 row" action="{{ url('/cms/red') }}" method="POST">

              @csrf

              <input type="hidden" name="id" value="{{ $edit->id }}">

              <div class="mb-3 col-12 col-lg-6">
                <label class="form-label">Titulo</label>
                <input type="text" class="form-control required" name="titulo" value="{{ $edit->titulo }}" placeholder="Titulo"/>
              </div>

              <div class="mb-3 col-12 col-lg-6">
                <label class="form-label">Enlace de acceso</label>
                <input type="text" class="form-control required" name="enlace" value="{{ $edit->enlace }}" placeholder="Enlace de acceso"/>
              </div>

              <div class="mb-3 col-12 col-lg-6">
                <label class="form-label">Clase</label>
                <input type="text" class="form-control required" name="clase" value="{{ $edit->clase }}" placeholder="Clase de icono"/>
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

  @include('cms/content/red/listado')

@endsection