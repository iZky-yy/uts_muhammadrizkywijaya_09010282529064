<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Detail Buku</title>
</head>
<body>

<h1>Detail Buku</h1>

<p><strong>Judul:</strong> {{ $book->title }}</p>
<p><strong>Penulis:</strong> {{ $book->author }}</p>
<p><strong>Penerbit:</strong> {{ $book->publisher }}</p>
<p><strong>Tahun:</strong> {{ $book->year }}</p>
<p><strong>Stok:</strong> {{ $book->stock }}</p>
<p><strong>Kategori:</strong> {{ $book->category->name }}</p>

<a href="{{ route('books.index') }}">Kembali</a>
<a href="{{ route('books.edit', $book) }}">Edit</a>

</body>
</html>
