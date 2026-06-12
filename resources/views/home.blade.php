@extends('layouts.main')

@section('content')

<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top">

<div class="container">

<a class="navbar-brand fw-bold text-primary fs-3">
<i class="bi bi-droplet-half"></i>
AntriLaundry
</a>

<button
class="navbar-toggler"
data-bs-toggle="collapse"
data-bs-target="#menu">

<span class="navbar-toggler-icon"></span>

</button>

<div class="collapse navbar-collapse" id="menu">

<ul class="navbar-nav ms-auto">

<li class="nav-item">
<a class="nav-link" href="#home">Home</a>
</li>

<li class="nav-item">
<a class="nav-link" href="#layanan">Layanan</a>
</li>

<li class="nav-item">
<a class="nav-link" href="#tracking">Tracking</a>
</li>

<li class="nav-item">
<a class="nav-link" href="#kontak">Kontak</a>
</li>

</ul>

<a href="/login" class="btn btn-primary ms-3">
Masuk
</a>

</div>

</div>

</nav>

<section id="home" class="hero-section d-flex align-items-center">

<div class="container">

<div class="row align-items-center">

<div class="col-lg-6">

<span class="hero-badge">

Laundry Modern Terpercaya

</span>

<h1 class="display-3 fw-bold mt-4">

Laundry Antar Jemput
Tanpa Ribet

</h1>

<p class="lead mt-4">

Jadwalkan penjemputan laundry,
pantau proses pencucian secara realtime,
dan nikmati pakaian bersih langsung
diantar ke rumah Anda.

</p>

<div class="mt-4">

<a href="{{ route('login') }}"
   class="btn btn-primary btn-lg me-2">

    Pesan Sekarang

</a>

<a href="#tracking"
class="btn btn-outline-light btn-lg">

Lacak Laundry

</a>

</div>

</div>

<div class="col-lg-6 text-center">

<img
src="https://images.unsplash.com/photo-1604335399105-a0c585fd81a1?w=1200"
class="img-fluid hero-image">

</div>

</div>

</div>

</section>

<section class="py-5">

<div class="container">

<div class="row g-4">

<div class="col-md-3">

<div class="card stat-card shadow text-center p-4">

<h2 class="text-primary fw-bold">
150+
</h2>

Pelanggan Aktif

</div>

</div>

<div class="col-md-3">

<div class="card stat-card shadow text-center p-4">

<h2 class="text-primary fw-bold">
400+
</h2>

Pesanan

</div>

</div>

<div class="col-md-3">

<div class="card stat-card shadow text-center p-4">

<h2 class="text-primary fw-bold">
92%
</h2>

Kepuasan

</div>

</div>

<div class="col-md-3">

<div class="card stat-card shadow text-center p-4">

<h2 class="text-primary fw-bold">
24/7
</h2>

Customer Service

</div>

</div>

</div>

</div>

</section>

<section id="layanan" class="py-5 bg-light">

<div class="container">

<div class="text-center mb-5">

<h2 class="fw-bold display-5">
Layanan Kami
</h2>

<p class="text-muted">
Berbagai layanan laundry profesional untuk kebutuhan harian Anda.
</p>

</div>

<div class="row g-4">

<div class="col-md-4">
<div class="card service-card shadow h-100">
<div class="card-body text-center p-4">

<div class="service-icon">
<i class="bi bi-basket"></i>
</div>

<h4 class="mt-4">Laundry Kiloan</h4>

<p class="text-muted">
Layanan cuci pakaian harian dengan harga ekonomis.
</p>

</div>
</div>
</div>

<div class="col-md-4">
<div class="card service-card shadow h-100">
<div class="card-body text-center p-4">

<div class="service-icon">
<i class="bi bi-lightning-charge"></i>
</div>

<h4 class="mt-4">Laundry Express</h4>

<p class="text-muted">
Selesai dalam hitungan jam untuk kebutuhan mendesak.
</p>

</div>
</div>
</div>

<div class="col-md-4">
<div class="card service-card shadow h-100">
<div class="card-body text-center p-4">

<div class="service-icon">
<i class="bi bi-truck"></i>
</div>

<h4 class="mt-4">Antar Jemput</h4>

<p class="text-muted">
Kurir menjemput dan mengantar laundry langsung ke rumah.
</p>

</div>
</div>
</div>

<div class="col-md-4">
<div class="card service-card shadow h-100">
<div class="card-body text-center p-4">

<div class="service-icon">
<i class="bi bi-shoe-print"></i>
</div>

<h4 class="mt-4">Cuci Sepatu</h4>

<p class="text-muted">
Membersihkan sepatu dengan metode khusus agar tetap awet.
</p>

</div>
</div>
</div>

<div class="col-md-4">
<div class="card service-card shadow h-100">
<div class="card-body text-center p-4">

<div class="service-icon">
<i class="bi bi-house"></i>
</div>

<h4 class="mt-4">Cuci Karpet</h4>

<p class="text-muted">
Karpet lebih bersih, bebas debu dan bau tidak sedap.
</p>

</div>
</div>
</div>

