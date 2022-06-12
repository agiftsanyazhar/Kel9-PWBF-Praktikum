@extends('layouts.dashboard')

@section('container')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Table</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="dashboard-index">Dashboard</a></li>
                <li class="breadcrumb-item active">{{ $title }}</li>
            </ol>
            @can('admin')
                <a href="{{ url('/form-create-pengurus') }}"><button class="btn btn-primary btn-block" type="submit"><i class="bi bi-plus-lg"></i>&nbsp;&nbsp;Tambah</button></a>
            @endcan
            <a href="{{ url('/download-pengurus') }}" target="_blank"><button class="btn btn-success btn-block" type="submit"><i class="bi bi-download"></i>&nbsp;&nbsp;Download</button></a>
            <br><br>
            {{-- Pengurus --}}
            @if (session()->has('successPengurus'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('successPengurus') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @if (session()->has('updatePengurus'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    {{ session('updatePengurus') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @if (session()->has('deletePengurus'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('deletePengurus') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            {{-- Detail Peran --}}
            @if (session()->has('successDetailPeran'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('successDetailPeran') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @if (session()->has('updateDetailPeran'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    {{ session('updateDetailPeran') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @if (session()->has('deleteDetailPeran'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('deleteDetailPeran') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div class="card mb-4">
                <div class="card-header mb-3">
                    <i class="fas fa-table me-1"></i>
                    {{ $title }}
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>ID</th>
                                <th>Nama Pengurus</th>
                                <th>Email</th>
                                <th>HP</th>
                                <th>Gender</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No.</th>
                                <th>ID</th>
                                <th>Nama Pengurus</th>
                                <th>Email</th>
                                <th>HP</th>
                                <th>Gender</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($pengurus as $data_pengurus)
                                <tr>
                                    <td>{{$counter++ }}</td>
                                    <td>{{ $data_pengurus -> id }}</td>
                                    <td>{{ $data_pengurus -> nama }}</td>
                                    <td>{{ $data_pengurus -> email }}</td>
                                    <td>{{ $data_pengurus -> hp }}</td>
                                    <td>
                                        @if ($data_pengurus->gender === "M")
                                            Laki-Laki
                                        @else
                                            Perempuan
                                        @endif    
                                    </td>
                                    <td>
                                        @if ($data_pengurus->aktif === 1)
                                            Aktif
                                        @else
                                            Tidak Aktif
                                        @endif
                                    </td>
                                    <td>
                                        <div class="d-inline">
                                            <a href="{{ url('pengurus-table-detail-peran-') }}{{ $data_pengurus->id }}"><button class="btn btn-info btn-block" type="submit"><i class="bi bi-eye"></i></button></a>
                                                @can('admin')
                                                <a href = "{{ url('/form-edit-pengurus-') }}{{ $data_pengurus->id }}">
                                                    <button class="btn btn-warning btn-block" type="submit"><i class="bi bi-pencil"></i></button>
                                                </a>
                                                <form action="{{ url('/delete-pengurus-') }} {{ $data_pengurus->id }}" method="POST" class="d-inline">
                                                    @method('delete')
                                                    @csrf
                                                    <button class="btn btn-danger btn-block" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')" type="submit"><i class="bi bi-trash"></i></button>
                                                </form>
                                            @endcan
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
@endsection