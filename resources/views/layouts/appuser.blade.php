<!DOCTYPE html>
<html lang="id">

<head>

<meta charset="UTF-8">

<meta name="viewport"
content="width=device-width, initial-scale=1">

<title>
@yield('title','Dashboard')
</title>

<link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
rel="stylesheet">

<style>

body{
background:#f4f6f9;
}

.sidebar{
width:240px;
height:100vh;
position:fixed;

background:#212529;

padding:20px;
}

.sidebar a{

color:white;

display:block;

padding:12px;

text-decoration:none;

}

.sidebar a:hover{

background:#0d6efd;

border-radius:10px;

}

.content{

margin-left:260px;

padding:30px;

}

</style>

</head>

<body>

<div class="sidebar">

<h4 class="text-white">

Dashboard

</h4>

<hr class="text-light">

<a href="{{ route('dashboard') }}">
Dashboard
</a>

<a href="{{ route('alat.index') }}">
Data Alat
</a>

<a href="{{ route('peminjaman.index') }}">
Peminjaman
</a>

<a href="{{ route('users.index') }}">
User
</a>

<form
action="{{ route('logout') }}"
method="POST">

@csrf

<button
class="btn btn-danger mt-4 w-100">

Logout

</button>

</form>

</div>

<div class="content">

@yield('content')

</div>

</body>

</html>