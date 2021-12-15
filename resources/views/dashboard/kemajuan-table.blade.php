@extends('layouts.dashboard')

@section('container')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Table</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="dashboard-index">Dashboard</a></li>
                <li class="breadcrumb-item active">{{ $title }}</li>
            </ol>

            {{-- Buku --}}
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

            <div class="card mb-4" >
                <div class="card-header mb-3">
                    <i class="fas fa-table me-1"></i>
                    {{ $title }}
                </div>
                <div class="card-body" action="/show-santri" method="post">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>ID Santri</th>
                                <th>Nama Santri</th>
                                <th>Email</th>
                                <th>Tanggal Masuk</th>
                                <th>Kemajuan</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>ID Santri</th>
                                <th>Nama Santri</th>
                                <th>Email</th>
                                <th>Tanggal Masuk</th>
                                <th>Kemajuan</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($santri as $santris)
                                <tr>
                                    <td>{{ $santris -> id }}</td>
                                    <td>{{ $santris -> nama }}</td>
                                    <td>{{ $santris -> email }}</td>
                                    <td>{{ $santris -> tgl_masuk }}</td>
                                    <td><a href="{{ url('/kemajuan-table-') }}{{ $santris->id }}"><button class="btn btn-info btn-block" type="submit">Show</button></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
@endsection