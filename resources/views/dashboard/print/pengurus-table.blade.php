<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <style>
            table.static{
                position: relative;
                border: 1px solid #543535;
            }
        </style>
        <title>Cetak</title>
    </head>
    <body>
        <main>
            <div class="container-fluid px-4">
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
                <div class="card mb-4">
                    <div class="card-header mb-3">
                        <i class="fas fa-table me-1"></i>
                        {{ $title }}
                    </div>
                    <div class="card-body">
                        <table class="static" rules="all" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>ID</th>
                                    <th>Nama Pengurus</th>
                                    <th>Email</th>
                                    <th>HP</th>
                                    <th>Gender</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pengurus as $data_pengurus)
                                    <tr>
                                        <td>{{$counter++ }}</td>
                                        <td>{{ $data_pengurus -> id }}</td>
                                        <td>{{ $data_pengurus -> nama }}</td>
                                        <td>{{ $data_pengurus -> email }}</td>
                                        <td>{{ $data_pengurus -> hp }}</td>
                                        <td>
                                            @if ($data_pengurus->gender === "M")
                                                Laki-Laki
                                            @else
                                                Perempuan
                                            @endif    
                                        </td>
                                        <td>
                                            @if ($data_pengurus->aktif === 1)
                                                Aktif
                                            @else
                                                Tidak Aktif
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
        <script type="text/javascript">
            window.print();
        </script>
    </body>
</html>