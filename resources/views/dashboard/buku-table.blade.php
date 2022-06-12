@extends('layouts.dashboard')

@section('container')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Table</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="dashboard-index">Dashboard</a></li>
                <li class="breadcrumb-item active">{{ $title }}</li>
            </ol>
            @can('adminpengurus')
                <a href="{{ url('/form-create-buku') }}"><button class="btn btn-primary btn-block" type="submit"><i class="bi bi-plus-lg"></i>&nbsp;&nbsp;Tambah</button></a>
            @endcan
            <a href="{{ url('/download-buku') }}" target="_blank"><button class="btn btn-success btn-block" type="submit"><i class="bi bi-download"></i>&nbsp;&nbsp;Download</button></a>
            <br><br>
            {{-- Buku --}}
            @if (session()->has('successBuku'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('successBuku') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @if (session()->has('updateBuku'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    {{ session('updateBuku') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @if (session()->has('deleteBuku'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('deleteBuku') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            {{-- Bab --}}
            @if (session()->has('successBab'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('successBab') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @if (session()->has('updateBab'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    {{ session('updateBab') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @if (session()->has('deleteBab'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('deleteBab') }}
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
                                <th>Buku</th>
                                <th>Keterangan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No.</th>
                                <th>ID</th>
                                <th>Buku</th>
                                <th>Keterangan</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($bukus as $data_buku)
                                <tr>
                                    <td>{{ $counter++ }}</td>
                                    <td>{{ $data_buku -> id }}</td>
                                    <td>{{ $data_buku -> buku }}</td>
                                    <td>{{ $data_buku -> keterangan }}</td>
                                    <td>
                                        <div class="d-inline">
                                            <a href="{{ url('buku-table-bab-') }}{{ $data_buku->id }}"><button class="btn btn-info btn-block" type="submit"><i class="bi bi-eye"></i></button></a>
                                            @can('adminpengurus')
                                                <a href = "{{ url('/form-edit-buku-') }}{{ $data_buku->id }}"><button class="btn btn-warning btn-block" type="submit"><i class="bi bi-pencil"></i></button></a>
                                                <form action="{{ url('/delete-buku-') }} {{ $data_buku->id }}" method="POST" class="d-inline">
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