@extends('template.view')
@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">View data kelas</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
 
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Lihat data user
            </div>
            <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="id_kelas">ID kelas:</label>
                        <input type="text" class="form-control @error('id_kelas') is-invalid @enderror" id="id_kelas" name="id_kelas" value="{{  $id_kelas->id_kelas }}" readonly>
                        @error('id_kelas')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="nama_kelas">Nama kelas:</label>
                        <input type="text" class="form-control @error('nama_kelas') is-invalid @enderror" id="nama_kelas" name="nama_kelas" value="{{ $id_kelas->nama_kelas }}" readonly>
                        @error('nama_kelas')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="username">Jurusan:</label>
                        <input type="text" class="form-control @error('kompetensi_keahlian') is-invalid @enderror" id="kompetensi_keahlian" name="kompetensi_keahlian" value="{{ $id_kelas->kompetensi_keahlian }}" readonly>
                        @error('kompetensi_keahlian')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <!-- <div class="form-group">
                        <label for="dibuat">Dibuat tanggal:</label>
                        <input type="text" class="form-control @error('created_at') is-invalid @enderror" id="created_at" name="created_at" value="{{  $id_kelas->created_at }} " readonly>
                        @error('created_at')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                        <div class="alert alert-danger" role="alert">
                            <p>Jika user lupa password, password bisa diubah! Silakan hubungi admin</p>
                        </div> -->
                    <a href="{{ url()->previous() }}" class="btn btn-secondary mt-4">Kembali</a>
                </form> 
            </div>
        </div>
    </div>
@endsection