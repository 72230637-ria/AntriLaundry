<x-guest-layout>

    <div class="text-center mb-4">

        <h2 class="fw-bold">
            Lupa Password
        </h2>

        <p class="text-muted">

            Masukkan email untuk menerima
            link reset password.

        </p>

    </div>

    @if(session('status'))

        <div class="alert alert-success">

            {{ session('status') }}

        </div>

    @endif

    <form
        method="POST"
        action="{{ route('password.email') }}">

        @csrf

        <div class="mb-4">

            <label class="form-label fw-semibold">

                Email

            </label>

            <input
                type="email"
                name="email"
                value="{{ old('email') }}"
                class="form-control form-control-lg"
                required>

        </div>

        <button
            type="submit"
            class="btn btn-primary w-100 btn-lg">

            Kirim Link Reset

        </button>

        <div class="text-center mt-3">

            <a
                href="{{ route('login') }}"
                class="text-decoration-none">

                Kembali ke Login

            </a>

        </div>

    </form>

</x-guest-layout>