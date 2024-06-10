@php
$isNavbar = true;
$isMenu = true;
//$navbarHideToggle = true;
@endphp

@extends('cms/layouts/contentNavbarLayout')

@section('title', 'Dashboard')

@section('vendor-style')
<link rel="stylesheet" href="{{ asset('assets/vendor/libs/apex-charts/apex-charts.css') }}">
@endsection

@section('vendor-script')
<script src="{{ asset('assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>
@endsection

@section('page-script')
<script src="{{ asset('assets/js/dashboards-analytics.js') }}"></script>
@endsection

@section('content')
<div class="row">

  <div class="col-lg-12 mb-4 order-0">

    <div class="card">
      <div class="d-flex align-items-end row">
        <div class="col-sm-7">
          <div class="card-body">
            <h5 class="card-title text-primary">Bienvenido señor@ administrador/a!</h5>
            <p class="mb-4">
              Desde este CMS puedes admnistrar la información general publicada en el portal web de Sazulab.
            </p>
            {{-- <a href="javascript:;" class="btn btn-outline-primary">
              <i class='bx bx-search'></i>
              Ver proyectos
            </a> --}}
          </div>
        </div>
        <div class="col-sm-5 text-center text-sm-left">
          <div class="card-body pb-0 px-0 px-md-4">
            <img src="{{ asset('assets/img/illustrations/___man-with-laptop-light.png') }}" height="150"
              alt="View Badge User" data-app-dark-img="illustrations/___man-with-laptop-light.png"
              data-app-light-img="illustrations/___man-with-laptop-light.png">
            {{-- <img src="{{asset('assets/front/images/logo.svg')}}" /> --}}
            {{-- <img src="{{ asset('assets/img/illustrations/man-with-laptop-light.png') }}" height="180"
              alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png"
              data-app-light-img="illustrations/man-with-laptop-light.png"> --}}
          </div>
        </div>
      </div>
    </div>

  </div>

</div>

<div class="row">

</div>

@endsection