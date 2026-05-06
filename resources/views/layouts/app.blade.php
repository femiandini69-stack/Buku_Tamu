<!DOCTYPE html>
<html>
<head>
    <title>Buku Tamu</title>
</head>
<body>

    <h1>Buku Tamu Kunjungan Industri</h1>

    @if(session('success'))
        <p style="color:teal">{{ session('success') }}</p>
    @endif

    @yield('content')

</body>
</html>