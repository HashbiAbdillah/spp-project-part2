@extends('template.view')
@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Form Pembayaran</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
 
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Tambah Pembayaran
            </div>
            <div class="card-body">
                <form action="{{ route('pembayaran.submit') }}" method="POST">
                    @csrf  
                    <div class="form-group">
                        <label for="id">Petugas:</label>
                        <input class="form-control" name="id" type="text" value="{{ Auth::user()->name }}" readonly/>
                    </div>
                    <div class="form-group">
                        <label for="nisn">NISN:</label>
                        <select class="form-control" id="nisn" name="nisn">
                            <option value="">Pilih NISN</option>
                            @foreach($siswas as $siswa)
                                <option value="{{ $siswa->nisn }}" data-nama="{{ $siswa->nama }}" data-spp="{{ $siswa->spp->nominal }}"data-idspp="{{ $siswa->spp->id_spp }}">
                                    {{ $siswa->nisn }}
                                </option>
                            @endforeach
                        </select>
                    </div>     
                    <div class="form-group">
                        <label for="nama">Nama siswa:</label>
                        <input class="form-control" id="nama" name="nama" type="text" disabled/>
                    </div>
                    <div class="form-group">
                        <label for="id_spp">SPP per bulan:</label>
                        <input class="form-control" id="nominal" name="nominal" type="text" readonly/>
                        <input class="form-control" id="id_spp" name="id_spp" type="hidden" readonly/>
                    </div>
                    <div class="form-group">
                        <label for="bulan_dibayar">Bulan Dibayar:</label>
                        <input class="form-control" name="bulan_dibayar" type="text" required/>
                    </div>
                    <div class="form-group">
                        <label for="tahun_dibayar">Tahun Dibayar:</label>
                        <input class="form-control" name="tahun_dibayar" type="text" required/>
                    </div>
                    <div class="form-group">
                        <label for="jumlah_bayar">Jumlah Bayar:</label>
                        <input class="form-control" name="jumlah_bayar" type="text" required/>
                    </div>
                    <button type="submit" class="btn btn-primary mt-4">Submit</button>
                    <a href="{{ url()->previous() }}" class="btn btn-secondary mt-4">Batal</a>
                </form>
                <script>
                    document.getElementById('nisn').addEventListener('change', function() {
                        var selectedOption = this.options[this.selectedIndex];

                        var nama = selectedOption.getAttribute('data-nama');
                        var spp = selectedOption.getAttribute('data-spp');
                        var sppid = selectedOption.getAttribute('data-idspp');

                        document.getElementById('nama').value = nama;
                        document.getElementById('nominal').value = spp;
                        document.getElementById('id_spp').value = sppid;
                    });

                    document.getElementById('nisn').dispatchEvent(new Event('change'));
                </script>
            </div>
        </div>
    </div>
@endsection
