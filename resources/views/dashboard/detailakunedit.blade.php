@extends('dashboard.layouts.dashboardmain')

@section('dashboard')active @endsection

@section('title')Detail Akun @endsection

@section('dashboardcontents')

<div class="d-flex flex-row border-bottom pt-3 mb-3">
    <h1 class="h2">Detail Akun</h1>
</div>

<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
    <ol class="breadcrumb mb-4 mt-4">
        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="index.html">Detail Akun</a></li>
        <li class="breadcrumb-item active">Edit Akun</li>
    </ol>
</nav>

<div class="container-fluid">
    <form action="{{ route('detailakun.update', Auth::user()->id) }}" method="post">
    @csrf
    @method('PUT')
    <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        Edit Akun
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col">
                                        <strong>Nama Pemilik</strong>
                                    </div>
                                    <div class="col">
                                        <div class="input-group input-group-sm">
                                            <input type="text" name="name" value="{{ Auth::user()->name }}" class="form-control" placeholder="Nama Akun" aria-label="First name" required>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="row">
                                    <div class="col">
                                        <strong>Email</strong>
                                    </div>
                                    <div class="col">
                                        <div class="input-group input-group-sm">
                                            <input type="email" name="email" value="{{ Auth::user()->email }}" class="form-control" placeholder="Email" aria-label="First name" required>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="row mt-4">
                            <div class="col p">
                                <button class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                
            </div>
        </form>
        </div>
    </div>
</div>

@endsection