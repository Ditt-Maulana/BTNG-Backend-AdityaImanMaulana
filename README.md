# Nusantara Motors — Laravel 12 RESTful API

Backend API showroom mobil untuk tugas akhir BTNG. Project menggunakan Laravel 12, PHP 8.2+, MySQL, Eloquent ORM, Form Request validation, API Resource, seeder 12 mobil, dan Scramble untuk dokumentasi interaktif.

## Kebutuhan
- PHP 8.2+ dengan ekstensi `pdo_mysql`, `mbstring`, `openssl`, `tokenizer`, `xml`, `ctype`, `json`, `fileinfo`
- Composer 2
- MySQL 8+ (Laragon/XAMPP dapat digunakan)

## Menjalankan di komputer lokal
1. Ekstrak folder project ke direktori kerja.
2. Buka terminal di folder `nusantara-motors-laravel`.
3. Jalankan `composer install`.
4. Salin `.env.example` menjadi `.env`.
   - Windows CMD: `copy .env.example .env`
   - PowerShell: `Copy-Item .env.example .env`
   - macOS/Linux: `cp .env.example .env`
5. Buat database MySQL bernama `nusantara_motors` melalui phpMyAdmin atau MySQL.
6. Pastikan `DB_DATABASE`, `DB_USERNAME`, dan `DB_PASSWORD` di `.env` cocok dengan MySQL lokal.
7. Jalankan `php artisan key:generate`.
8. Jalankan `php artisan migrate --seed`.
9. Jalankan `php artisan serve`.
10. Buka `http://127.0.0.1:8000` dan dokumentasi API di `http://127.0.0.1:8000/docs/api`.

> Jangan upload `.env` berisi password ke GitHub. Hanya commit `.env.example`.

## Endpoint
| Method | Endpoint | Kegunaan |
|---|---|---|
| GET | `/api/mobil` | Daftar mobil (pagination) |
| GET | `/api/mobil/{id}` | Detail mobil |
| POST | `/api/mobil` | Tambah mobil |
| PUT/PATCH | `/api/mobil/{id}` | Ubah mobil |
| DELETE | `/api/mobil/{id}` | Hapus mobil |

Filter daftar: `?q=toyota`, `?brand=Honda`, `?status=tersedia`, `?per_page=10` (maksimum 100).

## Contoh body POST/PATCH
```json
{
  "nama": "Yaris Cross S HEV",
  "brand": "Toyota",
  "harga": 450000000,
  "tahun": 2025,
  "transmisi": "CVT",
  "bahan_bakar": "Hybrid",
  "status": "tersedia",
  "foto": "https://example.com/mobil.jpg"
}
```

Header request JSON: `Accept: application/json` dan untuk POST/PATCH `Content-Type: application/json`.

## Status response
- `200`: data berhasil diambil/diubah/dihapus
- `201`: data berhasil dibuat
- `404`: mobil tidak ditemukan (route model binding Laravel)
- `422`: validasi gagal, Laravel mengembalikan detail error dalam JSON

## Catatan Scramble
Scramble ditambahkan melalui Composer (`dedoc/scramble`) dan secara default menyediakan dokumentasi API pada `/docs/api`. Setelah `composer install`, periksa URL tersebut. Jika versi package yang terpasang menggunakan konfigurasi berbeda, ikuti petunjuk resmi package Scramble.

## Deployment
Deploy ke layanan PHP yang mendukung Laravel (misalnya Railway/Render dengan build PHP yang sesuai). Set environment variables di dashboard layanan: `APP_KEY`, `APP_ENV=production`, `APP_DEBUG=false`, `APP_URL`, `DB_CONNECTION=mysql`, `DB_HOST`, `DB_PORT`, `DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD`. Jalankan `php artisan migrate --force` setelah deploy. Jangan gunakan database lokal Laragon sebagai database cloud.

## Struktur utama
- `app/Models/Mobil.php`
- `app/Http/Controllers/Api/MobilController.php`
- `app/Http/Requests/StoreMobilRequest.php` dan `UpdateMobilRequest.php`
- `app/Http/Resources/MobilResource.php`
- `database/migrations/*create_mobil_table.php`
- `database/seeders/DatabaseSeeder.php`
- `routes/api.php`
