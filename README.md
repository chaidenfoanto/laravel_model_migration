# Laravel Project - Model & Migration untuk Tabel Books dan Journals
## Chaiden Richardo Foanto - 0806022310023

## Deskripsi
Project ini dibuat sebagai latihan untuk memahami pembuatan model dan migrasi database menggunakan framework Laravel. Project ini terdiri dari dua tabel utama dalam database MySQL, yaitu `books` dan `journals`, yang masing-masing memiliki model dan migrasi tersendiri.

## Struktur Database
1. **Tabel `books`**:
   Tabel ini menyimpan data terkait buku dengan kolom:
   - **judul** (string): Judul buku
   - **pengarang** (string): Nama pengarang buku
   - **penerbit** (string): Nama penerbit buku
   - **tahunTerbit** (date): Tahun terbit buku
   - **stock** (integer): Jumlah stok buku (default: 0)

2. **Tabel `journals`**:
   Tabel ini menyimpan data terkait jurnal dengan kolom:
   - **judul** (string): Judul jurnal
   - **penulis** (string): Nama penulis jurnal
   - **tahunTerbit** (date): Tahun terbit jurnal

## Persiapan Database
Pastikan Anda telah mengonfigurasi database MySQL di file `.env` dengan informasi berikut:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
```

## Langkah-Langkah Instalasi
1. Clone Repository:
```bash
git clone <https://github.com/chaidenfoanto/laravel_model_migration/edit/main/>
cd <laravel_model_migration>
```
2. Install Dependensi:
```bash
composer install
```
3. Konfigurasi File `.env`: Sesuaikan pengaturan database di file `.env.`
4. Jalankan Migrasi Database:
```bash
php artisan migrate
```

## Model
### Model `Book`
Model ini terletak di `app/Models/books.php` dan memiliki atribut `fillable` untuk kolom berikut:
- `judul`
- `pengarang`
- `penerbit`
- `tahunTerbit`
- `stock`

### Model `Journal`
Model ini terletak di `app/Models/journal.php` dan memiliki atribut `fillable` untuk kolom berikut:
- `judul`
- `penulis`
- `tahunTerbit`

## Migrasi
### Migrasi `books`
Terdapat di `database/migrations/xxxx_xx_xx_create_books_table.php`, yang menciptakan tabel `books` dengan kolom-kolom sebagai berikut:
- `id` (primary key)
- `judul` (string)
- `pengarang` (string)
- `penerbit` (string)
- `tahunTerbit` (date)
- `stock` (integer, default: 0)

### Migrasi `journals`
Terdapat di `database/migrations/xxxx_xx_xx_create_journals_table.php`, yang menciptakan tabel `journals` dengan kolom-kolom sebagai berikut:
- `id` (primary key)
- `judul` (string)
- `penulis` (string)
- `tahunTerbit` (date)

## Penggunaan
Setelah migrasi berhasil, Anda dapat melakukan operasi CRUD pada tabel `books` dan `journals` melalui model `books` dan `journal`.

### Contoh Penggunaan
Berikut adalah contoh cara menggunakan model `books` dan `journal`:

```php
use App\Models\books;
use App\Models\journal;

// Membuat entri baru di tabel books
books::create([
    'judul' => 'Contoh Buku',
    'pengarang' => 'Penulis Buku',
    'penerbit' => 'Penerbit Buku',
    'tahunTerbit' => '2024-01-01',
    'stock' => 10
]);

// Membuat entri baru di tabel journals
journal::create([
    'judul' => 'Contoh Jurnal',
    'penulis' => 'Penulis Jurnal',
    'tahunTerbit' => '2023-01-01'
]);

// Mengambil semua buku
$books = books::all();

// Mengambil semua jurnal
$journals = journal::all();

// Mengupdate entri buku
$book = books::find(1);
$book->update(['stock' => 15]);

// Menghapus entri jurnal
$journal = journal::find(1);
$journal->delete();
```
