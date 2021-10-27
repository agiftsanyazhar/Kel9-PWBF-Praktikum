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
                                <th>Buku</th>
                                <th>Keterangan</th>
                                <th>Show</th>
                                <th>Edit</th>
                                <th>Hapus</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Buku</th>
                                <th>Keterangan</th>
                                <th>Show</th>
                                <th>Edit</th>
                                <th>Hapus</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($bukus as $data_buku)
                                <tr>
                                    <td>{{ $data_buku -> id }}</td>
                                    <td>{{ $data_buku -> buku }}</td>
                                    <td>{{ $data_buku -> keterangan }}</td>
                                    <td><a href="{{ url('buku-table-bab-') }}{{ $data_buku->id }}"><button class="btn btn-info btn-block" type="submit">Show</button></a></td>
                                    <td>
                                        <a href = "{{ url('/form-edit-buku-') }}{{ $data_buku->id }}">
                                            <button class="btn btn-warning btn-block" type="submit">Edit</button>
                                        </a>
                                    </td>
                                    <td>
                                    <form action="{{ url('/delete-buku-') }} {{ $data_buku->id }}" method="POST">
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