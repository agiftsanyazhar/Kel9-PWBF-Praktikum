@extends('layouts.dashboard')

@section('container')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Table</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="dashboard-index">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="pengurus-table">Pengurus</a></li>
                <li class="breadcrumb-item active">Detail Peran</li>
            </ol>
            <a href="{{ url('/pengurus-table') }}"><button class="btn btn-warning btn-block" type="submit"><i class="bi bi-arrow-left"></i>&nbsp;&nbsp;Pengurus</button></a>
            @can('admin')
                <a href="{{ url('/form-create-detail-peran-') }}{{ $idpengurus }}"><button class="btn btn-primary btn-block" type="submit"><i class="bi bi-plus-lg"></i>&nbsp;&nbsp;Tambah</button></a>
            @endcan
            <a href="{{ url('/download-detail-peran-') }}{{ $idpengurus }}" target="_blank"><button class="btn btn-success btn-block" type="submit"><i class="bi bi-download"></i>&nbsp;&nbsp;Download</button></a>
            <br><br>
            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @if (session()->has('update'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    {{ session('update') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @if (session()->has('delete'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('delete') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div class="card mb-4">
                <div class="card-header mb-3">
                    <i class="fas fa-table me-1"></i>
                    Detail Peran - {{ $title }}
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Peran</th>
                                @can('admin')
                                    <th>Aksi</th>
                                @endcan
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No.</th>
                                <th>Peran</th>
                                @can('admin')
                                    <th>Aksi</th>
                                @endcan
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($peran as $data_peran)
                                <tr>
                                    <td>{{ $counter++ }}</td>
                                    <td>{{ $data_peran -> peran -> peran}}</td>
                                    @can('admin')
                                        <td>
                                        <div class="d-inline">
                                            <a href = "{{ url('/form-edit-detail-peran-') }}{{ $data_peran->id }}">
                                                <button class="btn btn-warning btn-block" type="submit"><i class="bi bi-pencil"></i></button>
                                            </a>
                                            <form action="/delete-detail-peran-{{ $data_peran->id }}" method="POST" class="d-inline">
                                            @method('delete')
                                            @csrf
                                            <button class="btn btn-danger btn-block" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')" type="submit"><i class="bi bi-trash"></i></button>
                                        </form>
                                        </div>
                                    </td>
                                    @endcan
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
@endsection