<x-guest-layout>

    <div class="text-center mb-4">

        <h2 class="fw-bold text-dark">
            Reset Password
        </h2>

        <p class="text-muted">
            Buat password baru untuk akun Anda
        </p>

    </div>

    <form method="POST" action="{{ route('password.store') }}">
        @csrf

        <input
            type="hidden"
            name="token"
            value="{{ $request->route('token') }}">

        <div class="mb-3">

            <label class="form-label fw-semibold">
                Email
            </label>

            <input
                type="email"
                name="email"
                value="{{ old('email', $request->email) }}"
                class="form-control form-control-lg"
                readonly>

        </div>

        <div class="mb-3">

            <label class="form-label fw-semibold">
                Password Baru
            </label>

            <input
                type="password"
                id="password"
                name="password"
                class="form-control form-control-lg"
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
                required>

        </div>

        <button
            class="btn btn-primary btn-lg w-100">

            Simpan Password Baru

        </button>

    </form>

</x-guest-layout>