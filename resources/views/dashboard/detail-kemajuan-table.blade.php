@extends('layouts.dashboard')

@section('container')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Table</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="dashboard-index">Dashboard</a></li>
                <li class="breadcrumb-item active">Detail Kemajuan</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Detail Kemajuan
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
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
@endsection