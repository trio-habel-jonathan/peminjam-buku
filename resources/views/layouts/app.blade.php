<!DOCTYPE html>
<html lang="en">
<head>
    <title>Peminjaman Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <ul>
        <li><a href="{{route('pinjam.index')}}">Home</a></li>
        </ul>
    @yield('content')
</body>
</html>