@extends('layouts.dashboard')

@section('container')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Table</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="dashboard-index">Dashboard</a></li>
                <li class="breadcrumb-item">Database</li>
                <li class="breadcrumb-item">Table</li>
                <li class="breadcrumb-item active">Kemajuan</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Kemajuan
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tanggal</th>
                                <th>Status</th>
                                <th>Created at</th>
                                <th>Updated at</th>
                                <th>ID Santri</th>
                                <th>ID Pengurus</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Tanggal</th>
                                <th>Status</th>
                                <th>Created at</th>
                                <th>Updated at</th>
                                <th>ID Santri</th>
                                <th>ID Pengurus</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($kemajuan as $data_kemajuan)
                                <tr>
                                    <td>{{ $data_kemajuan -> id }}</td>
                                    <td>{{ $data_kemajuan -> tanggal }}</td>
                                    <td>{{ $data_kemajuan -> status }}</td>
                                    <td>{{ $data_kemajuan -> created_at }}</td>
                                    <td>{{ $data_kemajuan -> updated_at }}</td>
                                    <td>{{ $data_kemajuan -> id_santri }}</td>
                                    <td>{{ $data_kemajuan -> id_pengurus }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
@endsection