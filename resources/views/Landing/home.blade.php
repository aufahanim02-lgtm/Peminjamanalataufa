@extends('layouts.apptamu')

@section('title','Sistem Peminjaman Alat')

@section('content')

<style>

.hero{
background:
linear-gradient(
135deg,
#0f172a,
#1e3a8a
);

color:white;

border-radius:30px;

padding:80px 60px;

overflow:hidden;
}

.hero h1{
font-size:58px;
font-weight:800;
}

.hero p{
font-size:18px;
opacity:.9;
}

.hero-img{
max-width:100%;
height:320px;
object-fit:contain;
}

.btn-custom{
padding:14px 30px;
border-radius:15px;
font-weight:600;
}

.card-feature{

border:none;

border-radius:20px;

padding:20px;

transition:.3s;

box-shadow:
0 10px 30px rgba(0,0,0,.08);
}

.card-feature:hover{

transform:
translateY(-10px);

}

.icon{

font-size:50px;

margin-bottom:20px;

}

.section-title{

font-size:38px;

font-weight:700;

}

.stat-box{

background:white;

padding:30px;

border-radius:20px;

box-shadow:
0 10px 25px rgba(0,0,0,.08);

}

.stat-number{

font-size:40px;

font-weight:800;

color:#2563eb;

}

.cta{

background:
linear-gradient(
90deg,
#2563eb,
#4f46e5
);

color:white;

border-radius:30px;

padding:60px;

}

</style>



<!-- HERO -->

<section class="hero">

<div class="row align-items-center">

<div class="col-lg-7">

<h1>

Sistem Peminjaman Alat

</h1>

<p class="mt-4">

Kelola peminjaman alat secara modern,
lebih cepat, efisien, dan terintegrasi.

Platform ini membantu admin,
petugas, dan peminjam dalam
mengelola seluruh proses peminjaman.

</p>

<div class="mt-5">

<a
href="{{ route('login.user') }}"
class="btn btn-light btn-lg btn-custom">

Login Admin / Petugas

</a>

<a
href="{{ route('login.peminjam') }}"
class="btn btn-warning btn-lg btn-custom ms-2">

Login Peminjam

</a>

</div>

</div>


<div class="col-lg-5 text-center">

<img
src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png"
class="hero-img">

</div>

</div>

</section>



<!-- STATISTIK -->

<div class="row mt-5">

<div class="col-md-4">

<div class="stat-box text-center">

<div class="stat-number">

100+

</div>

<p>Data Alat</p>

</div>

</div>

<div class="col-md-4">

<div class="stat-box text-center">

<div class="stat-number">

500+

</div>

<p>Peminjaman</p>

</div>

</div>

<div class="col-md-4">

<div class="stat-box text-center">

<div class="stat-number">

24/7

</div>

<p>Akses Sistem</p>

</div>

</div>

</div>



<!-- FITUR -->

<div class="text-center mt-5">

<h2 class="section-title">

Fitur Utama

</h2>

<p>

Dirancang untuk mempermudah
pengelolaan peminjaman alat.

</p>

</div>


<div class="row mt-4">

<div class="col-md-4">

<div class="card-feature text-center">

<div class="icon">
📦
</div>

<h4>

Manajemen Alat

</h4>

<p>

Tambah, ubah dan kelola data alat.

</p>

</div>

</div>



<div class="col-md-4">

<div class="card-feature text-center">

<div class="icon">
📝
</div>

<h4>

Peminjaman

</h4>

<p>

Ajukan dan proses peminjaman.

</p>

</div>

</div>



<div class="col-md-4">

<div class="card-feature text-center">

<div class="icon">
📊
</div>

<h4>

Laporan

</h4>

<p>

Cetak laporan otomatis.

</p>

</div>

</div>

</div>



<!-- CTA -->

<div class="cta text-center mt-5">

<h2>

Mulai Menggunakan Sistem

</h2>

<p class="mt-3">

Masuk sekarang untuk mengelola
peminjaman alat.

</p>

<a
href="{{ route('login.peminjam') }}"
class="btn btn-light btn-lg">

Mulai Sekarang

</a>

</div>

@endsection