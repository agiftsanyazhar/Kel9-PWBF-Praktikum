@extends('layouts.dashboard')

@section('container')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Table</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="dashboard-index">Dashboard</a></li>
                <li class="breadcrumb-item active">Buku</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Buku
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Buku</th>
                                <th>Keterangan</th>
                                <th>Created at</th>
                                <th>Updated at</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Buku</th>
                                <th>Keterangan</th>
                                <th>Created at</th>
                                <th>Updated at</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($buku as $data_buku)
                                <tr>
                                    <td>{{ $data_buku -> id }}</td>
                                    <td>{{ $data_buku -> buku }}</td>
                                    <td>{{ $data_buku -> keterangan }}</td>
                                    <td>{{ $data_buku -> created_at }}</td>
                                    <td>{{ $data_buku -> updated_at }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
@endsection