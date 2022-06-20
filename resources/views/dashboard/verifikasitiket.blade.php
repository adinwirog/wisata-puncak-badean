@extends('dashboard.layouts.dashboardmain')

@section('verified')active @endsection

@section('title')Verifikasi Tiket @endsection

@section('dashboardcontents')
<div class="d-flex flex-row border-bottom pt-3">
    <h1 class="h2">Verifikasi Tiket</h1>
</div>

<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
  <ol class="breadcrumb mb-4 mt-4">
    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="#">Ticketting Manajemen</a></li>
    <li class="breadcrumb-item active">Verifikasi Tiket</li>
  </ol>
</nav>

<div class="card">
    <div class="card-body">
        <div class="d-flex justify-content-evenly mb-3">
            <div class="row g-3">
              <div class="col-sm-8">
                <input type="text" class="form-control" placeholder="Masukkan Kode" aria-label="First name">
              </div>
              <div class="col">
                <button class="btn btn-primary" type="submit">Cek Kode</button>
              </div>
            </div>
        </div>

        <div class="card text-center text-bg-success mb-3">
          <div class="card-body">
            <h5 class="card-title">Kode 1902142141 Ditemukan</h5>
            <p class="card-text">Atas nama:</p>
            <p class="card-text">Atas nama:</p>
            <p class="card-text">Atas nama:</p>
          </div>
        </div>

    </div>
</div>



@endsection