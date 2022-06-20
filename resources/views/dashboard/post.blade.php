@extends('dashboard.layouts.dashboardmain')

@section('post')active @endsection

@section('title')Post Konten @endsection

@section('dashboardcontents')
<div class="d-flex flex-row border-bottom pt-3">
    <h1 class="h2">Event Post</h1>
</div>
<div class="table-responsive mt-5">
    <div class="d-flex flex-row-reverse mb-3">
        <a class="btn btn-primary" href="/postcreate" role="button">Buat Event Post Baru</a>   
    </div>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Gambar</th>
              <th scope="col">Judul</th>
              <th scope="col">Konten</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1,001</td>
              <td>random</td>
              <td>data</td>
              <td>placeholder</td>
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