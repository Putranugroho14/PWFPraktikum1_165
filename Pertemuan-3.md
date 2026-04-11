Modul Pertemuan 3: ERD, Model, dan Migration Database
======================================================

**Tujuan Pembelajaran:**
- Mahasiswa dapat membaca dan memahami struktur rancangan database melalui Entity Relationship Diagram (ERD).
- Mahasiswa mampu mengonfigurasi koneksi database pada project Laravel.
- Mahasiswa memahami konsep Model dan Migration.
- Mahasiswa mampu membuat file Model dan Migration menggunakan perintah Artisan.

1\. Analisis Entity Relationship Diagram (ERD)
----------------------------------------------
Berdasarkan rancangan sistem yang akan dibangun, terdapat tiga entitas utama yang saling berelasi:
1. **User**: Entitas ini merepresentasikan pengguna sistem. Atribut yang dimiliki antara lain `id`, `name`, `email`, dan `password`.
2. **Product**: Entitas ini merepresentasikan produk yang dibuat oleh pengguna. Atribut yang dimiliki antara lain `id`, `user_id`, `name`, `qty`, dan `price`.
3. **Kategori**: Entitas ini merepresentasikan kategori dari produk. Atribut yang dimiliki antara lain `id`, `product_id`, dan `name`.

*Catatan: Pada Laravel, tabel user biasanya sudah disediakan secara bawaan (tabel users), namun struktur kolomnya dapat disesuaikan dengan rancangan ERD di atas.*

2\. Konfigurasi Koneksi Database
--------------------------------
Sebelum membuat tabel, Laravel harus dihubungkan dengan server database (misalnya MySQL/MariaDB melalui XAMPP atau Laragon).
1. Buka aplikasi database client (seperti phpMyAdmin atau HeidiSQL) dan buat sebuah database baru (contoh: db_pertemuan3).
2. Buka file bernama `.env` yang berada di direktori paling luar (root) project Laravel Anda.
3. Cari bagian konfigurasi database dan sesuaikan nilainya:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=db_pertemuan3
DB_USERNAME=root
DB_PASSWORD=
```
4. Simpan perubahan pada file .env.

3\. Pengenalan Model dan Migration
----------------------------------
- **Model**: Model adalah representasi dari tabel dalam database. Model digunakan untuk berinteraksi dengan data di dalam tabel, seperti melakukan query, insert, update, dan delete.
- **Migration**: Sistem version control untuk struktur database. Migration memungkinkan tim pengembang untuk membuat dan memodifikasi tabel database secara terstruktur melalui baris kode, sehingga tidak perlu membuat tabel secara manual di phpMyAdmin.

Cara membuat Model dan Migration:
Untuk membuat Model beserta file Migration-nya secara bersamaan, jalankan perintah Artisan berikut di dalam terminal:
```bash
php artisan make:model NamaModel -m
```
- Flag -m berfungsi untuk menginstruksikan Laravel agar langsung membuatkan file migration untuk model tersebut.
- File Model akan tersimpan di dalam folder `app/Models/`.
- File Migration akan tersimpan di dalam folder `database/migrations/`.

4\. Penugasan Praktikum
------------------------
Tugas Anda pada pertemuan ini adalah mengimplementasikan ERD ke dalam project Laravel:

1. Konfigurasikan file `.env` project Anda agar terhubung dengan database lokal.
2. Buatlah Model dan Migration untuk entitas Product.
3. Buatlah Model dan Migration untuk entitas Kategori.
4. Buka file Migration yang baru saja dibuat di folder `database/migrations/` dan definisikan tipe data beserta relasi antar kolom sesuai dengan rancangan ERD pada gambar (Primary Key dan Foreign Key).
5. Setelah struktur Migration selesai dikonfigurasi, jalankan perintah migrasi di terminal untuk mengeksekusi pembuatan tabel di database:
```bash
php artisan migrate
```
6. Cek phpMyAdmin Anda dan pastikan tabel-tabel tersebut sudah berhasil terbentuk dengan struktur kolom yang tepat.

**Catatan:** Pastikan untuk selalu menjalankan perintah `php artisan migrate` setiap kali Anda melakukan perubahan pada file Migration agar perubahan tersebut dapat diterapkan ke database.

Screemshot ERD

![erd](/screenshoot/pertemuan-3/done.png)

*Sertakan screenshot pada model, migration, dan database*

5\. Resource Belajar
- [Laravel Documentation - Database: Migrations](https://laravel.com/docs/12.x/migrations)
- [Laravel Documentation - Eloquent ORM](https://laravel.com/docs/12.x/eloquent)
- [Tutorial Laravel - Membuat Model dan Migration](https://santrikoding.com/tutorial-laravel-12-4-membuat-model-dan-migration)
- [Video Tutorial Laravel - Migrations](https://youtu.be/eghZY9-3Wko?si=kj9x9rpC-9-KTmAC)
