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
    <li class="breadcrumb-item"><a href="{{ route('products.index') }}">Products</a></li>
    <li class="breadcrumb-item active">Tambah Produk</li>
  </ol>

</nav>

<form action="{{ route('products.store') }}" method="POST">
  @csrf
  <div class="mb-3 mt-5">
    <label for="produk" class="form-label">Nama Produk</label>
    <input type="text" class="form-control @error('title') is-invalid @enderror" id="produk" name="title">
    @error('title')
    <div class="invalid-feedback">
      {{ $message }}
    </div>
    @enderror
  </div>
  <div class="mb-3">
    <label for="harga" class="form-label">Harga Produk</label>
    <div class="input-group">
      <span class="input-group-text">Rp. </span>
      <input type="text" class="form-control @error('price') is-invalid @enderror" name="price" id="harga" aria-describedby="invalidCheck3Feedback" onkeypress="return onlyNumberKey(event);">
      @error('price')
        <div class="invalid-feedback">
      {{ $message }}
        </div>
    @enderror
    </div>
    <div id="emailHelp" class="form-text">Input Harus Angka Tanpa Titik Atau Koma</div>
  </div>
  <div class="mb-3">
    <div class="form">
        <label for="descriptions" class="form-label">Deskripsi</label>
        <textarea class="form-control @error('description') is-invalid @enderror" name="description" placeholder="Tulis Deskripsi produk Di sini ...." id="descriptions" style="height: 500px; white-space: pre-wrap;"></textarea>
        @error('description')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
    @enderror
    </div>
  </div>
  <div class="d-flex flex-row justify-content-center mt-4 mb-4">
      <button type="submit" class="btn btn-primary">Posting</button>
  </div>
</form>


<script>

  function onlyNumberKey(evt) {
        
      // Only ASCII character in that range allowed
      var ASCIICode = (evt.which) ? evt.which : evt.keyCode
      if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
          return false;
      return true;
  }
</script>
@endsection