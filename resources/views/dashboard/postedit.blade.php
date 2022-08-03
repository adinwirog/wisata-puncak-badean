@extends('dashboard.layouts.dashboardmain')

@section('dashboardcontents')
<div class="d-flex flex-row border-bottom pt-3">
    <h1 class="h2">Edit Event Post</h1>
</div>

<form action="{{ route('post.update', ['post' => $event->id]) }}" method="POST">
  @csrf
  @method('PUT')
  <div class="mb-3 mt-5">
    <label for="title" class="form-label">Judul</label>
    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title', $event->title )}}">

    @error('title')
    <div class="invalid-feedback">
      {{ $message }}
    </div>
    @enderror

  </div>
  <div class="mb-3">
    <div class="form">
      <label for="contents" class="form-label">Contents</label>
      <textarea class="form-control @error('contents') is-invalid @enderror" name="contents" placeholder="Tulis Konten Di sini ...." id="contents" style="height: 500px; white-space: pre-wrap;">{{ old('contents', $event->contents) }}</textarea>
      
      @error('contents')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>
  </div>
  <div class="d-flex flex-row justify-content-evenly mt-4 mb-4" >
    <a class="btn btn-danger" href="#" role="button">Kembali</a>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Ubah</button>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Ubah postingan</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <p>Anda yakin ingin mengubah postingan?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary">Ubah</button>
        </div>
      </div>
    </div>
  </div>
</form>


@endsection