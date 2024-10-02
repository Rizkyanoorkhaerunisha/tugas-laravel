<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Produk</title>
</head>
<body>

    <h2>Edit Produk</h2>
    <form action="/products/{{ $Product->id }}" method="POST">
        @csrf
        @method('PUT') 

        <div>
            <label for="nama">Nama Produk:</label>
            <input type="text" id="nama" name="nama" value="{{ $Product->nama }}"
            required>
        </div>
        <br>
        <div>
            <label for="harga">Harga:</label>
            <input type="number" id="harga" name="harga" value="{{ $Product->harga }}"
            required>
        </div>
        <br>
        <div>
            <label for="stok">Stok:</label>
            <input type="number" id="stok" name="stok" value="{{ $Product->stok }}"
            required>
        </div>
        <br>
        <div>
            <label for="deskripsi">Deskripsi Produk: </label>
            <textarea id="deskripsi" name="deskripsi" required>
                {{ $Product->deskripsi }}</textarea>
        </div>
        <br>
        <button type="submit">Update Produk</button>
    </form>

</body>
</html>
