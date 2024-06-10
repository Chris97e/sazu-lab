@php
$isNavbar = true;
$isMenu = true;
@endphp

@extends('cms/layouts/contentNavbarLayout')

@section('title', 'Parametros')


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

<h4 class="fw-bold py-3 mb-4">Parametros envio de Correo</h4>
<!-- Basic Layout -->
@if (isset($edit->id) && (int) $edit->id > 0)
<div class="row">
  <div class="col-xl">
    <div class="col-xl">
      <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
          <h5 class="mb-0">Editando los parametros</h5> <small class="text-muted float-end">Formulario de
            edición</small>
        </div>
        <div class="card-body">
          <form id="formModel" class="mb-3 row" action="{{ url('/cms/parametro') }}" method="POST">

            @csrf

            <input type="hidden" name="id" value="{{ $edit->id }}">

            <div class="mb-3 col-12 col-lg-6">
              <label class="form-label">Llave Publica</label>
              <input type="text" class="form-control required" name="public_key" value="{{ $edit->public_key }}"
                placeholder="Llave Publica" />
            </div>

            <div class="mb-3 col-12 col-lg-6">
              <label class="form-label">Llave Secreta<br />(una vez generada la primera vez MailJet no permite generarla
                de nuevo)</label>
              <input type="text" class="form-control required" name="secret_key" value="{{ $edit->secret_key }}"
                placeholder="Llave Secreta" />
            </div>

            <div class="mb-3 col-12 col-lg-6">
              <label class="form-label">Correo Origen</label>
              <input type="text" class="form-control required" name="from" value="{{ $edit->from }}"
                placeholder="Correo Origen" />
            </div>

            <div class="mb-3 col-12 col-lg-6">
              <label class="form-label">Correo Receptor</label>
              <input type="text" class="form-control required" name="to" value="{{ $edit->to }}"
                placeholder="Correo Receptor" />
            </div>

            <div class="mb-3 col-12">
              @if ((int) $edit->id > 0)
              <a href="./../cms" class="btn btn-danger">Cancelar</a>
              @endif
              <button type="submit" class="btn btn-primary">Guardar</button>
            </div>

          </form>
        </div>
      </div>
    </div>
  </div>

</div>

@endif
<hr class="my-5">

{{-- @include('cms/content/parametro/listado') --}}

@endsection