resources/views/catalog/index.blade.php:
<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Katalog Perpustakaan</title>
    </head>
<body>
    <h1>Katalog Perpustakaan</h1>
    <div>
        <form method="GET" action="{{ route('catalog.index') }}">
            <label for="category">Kategori:</label>
                <select name="category" id="category">
                    <option value="books">Books</option>
                    <option value="journals">Journals</option>
                    <option value="cds">CD</option>
                    <option value="newspapers">Newspapers</option>
                    <option value="final_year_projects">Final Year Projects</option>
                </select>

            <label for="sort">Urutkan:</label>
                <select name="sort" id="sort">
                    <option value="asc">Ascending</option>
                    <option value="desc">Descending</option>
                </select>

        <button type="submit">Cari</button>
        </form>

        <table cellpadding="10" cellspacing="0">
            <thead>
                <tr>
                    <th>Judul</th>
                    <th>Detail</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($catalog as $item)
                    <tr>
                    <td>{{ $item->judul }}</td>
                    <td><a href="#">Lihat Detail</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
