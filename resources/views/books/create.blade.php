<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Buku</title>
</head>
<body>

<h1>Tambah Buku</h1>

<form action="{{ route('books.store') }}" method="POST">
    @csrf

    <label>Judul</label><br>
    <input type="text" name="title" value="{{ old('title') }}">
    <br><br>

    <label>Penulis</label><br>
    <input type="text" name="author" value="{{ old('author') }}">
    <br><br>

    <label>Penerbit</label><br>
    <input type="text" name="publisher" value="{{ old('publisher') }}">
    <br><br>

    <label>Tahun Terbit</label><br>
    <input type="number" name="year" value="{{ old('year') }}">
    <br><br>

    <label>Stok</label><br>
    <input type="number" name="stock" value="{{ old('stock') }}">
    <br><br>

    <label>Kategori</label><br>
    <select name="category_id">
        <option value="">-- Pilih Kategori --</option>

        @foreach($categories as $category)
            <option value="{{ $category->id }}">
                {{ $category->name }}
            </option>
        @endforeach
    </select>

    <br><br>

    <button type="submit">Simpan</button>
    <a href="{{ route('books.index') }}">Kembali</a>
</form>

</body>
</html>
