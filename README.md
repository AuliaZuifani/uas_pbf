## Cara Menjalankan Projek Laravel
Ini adalah project sederhana sistem informasi perpustakaan berbasis **Laravel (Backend)** dan **Laravel + Bootstrap (Frontend)** yang dibuat untuk memenuhi Ujian Akhir Semester (UAS).  
Silakan ikuti panduan di bawah untuk menjalankan aplikasi ini di lokal komputer kamu.

---

## 🚀 Cara Menjalankan Project

### 1. Clone Backend Repository
langkah pertama kalian bisa Clone folder Backend saya dari link repositori github saya, sebagai berikut : https://github.com/AuliaZuifani/uas_backend
perintah CMD : git clone https://github.com/AuliaZuifani/uas_backend
### 2. Buat Database dengan nama (db_uas_230102030auliazuifani)
pada langkah ini kalian bisa buka locallhost/phpmyadmin kalian masing-masing, kemudian kalian buat database baru dengan nama seperti format diatas kemudian kalian bisa mulai masukan satu persatu tabel yang saya sediakan di bawah : 
<pre lang="markdown"> ```sql CREATE DATABASE db_perpus_230102030auliazuifani; USE db_perpus_230102030auliazuifani; CREATE TABLE buku ( id INT AUTO_INCREMENT PRIMARY KEY, judul VARCHAR(100), pengarang VARCHAR(100), penerbit VARCHAR(100), tahun_terbit INT ); CREATE TABLE peminjaman ( id INT AUTO_INCREMENT PRIMARY KEY, nama_peminjam VARCHAR(100), judul_buku VARCHAR(100), tanggal_pinjam DATE, tanggal_kembali DATE ); ``` </pre>


### 3. Open VsCode
buka folder Backend yang sudah di clone tadi lalu jalan kan terminal dengan perintah (php spark serve)

### 4. Clone Repositori ini untuk mendapatkan folder frontend nya
https://github.com/AuliaZuifani/uas_pbf
jika sudah lalu beri nama frontend-uas-230102030

### 5. Open VsCode lalu jalankan Php artisan serve

### 6. browse
http://127.0.0.1:8000/buku
http://127.0.0.1:8000/peminjaman


