<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Daftar Produk</title>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f5f5f5;
            color: #333;
            margin: 0;
            padding: 0;
        }
        h2 {
            text-align: center;
            font-size: 2.5rem;
            color: #333;
            margin-top: 50px;
        }
        table {
            width: 80%;
            margin: 50px auto;
            border-collapse: collapse;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
        }
        th, td {
            padding: 15px 20px;
            text-align: left;
        }
        th {
            background-color: #2c3e50;
            color: white;
            font-weight: 600;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #eaeaea;
        }
        td {
            border-bottom: 1px solid #ddd;
        }
        button {
            background-color: #3498db;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 0.9rem;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: #2980b9;
        }
        form {
            display: inline-block;
        }
    </style>
</head>
<body>

    <h2>Daftar Produk</h2>

    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($Products as $Product)
                <tr>
                    <td>{{ $Product->nama }}</td>
                    <td>{{ $Product->harga }}</td>
                    <td>{{ $Product->stok }}</td>
                    <td>{{ $Product->deskripsi }}</td>
                    <td>
                        <form action="/products/{{ $Product->id }}/edit" method="GET">
                            <button type="submit">Edit</button>
                        </form>
                        <form action="/products/{{ $Product->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
