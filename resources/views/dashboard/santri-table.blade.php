@extends('layouts.dashboard')

@section('container')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Table</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="dashboard-index">Dashboard</a></li>
                <li class="breadcrumb-item active">{{ $title }}</li>
            </ol>
            @if (session()->has('update'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    {{ session('update') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @if (session()->has('delete'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('delete') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div class="card mb-4">
                <div class="card-header mb-3">
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
                                <th>Kemajuan</th>
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
                                <th>Kemajuan</th>
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
                                    <td>
                                        @if ($data_santri->aktif === 1)
                                            Aktif
                                        @else
                                            Tidak Aktif
                                        @endif
                                    </td>
                                    <td><a href="{{ url('santri-table-kemajuan-') }}{{ $data_santri->id }}"><button class="btn btn-info btn-block" type="submit">Show</button></a></td>
                                    <td>
                                        <form action="/delete-santri-{{ $data_santri->id }}" method="POST">
                                            @method('delete')
                                            @csrf
                                            <button class="btn btn-danger btn-block" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')" type="submit">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
@endsection