@extends('template.main')
@section('content')
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Spp</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">tabel data Spp</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                            @if (Auth::user()->level == 'admin')
                                <!-- kasih route -->
                                <a href=" {{ route ('spp.bayar')}}" class="btn btn-sm btn-primary">Tambah Spp</a>
                            @endif    
                                <i class="fas fa-table me-1"></i>
                                DataTable spp
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Id Spp</th>
                                            <th>Tahun</th>
                                            <th>Nominal</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Id Spp</th>
                                            <th>Tahun</th>
                                            <th>Nominal</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    @foreach ( $spps as $k )
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $k->id_spp }}</td>
                                        <td>{{ $k->tahun}}</td>
                                        <td>{{ $k->nominal }}</td>
                                        <td>
                                            @if (Auth::user()->level == 'petugas')
                                            <!-- <a href="" class="btn btn-sm btn-secondary">
                                                <i class="fa fa-info-circle" aria-hidden="true"></i>
                                            </a> -->
                                            <!-- kasih route -->
                                            <a href="{{route('spp.edit',$k->id_spp)}}" class="btn btn-warning">
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

                                                        <form action="{{ route('spp.destroy', $k->id_spp) }}" method="POST" style="display:inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                        </form>
                                                        @elseif (Auth::user()->level == 'admin')
                                                            <p class="text-danger">Anda tidak memiliki hak akses apapun di menu ini</p>
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