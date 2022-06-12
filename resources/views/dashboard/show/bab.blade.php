@extends('layouts.dashboard')

@section('container')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Table</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="dashboard-index">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="buku-table">{{ $title }}</a></li>
                <li class="breadcrumb-item active">Bab</li>
            </ol>
            <a href="{{ url('/buku-table') }}"><button class="btn btn-warning btn-block" type="submit"><i class="bi bi-arrow-left"></i>&nbsp;&nbsp;Daftar Buku</button></a>
            @can('adminpengurus')
                <a href="{{ url('/form-create-bab-') }}{{ $buku->id }}"><button class="btn btn-primary btn-block" type="submit"><i class="bi bi-plus-lg"></i>&nbsp;&nbsp;Tambah</button></a>
            @endcan
            <a href="{{ url('/download-bab-') }}{{ $buku->id }}" target="_blank"><button class="btn btn-success btn-block" type="submit"><i class="bi bi-download"></i>&nbsp;&nbsp;Download</button></a>
            <br><br>
            <div class="card mb-4">
                <div class="card-header mb-3 mb-3">
                    <i class="fas fa-table me-1"></i>
                    Bab - {{ $buku->buku }}
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Bab</th>
                                <th>Judul</th>
                                <th>Keterangan</th>
                                @can('adminpengurus')
                                    <th>Aksi</th>
                                @endcan
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No.</th>
                                <th>Bab</th>
                                <th>Judul</th>
                                <th>Keterangan</th>
                                @can('adminpengurus')
                                    <th>Aksi</th>
                                @endcan
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($bab as $babs)
                                <tr>
                                    <td>{{ $counter++ }}</td>
                                    <td>{{ $babs ->bab }}</td>
                                    <td>{{ $babs ->judul }}</td>
                                    <td>{{ $babs ->keterangan }}</td>
                                    @can('adminpengurus')
                                        <td>
                                            <div class="d-inline">
                                                <a href = "{{ url('/form-edit-bab-') }}{{ $babs->id }}">
                                                    <button class="btn btn-warning btn-block" type="submit"><i class="bi bi-pencil"></i></button>
                                                </a>
                                            </div>
                                            <form action="{{ url('/delete-bab-') }}{{ $babs->id }}" method="POST" class="d-inline">
                                                @method('delete')
                                                @csrf
                                                <button class="btn btn-danger btn-block" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')" type="submit"><i class="bi bi-trash"></i></button>
                                            </form>
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