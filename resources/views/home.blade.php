<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perpustakaan | Rizkya</title>
    <!-- Tambahkan Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

        .hero-section {
            background-color: #79addc;
            padding: 100px 0;
            text-align: center;
        }

        .hero-section h1 {
            font-size: 3rem;
            color: #ffffff;
            padding: 30px 0;
        }

        .hero-section p {
            font-size: 1.2rem;
            color: #ffffff;
        }

        .table-container {
            margin-top: 50px;
        }

        footer {
            background-color: #79addc;
            color: white;
            padding: 20px 0;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Perpustakaan</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#welcome">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#book">Katalog Buku</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="welcome" class="hero-section">
        <div class="container">
            <h1>Selamat Datang</h1>
            <p>"Membaca adalah napas hidup dan jembatan emas ke masa depan."</p>
            <a href="#book" class="btn btn-primary">Lihat Buku</a>
        </div>
    </section>

    <!-- Daftar Buku Section -->
    <section id="book" class="text-center">
        <div class="container table-container">
            <h2 class="text-center">List Daftar Buku</h2>
            <table class="table table-bordered mt-4">
                <thead class="thead-light">
                    <tr>
                        <th>No</th>
                        <th>Judul Buku</th>
                        <th>Penulis</th>
                        <th>Tahun Terbit</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>1</th>
                        <td>Laut Bercerita</td>
                        <td>Leila Salikha Chudori</td>
                        <td>2017</td>
                    </tr>
                    <tr>
                        <th>2</th>
                        <td>Laskar Pelangi</td>
                        <td>Andrea Hirata</td>
                        <td>2005</td>
                    </tr>
                    <tr>
                        <th>3</th>
                        <td>Sumur</td>
                        <td>Eka Kurniawan</td>
                        <td>2021</td>
                    </tr>
                    <tr>
                        <th>4</th>
                        <td>Bumi Manusia</td>
                        <td>Pramoedya Ananta Toer</td>
                        <td>1980</td>
                    </tr>
                    <tr>
                        <th>5</th>
                        <td>Cantik Itu Luka</td>
                        <td>Eka Kurniawan</td>
                        <td>2002</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <!-- Menampilkan Data dari Form -->
    <section class="container mt-5">
        <h2>Pesan Dari Form</h2>
        <p> {{ session('nama') }}</p>
        <p> {{ session('message') }}</p>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container text-center">
            <p>&copy; 2024 Perpustakaan</p>
        </div>
    </footer>

    <!-- Tambahkan JavaScript Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Smooth scrolling for internal links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();

                const target = document.querySelector(this.getAttribute('href'));
                target.scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>
</body>

</html>
