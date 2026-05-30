<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0">

    <title>
        @yield('title','Peminjaman Alat')
    </title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

    <style>

        body{
            background:#f5f7fa;
            min-height:100vh;
        }

        .navbar{
            background:#0d6efd;
        }

        footer{
            background:#212529;
            color:white;
            padding:15px;
        }

    </style>

</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark">

<div class="container">

<a
class="navbar-brand fw-bold"
href="{{ url('/') }}">

Peminjaman Alat

</a>

<div class="d-flex gap-2">

<a
href="{{ route('login.user') }}"
class="btn btn-light">

Login User

</a>

<a
href="{{ route('login.peminjam') }}"
class="btn btn-success">

Login Peminjam

</a>

<a
href="{{ route('register.peminjam') }}"
class="btn btn-warning">

Register

</a>

</div>

</div>

</nav>

<div class="container mt-4">

@if(session('error'))

<div class="alert alert-danger">

{{ session('error') }}

</div>

@endif


@if(session('success'))

<div class="alert alert-success">

{{ session('success') }}

</div>

@endif


@yield('content')

</div>

<footer class="text-center mt-5">

© {{ date('Y') }}
Sistem Peminjaman Alat

</footer>

</body>

</html>