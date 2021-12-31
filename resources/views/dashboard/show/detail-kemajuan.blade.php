@extends('layouts.dashboard')

@section('container')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Table</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="dashboard-index">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="kemajuan-table">Daftar Santri</a></li>
                <li class="breadcrumb-item"><a href="kemajuan-table">{{ $santri }}</a></li>
                <li class="breadcrumb-item active">{{ $id }}</li>
            </ol>
            <a href="{{ url('/kemajuan-table-') }}{{ $idsantri }}"><button class="btn btn-warning btn-block" type="submit"><i class="bi bi-arrow-left"></i>&nbsp;&nbsp;Daftar Kemajuan</button></a>
            {{-- @can('pengurus') --}}
                <a href="{{ url('/form-create-detail-') }}{{ $id }}"><button class="btn btn-primary btn-block" type="submit"><i class="bi bi-plus-lg"></i>&nbsp;&nbsp;Tambah</button></a>
            {{-- @endcan --}}
            <br><br>
            <div class="card mb-4">
                <div class="card-header mb-3">
                    <i class="fas fa-table me-1"></i>
                    Kemajuan - {{ $id }}
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Buku</th>
                                <th>Bab</th>
                                <th>Keterangan</th>
                                @can('pengurus')
                                <th>Aksi</th>
                                @endcan
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No.</th>
                                <th>Buku</th>
                                <th>Bab</th>
                                <th>Keterangan</th>
                                @can('pengurus')
                                <th>Aksi</th>
                                @endcan
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($detail as $details)
                                <tr>
                                    <td>{{ $counter++ }}</td>
                                    <td>{{ $details -> bab -> buku -> buku }}</td>
                                    <td>{{ $details -> bab -> bab }}</td>
                                    <td>{{ $details -> keterangan }}</td>
                                    <td>
                                        <div class="d-inline">
                                            @can('pengurus')
                                                <a href = "{{ url('/form-edit-detail-') }}{{ $details->id }}">
                                                    <button class="btn btn-warning btn-block" type="submit"><i class="bi bi-pencil"></i></button>
                                                </a>
                                                <form action="{{ url('/delete-detail-') }} {{ $details->id }}" method="POST" class="d-inline">
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