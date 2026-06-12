<x-guest-layout>

    <div class="text-center">

        <i class="bi bi-envelope-check-fill
                  text-primary fs-1"></i>

        <h2 class="fw-bold mt-3">
            Verifikasi Email
        </h2>

        <p class="text-muted">

            Kami telah mengirim link verifikasi
            ke email Anda.

            Silakan buka email dan klik link
            verifikasi untuk mengaktifkan akun.

        </p>

        @if(session('status') == 'verification-link-sent')

            <div class="alert alert-success">

                Link verifikasi baru berhasil dikirim.

            </div>

        @endif

    </div>

    <form
        method="POST"
        action="{{ route('verification.send') }}">

        @csrf

        <button
            type="submit"
            class="btn btn-primary w-100">

            Kirim Ulang Link Verifikasi

        </button>

    </form>

    <form
        method="POST"
        action="{{ route('logout') }}"
        class="mt-3">

        @csrf

        <button
            type="submit"
            class="btn btn-outline-danger w-100">

            Keluar

        </button>

    </form>

</x-guest-layout>