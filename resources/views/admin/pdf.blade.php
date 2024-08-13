<!DOCTYPE html>
<html>
<head>
    <title>Data Boneka</title>
</head>
<body>
    <h1>Data Boneka</h1>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Boneka</th>
                <th>Jenis Boneka</th>
                <th>Stok</th>
                <th>Harga</th>
                <th>Image</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bonekas as $boneka)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $boneka->nama }}</td>
                <td>{{ $boneka->jenis }}</td>
                <td>{{ $boneka->stok }}</td>
                <td>{{ $boneka->harga }}</td>
                <td>
                    @if($boneka->image)
                        <img src="{{ public_path('boneka/'.$boneka->image) }}" width="50">
                    @else
                        No image
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
