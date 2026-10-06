<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Perpustakaan</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50 min-h-screen">
    <div class="min-h-screen flex items-center justify-center px-6 py-10">
        <div class="w-full max-w-md">
            <div class="text-center mb-8">
                <div
                    class="inline-flex items-center justify-center w-16 h-16
                            bg-blue-600 rounded-2xl shadow-lg mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5
                               S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18
                               7.5 18s3.332-.477 4.5-1.253m0-10.494
                               C13.168 5.477 14.754 5 16.5 5
                               c1.746 0 3.332.477 4.5 1.253v13
                               C19.832 18.477 18.246 18 16.5 18
                               c-1.746 0-3.332-.477-4.5-1.253" />
                    </svg>
                </div>
                <h1 class="text-2xl font-bold text-gray-800">
                    Perpustakaan
                </h1>
                <p class="text-sm text-gray-500 mt-1">
                    Universitas Sriwijaya
                </p>
                <p class="text-gray-600 mt-5">
                    Silakan masuk untuk mengakses sistem perpustakaan.
                </p>
            </div>
            <div class="bg-white border border-gray-200 rounded-2xl shadow-sm p-7">
                <div class="mb-6">
                    <h2 class="text-xl font-semibold text-gray-800">
                        Selamat Datang
                    </h2>
                    <p class="text-sm text-gray-500 mt-1">
                        Masuk menggunakan akun Anda.
                    </p>
                </div>
                <x-auth-session-status class="mb-4" :status="session('status')" />
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                            Email
                        </label>
                        <div class="relative">
                            <div
                                class="absolute inset-y-0 left-0 pl-3
                                        flex items-center pointer-events-none">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0
                                           4 4 0 008 0zm0 0v1.5
                                           a2.5 2.5 0 005 0V12
                                           a9 9 0 10-9 9m4.5-1.206
                                           a8.962 8.962 0 01-4.5 1.207" />
                                </svg>
                            </div>
                            <input id="email" type="email" name="email" value="{{ old('email') }}" required
                                autofocus autocomplete="username" placeholder="Masukkan email Anda"
                                class="w-full pl-10 pr-4 py-3
                                       border border-gray-300
                                       rounded-lg
                                       text-sm text-gray-800
                                       placeholder-gray-400
                                       focus:outline-none
                                       focus:ring-2
                                       focus:ring-blue-500
                                       focus:border-blue-500">
                        </div>
                        @error('email')
                            <p class="text-red-500 text-sm mt-1">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                    <div class="mt-5">
                        <label for="password" class="block text-sm font-medium text-gray-700 mb-2">
                            Password
                        </label>
                        <div class="relative">
                            <div
                                class="absolute inset-y-0 left-0 pl-3
                                        flex items-center pointer-events-none">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12
                                           a2 2 0 002-2v-6
                                           a2 2 0 00-2-2H6
                                           a2 2 0 00-2 2v6
                                           a2 2 0 002 2zm10-10V7
                                           a4 4 0 00-8 0v2h8z" />
                                </svg>
                            </div>
                            <input id="password" type="password" name="password" required
                                autocomplete="current-password" placeholder="Masukkan password Anda"
                                class="w-full pl-10 pr-4 py-3
                                       border border-gray-300
                                       rounded-lg
                                       text-sm text-gray-800
                                       placeholder-gray-400
                                       focus:outline-none
                                       focus:ring-2
                                       focus:ring-blue-500
                                       focus:border-blue-500">
                        </div>
                        @error('password')
                            <p class="text-red-500 text-sm mt-1">
                                {{ $message }}
                            </p>
                        @enderror

                    </div>
                    <div class="flex items-center justify-between mt-5">
                        <label for="remember_me" class="inline-flex items-center cursor-pointer">
                            <input id="remember_me" type="checkbox" name="remember"
                                class="rounded border-gray-300
                                       text-blue-600
                                       shadow-sm
                                       focus:ring-blue-500">
                            <span class="ms-2 text-sm text-gray-600">
                                Ingat saya
                            </span>
                        </label>
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}"
                                class="text-sm text-blue-600
                                       hover:text-blue-700
                                       hover:underline">
                                Lupa password?
                            </a>
                        @endif

                    </div>
                    <button type="submit"
                        class="w-full mt-6
                               px-5 py-3
                               bg-blue-600
                               text-white
                               text-sm font-semibold
                               rounded-lg
                               shadow-sm
                               hover:bg-blue-700
                               focus:outline-none
                               focus:ring-2
                               focus:ring-blue-500
                               focus:ring-offset-2
                               transition">
                        Masuk ke Perpustakaan
                    </button>
                    @if (Route::has('register'))
                        <div class="text-center mt-6 pt-6
                                    border-t border-gray-100">
                            <span class="text-sm text-gray-500">
                                Belum punya akun?
                            </span>
                            <a href="{{ route('register') }}"
                                class="text-sm font-semibold
                                       text-blue-600
                                       hover:text-blue-700
                                       hover:underline ml-1">
                                Daftar sekarang
                            </a>
                        </div>
                    @endif
                </form>
            </div>
            <p class="text-center text-xs text-gray-400 mt-6">
                © {{ date('Y') }} Perpustakaan Universitas Sriwijaya
            </p>
        </div>
    </div>
</body>
</html>
