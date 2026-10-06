<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Buku - Perpustakaan</title>
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
                        SMA Negeri 1
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
            <div class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden">
                <div class="px-6 py-5 border-b border-gray-200">
                    <p class="text-sm text-gray-500 mb-1">
                        Detail Buku
                    </p>
                    <h2 class="text-2xl font-bold text-gray-800">
                        {{ $book->title }}
                    </h2>
                </div>
                <div class="p-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>

                            <p class="text-sm text-gray-500 mb-1">
                                Penulis
                            </p>

                            <p class="font-medium text-gray-800">
                                {{ $book->author }}
                            </p>

                        </div>
                        <div>

                            <p class="text-sm text-gray-500 mb-1">
                                Penerbit
                            </p>

                            <p class="font-medium text-gray-800">
                                {{ $book->publisher }}
                            </p>

                        </div>
                        <div>

                            <p class="text-sm text-gray-500 mb-1">
                                Tahun Terbit
                            </p>

                            <p class="font-medium text-gray-800">
                                {{ $book->year }}
                            </p>

                        </div>
                        <div>

                            <p class="text-sm text-gray-500 mb-1">
                                Stok
                            </p>
                            <span
                                class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium
                            {{ $book->stock > 0 ? 'bg-blue-50 text-blue-600' : 'bg-red-50 text-red-600' }}">
                                {{ $book->stock }} buku
                            </span>
                        </div>
                        <div>
                            <p class="text-sm text-gray-500 mb-1">
                                Kategori
                            </p>
                            <span
                                class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-medium bg-gray-100 text-gray-600">
                                {{ $book->category->name }}
                            </span>
                        </div>
                    </div>
                </div>
                <div class="px-6 py-4 bg-gray-50 border-t border-gray-200">
                    <div class="flex justify-end gap-3">
                        <a href="{{ route('books.index') }}"
                            class="px-5 py-2.5 border border-gray-300 rounded-lg text-gray-700 hover:bg-white">
                            Kembali
                        </a>
                        <a href="{{ route('books.edit', $book) }}"
                            class="px-5 py-2.5 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                            Edit Buku
                        </a>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>

</html>
