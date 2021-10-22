@extends('layouts.dashboard')

@section('container')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Table</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="dashboard-index">Dashboard</a></li>
                <li class="breadcrumb-item active">Bab</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Bab
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Bab</th>
                                <th>Judul</th>
                                <th>Keterangan</th>
                                <th>Created at</th>
                                <th>Updated at</th>
                                <th>ID Buku</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Bab</th>
                                <th>Judul</th>
                                <th>Keterangan</th>
                                <th>Created at</th>
                                <th>Updated at</th>
                                <th>ID Buku</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($bab as $data_bab)
                                <tr>
                                    <td>{{ $data_bab -> id }}</td>
                                    <td>{{ $data_bab -> bab }}</td>
                                    <td>{{ $data_bab -> judul }}</td>
                                    <td>{{ $data_bab -> keterangan }}</td>
                                    <td>{{ $data_bab -> created_at }}</td>
                                    <td>{{ $data_bab -> updated_at }}</td>
                                    <td>{{ $data_bab -> id_buku }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
@endsection