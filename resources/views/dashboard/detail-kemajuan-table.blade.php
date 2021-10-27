@extends('layouts.dashboard')

@section('container')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Table</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="dashboard-index">Dashboard</a></li>
                <li class="breadcrumb-item active">{{ $title }}</li>
            </ol>
            <a href="{{ url('/create') }}"><button class="btn btn-primary btn-block" type="submit">Tambah</button></a>
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
                                <th>ID</th>
                                <th>Keterangan</th>
                                <th>Created at</th>
                                <th>Updated at</th>
                                <th>ID Kemajuan</th>
                                <th>ID Bab</th>
                                <th>Edit</th>
                                <th>Hapus</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Keterangan</th>
                                <th>Created at</th>
                                <th>Updated at</th>
                                <th>ID Kemajuan</th>
                                <th>ID Bab</th>
                                <th>Edit</th>
                                <th>Hapus</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($detail_kemajuan as $data_detail_kemajuan)
                                <tr>
                                    <td>{{ $data_detail_kemajuan -> id }}</td>
                                    <td>{{ $data_detail_kemajuan -> keterangan }}</td>
                                    <td>{{ $data_detail_kemajuan -> created_at }}</td>
                                    <td>{{ $data_detail_kemajuan -> updated_at }}</td>
                                    <td>{{ $data_detail_kemajuan -> id_kemajuan }}</td>
                                    <td>{{ $data_detail_kemajuan -> id_bab }}</td>
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