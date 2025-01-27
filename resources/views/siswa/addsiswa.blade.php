@extends('template.view')
@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Tambah data siswa</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
 
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Edit data
            </div>
            <div class="card-body">
                <form action="{{ route('siswa.submit') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="id">Nisn:</label>
                        <input class="form-control" name="nisn" type="text" required/>
                    </div>
                    <div class="form-group">
                        <label for="name">Nis:</label>
                        <input class="form-control" name="nis" type="text" required/>
                    </div>
                    <div class="form-group">
                        <label for="username">Nama siswa:</label>
                        <input class="form-control" name="nama" type="text" />
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Kelas</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="id_kelas">
                            @foreach($kelas as $kls)
                            <option value="{{ $kls->id_kelas }}">{{ $kls->nama_kelas }}</option>
                            @endforeach
                        </select>
                    </div>       
                    <div class="form-group">
                        <label for="username">Alamat:</label>
                        <input class="form-control" name="alamat" type="text" />
                    </div>             
                    <div class="form-group">
                        <label for="username">No Telp:</label>
                        <input class="form-control" name="no_telp" type="text" />
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">SPP</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="id_spp">
                            @foreach($spp as $sp)
                                <option value="{{ $sp->id_spp }}">{{ $sp->tahun }} - {{ $sp->nominal }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary mt-4">Tambah</button>
                    <a href="{{ url()->previous() }}" class="btn btn-secondary mt-4">Batal</a>
                </form> 
            </div>
        </div>
    </div>
@endsection