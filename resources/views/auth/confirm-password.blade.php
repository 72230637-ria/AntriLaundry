<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Konfirmasi Password - AntriLaundry</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-200 flex items-center justify-center min-h-screen">

    <div class="w-full max-w-md bg-white p-8 rounded-2xl shadow-lg">

        <!-- Branding -->
        <div class="text-center mb-6">
            <h1 class="text-2xl font-bold text-gray-800"> AntriLaundry</h1>
            <p class="text-sm text-gray-500 mt-1">
                Konfirmasi password untuk melanjutkan
            </p>
        </div>

        <!-- Deskripsi -->
        <p class="text-sm text-gray-600 mb-4 text-center">
            Demi keamanan, masukkan kembali password kamu.
        </p>

        <!-- Form -->
        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf

            <!-- Password -->
            <div class="mb-6">
                <label class="block mb-1 font-medium">Password</label>
                <input type="password" name="password"
                    required autocomplete="current-password"
                    class="w-full border px-3 py-2 rounded-lg focus:ring-2 focus:ring-blue-500">

                @error('password')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Tombol -->
            <div class="flex justify-end">
                <button type="submit"
                    class="bg-blue-600 text-white px-5 py-2 rounded-lg hover:bg-blue-700">
                    Konfirmasi
                </button>
            </div>

        </form>

    </div>

</body>
</html>