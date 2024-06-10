@php
  $isNavbar = true;
  $isMenu = true;
@endphp

@extends('cms/layouts/contentNavbarLayout')

@section('title', 'Trabajos')

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

  <h4 class="fw-bold py-3 mb-4">Modulo de administración de trabajos</h4>

  <!-- Basic Layout -->
  <div class="row">
    <div class="col-xl">
      <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
          @if ((int) $edit->id > 0)
            <h5 class="mb-0">Editando un trabajo</h5> <small class="text-muted float-end">Formulario de edición</small>
          @else
            <h5 class="mb-0">Creando un nuevo trabajo</h5> <small class="text-muted float-end">Formulario de
              creación</small>
          @endif
        </div>
        <div class="card-body">
          <form id="formModel" class="mb-3 row" action="{{ url('/cms/cards') }}" method="POST"
            enctype="multipart/form-data">

            @csrf

            <input type="hidden" value="{{ $edit->id }}" name="id">

            <div class="mb-3 col-12 col-lg-6">
              <label class="form-label">Titulo</label>
              <input name="titulo" type="text" class="form-control required"
                data-required="Debe llenar el campo titulo" value="{{ $edit->titulo }}" placeholder="titulo" />
            </div>

            <div class="mb-3 col-12 col-lg-6">
              <label class="form-label">Orden</label>
              <input name="orden" type="number" class="form-control required"
                data-required="Debe llenar el campo orden" value="{{ $edit->orden }}" placeholder="orden" />
            </div>

            <div class="mb-3 col-12 col-lg-6">
              <label class="form-label">Descripcion</label>
              <textarea name="descripcion" class="form-control required" placeholder="descripcion"
                data-required="Debe llenar el campo descripcion">{{ $edit->descripcion }}</textarea>
            </div>

            <div class="mb-3 col-12 col-lg-6">
              <label class="form-label">Url</label>
              <input name="url" type="text" class="form-control required" data-required="Debe llenar el campo url"
                value="{{ $edit->url }}" placeholder="url" />
            </div>

            {{-- <div class="mb-3 col-12 col-lg-6">
              <label class="form-label">Img Listado</label>
              <input name="img_listado" type="text" class="form-control required"
                data-required="Debe llenar el campo img_listado" value="{{ $edit->img_listado }}"
                placeholder="img_listado" />
            </div> --}}

            <div class="mb-3 col-12">
              <label class="form-label">Imagen de listado</label>
              <input name="img_listado" type="file" class="form-control {{ $edit->id ?? 'required' }}"
                data-required="Debe seleccionar una imagen">
              @if ($edit->img_listado)
                <img src="{{ asset($edit->img_listado) }}" style="max-width: 200px" />
              @endif
            </div>

            <div class="mb-3 col-12 col-lg-6">
              <label class="form-label">Estado</label>
              <select name="estado" class="form-select required" data-required="Debe seleccionar un estado">
                <option value="">Seleccione un estado</option>
                @foreach ($estados as $item)
                  <option value="{{ $item->id }}" @if ($item->id === $edit->estado) selected @endif>
                    {{ $item->estado }}
                  </option>
                @endforeach
              </select>
            </div>

            <div class="mb-3 col-12 col-lg-6">
              <label class="form-label">¿Es Caso?</label>
              <select name="es_caso" class="form-select required" data-required="Debe seleccionar si es un caso">
                <option value="">Seleccione si es un caso</option>
                @foreach ($estados_bool as $item)
                  <option value="{{ $item->id }}" @if ($item->id === $edit->estado) selected @endif>
                    {{ $item->estado }}
                  </option>
                @endforeach
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

  @include('cms/content/cards/listado')

@endsection
