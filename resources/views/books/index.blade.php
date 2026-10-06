<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Buku</title>
</head>
<body>

<h1>Data Buku</h1>

<a href="{{ route('books.create') }}">+ Tambah Buku</a>

@if(session('success'))
    <p style="color: green;">
        {{ session('success') }}
    </p>
@endif

<table border="1" cellpadding="8">
    <thead>
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Penerbit</th>
            <th>Tahun</th>
            <th>Stok</th>
            <th>Kategori</th>
            <th>Aksi</th>
        </tr>
    </thead>

    <tbody>
        @foreach($books as $book)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $book->title }}</td>
                <td>{{ $book->author }}</td>
                <td>{{ $book->publisher }}</td>
                <td>{{ $book->year }}</td>
                <td>{{ $book->stock }}</td>
                <td>{{ $book->category->name }}</td>
                <td>
                    <a href="{{ route('books.show', $book) }}">
                        Detail
                    </a>

                    <a href="{{ route('books.edit', $book) }}">
                        Edit
                    </a>

                    <form action="{{ route('books.destroy', $book) }}"
                          method="POST"
                          style="display:inline;">
                        @csrf
                        @method('DELETE')

                        <button type="submit"
                                onclick="return confirm('Hapus buku ini?')">
                            Hapus
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit">Logout</button>
</form>

</body>
</html>
