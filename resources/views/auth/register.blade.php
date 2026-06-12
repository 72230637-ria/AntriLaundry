<x-guest-layout>

    <div class="text-center mb-4">

        <h2 class="fw-bold text-dark">
            Buat Akun Baru
        </h2>

        <p class="text-muted">
            Daftar dan mulai menggunakan layanan AntriLaundry
        </p>

    </div>

    @if ($errors->any())

        <div class="alert alert-danger">

            <ul class="mb-0">

                @foreach ($errors->all() as $error)

                    <li>{{ $error }}</li>

                @endforeach

            </ul>

        </div>

    @endif

    <form method="POST"
          action="{{ route('register') }}">

        @csrf

        <div class="mb-3">

            <label class="form-label fw-semibold">

                Nama Lengkap

            </label>

            <input
                type="text"
                name="name"
                value="{{ old('name') }}"
                class="form-control form-control-lg"
                placeholder="Nama lengkap"
                required>

        </div>

        <div class="mb-3">

            <label class="form-label fw-semibold">

                Email

            </label>

            <input
                type="email"
                name="email"
                value="{{ old('email') }}"
                class="form-control form-control-lg"
                placeholder="Email aktif"
                required>

        </div>

        <div class="mb-3">

            <label class="form-label fw-semibold">

                Password

            </label>

            <input
                type="password"
                name="password"
                class="form-control form-control-lg"
                placeholder="Password"
                required>

        </div>

        <div class="mb-4">

            <label class="form-label fw-semibold">

                Konfirmasi Password

            </label>

            <input
                type="password"
                name="password_confirmation"
                class="form-control form-control-lg"
                placeholder="Ulangi password"
                required>

        </div>

        <button
            type="submit"
            class="btn btn-success btn-lg w-100">

            Daftar Sekarang

        </button>

        <div class="text-center mt-4">

            Sudah punya akun?

            <a href="{{ route('login') }}"
               class="text-primary fw-bold text-decoration-none">

                Login

            </a>

        </div>

    </form>

</x-guest-layout>