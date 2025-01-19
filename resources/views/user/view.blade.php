@extends('template.view')
@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">View data Petugas</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
 
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Lihat data user
            </div>
            <div class="card-body">
                <form action="{{ route('petugas.update', $id->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Nama:</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ $id->name }}" readonly>
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" value="{{ $id->username }}" readonly>
                        @error('username')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="level">level:</label>
                        <input type="text" class="form-control @error('level') is-invalid @enderror" id="level" name="level" value="{{  $id->level }}" readonly>
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="dibuat">Dibuat tanggal:</label>
                        <input type="text" class="form-control @error('created_at') is-invalid @enderror" id="created_at" name="created_at" value="{{  $id->created_at }} " readonly>
                        @error('created_at')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                        <div class="alert alert-danger" role="alert">
                            <p>Jika user lupa password, password bisa diubah! Silakan hubungi admin</p>
                        </div>
                    <a href="{{ url()->previous() }}" class="btn btn-secondary mt-4">Kembali</a>
                </form> 
            </div>
        </div>
    </div>
@endsection