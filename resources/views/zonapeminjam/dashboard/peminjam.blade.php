@extends('layouts.apppeminjam')

@section('title','Dashboard Peminjam')

@section('content')

<h2>Dashboard Peminjam</h2>

<hr>

<div class="card">

<div class="card-body">

Selamat datang di zona peminjam.

<br><br>

<a
href="{{ route('peminjaman.create') }}"
class="btn btn-primary">

Ajukan Peminjaman

</a>

</div>

</div>

@endsection