@php
$isNavbar = true;
$isMenu = true;
@endphp

@extends("cms/layouts/contentNavbarLayout")

@section("title", "ImagenesBranding")

{{-- Show a success message --}}
@if (trim($alert) != "")
@section("toastMsg", $alert)

@section("page-script")
<script>
  window.addEventListener("load", function() {
          $(".toast-ok").toast("show");
        });
</script>
@endsection
@endif

{{-- Show a error message --}}
@if ($errors->any())
@section("page-script")
<script>
  window.addEventListener("load", function() {
          @foreach ($errors->all() as $error)
            showErrorValidation(null, "{{ $error }}");
          @endforeach
        });
</script>
@endsection
@endif

@section("content")

<h4 class="fw-bold py-3 mb-4">Modulo de administración de destacado</h4>

<!-- Basic Layout -->
<div class="row">
  <div class="col-xl">
    <div class="card">
      <div class="card-header d-flex justify-content-between align-items-center">
        @if ((int) $edit->id > 0)
        <h5 class="mb-0">Editando un destacado </h5> <small class="text-muted float-end">Formulario de edición</small>
        @else
        <h5 class="mb-0">Creando un nuevo destacado</h5> <small class="text-muted float-end">Formulario de
          creación</small>
        @endif
      </div>
      <div class="card-body">
        <form id="formModel" class="mb-3 row" action="{{ url('/cms/imagenes_branding') }}" method="POST"
          enctype="multipart/form-data">

          @csrf

          <input type="hidden" value="{{ $edit->id }}" name="id">

          <div class="mb-3 col-12 col-lg-6">
            <label class="form-label">Clase</label>
            <input name="clase" type="text" class="form-control required" data-required="Debe llenar el campo clase" value="{{ $edit->clase }}" placeholder="clase" />
          </div>

          <div class="mb-3 col-12 col-lg-6">
            <label class="form-label">Orden</label>
            <input name="orden" type="text" class="form-control required" data-required="Debe llenar el campo orden" value="{{ $edit->orden }}" placeholder="orden" />
          </div>

          <div class="mb-3 col-12 col-lg-3">
            <label class="form-label">Imagen</label>
            <input name="imagen" type="file" class="form-control {{ $edit->id ?? 'required' }}"
              data-required="Debe seleccionar una imagen">
            @if ($edit->imagen)
            <img src="{{ asset($edit->imagen) }}" class="mw-100" />
            @endif
          </div>

          <div class="mb-3 col-12 col-lg-9">
            <label class="form-label">Descripcion</label>
            <textarea name="descripcion" class="form-control tinymce">{{ $edit->descripcion }}</textarea>
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

@include("cms/content/imagenes_branding/listado")

@endsection