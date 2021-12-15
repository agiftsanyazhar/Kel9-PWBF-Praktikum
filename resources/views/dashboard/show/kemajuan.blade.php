@extends('layouts.dashboard')

@section('container')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Table</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="dashboard-index">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="kemajuan-table">Kemajuan</a></li>
                <li class="breadcrumb-item active">{{ $title }}</li>
            </ol>
            @can('pengurus')
                <a href="{{ url('/form-create-kemajuan') }}"><button class="btn btn-primary btn-block" type="submit">Tambah</button></a>
            @endcan
            <a href="{{ url('/kemajuan-table') }}"><button class="btn btn-warning btn-block" type="submit">Kembali ke Daftar Santri</button></a>
            <br><br>
            <div class="card mb-4">
                <div class="card-header mb-3">
                    <i class="fas fa-table me-1"></i>
                    {{ $title }}
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>Nama Pengurus</th>
                                <th>Tanggal</th>
                                <th>Status</th>
                                <th>Detail Kemajuan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Nama Pengurus</th>
                                <th>Tanggal</th>
                                <th>Status</th>
                                <th>Detail Kemajuan</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($kemajuan as $kemajuans)
                                <tr>
                                    <td>{{ $kemajuans -> nama }}</td>
                                    <td>{{ $kemajuans -> tanggal }}</td>
                                    <td>{{ $kemajuans -> status }}</td>
                                    <td>
                                        <div class="d-inline md-center">
                                            <a href="{{ url('kemajuan-table-detail-kemajuan-') }}{{ $kemajuans->id }}">
                                                <button class="btn btn-info btn-block" type="submit">Show</button>
                                            </a>
                                    </td>
                                    <td>
                                            <a href = "{{ url('/form-edit-kemajuan-') }}{{ $kemajuans->id }}">
                                                <button class="btn btn-warning btn-block" type="submit">Edit</button>
                                            </a>
                                            <form action="{{ url('/delete-kemajuan-') }} {{ $kemajuans->id }}" method="POST" class="d-inline">
                                                @method('delete')
                                                @csrf
                                                <button class="btn btn-danger btn-block" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')" type="submit">Hapus</button>
                                            </form>
                                        </div>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
@endsection