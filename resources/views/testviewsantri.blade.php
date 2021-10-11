<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
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
            <th>Created at</th>
            <th>Updated at</th>
        </tr>
        @foreach ($santri as $p)
        <tr>
            <td>{{ $p -> id }}</td>
            <td>{{ $p -> nama_santri }}</td>
            <td>{{ $p -> gender }}</td>
            <td>{{ $p -> tgl_lhr }}</td>
            <td>{{ $p -> kota_lhr }}</td>
            <td>{{ $p -> nama_ortu }}</td>
            <td>{{ $p -> alamat_ortu }}</td>
            <td>{{ $p -> hp }}</td>
            <td>{{ $p -> email }}</td>
            <td>{{ $p -> tgl_masuk }}</td>
            <td>{{ $p -> aktif }}</td>
            <td>{{ $p -> created_at }}</td>
            <td>{{ $p -> updated_at }}</td>
        </tr>
        @endforeach
</body>
</html>