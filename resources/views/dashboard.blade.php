@extends('layouts.main')

@section('content')

<!-- Navbar Dashboard -->

<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">

    <div class="container">

        <a class="navbar-brand fw-bold fs-4">
            <i class="bi bi-droplet-half"></i>
            AntriLaundry
        </a>

        <div class="ms-auto d-flex align-items-center">

            <span class="text-white me-3">
                Halo, {{ Auth::user()->name }}
            </span>

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit" class="btn btn-light">
                    Logout
                </button>
            </form>

        </div>

    </div>

</nav>


<div class="container py-5">

    <!-- Welcome Card -->

    <div class="card border-0 shadow-lg mb-4">

        <div class="card-body p-4">

            <h2 class="fw-bold text-primary">
                Selamat Datang, {{ Auth::user()->name }} 👋
            </h2>

            <p class="text-muted mb-0">
                Pantau status laundry dan kelola pesanan Anda.
            </p>

        </div>

    </div>


    <!-- Statistik -->

    <div class="row g-4 mb-4">

        <div class="col-md-3">

            <div class="card shadow border-0 text-center p-4">

                <i class="bi bi-basket text-primary fs-1"></i>

                <h2 class="fw-bold mt-2">
                    5
                </h2>

                <p class="text-muted">
                    Total Pesanan
                </p>

            </div>

        </div>

        <div class="col-md-3">

            <div class="card shadow border-0 text-center p-4">

                <i class="bi bi-hourglass-split text-warning fs-1"></i>

                <h2 class="fw-bold mt-2">
                    2
                </h2>

                <p class="text-muted">
                    Dalam Proses
                </p>

            </div>

        </div>

        <div class="col-md-3">

            <div class="card shadow border-0 text-center p-4">

                <i class="bi bi-check-circle text-success fs-1"></i>

                <h2 class="fw-bold mt-2">
                    3
                </h2>

                <p class="text-muted">
                    Selesai
                </p>

            </div>

        </div>

        <div class="col-md-3">

            <div class="card shadow border-0 text-center p-4">

                <i class="bi bi-star text-danger fs-1"></i>

                <h2 class="fw-bold mt-2">
                    120
                </h2>

                <p class="text-muted">
                    Poin Member
                </p>

            </div>

        </div>

    </div>


    <!-- Laundry Terakhir -->

    <div class="card border-0 shadow-lg mb-4">

        <div class="card-body p-4">

            <h4 class="fw-bold mb-3">
                Laundry Terakhir
            </h4>

            <h5>
                INV-2026-001
            </h5>

            <span class="badge bg-warning text-dark">
                Dalam Pengantaran 🚚
            </span>

            <hr>

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
                    ⏳ Sedang Diantar
                </li>

            </ul>

        </div>

    </div>


    <!-- Tombol Aksi -->

    <div class="row g-3">

        <div class="col-md-6">

            <a href="#"
               class="btn btn-primary w-100 btn-lg">

                <i class="bi bi-plus-circle"></i>

                Booking Laundry

            </a>

        </div>

        <div class="col-md-6">

            <a href="#"
               class="btn btn-outline-primary w-100 btn-lg">

                <i class="bi bi-clock-history"></i>

                Riwayat Pesanan

            </a>

        </div>

    </div>

</div>

@endsection