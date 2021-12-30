@extends('layouts.dashboard')

@section('container')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Table</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="dashboard-index">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="kemajuan-table">Daftar Santri</a></li>
                <li class="breadcrumb-item active">{{ $title }}</li>
            </ol>
            <a href="{{ url('/kemajuan-table') }}"><button class="btn btn-warning btn-block" type="submit"><i class="bi bi-arrow-left"></i>&nbsp;&nbsp;Daftar Santri</button></a>
            {{-- @can('pengurus') --}}
                <a href="{{ url('/form-create-kemajuan-') }}{{ $idsantri }}"><button class="btn btn-primary btn-block" type="submit"><i class="bi bi-plus-lg"></i>&nbsp;&nbsp;Tambah</button></a>
            {{-- @endcan --}}
            <br><br>
            <div class="card mb-4">
                <div class="card-header mb-3">
                    <i class="fas fa-table me-1"></i>
                    Kemajuan - {{ $title }}
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama Pengurus</th>
                                <th>Tanggal</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No.</th>
                                <th>Nama Pengurus</th>
                                <th>Tanggal</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($kemajuan as $kemajuans)
                                <tr>
                                    <td>{{ $counter++ }}</td>
                                    <td>{{ $kemajuans -> pengurus -> nama }}</td>
                                    <td>{{ $kemajuans -> tanggal }}</td>
                                    <td>
                                        @if ($kemajuans -> status === "N")
                                            Naik
                                        @elseif ($kemajuans -> status === "T")
                                            Tetap
                                        @elseif ($kemajuans -> status === "M")
                                            Mundur
                                        @endif
                                    </td>
                                    <td>
                                        <div class="d-inline">
                                            <a href="{{ url('kemajuan-table-detail-kemajuan-') }}{{ $kemajuans->id }}">
                                                <button class="btn btn-info btn-block" type="submit"><i class="bi bi-eye"></i></button>
                                            </a>
                                            @can('pengurus')
                                                <a href = "{{ url('/form-edit-kemajuan-') }}{{ $kemajuans->id }}">
                                                    <button class="btn btn-warning btn-block" type="submit"><i class="bi bi-pencil"></i></button>
                                                </a>
                                                <form action="{{ url('/delete-kemajuan-') }} {{ $kemajuans->id }}" method="POST" class="d-inline">
                                                    @method('delete')
                                                    @csrf
                                                    <button class="btn btn-danger btn-block" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')" type="submit"><i class="bi bi-trash"></i></button>
                                                </form>
                                            @endcan
                                        </div>
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