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
                        <label for="id_kelas">NISN:</label>
                        <input type="text" class="form-control @error('nisn') is-invalid @enderror" id="nisn" name="nisn" value="{{  $nisn->nisn }}" readonly>
                        @error('nisn')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="nama_kelas">NIS:</label>
                        <input type="text" class="form-control @error('nis') is-invalid @enderror" id="nis" name="nis" value="{{ $nisn->nis }}" readonly>
                        @error('nis')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="username">Nama Siswa:</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ $nisn->nama }}" readonly>
                        @error('nama')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <label for="dibuat">Kelas:</label>
                        <input type="text" class="form-control @error('id_kelas') is-invalid @enderror" id="id_kelas" name="id_kelas" value="{{  $nisn-> kelas-> nama_kelas }} " readonly>
                        @error('id_kelas')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="dibuat">Alamat:</label>
                        <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" value="{{  $nisn->alamat }} " readonly>
                        @error('alamat')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="dibuat">Nomot Telp:</label>
                        <input type="text" class="form-control @error('no_telp') is-invalid @enderror" id="no_telp" name="no_telp" value="{{  $nisn->no_telp }} " readonly>
                        @error('no_telp')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="dibuat">Spp per bulan:</label>
                        <input type="text" class="form-control @error('id_kelas') is-invalid @enderror" id="id_spp" name="id_spp" value="{{  $nisn->spp->nominal }} " readonly>
                        @error('id_spp')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <a href="{{ url()->previous() }}" class="btn btn-secondary mt-4">Kembali</a>
                </form> 
            </div>
        </div>
    </div>
@endsection