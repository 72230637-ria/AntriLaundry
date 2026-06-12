<x-guest-layout>

    <div class="text-center mb-4">

        <h2 class="fw-bold text-dark">
            Selamat Datang Kembali
        </h2>

        <p class="text-muted">
            Login untuk mengelola pesanan laundry Anda
        </p>

    </div>

    @if(session('status'))

        <div class="alert alert-success">

            @if ($errors->any())

                <div class="alert alert-danger">

                    <ul class="mb-0">

                        @foreach ($errors->all() as $error)

                            <li>{{ $error }}</li>

                        @endforeach

                    </ul>

                </div>

            @endif

        </div>

    @endif

    <form method="POST" action="{{ route('login') }}">

        @csrf

        <div class="mb-3">

            <label class="form-label fw-semibold">
                Email
            </label>

            <input
                type="email"
                name="email"
                value="{{ old('email') }}"
                class="form-control form-control-lg"
                placeholder="Masukkan email"
                required
                autofocus>

        </div>

        <div class="mb-3">

            <label class="form-label fw-semibold">
                Password
            </label>

                <input
                    type="password"
                    name="password"
                    class="form-control form-control-lg"
                    placeholder="Masukkan password"
                    required>

        </div>
        <script>
            function togglePassword() {

                const password =
                    document.getElementById('password');

                const icon =
                    document.getElementById('eyeIcon');

                if(password.type === 'password'){
                    password.type = 'text';
                    icon.classList.remove('bi-eye');
                    icon.classList.add('bi-eye-slash');
                }else{
                    password.type = 'password';
                    icon.classList.remove('bi-eye-slash');
                    icon.classList.add('bi-eye');
                }
            }
        </script>

        <div class="d-flex justify-content-between align-items-center mb-4">

            <div class="form-check">

                <input
                    class="form-check-input"
                    type="checkbox"
                    name="remember">

                <label class="form-check-label">

                    Ingat Saya

                </label>

            </div>

            <a href="{{ route('password.request') }}"
               class="text-decoration-none">

                Lupa Password?

            </a>

        </div>

        <button
            type="submit"
            class="btn btn-primary btn-lg w-100">

            Login Sekarang

        </button>

        <div class="text-center mt-4">

            Belum punya akun?

            <a href="{{ route('register') }}"
               class="text-primary fw-bold text-decoration-none">

                Daftar

            </a>

        </div>

    </form>

</x-guest-layout>