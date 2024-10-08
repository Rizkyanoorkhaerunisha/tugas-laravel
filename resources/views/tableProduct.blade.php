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
            padding: 20px 20px;
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

        .pagination {
            display: flex;
            justify-content: center;
            list-style: none;
            padding: 20px 0;
        }
        .pagination li {
            margin: 0 5px;
        }
        .pagination li a {
            display: block;
            padding: 10px 15px;
            background-color: #3498db;
            color: white;
            border-radius: 5px;
            text-decoration: none;
            font-size: 0.9rem;
            transition: background-color 0.3s ease;
        }
        .pagination li a:hover {
            background-color: #2980b9;
        }
        .pagination li.active a {
            background-color: #2c3e50;
            cursor: default;
        }
        .pagination li.disabled a {
            background-color: #bdc3c7;
            cursor: not-allowed;
        }
    </style>
</head>
<body>

    <h2>Daftar Produk</h2>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($Products as $index => $product)
                <tr>
                    <th scope="row">{{ $index + $Products->firstItem() }}</th>
                    <td>{{ $product->nama }}</td>
                    <td>{{ $product->harga }}</td>
                    <td>{{ $product->stok }}</td>
                    <td>{{ $product->deskripsi }}</td>
                    <td>
                        <form action="/products/{{ $product->id }}/edit" method="GET">
                            <button type="submit">Edit</button>
                        </form>
                        <form action="/products/{{ $product->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="pagination">
        {{ $Products->links() }}
    </div>
</body>
</html>
