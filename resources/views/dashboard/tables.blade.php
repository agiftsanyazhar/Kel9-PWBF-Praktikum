@extends('layouts.dashboard')

@section('container')
    <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Tables</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="dashboard">Dashboard</a></li>
                            <li class="breadcrumb-item active">Databases</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                DataTable
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nama Santri</th>
                                            <th>Gender</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Kota Lahir</th>
                                            <th>Nama Ortu</th>
                                            <th>Alamat Ortu</th>
                                            <th>HP</th>
                                            <th>Email</th>
                                            <th>Password</th>
                                            <th>Tanggal Masuk</th>
                                            <th>Status</th>
                                            <th>Created at</th>
                                            <th>Updated at</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nama Santri</th>
                                            <th>Gender</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Kota Lahir</th>
                                            <th>Nama Ortu</th>
                                            <th>Alamat Ortu</th>
                                            <th>HP</th>
                                            <th>Email</th>
                                            <th>Password</th>
                                            <th>Tanggal Masuk</th>
                                            <th>Status</th>
                                            <th>Created at</th>
                                            <th>Updated at</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach ($santris as $data_santri)
                                            <tr>
                                                <td>{{ $data_santri -> id }}</td>
                                                <td>{{ $data_santri -> nama_santri }}</td>
                                                <td>{{ $data_santri -> gender }}</td>
                                                <td>{{ $data_santri -> tgl_lhr }}</td>
                                                <td>{{ $data_santri -> kota_lhr }}</td>
                                                <td>{{ $data_santri -> nama_ortu }}</td>
                                                <td>{{ $data_santri -> alamat_ortu }}</td>
                                                <td>{{ $data_santri -> hp }}</td>
                                                <td>{{ $data_santri -> email }}</td>
                                                <td>{{ $data_santri -> password }}</td>
                                                <td>{{ $data_santri -> tgl_masuk }}</td>
                                                <td>{{ $data_santri -> aktif }}</td>
                                                <td>{{ $data_santri -> created_at }}</td>
                                                <td>{{ $data_santri -> updated_at }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
@endsection