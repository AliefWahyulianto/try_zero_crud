<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Barang</title>
</head>
<body>
    <h1>Data Barang</h1>
    <table border=1>
        <tr>
            <th>ID</th>
            <th>Nama Barang</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Aksi</th>
        </tr>
        @foreach ($produk as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->nama_barang}}</td>
            <td>{{$item->harga}}</td>
            <td>{{$item->stok}}</td>
            <td><a href="/produk/{{$item->id}}/edit">Edit</a></td>
            <td><form action="/produk/{{$item->id}}" method='POST'>
                @csrf
                @method('DELETE')
                <button type="submit">Hapus</button>
            </form></td>
        </tr>
        @endforeach
    </table>
</body>
</html>