@extends('layouts.dashboard')

@section('container')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Table</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="dashboard-index">Dashboard</a></li>
                <li class="breadcrumb-item active">Peran</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Peran
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Peran</th>
                                <th>Aktif</th>
                                <th>Created at</th>
                                <th>Updated at</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Peran</th>
                                <th>Aktif</th>
                                <th>Created at</th>
                                <th>Updated at</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($peran as $data_peran)
                                <tr>
                                    <td>{{ $data_peran -> id }}</td>
                                    <td>{{ $data_peran -> peran }}</td>
                                    <td>{{ $data_peran -> aktif }}</td>
                                    <td>{{ $data_peran -> created_at }}</td>
                                    <td>{{ $data_peran -> updated_at }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
@endsection