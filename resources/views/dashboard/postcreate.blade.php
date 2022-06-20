@extends('dashboard.layouts.dashboardmain')

@section('post')active @endsection

@section('title')Tambah Event Post @endsection

@section('dashboardcontents')
<div class="d-flex flex-row border-bottom pt-3">
    <h1 class="h2">Buat Event Post</h1>
</div>

<form>
  <div class="mb-3 mt-5">
    <label for="exampleInputEmail1" class="form-label">Judul</label>
    <input type="email" class="form-control" id="exampleInputEmail1">
  </div>
  <div class="mb-3">
    <div class="form">
        <label for="floatingTextarea2" class="form-label">Contents</label>
        <textarea class="form-control" placeholder="Tulis Konten Di sini ...." id="floatingTextarea2" style="height: 500px; white-space: pre-wrap;"></textarea>
    </div>
  </div>
  <div class="d-flex flex-row justify-content-center mt-4 mb-4">
      <button type="submit" class="btn btn-primary">Posting</button>
  </div>
</form>
@endsection