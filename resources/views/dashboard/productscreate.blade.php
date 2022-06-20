@extends('dashboard.layouts.dashboardmain')

@section('title')Tambah Produk @endsection

@section('dashboardcontents')
<div class="d-flex flex-row border-bottom pt-3">
    <h1 class="h2">Tambah Produk Baru</h1>
</div>
<!-- <div class="d-flex flex-row mt-3">
    <a class="btn btn-primary rounded-pill" href="#" role="button">Kembali</a>   
</div> -->
<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">

  <ol class="breadcrumb mb-4 mt-4">
    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="index.html">Products</a></li>
    <li class="breadcrumb-item active">Tambah Produk</li>
  </ol>

</nav>

<form>
  <div class="mb-3 mt-5">
    <label for="produk" class="form-label">Nama Produk</label>
    <input type="text" class="form-control" id="produk">
  </div>
  <div class="mb-3">
    <label for="harga" class="form-label">Harga Produk</label>
    <div class="input-group">
      <span class="input-group-text">Rp. </span>
      <input type="text" class="form-control" id="harga" aria-describedby="invalidCheck3Feedback">
    </div>
    <div id="emailHelp" class="form-text">Input Harus Angka Tanpa Titik Atau Koma</div>
  </div>
  <div class="mb-3">
    <div class="form">
        <label for="floatingTextarea2" class="form-label">Deskripsi</label>
        <textarea class="form-control" placeholder="Tulis Deskripsi produk Di sini ...." id="floatingTextarea2" style="height: 500px; white-space: pre-wrap;"></textarea>
    </div>
  </div>
  <div class="d-flex flex-row justify-content-center mt-4 mb-4">
      <button type="submit" class="btn btn-primary">Posting</button>
  </div>
</form>
@endsection