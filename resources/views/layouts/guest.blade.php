<!DOCTYPE html>
<html lang="id">
<head>

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>{{ config('app.name') }}</title>

    <link rel="stylesheet"
          href="{{ asset('css/app.css') }}">

    <script src="{{ asset('js/app.js') }}" defer></script>

</head>

<body class="bg-light">

<div class="container-fluid">

    <div class="row vh-100 align-items-center">

        <!-- LEFT SIDE -->

        <div class="col-lg-6 d-none d-lg-flex align-items-center">

            <div class="px-5">

                <h1 class="display-2 fw-bold text-primary">

                    AntriLaundry

                </h1>

                <h3 class="mt-4 fw-bold">

                    Laundry Modern dengan Antar Jemput

                </h3>

                <p class="lead mt-3 text-muted">

                    Kelola pesanan laundry secara online,
                    pantau status realtime,
                    dan nikmati layanan profesional.

                </p>

            </div>

        </div>

        <!-- RIGHT SIDE -->

        <div class="col-lg-6 d-flex justify-content-center align-items-center">

            <div class="auth-card p-4">

                {{ $slot }}

            </div>

        </div>

    </div>

</div>

</body>
</html>