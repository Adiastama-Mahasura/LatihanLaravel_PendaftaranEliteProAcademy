# Aplikasi Biodata Siswa

Aplikasi Biodata Siswa merupakan aplikasi berbasis web sederhana yang dibuat menggunakan **Framework Laravel** dan **PHP**. Aplikasi ini bertujuan untuk mempermudah proses pengelolaan dan pendataan informasi siswa secara digital.

## 🛠️ Teknologi yang Digunakan

- PHP
- Laravel
- MySQL
- HTML
- Blade Template
- Visual Studio Code
- phpMyAdmin

## ✨ Fitur Aplikasi

- Menampilkan data biodata siswa.
- Menyimpan data siswa ke database.
- Menampilkan informasi siswa berdasarkan tabel.

## 📋 Informasi Data Siswa

Data yang dikelola dalam aplikasi ini meliputi:

- Nama
- NIS
- Jurusan
- Kelas

## 📁 Struktur Project

```text
aplikasi-siswa/
├── app/
│   ├── Http/
│   │   └── Controllers/
│   │       └── SiswaController.php
│   └── Models/
│       └── Siswa.php
├── database/
│   └── migrations/
├── resources/
│   └── views/
│       └── siswa/
│           └── index.blade.php
├── routes/
│   └── web.php
└── .env
```

## ⚙️ Cara Instalasi

1. Clone repository:

```bash
git clone URL_REPOSITORY
```

2. Masuk ke folder project:

```bash
cd aplikasi-siswa
```

3. Install dependency:

```bash
composer install
```

4. Salin file environment:

```bash
cp .env.example .env
```

5. Generate application key:

```bash
php artisan key:generate
```

6. Buat database dengan nama `aplikasi_siswa` melalui phpMyAdmin.

7. Atur konfigurasi database pada file `.env`:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=aplikasi_siswa
DB_USERNAME=root
DB_PASSWORD=
```

8. Jalankan migration:

```bash
php artisan migrate
```

9. Jalankan aplikasi:

```bash
php artisan serve
```

10. Buka browser:

```text
http://127.0.0.1:8000/siswa
```

## 🎯 Tujuan Project

Project ini dibuat sebagai latihan pembelajaran Rekayasa Perangkat Lunak (RPL), khususnya dalam memahami penggunaan framework Laravel, konsep MVC (Model, View, Controller), routing, dan koneksi database MySQL.

## 👨‍💻 Developer

**Muhammad Satria Firmansyah**

Project Pembelajaran RPL  
Framework Laravel

---

⭐ Terima kasih telah mengunjungi repository ini!
