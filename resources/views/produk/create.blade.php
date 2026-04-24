<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Barang</title>
</head>
<body>
    <h1>Tambah Barang</h1>
    <form action="/produk/store" method = "POST">
        @csrf
        <label>Nama Barang</label>
        <input type="text" name="nama_barang" id="">
        <br><br>
        <label>Harga</label>
        <input type="number" name="harga" id="">
        <br><br>
        <label>Stok</label>
        <input type="number" name="stok" id="">

        <button type="submit">Simpan</button>
    </form>
</body>
</html>