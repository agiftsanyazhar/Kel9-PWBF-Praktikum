@extends('layouts.dashboard')

@section('container')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Table</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="dashboard-index">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="buku-table">{{ $title }}</a></li>
                <li class="breadcrumb-item active">{{ $title }} - {{ $buku->buku }}</li>
            </ol>
            <a href="{{ url('/form-create-bab-') }}{{ $buku->id }}"><button class="btn btn-primary btn-block" type="submit">Tambah</button></a>
            <a href="{{ url('/buku-table') }}"><button class="btn btn-warning btn-block" type="submit">Kembali ke Daftar Buku</button></a>
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
                    {{ $buku->buku }}
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Buku</th>
                                <th>Bab</th>
                                <th>Judul</th>
                                <th>Keterangan</th>
                                <th>Edit</th>
                                <th>Hapus</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Buku</th>
                                <th>Bab</th>
                                <th>Judul</th>
                                <th>Keterangan</th>
                                <th>Edit</th>
                                <th>Hapus</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($bab as $babs)
                                <tr>
                                    <td>{{ $babs ->id }}</td>
                                    <td>{{ $babs ->buku->buku }}</td>
                                    <td>{{ $babs ->bab }}</td>
                                    <td>{{ $babs ->judul }}</td>
                                    <td>{{ $babs ->keterangan }}</td>
                                    <td>
                                        <a href = "{{ url('/form-edit-bab-') }}{{ $babs->id }}">
                                            <button class="btn btn-warning btn-block" type="submit">Edit</button>
                                        </a>
                                    </td>
                                    <td>
                                        <form action="{{ url('/delete-bab-') }}{{ $babs->id }}" method="POST">
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