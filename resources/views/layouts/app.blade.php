<!DOCTYPE html>
<html>
<head>
    <title>Sistem Informasi Pencatatan Buku Tamu Kunjungan Industri</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        * {
            font-family: "Times New Roman", Times, serif;
        }

        
        body {
            background-color: #22676E;
            color: white;
        }

       
        .navbar {
            background-color: #1b555a;
        }

        .navbar-brand {
            font-weight: bold;
            color: white !important;
        }

        
        .card {
            border-radius: 15px;
        }

        
        .container {
            color: white;
        }

        
        .form-control {
            background-color: #ffffff !important;
            color: black !important;
            border: 1px solid #1b555a !important;
        }

        .form-control:focus {
            background-color: #ffffff !important;
            color: black !important;
            border-color: #1b555a !important;
            box-shadow: none !important;
        }

        .form-control::placeholder {
            color: #e6e6e6 !important;
        }

        
        h2, h3 {
            color: white;
        }
    </style>
</head>

<body>

<nav class="navbar px-3 justify-content-center">
    <span class="navbar-brand text-center w-100">
        Sistem Informasi Pencatatan Buku Tamu Kunjungan Industri
    </span>
</nav>
<div class="container mt-4">
    @yield('content')
</div>

</body>
</html>