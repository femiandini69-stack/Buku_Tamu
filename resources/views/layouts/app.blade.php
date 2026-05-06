<!DOCTYPE html>
<html>
<head>
    <title>Sistem Informasi Pencatatan Buku Tamu Kunjungan Industri</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #22676E;
        }

        .card {
            border-radius: 15px;
        }

        .navbar {
            background-color: #1b555a;
        }

        h2 {
            color: white;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-dark px-3">
    <span class="navbar-brand" style="font-family: 'Times New Roman', Times, serif; font-weight: bold;">
        Sistem Informasi Pencatatan Buku Tamu Kunjungan Industri
    </span>
</nav>

<div class="container mt-4">
    @yield('content')
</div>

</body>
</html>