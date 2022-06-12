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
                        Kemajuan - {{ $title }}
                    </div>
                    <div class="card-body">
                        <table class="static" rules="all" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama Pengurus</th>
                                    <th>Tanggal</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
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