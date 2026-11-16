# 🏆 Pendaftaran Elite Pro Academy (EPA)

Aplikasi **Pendaftaran Elite Pro Academy (EPA)** merupakan aplikasi berbasis web yang dibuat menggunakan framework Laravel dan database MySQL. Aplikasi ini digunakan untuk mengelola data pendaftaran calon peserta Elite Pro Academy.

## 📌 Fitur Aplikasi

- Halaman beranda EPA.
- Formulir pendaftaran peserta.
- Menyimpan data pendaftar ke database.
- Menampilkan daftar peserta yang sudah mendaftar.
- Mengedit data peserta.
- Menghapus data peserta.

## 🛠️ Teknologi yang Digunakan

- **PHP** – Bahasa pemrograman.
- **Laravel** – Framework pengembangan aplikasi.
- **MySQL** – Database.
- **HTML** – Membuat struktur halaman.
- **CSS** – Mengatur tampilan aplikasi.
- **Visual Studio Code** – Code editor.
- **Laragon** – Local development environment.

## 📂 Struktur Aplikasi

```text
elite_pro_academy/
├── app/
│   ├── Http/Controllers/
│   │   └── PendaftarController.php
│   └── Models/
│       └── Pendaftar.php
├── database/
│   └── migrations/
├── public/
│   └── css/
│       └── style.css
├── resources/
│   └── views/
│       ├── datang.blade.php
│       ├── form.blade.php
│       └── data.blade.php
├── routes/
│   └── web.php
└── README.md
```

## 🗄️ Database

Nama database: `db_epa`

Tabel utama: `pendaftars`

Data yang disimpan meliputi:
- Nama
- Tempat lahir
- Tanggal lahir
- Jenis kelamin
- Nomor HP
- Posisi
- Alamat

## 🎯 Tujuan Pembuatan

Project ini dibuat sebagai latihan pengembangan aplikasi web menggunakan framework Laravel, khususnya dalam penerapan konsep CRUD (Create, Read, Update, Delete), pengelolaan database MySQL, serta pembuatan halaman web menggunakan Blade.

## 👨‍💻 Developer
**Adiastama D**
