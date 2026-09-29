<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog UMKM Siswa SMK</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* CSS Tema Kustom Berdasarkan Gambar */
        :root {
            --color-primary: #7A9A60;     /* Hijau Sage */
            --color-danger: #B33A3A;      /* Merah Marun */
            --color-warning: #FF9F43;     /* Orange */
            --color-cream: #FFF29D;       /* Krem */
        }

        body {
            background-color: #fcfbf7;
        }

        /* Custom Navbar */
        .bg-custom-primary {
            background-color: var(--color-primary) !important;
        }

        /* Custom Buttons */
        .btn-custom-primary {
            background-color: var(--color-primary);
            color: #fff;
            border: none;
        }
        .btn-custom-primary:hover {
            background-color: #688550;
            color: #fff;
        }

        .btn-custom-outline {
            border: 2px solid var(--color-primary);
            color: var(--color-primary);
        }
        .btn-custom-outline:hover {
            background-color: var(--color-primary);
            color: #fff;
        }

        .btn-custom-danger {
            background-color: var(--color-danger);
            color: #fff;
            border: none;
        }
        .btn-custom-danger:hover {
            background-color: #962f2f;
            color: #fff;
        }

        .btn-custom-warning {
            background-color: var(--color-warning);
            color: #fff;
            border: none;
        }
        .btn-custom-warning:hover {
            background-color: #e08b35;
            color: #fff;
        }

        /* Hero / Accent Box */
        .bg-custom-cream {
            background-color: var(--color-cream) !important;
        }

        .text-custom-primary {
            color: var(--color-primary) !important;
        }
    </style>
</head>
<body>
    <!-- Navbar dengan warna Hijau Sage -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-custom-primary mb-4 shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ route('home') }}">UMKM SMK</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('katalog.index') }}">Katalog</a></li>
                </ul>
                <a href="{{ route('admin.index') }}" class="btn btn-light btn-sm fw-semibold text-custom-primary">Menu Admin</a>
            </div>
        </div>
    </nav>

    <div class="container">
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        @yield('content')
    </div>

    <footer class="text-center py-4 mt-5 border-top text-muted">
        <p class="mb-0">&copy; {{ date('Y') }} Katalog UMKM Siswa SMK</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
