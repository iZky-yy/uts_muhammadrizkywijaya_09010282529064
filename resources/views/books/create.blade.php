<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Buku - Perpustakaan</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50">
    <div class="min-h-screen">
        <nav class="bg-white border-b border-gray-200">
            <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">
                <div>
                    <h1 class="text-xl font-bold text-gray-800">
                        Perpustakaan
                    </h1>
                    <p class="text-sm text-gray-500">
                        Universitas Sriwijaya
                    </p>
                </div>
                <div class="text-sm text-gray-700">
                    {{ auth()->user()->name }}
                </div>
            </div>
        </nav>
        <main class="max-w-3xl mx-auto px-6 py-8">
            <div class="mb-6">
                <a href="{{ route('books.index') }}" class="text-sm text-blue-600 hover:underline">
                    ← Kembali ke Data Buku
                </a>
            </div>
            <div class="bg-white border border-gray-200 rounded-xl shadow-sm p-6">
                <div class="mb-6">
                    <h2 class="text-2xl font-bold text-gray-800">
                        Tambah Buku
                    </h2>
                    <p class="text-gray-500 mt-1">
                        Tambahkan data buku baru ke perpustakaan.
                    </p>
                </div>
                <form action="{{ route('books.store') }}" method="POST">
                    @csrf
                    <div class="mb-5">
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            Judul Buku
                            <span class="text-red-500">*</span>
                        </label>
                        <input type="text" name="title" value="{{ old('title') }}"
                            placeholder="Masukkan judul buku"
                            class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        @error('title')
                            <p class="text-red-500 text-sm mt-1">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                    <div class="mb-5">
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            Penulis
                            <span class="text-red-500">*</span>
                        </label>
                        <input type="text" name="author" value="{{ old('author') }}"
                            placeholder="Masukkan nama penulis"
                            class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        @error('author')
                            <p class="text-red-500 text-sm mt-1">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                    <div class="mb-5">
                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            Penerbit
                            <span class="text-red-500">*</span>
                        </label>
                        <input type="text" name="publisher" value="{{ old('publisher') }}"
                            placeholder="Masukkan nama penerbit"
                            class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        @error('publisher')
                            <p class="text-red-500 text-sm mt-1">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mb-5">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                Tahun Terbit
                                <span class="text-red-500">*</span>
                            </label>
                            <input type="number" name="year" value="{{ old('year') }}" placeholder="2026"
                                class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                            @error('year')
                                <p class="text-red-500 text-sm mt-1">
                                    {{ $message }}
                                </p>
                            @enderror

                        </div>
                        <div>

                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                Stok
                                <span class="text-red-500">*</span>
                            </label>
                            <input type="number" name="stock" value="{{ old('stock', 0) }}" min="0"
                                class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                            @error('stock')
                                <p class="text-red-500 text-sm mt-1">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-6">

                        <label class="block text-sm font-medium text-gray-700 mb-2">
                            Kategori
                            <span class="text-red-500">*</span>
                        </label>
                        <select name="category_id"
                            class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <option value="">
                                -- Pilih Kategori --
                            </option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}"
                                    {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('category_id')
                            <p class="text-red-500 text-sm mt-1">
                                {{ $message }}
                            </p>
                        @enderror

                    </div>
                    <div class="flex justify-end gap-3">
                        <a href="{{ route('books.index') }}"
                            class="px-5 py-2.5 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50">
                            Batal
                        </a>
                        <button type="submit" class="px-5 py-2.5 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                            Simpan
                        </button>
                    </div>
                </form>
            </div>
        </main>
    </div>
</body>

</html>
