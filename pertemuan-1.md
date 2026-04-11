Modul Pertemuan 1: Pengenalan dan Instalasi Laravel 12
======================================================

**Tujuan Pembelajaran:**

*   Mahasiswa dapat memahami konsep dasar lingkungan pengembangan Laravel.
    
*   Mahasiswa mampu melakukan instalasi Laravel 12 menggunakan XAMPP atau Laragon.
    
*   Mahasiswa mampu menjalankan _startup project_ Laravel.
    
*   Mahasiswa mampu melakukan modifikasi dasar pada _view_ bawaan Laravel.
    

1\. Persiapan Lingkungan Pengembangan
-------------------------------------

Sebelum menginstal Laravel 12, pastikan komputer Anda sudah terinstal PHP dan Composer. Anda dapat memilih salah satu dari dua _local server_ berikut: XAMPP atau Laragon.

### A. Menggunakan XAMPP

1.  Unduh dan instal XAMPP versi terbaru yang mendukung versi PHP yang dibutuhkan oleh Laravel 12.
    
2.  Jalankan aplikasi **XAMPP Control Panel**.
    
3.  Klik tombol **Start** pada modul **Apache** dan **MySQL**.
    
4.  Buka _Command Prompt_ (CMD) atau Terminal, arahkan ke folder htdocs tempat project akan disimpan:cd C:\\xampp\\htdocs
    

### B. Menggunakan Laragon (Direkomendasikan)

1.  Unduh dan instal Laragon (versi Full direkomendasikan karena sudah termasuk PHP, Apache/Nginx, MySQL, dan Composer).
    
2.  Jalankan aplikasi **Laragon**.
    
3.  Klik tombol **Start All** untuk mengaktifkan server.
    
4.  Klik tombol **Terminal** pada antarmuka Laragon. Terminal ini akan otomatis terbuka di dalam direktori root Laragon (biasanya di C:\\laragon\\www).
    

2\. Instalasi dan Startup Project Laravel 12
--------------------------------------------

Setelah server dan terminal siap (berada di htdocs atau www), ikuti langkah berikut untuk membuat project pertama Anda.

### Langkah 1: Install Project

Pada terminal yang sudah terbuka, jalankan perintah berikut untuk membuat project baru bernama *nama-project*:
```bash
composer create-project laravel/laravel:^12.0 nama-project
```
Tunggu hingga proses pengunduhan _package_ selesai.

### Langkah 2: Masuk ke Direktori Project

Setelah proses instalasi selesai, masuk ke dalam folder project yang baru saja dibuat:
```bash
cd nama-project
```
### Langkah 3: Menjalankan Local Development Server

Untuk menjalankan project Laravel, gunakan perintah _Artisan_ berikut (Jika menggunakan xampp):
```bash
php artisan serve
```
Terminal akan menampilkan URL (biasanya http://localhost:8000). Buka browser Anda dan akses URL tersebut. Jika berhasil, Anda akan melihat halaman "Welcome" bawaan dari Laravel.

3\. Penugasan Praktikum

Sebagai bukti Anda telah berhasil melakukan instalasi dan menjalankan project Laravel, selesaikan tugas berikut:

1.  Buka folder project pertemuan-1 menggunakan _Code Editor_ pilihan Anda (seperti Visual Studio Code).
    
2.  Arahkan ke dalam folder resources/views/.
    
3.  Buka file bernama welcome.blade.php.
    
4.  Modifikasi bagian _card_ (atau tampilan utama di tengah layar) pada halaman tersebut.
    
5.  Hapus konten default dan ganti dengan teks yang menampilkan **Nama** dan **NIM** Anda.
    
6.  Simpan file tersebut, lalu _refresh_ halaman di browser untuk melihat perubahannya.
   
7. Push Project Anda ke github.

Contoh screenshoot tugas
![Halaman Home](/screenshoot/pertemuan-1/pertemuan-1.png)
