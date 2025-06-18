## Cara Menjalankan Projek Laravel
# 1. Clone Backend
langkah pertama kalian bisa Clone folder Backend saya dari link repositori github saya, sebagai berikut : https://github.com/AuliaZuifani/uas_backend
# 2. Buat Database dengan nama (db_uas_230102030auliazuifani)
pada langkah ini kalian bisa buka locallhost/phpmyadmin kalian masing-masing, kemudian kalian buat database baru dengan nama seperti format diatas kemudian kalian bisa mulai masukan satu persatu tabel yang saya sediakan di bawah : 
CREATE DATABASE db_perpus_[NIM_ANDA];
USE db_perpus_230102030auliazuifani;

CREATE TABLE buku (
  id INT AUTO_INCREMENT PRIMARY KEY,
  judul VARCHAR(100),
  pengarang VARCHAR(100),
  penerbit VARCHAR(100),
  tahun_terbit INT
);

CREATE TABLE peminjaman (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nama_peminjam VARCHAR(100),
  judul_buku VARCHAR(100),
  tanggal_pinjam DATE,
  tanggal_kembali DATE
);

# 3. Open VsCode
buka folder Backend yang sudah di clone tadi lalu jalan kan terminal dengan perintah (php spark serve)

# 4. 

