# Aplikasi Data Mahasiswa

Repositori ini berisi beberapa studi kasus pemrograman web menggunakan PHP dan CodeIgniter 4, mulai dari sintaks dasar, manipulasi data dengan HTML & PHP, hingga implementasi MVC dan CRUD di CodeIgniter 4.

---

## 1. Sintaks PHP (Instruksi berurutan, pemilihan, pengulangan)

- **Penjelasan:**  
  Pada bagian ini, program mendemonstrasikan penggunaan dasar sintaks PHP seperti instruksi berurutan (eksekusi kode secara urut), instruksi pemilihan (if-else untuk pengambilan keputusan), dan instruksi pengulangan (looping seperti for/foreach).
- **Akses:**  
  File: [`No_1/instruksi_dasar.php`](No_1/instruksi_dasar.php)  
  Jalankan di browser: `http://localhost/mahasiswa/No_1/instruksi_dasar.php`

---

## 2. HTML & PHP (Menampilkan Tabel HTML dengan PHP, Menampilkan Tabel dengan Looping PHP)

- **Penjelasan:**  
  Bagian ini berisi contoh form input data mahasiswa dan menampilkan data dalam bentuk tabel HTML. Data disimpan sementara di session (tanpa database) dan ditampilkan menggunakan looping PHP.
- **Akses:**  
  Form & tabel mahasiswa (session): `http://localhost/mahasiswa/No_2/Part_1/biodata.php`
  Form mahasiswa (database): `http://localhost/mahasiswa/No_2/Part_2/biodata_db.php`
  List mahasiswa (database): `http://localhost/mahasiswa/No_2/Part_3/list_biodata.php`
  Detail mahasiswa (database): `http://localhost/mahasiswa/No_2/Part_3/detail_biodata.php`

---

## 3. CodeIgniter 4 (CI4) Framework L

- **Penjelasan:**  
  Bagian ini membahas instalasi CodeIgniter 4, pengaturan routing di file [`app/Config/Routes.php`](No_3-5/app/Config/Routes.php), serta konfigurasi database dan baseURL di [`app/Config/Database.php`](No_3-5/app/Config/Database.php) dan [`app/Config/App.php`](No_3-5/app/Config/App.php).
- **Akses:**
  Sesuaikan konfigurasi database pada file [`app/Config/Database.php`](No_3-5/app/Config/Database.php)
  Jalankan web server dan akses: `http://localhost:8080/`  
  (Pastikan root mengarah ke folder `public/` pada project CodeIgniter 4)
  DbTest: `http://localhost:8080/dbtest`

---

## 4. Program Controller di CI4

- **Penjelasan:**  
  Pada bagian ini, dibuat beberapa controller di CodeIgniter 4, seperti:
  - Controller Hello World (`HelloWorld`)
  - Controller yang menampilkan tabel HTML statis
  - Controller yang menampilkan tabel HTML dengan data dari array menggunakan looping PHP
- **Akses:**  
  - Hello World: `http://localhost:8080/helloworld`
  - Tabel Mahasiswa: `http://localhost:8080/tablemahasiswa`

---

## 5. Program Model, View, Controller / MVC

- **Penjelasan:**  
  Bagian ini mengimplementasikan konsep MVC di CodeIgniter 4 untuk data mahasiswa, meliputi:
  - Menampilkan data mahasiswa dari database menggunakan sintaks SQL di Controller
  - Menampilkan daftar mahasiswa dengan link detail ke halaman terpisah
  - Fitur CRUD (Create, Read, Update, Delete) dan Search mahasiswa
- **Akses:**  
  - Daftar Mahasiswa: `http://localhost:8080/mahasiswa`
  - Tambah Mahasiswa: `http://localhost:8080/mahasiswa/create`
  - Edit/Hapus/Detail: melalui link pada tabel daftar mahasiswa

---

## Teknologi yang Digunakan

- **PHP** (Native & OOP)
- **HTML** (Form & Table)
- **MySQL** (Database)
- **CodeIgniter 4** (Framework MVC)
- **Bootstrap** (opsional, jika digunakan untuk styling)
- **Web Server**
