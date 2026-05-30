<!DOCTYPE html>

<html lang="id">

<head>

<meta charset="UTF-8">

<meta name="viewport"
content="width=device-width, initial-scale=1">

<title>

@yield('title','Peminjam')

</title>

<link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
rel="stylesheet">

</head>

<body>

<nav
class="navbar navbar-dark bg-primary">

<div class="container">

<a
class="navbar-brand"
href="#">

Peminjaman Alat

</a>

<div>

<span
class="text-white me-3">

{{ auth()->user()->name }}

</span>

<form
method="POST"
action="{{ route('logout') }}"
class="d-inline">

@csrf

<button
class="btn btn-light">

Logout

</button>

</form>

</div>

</div>

</nav>

<div class="container mt-4">

<div class="row">

<div class="col-md-3">

<div class="list-group">

<a
href="{{ route('dashboard.peminjam') }}"
class="list-group-item">

Dashboard

</a>

<a
href="{{ route('peminjaman.create') }}"
class="list-group-item">

Ajukan Peminjaman

</a>

<a
href="{{ route('riwayat.index') }}"
class="list-group-item">

Riwayat

</a>

</div>

</div>

<div class="col-md-9">

@yield('content')

</div>

</div>

</div>

</body>

</html>
