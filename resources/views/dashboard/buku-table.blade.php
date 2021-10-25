@extends('layouts.dashboard')

@section('container')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Table</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="dashboard-index">Dashboard</a></li>
                <li class="breadcrumb-item active">{{ $title }}</li>
            </ol>
            <a href="{{ url('/form-create-buku') }}"><button class="btn btn-primary btn-block" type="submit">Tambah</button></a>
            <br><br>
            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
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
                                <th>Buku</th>
                                <th>Keterangan</th>
                                <th>Created at</th>
                                <th>Updated at</th>
                                <th>Edit</th>
                                <th>Hapus</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Buku</th>
                                <th>Keterangan</th>
                                <th>Created at</th>
                                <th>Updated at</th>
                                <th>Edit</th>
                                <th>Hapus</th>
                            </tr>
                        </tfoot>
                        <tbody>
<<<<<<< HEAD
                            @foreach ($buku as $data_buku)
=======
                            @foreach ($bukus as $data_buku)
>>>>>>> 744484b7bdab7551e909281cebc6760bbd9ddaf1
                                <tr>
                                    <td>{{ $data_buku -> id }}</td>
                                    <td>{{ $data_buku -> buku }}</td>
                                    <td>{{ $data_buku -> keterangan }}</td>
                                    <td>{{ $data_buku -> created_at }}</td>
                                    <td>{{ $data_buku -> updated_at }}</td>
                                    <td><div class="d-grid"><button class="btn btn-warning btn-block" type="submit">Edit</button></div></td>
<<<<<<< HEAD
                                    <td><div class="d-grid"><button class="btn btn-danger btn-block" type="submit">Hapus</button></div></td>
=======
                                    <td>
                                    <form action="/buku-table/delete/{{ $data_buku->id }}" method="POST">
                                        @method('delete')
                                        @csrf
                                        <button class="btn btn-danger btn-block" onclick="return confirm('Apakah Yakin Data Akan Di Hapus?')" type="submit">Hapus</button>
                                    </form>
                                    </td>
>>>>>>> 744484b7bdab7551e909281cebc6760bbd9ddaf1
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
@endsection