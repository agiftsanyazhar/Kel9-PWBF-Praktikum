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
<<<<<<< HEAD
=======

            @if (session()->has('delete'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    {{ session('delete') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

>>>>>>> 744484b7bdab7551e909281cebc6760bbd9ddaf1
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
<<<<<<< HEAD
                                <th>Created at</th>
                                <th>Updated at</th>
                                <th>ID Buku</th>
=======
                                <th>Buku</th>
>>>>>>> 744484b7bdab7551e909281cebc6760bbd9ddaf1
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
<<<<<<< HEAD
                                <th>Created at</th>
                                <th>Updated at</th>
                                <th>ID Buku</th>
=======
                                <th>Buku</th>
>>>>>>> 744484b7bdab7551e909281cebc6760bbd9ddaf1
                                <th>Edit</th>
                                <th>Hapus</th>
                            </tr>
                        </tfoot>
                        <tbody>
<<<<<<< HEAD
                            @foreach ($bab as $data_bab)
                                <tr>
                                    <td>{{ $data_bab -> id }}</td>
                                    <td>{{ $data_bab -> bab }}</td>
                                    <td>{{ $data_bab -> judul }}</td>
                                    <td>{{ $data_bab -> keterangan }}</td>
                                    <td>{{ $data_bab -> created_at }}</td>
                                    <td>{{ $data_bab -> updated_at }}</td>
                                    <td>{{ $data_bab -> id_buku }}</td>
                                    <td><div class="d-grid"><button class="btn btn-warning btn-block" type="submit">Edit</button></div></td>
                                    <td><div class="d-grid"><button class="btn btn-danger btn-block" type="submit">Hapus</button></div></td>
=======
                            @foreach ($bab as $babs)
                                <tr>
                                    <td>{{ $babs ->id }}</td>
                                    <td>{{ $babs ->bab }}</td>
                                    <td>{{ $babs ->judul }}</td>
                                    <td>{{ $babs ->keterangan }}</td>
                                    <td>{{ $babs ->buku->buku }}</td>
                                    <td><div class="d-grid"><a href = "{{ url('/form-edit-bab-') }}{{ $babs->bab }}"><button class="btn btn-warning btn-block" type="submit">Edit</button></div></td>
                                    <td><div class="d-grid"><a href = '/delete/{{ $babs->id }}'><button class="btn btn-danger btn-block" type="submit">Hapus</button></a></div></td>
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