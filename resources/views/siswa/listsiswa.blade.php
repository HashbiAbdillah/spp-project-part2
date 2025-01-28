@extends('template.main')
@section('content')
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Siswa</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">daftar siswa</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                            @if (Auth::user()->level == 'admin')
                                <!-- kasih route -->
                                <a href="{{ route('siswa.tambah') }}" class="btn btn-sm btn-primary">Tambah kelas</a>
                            @endif    
                                <i class="fas fa-table me-1"></i>
                                DataTable siswa
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama siswa</th>
                                            <th>Kelas</th>
                                            <th>Alamat</th>
                                            <th>Spp per-bulan</th>
                                            <th width="280px">Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</t>
                                            <th>Nama siswa</th>
                                            <th>Kelas</th>
                                            <th>Alamat</th>
                                            <th>Spp per-bulan</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    @foreach ( $siswas as $k )
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $k->nama }}</td>
                                        <td>{{ $k-> kelas-> nama_kelas }}</td>
                                        <td>{{ $k->alamat }}</td>
                                        <td>{{ $k->spp->nominal }}</td>
                                        <td>
                                            @if (Auth::user()->level == 'admin')
                                            <a href="{{route('siswa.view',$k->nisn)}}" class="btn btn-sm btn-secondary">
                                                <i class="fa fa-info-circle" aria-hidden="true"></i>
                                            </a>
                                            <!-- kasih route -->
                                            <a href="{{route('siswa.edit',$k->nisn)}}" class="btn btn-warning">
                                                <i class="fa fa-edit"></I>
                                            </a>
                                            <a class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal{{$k->nisn}}">
                                                <i class="fa fa-trash"></I>
                                            </a>
                                            <div class="modal fade" id="exampleModal{{$k->nisn}}" tabindex="-1" aria-labelledby="exampleModalLabel"
                                            aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus kelas</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Apakah anda yakin akan menghapus siswa atas nama {{$k->nama}}
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                                                        <form action="{{ route('siswa.destroy', $k->nisn) }}" method="POST" style="display:inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                        </form>
                                                        @elseif (Auth::user()->level == 'petugas')
                                                            <a href="" class="btn btn-sm btn-secondary">
                                                                <i class="fa fa-info-circle" aria-hidden="true"></i>
                                                            </a>
                                                        @endif
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