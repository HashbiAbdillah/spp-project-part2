@extends('template.view')
@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Edit Petugas</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
 
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Edit data
            </div>
            <div class="card-body">
                <form action="{{ route('petugas.update', $id->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="harga_beli">Nama:</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ $id->name }}" disabled>
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="nama">Username:</label>
                        <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" value="{{ $id->username }}" disabled>
                        @error('username'){{ route('petugas.update', $id->id) }}
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="harga_jual">Password:</label>
                        <input type="text" class="form-control @error('password') is-invalid @enderror" id="password" name="password" value="{{  $id->password }}">
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Role</label>
                        <select class="form-control @error('level') is-invalid @enderror" id="level" name="level" value="{{  $id->level }}">
                            <option value="petugas" {{ $id->level == 'petugas' ? 'selected' : '' }}>Petugas</option>
                            <option value="admin" {{ $id->level == 'admin' ? 'selected' : '' }}>Admin</option>
                         </select>
                    </div>
                    <button type="submit" class="btn btn-primary mt-4">Ubah</button>
                    <a href="{{ url()->previous() }}" class="btn btn-secondary mt-4">Batal</a>
                </form> 
            </div>
        </div>
    </div>
@endsection