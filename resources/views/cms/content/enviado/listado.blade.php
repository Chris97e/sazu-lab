@php
  $isNavbar = true;
  $isMenu = true;
@endphp

@extends('cms/layouts/contentNavbarLayout')

@section('title', 'Listados Correos Enviados')


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
  
  <h4 class="fw-bold py-3 mb-4">Correos Enviados</h4>
  <!-- Basic Layout -->
  <!-- Bordered Table -->
  <div class="card">
    <h5 class="card-header">Registros encontrados</h5>
    <div class="card-body">
      <div class="table-responsive text-nowrap">
        <table class="table table-bordered">
          <thead>
          <tr>
            <th>#</th>
            <th>Desde</th>
            <th>Hacia</th>
            <th>Asunto</th>
            <th>Mensaje</th>
          </tr>
          </thead>
          <tbody>
          @foreach ($datos as $enviado)
            <tr>
              <td>{{ $enviado->id }}</td>
              <td>{{ $enviado->desde }}</td>
              <td>{{ $enviado->hacia }}</td>
              <td>{{ $enviado->asunto }}</td>
              <td>{{ $enviado->mensaje }}</td>
            </tr>
          @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <hr class="my-5">
@endsection