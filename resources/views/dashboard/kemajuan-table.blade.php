@extends('layouts.dashboard')

@section('container')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Table</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="dashboard-index">Dashboard</a></li>
                <li class="breadcrumb-item active">{{ $title }}</li>
            </ol>
            <a href="{{ url('/create') }}"><button class="btn btn-primary btn-block" type="submit">Tambah</button></a>
            <br><br>
            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div class="card mb-4" >
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    {{ $title }}
                </div>
                <div class="card-body" action="/show-santri" method="post">>
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>ID Santri</th>
                                <th>Nama Santri</th>
                                <th>Email</th>
                                <th>Tanggal Masuk</th>
                                <th>Lihat</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>ID Santri</th>
                                <th>Nama Santri</th>
                                <th>Email</th>
                                <th>Tanggal Masuk</th>
                                <th>Lihat</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($santri as $santris)
                                <tr>
                                    <td>{{ $santris -> id }}</td>
                                    <td>{{ $santris -> nama }}</td>
                                    <td>{{ $santris -> email }}</td>
                                    <td>{{ $santris -> tgl_masuk }}</td>
                                    <td><a href="{{ url('/kemajuan-table-') }}{{ $santris->id }}"><button class="btn btn-warning btn-block" type="submit">Show</button></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
@endsection