@extends('dashboard.layouts.dashboardmain')

@section('buatakun')active @endsection

@section('title')Buat Akun User Baru @endsection

@section('dashboardcontents')

<div class="d-flex flex-row border-bottom pt-3 mb-3">
    <h1 class="h2">Buat Akun Baru</h1>
</div>

<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
    <ol class="breadcrumb mb-4 mt-4">
        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
        <li class="breadcrumb-item active">List Akun</li>
    </ol>
</nav>

<div class="container-fluid">
    <form action="{{ route("listakun.store") }}" method="POST" target="_blank">
    @csrf
    <div class="row">
        <div class="col">
            <div class="mb-3 mt-5">
                <label for="nama" class="form-label">Nama Pemilik</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="nama" name="name" value="{{ old('name') }}">
            
                @error('name')
                <div class="invalid-feedback">
                
                </div>
                @enderror
            
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="mb-3 mt-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">
            
                @error('email')
                <div class="invalid-feedback">
                
                </div>
                @enderror
            
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="d-flex flex-row justify-content-center mt-4 mb-4">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>
    </form>
</div>

@endsection