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
                                    <th>Nama Santri</th>
                                    <th>Gender</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Kota Lahir</th>
                                    <th>Nama Ortu</th>
                                    <th>Alamat Ortu</th>
                                    <th>HP</th>
                                    <th>Email</th>
                                    <th>Tanggal Masuk</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($santris as $data_santri)
                                    <tr>
                                        <td>{{ $counter++ }}</td>
                                        <td>{{ $data_santri -> id }}</td>
                                        <td>{{ $data_santri -> nama }}</td>
                                        <td>
                                            @if ($data_santri->gender === "M")
                                                Laki-Laki
                                            @else
                                                Perempuan
                                            @endif    
                                        </td>
                                        <td>{{ $data_santri -> tgl_lhr }}</td>
                                        <td>{{ $data_santri -> kota_lhr }}</td>
                                        <td>{{ $data_santri -> nama_ortu }}</td>
                                        <td>{{ $data_santri -> alamat_ortu }}</td>
                                        <td>{{ $data_santri -> hp }}</td>
                                        <td>{{ $data_santri -> email }}</td>
                                        <td>{{ $data_santri -> tgl_masuk }}</td>
                                        <td>
                                            @if ($data_santri->aktif === 1)
                                                Aktif
                                            @else
                                                Tidak Aktif
                                            @endif
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