<div class="col-md-4">
<div class="card service-card shadow h-100">
<div class="card-body text-center p-4">

<div class="service-icon">
<i class="bi bi-stars"></i>
</div>

<h4 class="mt-4">Laundry Premium</h4>

<p class="text-muted">
Paket eksklusif dengan antar jemput  dan cuci setrika.
</p>

</div>
</div>
</div>

</div>

</div>

</section>

<section class="py-5">

<div class="container">

<div class="text-center mb-5">

<h2 class="fw-bold display-5">
Cara Kerja
</h2>

<p class="text-muted">
Proses laundry mudah hanya dalam 4 langkah.
</p>

</div>

<div class="row g-4 text-center">

<div class="col-md-3">

<div class="process-box">

<h1 class="text-primary">1</h1>

<h5>Buat Pesanan</h5>

<p>
Isi form pemesanan melalui website.
</p>

</div>

</div>

<div class="col-md-3">

<div class="process-box">

<h1 class="text-primary">2</h1>

<h5>Kurir Menjemput</h5>

<p>
Laundry dijemput sesuai jadwal yang dipilih.
</p>

</div>

</div>

<div class="col-md-3">

<div class="process-box">

<h1 class="text-primary">3</h1>

<h5>Proses Laundry</h5>

<p>
Pakaian dicuci dan disetrika secara profesional.
</p>

</div>

</div>

<div class="col-md-3">

<div class="process-box">

<h1 class="text-primary">4</h1>

<h5>Pesanan Diantar</h5>

<p>
Laundry selesai dan dikirim kembali ke rumah.
</p>

</div>

</div>

</div>

</div>

</section>

<section id="tracking" class="py-5 bg-light">

<div class="container">

<div class="row align-items-center">

<div class="col-lg-6">

<h2 class="fw-bold display-6">

Tracking Laundry Realtime

</h2>

<p class="text-muted mt-3">

Pantau status laundry Anda secara langsung tanpa perlu bertanya kepada admin.

</p>

<ul class="list-group">

<li class="list-group-item text-success">
✓ Dijemput
</li>

<li class="list-group-item text-success">
✓ Dicuci
</li>

<li class="list-group-item text-success">
✓ Disetrika
</li>

<li class="list-group-item text-warning">
⏳ Dalam Pengantaran
</li>

</ul>

</div>

<div class="col-lg-6">

<div class="tracking-box">

<h4>INV-2026-001</h4>

<hr>

<p>
Status Terakhir:
<b class="text-warning">
Dalam Pengantaran
</b>
</p>

<p>
Estimasi tiba:
30 Menit Lagi
</p>

</div>

</div>

</div>

</div>

</section>

<section class="py-5">

<div class="container">

<div class="text-center mb-5">

<h2 class="fw-bold">
Apa Kata Pelanggan Kami?
</h2>

</div>

<div class="row g-4">

<div class="col-md-4">

<div class="card testimonial-card shadow p-4">

<h5>Andi Saputra</h5>

<p class="text-warning">
★★★★★
</p>

<p>
Pelayanannya cepat dan hasil cucian sangat bersih.
</p>

</div>

</div>

<div class="col-md-4">

<div class="card testimonial-card shadow p-4">

<h5>Rina Putri</h5>

<p class="text-warning">
★★★★★
</p>

<p>
Fitur tracking sangat membantu mengetahui status laundry.
</p>

</div>

</div>

<div class="col-md-4">

<div class="card testimonial-card shadow p-4">

<h5>Budi Santoso</h5>

<p class="text-warning">
★★★★★
</p>

<p>
Kurir selalu tepat waktu saat menjemput dan mengantar.
</p>

</div>

</div>

</div>

</div>

</section>

<section class="py-5 bg-primary text-white">

    <div class="container text-center">

        <h2 class="fw-bold display-6">
            Siap Mencuci Tanpa Ribet?
        </h2>

        <p class="lead mt-3">
            Daftar sekarang dan nikmati layanan laundry modern
            dengan antar jemput gratis.
        </p>

        <a href="{{ route('login') }}"
           class="btn btn-light btn-lg mt-3">

            Pesan Sekarang

        </a>

    </div>

</section>

<footer id="kontak" class="footer text-white py-5">

<div class="container">

<div class="row">

<div class="col-md-4">

<h4>AntriLaundry</h4>

<p>
Solusi laundry modern dengan sistem booking dan tracking realtime.
</p>

</div>

<div class="col-md-3">

<h5>Layanan</h5>

<ul class="list-unstyled">

<li>Laundry Kiloan</li>
<li>Laundry Express</li>
<li>Cuci Sepatu</li>

</ul>

</div>

<div class="col-md-3">

<h5>Kontak</h5>

<p>

📞 08123456789<br>
📧 admin@antrilaundry.com

</p>

</div>

<div class="col-md-2">

<h5>Sosial Media</h5>

<i class="bi bi-instagram me-2"></i>
<i class="bi bi-facebook me-2"></i>
<i class="bi bi-whatsapp"></i>

</div>

</div>

<hr>

<div class="text-center">

© 2026 AntriLaundry

</div>

</div>

</footer>

@endsection