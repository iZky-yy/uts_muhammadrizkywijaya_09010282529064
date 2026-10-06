<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Kategori</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
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

<body class="bg-gray-50">
    <div class="max-w-2xl mx-auto px-6 py-10">
        <div class="mb-6">
            <a href="{{ route('categories.index') }}" class="text-sm text-blue-600 hover:underline">
                ← Kembali ke Kategori
            </a>
        </div>
        <div class="bg-white border border-gray-200 rounded-xl shadow-sm p-6">
            <h1 class="text-2xl font-bold text-gray-800">
                Edit Kategori
            </h1>
            <p class="text-gray-500 mt-1 mb-6">
                Perbarui informasi kategori.
            </p>
            <form action="{{ route('categories.update', $category) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-5">
                    <label for="name" class="block text-sm font-medium text-gray-700 mb-2">
                        Nama Kategori
                        <span class="text-red-500">*</span>
                    </label>
                    <input type="text" id="name" name="name" value="{{ old('name', $category->name) }}"
                        class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    @error('name')
                        <p class="text-red-500 text-sm mt-1">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="description" class="block text-sm font-medium text-gray-700 mb-2">
                        Deskripsi
                    </label>
                    <textarea id="description" name="description" rows="4"
                        class="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">{{ old('description', $category->description) }}</textarea>
                    @error('description')
                        <p class="text-red-500 text-sm mt-1">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="flex justify-end gap-3">
                    <a href="{{ route('categories.index') }}"
                        class="px-5 py-2.5 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50">
                        Batal
                    </a>
                    <button type="submit" class="px-5 py-2.5 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                        Update
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
