@extends('template.main')
@section('content')
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Pembayaran</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">tabel data pembayaran spp</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                            
                                <!-- kasih route -->
                                <a href=" " class="btn btn-sm btn-primary">Tambah pembayaran</a>
                           
                                <i class="fas fa-table me-1"></i>
                                DataTable pembayaran sukses
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama siswa</th>
                                            <th>Jumlah bayar</th>
                                            <th>Dibayar tanggal</th>
                                            <th>Petugas</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama siswa</th>
                                            <th>Jumlah bayar</th>
                                            <th>Dibayar tanggal</th>
                                            <th>Petugas</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    @foreach ( $pembayarans as $k )
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $k->siswas->nama }}</td>
                                        <td>{{ $k->jumlah_bayar}}</td>
                                        <td>{{ $k->created_at }}</td>
                                        <td>{{ $k->users->name }}</td>
                                        <td>
                                            
                                            <a href="" class="btn btn-sm btn-secondary">
                                                <i class="fa fa-info-circle" aria-hidden="true"></i>
                                            </a>
                                            <!-- kasih route -->
                                            <a href="" class="btn btn-warning">
                                                <i class="fa fa-edit"></I>
                                            </a>
                                            <a class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal{{$k->id_spp}}">
                                                <i class="fa fa-trash"></I>
                                            </a>
                                            <div class="modal fade" id="exampleModal{{$k->id_spp}}" tabindex="-1" aria-labelledby="exampleModalLabel"
                                            aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus Spp</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Apakah anda yakin akan menghapus spp {{$k->id_spp}}
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                                                        <form action="" method="POST" style="display:inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                        </form>
                                                        
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                </table>
                            </div>
                        </div>
                    </div>        
@endsection