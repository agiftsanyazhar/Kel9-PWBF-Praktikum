@extends('layouts.dashboard')

@section('container')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Table</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="dashboard-index">Dashboard</a></li>
                <li class="breadcrumb-item active">{{ $title }}</li>
            </ol>
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
                                <th>Nama Santri</th>
                                <th>Gender</th>
                                <th>Tanggal Lahir</th>
                                <th>Kota Lahir</th>
                                <th>Nama Ortu</th>
                                <th>Alamat Ortu</th>
                                <th>HP</th>
                                <th>Email</th>
                                <th>Tanggal Masuk</th>
                                <th>Status</th>
<<<<<<< HEAD:resources/views/dashboard/santri-table.blade.php
                                <th>Created at</th>
                                <th>Updated at</th>
=======
>>>>>>> 744484b7bdab7551e909281cebc6760bbd9ddaf1:resources/views/dashboard/tables.blade.php
                                <th>Edit</th>
                                <th>Hapus</th>
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
                                <th>Tanggal Masuk</th>
                                <th>Status</th>
<<<<<<< HEAD:resources/views/dashboard/santri-table.blade.php
                                <th>Created at</th>
                                <th>Updated at</th>
=======
>>>>>>> 744484b7bdab7551e909281cebc6760bbd9ddaf1:resources/views/dashboard/tables.blade.php
                                <th>Edit</th>
                                <th>Hapus</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($santris as $data_santri)
                                <tr>
                                    <td>{{ $data_santri -> id }}</td>
                                    <td>{{ $data_santri -> nama }}</td>
                                    <td>{{ $data_santri -> gender }}</td>
                                    <td>{{ $data_santri -> tgl_lhr }}</td>
                                    <td>{{ $data_santri -> kota_lhr }}</td>
                                    <td>{{ $data_santri -> nama_ortu }}</td>
                                    <td>{{ $data_santri -> alamat_ortu }}</td>
                                    <td>{{ $data_santri -> hp }}</td>
                                    <td>{{ $data_santri -> email }}</td>
                                    <td>{{ $data_santri -> tgl_masuk }}</td>
                                    <td>{{ $data_santri -> aktif }}</td>
<<<<<<< HEAD:resources/views/dashboard/santri-table.blade.php
                                    <td>{{ $data_santri -> created_at }}</td>
                                    <td>{{ $data_santri -> updated_at }}</td>
=======
>>>>>>> 744484b7bdab7551e909281cebc6760bbd9ddaf1:resources/views/dashboard/tables.blade.php
                                    <form>
                                        @csrf
                                        @method('delete')
                                        <td><div class="d-grid"><button class="btn btn-warning btn-block" type="submit">Edit</button></div></td>
                                    </form>
                                        <td><a href="{{ url('/destroy_santri',$data_santri->id) }}"><button class="btn btn-danger btn-block" type="submit" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button></a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
@endsection