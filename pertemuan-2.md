Modul Pertemuan 2: Pengenalan MVC dan Instalasi Breeze
======================================================

**Tujuan Pembelajaran:**

* Mahasiswa memahami arsitektur dasar Laravel yaitu MVC (Model-View-Controller).

* Mahasiswa memahami konsep dasar Routing dan alur permintaan (request) pada Laravel.

* Mahasiswa mampu mengonfigurasi database dan menginstal Laravel Breeze untuk sistem autentikasi (Login/Register).

1\. Pengenalan Konsep MVC (Model-View-Controller)
-------------------------------------

Laravel menggunakan pola arsitektur perangkat lunak yang disebut MVC. Pola ini memisahkan aplikasi menjadi tiga komponen utama untuk memudahkan pengembangan, pemeliharaan, dan kolaborasi tim:

* Model: Bertugas menangani data dan logika bisnis. Model berinteraksi langsung dengan database (mengambil, menyimpan, memperbarui, atau menghapus data). Di Laravel, file Model biasanya merepresentasikan satu tabel di database dan disimpan di dalam folder `app/Models/`.

* View: Bertugas menangani antarmuka pengguna (User Interface). View berisi struktur HTML yang akan dilihat oleh pengguna di browser. Laravel menggunakan sistem templating bernama Blade, dan file View disimpan di dalam folder `resources/views/`.

* Controller: Bertindak sebagai pengatur lalu lintas atau jembatan antara Model dan View. Controller menerima permintaan dari pengguna, memproses data melalui Model jika diperlukan, dan mengirimkan hasil akhirnya ke View untuk ditampilkan. File Controller disimpan di folder `app/Http/Controllers/`.

2\. Pengenalan Routing
-------------------------------------

Routing adalah mekanisme yang digunakan oleh Laravel untuk mencocokkan URL atau alamat web yang diakses pengguna ke bagian sistem yang tepat (seperti Controller tertentu atau langsung ke sebuah View).

Ibarat sebuah peta, setiap kali pengguna mengetikkan URL di browser (misalnya /tentang-kami), sistem Routing Laravel akan melihat daftar rute yang sudah didefinisikan untuk menentukan aksi apa yang harus dilakukan selanjutnya.

Tempat utama untuk mengatur route aplikasi web pada Laravel berada di dalam direktori `routes/` pada file bernama  `web.php`. Di sinilah Anda mendaftarkan semua alamat halaman web aplikasi Anda.

3\. Instalasi Laravel Breeze
-------------------------------------

Laravel Breeze adalah paket bawaan resmi dari Laravel yang memberikan pondasi awal (scaffolding) yang sangat cepat dan sederhana untuk semua fitur autentikasi. Dengan Breeze, fitur seperti Login, Register, Reset Password, dan Dashboard pengguna sudah langsung tersedia menggunakan styling dari Tailwind CSS.

Alur Instalasi Breeze:
- Konfigurasi Database: Sebelum menginstal, Anda harus memastikan aplikasi sudah terhubung ke database.

- Unduh Paket Breeze: Anda menggunakan manajer paket (Composer) untuk mengunduh Laravel Breeze ke dalam project.
``` bash
composer require laravel/breeze --dev
```

- Proses Instalasi: Anda menjalankan perintah instalasi bawaan Breeze dan memilih jenis kerangka tampilan yang diinginkan (umumnya menggunakan Blade).
``` bash 
php artisan breeze:install
```
![alt text](/screenshoot/pertemuan-2/blade-instalation.png)


- Migrasi Database: Anda menjalankan perintah migrasi agar Laravel otomatis membuatkan tabel-tabel yang dibutuhkan untuk sistem login (seperti tabel users) ke dalam database Anda.
``` bash
php artisan migrate
```

- Kompilasi Aset: Terakhir, Anda menggunakan Node Package Manager (NPM) untuk mengunduh dependensi frontend dan memproses file CSS/JavaScript agar tampilan login dan register terlihat rapi.
``` bash
npm install
```

- Kemudian jalankan dengan perintah berikut.
``` bash
composer run dev
```

4\. Penugasan Praktikum
-------------------------------------

Berdasarkan materi yang telah dipelajari hari ini, lanjutkan project dari pertemuan 1 dengan mengerjakan tugas berikut:

* Lakukan instalasi Laravel Breeze hingga fitur Login dan Register berfungsi serta dapat diakses melalui browser.
* Buatlah sebuah Route baru dengan alamat URL `/about` di `routes/web.php`.
* Buatlah sebuah Controller baru untuk menangani halaman biodata tersebut. Arahkan route yang dibuat pada langkah 2 ke fungsi di dalam Controller ini.
``` bash
php artisan make:controller namaController
```
* Buatlah sebuah View baru yang berisi tampilan rapi mengenai data diri Anda (Nama, NIM, Program Studi, dan Hobi). Fungsi pada Controller di langkah 3 harus memanggil dan menampilkan View ini.
* Tambahkan tautan (link) menu baru di halaman Dashboard bawaan Breeze (setelah user login) agar pengguna bisa mengklik dan otomatis diarahkan ke halaman /about yang telah Anda buat `resources/views/layouts/navigation.blade.php`.

## Screeshoot Tugas
Tampilan `/about`.

![About](/screenshoot/pertemuan-2/1.png)

Register

![About](/screenshoot/pertemuan-2/register.png)

Login

![About](/screenshoot/pertemuan-2/login.png)

*Sertakan Screenshoot saat pengumpulan tugas.*

5\. Link Resource
-------------------------------------
* Installasi [Breeze](https://www.example.com).
* Penggunaan [Controller](https://laravel.com/docs/12.x/controllers).
* Penggunaan [View](https://laravel.com/docs/12.x/views#main-content).
* View [Video](https://youtu.be/RT0DZYYE3wc?si=6-hAT_3WTjrGDesr).
* controller [Video](https://youtu.be/HNTsM2ZmoFQ?si=9evgSoXuNgfSvHdL).