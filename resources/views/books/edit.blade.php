<form action="{{ route('books.update', $book) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Judul</label>
    <input type="text" name="title" value="{{ $book->title }}">

    <br><br>

    <label>Penulis</label>
    <input type="text" name="author" value="{{ $book->author }}">

    <br><br>

    <label>Penerbit</label>
    <input type="text" name="publisher" value="{{ $book->publisher }}">

    <br><br>

    <label>Tahun</label>
    <input type="number" name="year" value="{{ $book->year }}">

    <br><br>

    <label>Stok</label>
    <input type="number" name="stock" value="{{ $book->stock }}">

    <br><br>

    <label>Kategori</label>
    <select name="category_id">
        @foreach($categories as $category)
            <option value="{{ $category->id }}"
                {{ $book->category_id == $category->id ? 'selected' : '' }}>
                {{ $category->name }}
            </option>
        @endforeach
    </select>

    <br><br>

    <button type="submit">Update</button>
</form>
