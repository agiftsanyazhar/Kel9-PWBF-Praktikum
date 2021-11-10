@extends('layouts.dashboard')

@section('container')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Table</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="dashboard-index">Dashboard</a></li>
                <li class="breadcrumb-item active">{{ $title }}</li>
            </ol>
            <a href="{{ url('/form-create-pengurus') }}"><button class="btn btn-primary btn-block" type="submit">Tambah</button></a>
            <br><br>
            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
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
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    {{ $title }}
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama Pengurus</th>
                                <th>Email</th>
                                <th>HP</th>
                                <th>Gender</th>
                                <th>Status</th>
                                <th>Peran</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Nama Pengurus</th>
                                <th>Email</th>
                                <th>HP</th>
                                <th>Gender</th>
                                <th>Status</th>
                                <th>Peran</th>
                                <th>Edit</th>
                                <th>Delete</th>
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
                                    <td>
                                        @if ($data_pengurus->aktif === 1)
                                            Aktif
                                        @else
                                            Tidak Aktif
                                        @endif
                                    </td>
                                    <td><a href="{{ url('pengurus-table-peran-') }}{{ $data_pengurus->id }}"><button class="btn btn-info btn-block" type="submit">Show</button></a></td>
                                    <td>
                                        <a href = "{{ url('/form-edit-pengurus-') }}{{ $data_pengurus->id }}">
                                            <button class="btn btn-warning btn-block" type="submit">Edit</button>
                                        </a>
                                    </td>
                                    <td>
                                        <form action="{{ url('/delete-pengurus-') }} {{ $data_pengurus->id }}" method="POST">
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