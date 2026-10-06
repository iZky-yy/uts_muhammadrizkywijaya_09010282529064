<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Buku - Perpustakaan</title>
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
                <div class="flex items-center gap-6">
                    <a href="{{ route('books.index') }}"
                        class="text-sm font-medium
                {{ request()->routeIs('books.*') ? 'text-blue-600' : 'text-gray-600 hover:text-blue-600' }}">
                        Buku
                    </a>
                    <a href="{{ route('categories.index') }}"
                        class="text-sm font-medium
                {{ request()->routeIs('categories.*') ? 'text-blue-600' : 'text-gray-600 hover:text-blue-600' }}">
                        Kategori
                    </a>
                </div>
                <div class="text-sm text-gray-700">
                    {{ auth()->user()->name }}
                </div>

            </div>
        </nav>
        <main class="max-w-7xl mx-auto px-6 py-8">
            <div class="flex items-center justify-between mb-6">
                <div>
                    <h2 class="text-2xl font-bold text-gray-800">
                        Data Buku
                    </h2>

                    <p class="text-gray-500 mt-1">
                        Kelola data buku perpustakaan.
                    </p>
                </div>
                <a href="{{ route('books.create') }}"
                    class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2.5 rounded-lg transition">
                    + Tambah Buku
                </a>

            </div>
            @if (session('success'))
                <div class="mb-5 bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded-lg">
                    {{ session('success') }}
                </div>
            @endif
            @if (session('error'))
                <div class="mb-5 bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-lg">
                    {{ session('error') }}
                </div>
            @endif
            @if ($errors->any())
                <div class="mb-5 bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-lg">
                    <ul class="list-disc ml-5">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden">
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead class="bg-gray-50 border-b border-gray-200">
                            <tr>
                                <th class="px-6 py-4 text-left text-sm font-semibold text-gray-700">
                                    No
                                </th>
                                <th class="px-6 py-4 text-left text-sm font-semibold text-gray-700">
                                    Judul
                                </th>
                                <th class="px-6 py-4 text-left text-sm font-semibold text-gray-700">
                                    Penulis
                                </th>
                                <th class="px-6 py-4 text-left text-sm font-semibold text-gray-700">
                                    Penerbit
                                </th>
                                <th class="px-6 py-4 text-left text-sm font-semibold text-gray-700">
                                    Tahun
                                </th>
                                <th class="px-6 py-4 text-left text-sm font-semibold text-gray-700">
                                    Stok
                                </th>
                                <th class="px-6 py-4 text-left text-sm font-semibold text-gray-700">
                                    Kategori
                                </th>
                                <th class="px-6 py-4 text-right text-sm font-semibold text-gray-700">
                                    Aksi
                                </th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100">
                            @forelse($books as $book)
                                <tr class="hover:bg-gray-50">
                                    <td class="px-6 py-4 text-sm text-gray-600">
                                        {{ $loop->iteration }}
                                    </td>
                                    <td class="px-6 py-4">
                                        <p class="font-medium text-gray-800">
                                            {{ $book->title }}
                                        </p>

                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-600">
                                        {{ $book->author }}
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-600">
                                        {{ $book->publisher }}
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-600">
                                        {{ $book->year }}
                                    </td>
                                    <td class="px-6 py-4">
                                        <span
                                            class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium
                                        {{ $book->stock > 0 ? 'bg-blue-50 text-blue-600' : 'bg-red-50 text-red-600' }}">
                                            {{ $book->stock }}
                                        </span>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span
                                            class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium bg-gray-100 text-gray-600">
                                            {{ $book->category->name }}
                                        </span>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex justify-end gap-2">
                                            <a href="{{ route('books.show', $book) }}"
                                                class="px-3 py-1.5 text-sm border border-gray-400 text-gray-600 rounded-lg hover:bg-gray-50">
                                                Detail
                                            </a>
                                            <a href="{{ route('books.edit', $book) }}"
                                                class="px-3 py-1.5 text-sm border border-blue-500 text-blue-600 rounded-lg hover:bg-blue-50">
                                                Edit
                                            </a>
                                            <form action="{{ route('books.destroy', $book) }}" method="POST"
                                                onsubmit="return confirm('Apakah kamu yakin ingin menghapus buku ini?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="px-3 py-1.5 text-sm border border-red-500 text-red-600 rounded-lg hover:bg-red-50">
                                                    Hapus
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="8" class="px-6 py-10 text-center text-gray-500">
                                        Belum ada data buku.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>
</body>

</html>
