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
            <div class="d-flex justify-content-center" style="margin-top: 20px;">
                <div class="card">
                    <div class="card-body">
                        <h4 class=" active text-danger">Id harus dibuat manual</h4>
                        <p class="card-text">Id Spp ("bulan ke, tahun").</p>
                        <p class="card-text">bulan 01 tahun 2025 = 012025</p>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('spp.submit') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="id">Id Spp:</label>
                        <input class="form-control" name="id_spp" type="text" required/>
                    </div>
                    <div class="form-group">
                        <label for="name">Tahun:</label>
                        <input class="form-control" name="tahun" type="text" required/>
                    </div>
                    <div class="form-group">
                        <label for="username">Nominal:</label>
                        <input class="form-control" name="nominal" type="text" />
                    </div>
                    <button type="submit" class="btn btn-primary mt-4">Tambah</button>
                    <a href="{{ url()->previous() }}" class="btn btn-secondary mt-4">Batal</a>
                </form> 
            </div>
        </div>
    </div>
@endsection