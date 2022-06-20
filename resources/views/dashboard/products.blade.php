@extends('dashboard.layouts.dashboardmain')

@section('product')active @endsection

@section('title')List Produk @endsection

@section('dashboardcontents')
<div class="d-flex flex-row border-bottom pt-3">
    <h1 class="h2">Daftar Konten Produk</h1>
</div>
<div class="table-responsive mt-5">
    <div class="d-flex flex-row-reverse mb-3">
        <a class="btn btn-primary" href="#" role="button">Tambah Produk Baru</a>   
    </div class="table-responsive">
        <table class="table table-striped align-middle table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Gambar</th>
              <th scope="col">Nama Produk</th>
              <th scope="col">Harga Produk</th>
              <th scope="col">Deskripsi</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1,001</td>
              <td>random</td>
              <td>data</td>
              <td>placeholder</td>
              <td>texthhhhhhhhhhhhhhhhhhhhhh
                  hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh</td>
              <td>text</td>
            </tr>
            <tr>
              <td>1,002</td>
              <td>placeholder</td>
              <td>irrelevant</td>
              <td>visual</td>
              <td>layout</td>
            </tr>
          </tbody>
        </table>
</div>
@endsection