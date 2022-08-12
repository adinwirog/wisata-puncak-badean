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
        <li class="breadcrumb-item active">List Akun</li>
    </ol>
</nav>

<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    Detail Akun
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col">
                                    <strong>Nama Pemilik Akun</strong>
                                </div>
                                <div class="col">
                                    {{ Auth::user()->name }}
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col">
                                    <strong>Email</strong>
                                </div>
                                <div class="col">
                                    {{ Auth::user()->email }}
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col">
                                    <strong>Password</strong>
                                </div>
                                <div class="col">
                                    <a href="{{ route('resetpassword.index') }}"><button class="btn btn-sm btn-danger">Reset Password</button></a>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col">
                                    <strong>Status</strong>
                                </div>
                                <div class="col">
                                    @if (Auth::user()->is_admin)
                                        <span class="badge rounded-pill text-bg-primary">Admin</span>
                                    @else
                                        <span class="badge rounded-pill text-bg-success">User</span>
                                    @endif
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col">
                                    <strong>Dibuat</strong>
                                </div>
                                <div class="col">
                                    {{ Auth::user()->created_at }}
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="row mt-4">
                        <div class="col p">
                            <a href="{{ route('detailakun.edit', Auth::user()->id) }}"><button class="btn btn-primary"> Edit Data</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection