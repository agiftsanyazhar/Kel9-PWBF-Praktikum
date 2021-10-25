@extends('layouts.dashboard')

@section('container')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Table</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="dashboard-index">Dashboard</a></li>
                <li class="breadcrumb-item active">{{ $title }}</li>
            </ol>
            <a href="{{ url('/form-create-bab') }}"><button class="btn btn-primary btn-block" type="submit">Tambah</button></a>
            <br><br>
            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if (session()->has('delete'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
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
                                <th>Bab</th>
                                <th>Judul</th>
                                <th>Keterangan</th>
                                <th>Buku</th>
                                <th>Edit</th>
                                <th>Hapus</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Bab</th>
                                <th>Judul</th>
                                <th>Keterangan</th>
                                <th>Buku</th>
                                <th>Edit</th>
                                <th>Hapus</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($bab as $babs)
                                <tr>
                                    <td>{{ $babs ->id }}</td>
                                    <td>{{ $babs ->bab }}</td>
                                    <td>{{ $babs ->judul }}</td>
                                    <td>{{ $babs ->keterangan }}</td>
                                    <td>{{ $babs ->buku->buku }}</td>
                                    <td><div class="d-grid"><a href = "{{ url('/form-edit-bab-') }}{{ $babs->bab }}"><button class="btn btn-warning btn-block" type="submit">Edit</button></div></td>
                                    <td><div class="d-grid"><a href = '/delete/{{ $babs->id }}'><button class="btn btn-danger btn-block" type="submit">Hapus</button></a></div></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
@endsection