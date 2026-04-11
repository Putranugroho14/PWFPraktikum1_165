Modul Pertemuan 5: Otorisasi (Authorization) - Role, Gate, dan Policy
=====================================================================

**Tujuan Pembelajaran**
1. Mahasiswa dapat memahami perbedaan mendasar antara Autentikasi (Authentication) dan Otorisasi (Authorization).
2. Mahasiswa memahami konsep *Role-Based Access Control (RBAC)* sederhana.
3. Mahasiswa mampu memahami dan mengimplementasikan Gate untuk pembatasan akses global.
4. Mahasiswa mampu memahami dan mengimplementasikan Policy untuk pembatasan akses yang spesifik pada suatu Model data.

1\. Autentikasi vs Otorisasi & Konsep Role
------------------------------------------
Sebelum membatasi akses, penting untuk memahami dua konsep ini:
- **Autentikasi (Authentication):** Proses memverifikasi siapa pengguna tersebut (Contoh: Proses Login menggunakan email dan password). Ini sudah diselesaikan pada Pertemuan 2 menggunakan Laravel Breeze.
- **Otorisasi (Authorization):** Proses memverifikasi apa saja yang boleh dilakukan oleh pengguna yang sudah login tersebut (Contoh: Apakah user ini boleh menghapus data produk?).

**Konsep Role (Peran):** Untuk memudahkan otorisasi, pengguna biasanya dikelompokkan berdasarkan peran atau *Role*. Misalnya, ada pengguna dengan peran `admin` dan ada yang `user` biasa. Praktik paling sederhana di Laravel adalah dengan menambahkan satu kolom baru (misalnya `role` atau `is_admin`) pada tabel `users` di database untuk membedakan hak akses mereka.

2\. Pengenalan Gate
-------------------
**Gate** adalah cara paling sederhana di Laravel untuk memeriksa apakah seorang pengguna diizinkan melakukan suatu tindakan. Gate ibarat penjaga pintu yang berbasis Closure (fungsi tanpa nama) dan biasanya dieksekusi untuk aturan yang bersifat umum dan tidak terikat pada satu model tertentu.
- **Karakteristik:** Sangat cocok untuk operasi CRUD (Create, Read, Update, Delete) pada data spesifik. Misalnya, "Seorang pengguna hanya boleh mengubah (Update) data Product yang ia buat sendiri."
- **Pembuatan:** Policy dibuat menggunakan perintah Artisan (`php artisan make:policy`).
- **Cara Kerja:** Di dalam file Policy, terdapat berbagai method seperti `view`, `create`, `update`, dan `delete`. Di dalam method inilah logika dicocokkan, contohnya mencocokkan apakah `id` milik pengguna yang sedang login sama dengan `user_id` yang ada di dalam data produk.

3\. Penugasan Praktikum
-----------------------
Pada pertemuan ini, mari kita terapkan sistem keamanan tambahan pada project yang sudah memiliki relasi database dari pertemuan sebelumnya:
1. **Persiapan Role:** Tambahkan kolom `role` (tipe data string, default: 'user') ke dalam tabel `users`. Kemudian ubah salah satu data user di database Anda menjadi 'admin'.
2. **Implementasi Gate:** Buatlah sebuah Gate dengan nama `manage-product`. Atur logikanya agar Gate ini hanya mengizinkan akses jika user yang sedang login memiliki role sebagai admin.
3. **Penerapan Gate pada Route/Tampilan:** Gunakan Gate `manage-product` tersebut untuk menyembunyikan menu/tombol Product di tampilan agar tidak bisa dilihat oleh user biasa, dan amankan Route kategori Anda.
4. **Implementasi Policy:** Buatlah sebuah Policy untuk model Product (`ProductPolicy`).
5. **Logika Policy:** Di dalam `ProductPolicy`, atur logika pada bagian `update` dan `delete` hanya admin yg bisa edit dan delete milik datanya sendiri.

Penugasan Kelas B
-----------------
1. **Persiapan Role:** Tambahkan kolom `role` (tipe data string, default: 'user') ke dalam tabel `users`. Kemudian ubah salah satu data user di database Anda menjadi 'admin', lalu tampilkan rolenya pada Navigation Bar.
2. **Implementasi Gate:** Buatlah sebuah Gate dengan nama `export-product`. Atur logikanya agar Gate ini hanya mengizinkan akses jika user yang sedang login memiliki role sebagai admin.
3. **Penerapan Gate pada Route/Tampilan:** Gunakan Gate `export-product` tersebut untuk menyembunyikan button/tombol export di tampilan agar tidak bisa dilihat oleh user biasa, dan amankan Route exportnya juga.
4. **Implementasi Policy:** Buatlah sebuah Policy untuk model Product (`ProductPolicy`).
5. **Logika Policy:** Di dalam `ProductPolicy`, atur logika pada bagian `update` dan `delete` hanya admin yg bisa edit dan delete milik datanya sendiri.

4\. Resource Belajar
--------------------
- [Laravel Auth](https://laravel.com/docs/12.x/authorization#gates)
- [Gates Example](https://www.twilio.com/en-us/blog/developers/community/rapid-introduction-laravel-gates)
- [Gates and Policies](https://laraveldaily.com/lesson/roles-permissions/adding-gates-policies)
- [Policies](https://medium.com/@zulfikarditya/mastering-laravel-policies-a-complete-guide-to-authorization-in-laravel-991bbdcc6756)

