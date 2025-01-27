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
                <form action="{{ route('siswa.update', parameters: $nisn->nisn) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="id_kelas">NISN:</label>
                        <input type="text" class="form-control @error('nisn') is-invalid @enderror" id="nisn" name="nisn" value="{{  $nisn->nisn }}" readonly>
                        @error('nisn')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="nama_kelas">NIS:</label>
                        <input type="text" class="form-control @error('nis') is-invalid @enderror" id="nis" name="nis" value="{{ $nisn->nis }}">
                        @error('nis')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="username">Nama Siswa:</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ $nisn->nama }}">
                        @error('nama')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="id_kelas">Kelas:</label>
                        <select class="form-control @error('id_kelas') is-invalid @enderror" id="id_kelas" name="id_kelas">
                            @foreach($kelas as $kls)
                                <option value="{{ $kls->id_kelas }}" {{ $nisn->id_kelas == $kls->id_kelas ? 'selected' : '' }}>{{ $kls->nama_kelas }}</option>
                            @endforeach
                        </select>
                        @error('id_kelas')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="dibuat">Alamat:</label>
                        <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" value="{{  $nisn->alamat }} ">
                        @error('alamat')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="dibuat">Nomot Telp:</label>
                        <input type="text" class="form-control @error('no_telp') is-invalid @enderror" id="no_telp" name="no_telp" value="{{  $nisn->no_telp }} ">
                        @error('no_telp')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="id_spp">SPP per bulan:</label>
                        <select class="form-control @error('id_spp') is-invalid @enderror" id="id_spp" name="id_spp">
                            @foreach($spp as $sp)
                                <option value="{{ $sp->id_spp }}" {{ $nisn->id_spp == $sp->id_spp ? 'selected' : '' }}>{{ $sp->nominal }}</option>
                            @endforeach
                        </select>
                        @error('id_spp')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary mt-4">Ubah</button>
                    <a href="{{ url()->previous() }}" class="btn btn-secondary mt-4">Kembali</a>
                </form> 
            </div>
        </div>
    </div>
@endsection