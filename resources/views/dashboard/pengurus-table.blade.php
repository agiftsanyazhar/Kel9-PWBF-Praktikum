@extends('layouts.dashboard')

@section('container')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Table</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="dashboard-index">Dashboard</a></li>
                <li class="breadcrumb-item">Database</li>
                <li class="breadcrumb-item">Table</li>
                <li class="breadcrumb-item active">Pengurus</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Pengurus
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama pengurus</th>
                                <th>Email</th>
                                <th>HP</th>
                                <th>Gender</th>
                                <th>Password</th>
                                <th>Aktif</th>
                                <th>Created at</th>
                                <th>Updated at</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Nama pengurus</th>
                                <th>Email</th>
                                <th>HP</th>
                                <th>Gender</th>
                                <th>Password</th>
                                <th>Aktif</th>
                                <th>Created at</th>
                                <th>Updated at</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($pengurus as $data_pengurus)
                                <tr>
                                    <td>{{ $data_pengurus -> id }}</td>
                                    <td>{{ $data_pengurus -> nama_pengurus }}</td>
                                    <td>{{ $data_pengurus -> email }}</td>
                                    <td>{{ $data_pengurus -> hp }}</td>
                                    <td>{{ $data_pengurus -> gender }}</td>
                                    <td>{{ $data_pengurus -> password }}</td>
                                    <td>{{ $data_pengurus -> aktif }}</td>
                                    <td>{{ $data_pengurus -> created_at }}</td>
                                    <td>{{ $data_pengurus -> updated_at }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
@endsection