@extends('layouts.dashboard')

@section('container')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Table</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="dashboard-index">Dashboard</a></li>
                <li class="breadcrumb-item active">Detail Peran</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Detail Peran
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Created at</th>
                                <th>Updated at</th>
                                <th>ID Peran</th>
                                <th>ID Pengurus</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Created at</th>
                                <th>Updated at</th>
                                <th>ID Peran</th>
                                <th>ID Pengurus</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($detail_peran as $data_detail_peran)
                                <tr>
                                    <td>{{ $data_detail_peran -> id }}</td>
                                    <td>{{ $data_detail_peran -> created_at }}</td>
                                    <td>{{ $data_detail_peran -> updated_at }}</td>
                                    <td>{{ $data_detail_peran -> id_peran }}</td>
                                    <td>{{ $data_detail_peran -> id_pengurus }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
@endsection