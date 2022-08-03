@extends('dashboard.layouts.dashboardmain')

@section('post')active @endsection

@section('title')Tambah Event Post @endsection

@section('dashboardcontents')
<div class="d-flex flex-row border-bottom pt-3">
    <h1 class="h2">Buat Event Post</h1>
</div>

<form action="{{ route("post.store") }}" method="POST">
  @csrf
  <div class="mb-3 mt-5">
    <label for="title" class="form-label">Judul</label>
    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') }}">

    @error('title')
    <div class="invalid-feedback">
      {{ $message }}
    </div>
    @enderror

  </div>

  <div class="mb-3">
    
    <div class="form">
      
      <label for="contents" class="form-label">Contents</label>
      <textarea class="form-control @error('contents') is-invalid @enderror" name="contents" placeholder="Tulis Konten Di sini ...." id="contents" style="height: 500px; white-space: pre-wrap;">{{ old('contents') }}</textarea>
      
      @error('contents')
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
@endsection