@php
$isNavbar = true;
$isMenu = true;
@endphp

@extends('cms/layouts/contentNavbarLayout')

@section('title', 'Usuarios')

{{-- Show a success message --}}
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

<h4 class="fw-bold py-3 mb-4">Modulo de administración de usuarios</h4>

<!-- Basic Layout -->
<div class="row">
  <div class="col-xl">
    <div class="card">
      <div class="card-header d-flex justify-content-between align-items-center">
        @if ((int) $edit->id > 0)
        <h5 class="mb-0">Editando un usuario</h5> <small class="text-muted float-end">Formulario de edición</small>
        @else
        <h5 class="mb-0">Creando un nuevo usuario</h5> <small class="text-muted float-end">Formulario de
          creación</small>
        @endif
      </div>
      <div class="card-body">
        <form id="formModel" class="mb-3 row" action="{{ url('/cms/usuarios') }}" method="POST">

          @csrf

          <input type="hidden" value="{{ $edit->id }}" name="id">

          <div class="mb-3 col-12 col-lg-12">
            <label class="form-label">Nombre Usuario</label>
            <input type="text" class="form-control required" name="usuario" value="{{ $edit->usuario }}" placeholder="Nombre Usuario" />
          </div>

          <div class="mb-3 col-12 col-lg-6">
            <label class="form-label">Correo</label>
            <input type="text" class="form-control required" name="correo" value="{{ $edit->correo }}" placeholder="correo" />
          </div>

          <div class="mb-3 col-12 col-lg-6">
            <label class="form-label">Contraseña</label>
            <input type="password" class="form-control" name="pass" placeholder="********" />
          </div>

          <div class="mb-3 col-12 col-lg-6">
            <label class="form-label">Roles</label>

            @foreach ($roles as $item)
            <div class="form-check form-switch mb-3 mb-3 col-4">
              <input class="form-check-input" type="checkbox" name="roles[]" id="checkrol{{ $item->id }}" value="{{ $item->id }}" @if (in_array($item->id, $roles_set)) checked @endif>
              <label class="form-check-label" for="checkrol{{ $item->id }}">{{ $item->rol }}</label>
            </div>
            @endforeach

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

@include('cms/content/usuarios/listado')

@endsection