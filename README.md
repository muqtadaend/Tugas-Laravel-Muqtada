# Tugas Pemrograman Web - Implementasi Laravel Authentication & Breeze

Assalaamu'alaikum warahmatullaahi wabarakaatuh. Proyek ini adalah hasil pengerjaan Tugas Mata Kuliah Pemrograman Web terkait implementasi dan kustomisasi sistem autentikasi menggunakan Laravel 12 dan Laravel Breeze (Blade Stack).

## Fitur yang Telah Diimplementasikan (Berdasarkan Modul)

Proyek ini telah memenuhi 3 Tugas Mandiri utama:
1. Tugas 1: Penambahan field no_hp pada proses registrasi dan menampilkannya di halaman Dashboard.
2. Tugas 2: Kustomisasi Halaman Profil agar field no_hp dapat diubah (update) oleh user.
3. Tugas 3: Implementasi Role-Based Access Control (RBAC) dengan pemisahan akses antara User dan Admin melalui pemilihan role saat registrasi, serta pembuatan Dashboard pintar yang terintegrasi.

---

## Catatan Teknis (Modifikasi Database)

Untuk memenuhi tugas ini, skema database tabel users bawaan Laravel telah dimodifikasi menggunakan perintah artisan migration berikut:

1. Penambahan Kolom Nomor HP (Tugas 1 & 2)
```bash
php artisan make:migration add_no_hp_to_users_table --table=users
```

2. Penambahan Kolom Role (Tugas 3)
```bash
php artisan make:migration add_role_to_users_table --table=users
```

(Catatan: Karena proyek ini sudah diserahkan dalam bentuk repository, pengguna tidak perlu menjalankan ulang kedua perintah di atas. Cukup jalankan perintah migrate saat proses instalasi).

---

## Panduan Instalasi dan Menjalankan Proyek

Ikuti langkah-langkah berikut untuk menjalankan proyek ini di komputer (local environment) pengguna:

### Prasyarat:
Pastikan sistem pengguna sudah terinstal:
* PHP >= 8.2
* Composer
* Node.js dan NPM
* XAMPP atau MySQL Server

### Langkah-langkah Instalasi:

1. Clone Repository
Buka terminal atau CMD dan jalankan perintah berikut:
```bash
git clone https://github.com/muqtadaend/Tugas-Laravel-Muqtada.git
cd Tugas-Laravel-Muqtada
```
2. Install Dependencies PHP (Composer)
Mengunduh library framework Laravel:
```bash
composer install
```

3. Install Dependencies Frontend (NPM)
Mengunduh library untuk tampilan dan melakukan build:
```bash
npm install
npm run build
```

4. Konfigurasi Environment (.env)
Duplikat file .env.example dan ubah namanya menjadi .env menggunakan perintah:
```bash
cp .env.example .env
```

5. Generate Application Key
```bash
php artisan key:generate
```

6. Konfigurasi Database
Buka XAMPP dan jalankan MySQL.
Buka phpMyAdmin (http://localhost/phpmyadmin) dan buat database kosong baru dengan nama auth_demo.
Buka file .env di teks editor, lalu sesuaikan konfigurasi database-nya:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=auth_demo
DB_USERNAME=root
DB_PASSWORD=
```

7. Jalankan Migrasi Database
Membentuk tabel ke dalam database beserta kolom-kolom baru (no_hp dan role) yang sudah dikonfigurasi:
```bash
php artisan migrate
```

8. Jalankan Development Server
```bash
php artisan serve
```
Aplikasi dapat diakses melalui browser di alamat: http://127.0.0.1:8000

---

## Panduan Pengujian (Testing) Fitur

Untuk memeriksa hasil pengerjaan tugas, Pengguna dapat melakukan skenario berikut:

### Skenario 1: Testing Role "User Biasa" (Tugas 1 dan 2)
1. Buka http://127.0.0.1:8000/register.
2. Lakukan pendaftaran. Isi formulir pendaftaran, isi kolom No. HP, dan pastikan pada combobox Daftar Sebagai pengguna memilih User Biasa.
3. Setelah register, pengguna akan diarahkan ke Dashboard. (Tugas 1 Selesai: Info No. HP tampil di Dashboard, dan tabel daftar pengguna tidak terlihat).
4. Klik menu Profile di sudut kanan atas.
5. Coba ubah Nomor HP pengguna lalu klik Save. Pastikan data berhasil diperbarui. (Tugas 2 Selesai).
6. Logout.

### Skenario 2: Testing Role "Administrator" (Tugas 3)
1. Buka http://127.0.0.1:8000/register.
2. Lakukan pendaftaran akun baru, namun kali ini pada combobox Daftar Sebagai pilih Administrator.
3. Setelah berhasil masuk ke Dashboard, pengguna akan melihat tampilan yang berbeda. Di bagian bawah informasi profil admin, akan muncul Panel Admin berupa Tabel Daftar Semua Pengguna yang terdaftar di database. (Tugas 3 Selesai).

Sekian, Terima kasih. Wassalaamu'alaikum warahmatullaahi wabarakaatuh