@extends('layouts.dashboard')

@section('container')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Table</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="dashboard-index">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="kemajuan-table">Kemajuan</a></li>
                <li class="breadcrumb-item active">{{ $title }}</li>
            </ol>
            <a href="{{ url('/form-create-buku') }}"><button class="btn btn-primary btn-block" type="submit">Tambah</button></a>
            <br><br>
            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    {{ $title }}
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                {{-- <th>ID Pengurus</th>
                                <th>Nama Pengurus</th> --}}
                                <th>Tanggal</th>
                                <th>Status</th>
                                <th>Edit</th>
                                <th>Hapus</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                {{-- <th>ID Pengurus</th>
                                <th>Nama Pengurus</th> --}}
                                <th>Tanggal</th>
                                <th>Status</th>
                                <th>Edit</th>
                                <th>Hapus</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($kemajuan as $kemajuans)
                                <tr>
                                    {{-- <td>{{ $kemajuans -> id_pengurus }}</td>
                                    <td>{{ $kemajuans -> id_pengurus }}</td> --}}
                                    <td>{{ $kemajuans -> tanggal }}</td>
                                    <td>{{ $kemajuans -> status }}</td>
                                    <td><button class="btn btn-warning btn-block" type="submit">Edit</button></td>
                                    <td><button class="btn btn-danger btn-block" type="submit">Hapus</button></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
@endsection