<!DOCTYPE html>
<html>
<head>
    <title>Sistem Informasi Pencatatan Buku Tamu Kunjungan Industri</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        * {
            font-family: "Times New Roman", Times, serif;
        }

        /* BACKGROUND */
        body {
            background: 
                linear-gradient(rgba(34, 103, 110, 0.8), rgba(34, 103, 110, 0.9)),
                url("{{ asset('images/bg_buku_tamu.jpg') }}");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            color: white;
        }

        /* NAVBAR */
        .navbar {
            background: rgba(27, 85, 90, 0.8);
            backdrop-filter: blur(8px);
        }

        .navbar-brand {
            font-weight: bold;
            color: white !important;
            text-align: center;
            width: 100%;
        }

        /* CONTAINER */
        .container {
            color: white;
        }

        /* GLASS CARD */
        .card {
            border-radius: 15px;
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            color: white;
            box-shadow: 0 4px 20px rgba(0,0,0,0.3);
        }

        /* TABLE */
        table {
            background: rgba(255, 255, 255, 0.9);
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0,0,0,0.3);
        }

        table tbody tr:hover {
            background-color: rgba(0,0,0,0.05);
            transition: 0.3s;
        }

        /* INPUT */
        .form-control {
            background-color: rgba(255, 255, 255, 0.9) !important;
            color: black !important;
            border: 1px solid #1b555a !important;
        }

        .form-control:focus {
            background-color: white !important;
            color: black !important;
            border-color: #1b555a !important;
            box-shadow: none !important;
        }

        .form-control::placeholder {
            color: #999 !important;
        }

        /* BUTTON */
        .btn-primary {
            background-color: #1b555a;
            border: none;
        }

        .btn-primary:hover {
            background-color: #144347;
        }

        /* TITLE */
        h2, h3 {
            color: white;
        }
    </style>
</head>

<body>

<nav class="navbar px-3 justify-content-center">
    <span class="navbar-brand">
        Sistem Informasi Pencatatan Buku Tamu Kunjungan Industri
    </span>
</nav>

<div class="container mt-4">
    @yield('content')
</div>

</body>
</html>