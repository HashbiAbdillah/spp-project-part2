@extends('template.view')
@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Tambah data kelas</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
 
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Edit data
            </div>
            <div class="d-flex justify-content-center">
                <div class="card">
                    <div class="card-body">
                        <h4 class=" active text-danger">Id harus dibuat manual</h4>
                        <p class="card-text">Id kelas berdasarkan tingkat kelas.</p>
                        <ul>
                            <li>Kelas 10 diawali angka 11</li>
                            <li>Kelas 11 diawali angka 12</li>
                            <li>Kelas 12 diawali angka 13</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('kls.submit') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="id">Id kelas:</label>
                        <input class="form-control" name="id_kelas" type="text" required/>
                    </div>
                    <div class="form-group">
                        <label for="name">Nama kelas:</label>
                        <input class="form-control" name="nama_kelas" type="text" required/>
                    </div>
                    <div class="form-group">
                        <label for="username">Jurusan:</label>
                        <input class="form-control" name="kompetensi_keahlian" type="text" />
                    </div>
                    <button type="submit" class="btn btn-primary mt-4">Tambah</button>
                    <a href="{{ url()->previous() }}" class="btn btn-secondary mt-4">Batal</a>
                </form> 
            </div>
        </div>
    </div>
@endsection