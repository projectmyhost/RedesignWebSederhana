# Redesign Data Siswa - SMK Budi Luhur (XI RPL)

Aplikasi manajemen Data Siswa berbasis CodeIgniter 4 dan MySQL yang telah diredesain secara presisi menggunakan Tailwind CSS dan Google Fonts Plus Jakarta Sans dengan pendekatan AI Design dan standar Anti-Slop UI.

---

## Preview Desain (Laporan untuk Pak Rinto)

Berikut adalah tangkapan layar antarmuka hasil redesain sistem Data Siswa SMK Budi Luhur:

![Preview Desain Data Siswa](PakRinto.png)

---

## Profil Pengembang & Keahlian

- **Keahlian Utama (SKILL)**: UI Anti-Slop Slicing
- **Deskripsi Kompetensi**:
  - Kemampuan slicing desain visual ke dalam kode antarmuka (HTML/Tailwind CSS) secara pixel-perfect dan semantik.
  - Menerapkan prinsip Anti-Slop UI: meniadakan elemen generik/murahan khas template AI, memastikan ketegasan hierarki tipografi, konsistensi token warna, rasio kontras yang nyaman dibaca, serta spacing yang terukur secara proporsional.
  - Menjaga kebersihan kode (clean code) tanpa dependensi styling berlebih.

---

## Teknologi yang Digunakan

1. **Database**:
   - **MySQL** (MySQLi Driver, database `db_rpl_siswa`, port 3306).
   - Skema tabel `siswa` dengan field auto-increment `id`, `nis`, `nama`, dan `kelas`.

2. **UI & Konsep Desain**:
   - **AI Design**: Eksplorasi tata letak modern, pemilihan palet warna terkurasi, dan perancangan alur komponen antarmuka sekolah.
   - **Anti-Slop UI**: Metodologi desain bebas dari elemen klise template AI, fokus pada keterbacaan data, kontras tajam (teks `#0f172a` pada latar `#f8fafc`), aksen berani `#ff5722`, dan micro-interactions yang fungsional.
   - **Styling**: Tailwind CSS dan Google Fonts Plus Jakarta Sans.

3. **Backend Framework**:
   - **CodeIgniter 4** (PHP 8.2+).
   - Arsitektur MVC (Model-View-Controller) dengan routing RESTful dan query builder aman.

4. **Web Server & Environment**:
   - Laragon / Apache Localhost.

---

## Fitur & Implementasi Sistem

1. **Tampilan Tabel Modern SMK Budi Luhur**:
   - Header institusi lengkap dengan logo, divider, identitas kelas XI RPL, dan nama sekolah SMK Budi Luhur.
   - Judul daftar siswa dengan garis aksen oranye khas `#ff5722`.
   - Card container tabel dengan sudut membulat (`rounded-2xl`), border halus, dan bayangan lembut.
   - Badge kelas modern berwarna abu-abu cerah (`bg-[#f1f5f9]`).
   - Tombol aksi Edit dan Hapus yang elegan dan proporsional.

2. **Pagination Otomatis (Maksimal 5 Data Per Halaman)**:
   - Data siswa dibatasi maksimal 5 baris per halaman.
   - Navigasi halaman bernomor (1, 2, dst.) serta tombol navigasi *Sebelumnya* dan *Selanjutnya*.
   - Penomoran otomatis dinamis berdasarkan nomor halaman aktif (Halaman 1: 01-05, Halaman 2: 06-10).
   - Informasi jumlah data aktif: *"Menampilkan X - Y dari Z data siswa"*.

3. **Operasi CRUD Terintegrasi Database MySQL**:
   - **Tambah Siswa**: Modal popup tambah data tanpa meninggalkan halaman.
   - **Edit Siswa**: Modal edit data untuk memperbarui NIS, Nama, dan Kelas.
   - **Hapus Siswa**: Penghapusan data siswa dengan konfirmasi keamanan dialog.

4. **Pedoman Desain Lengkap**:
   - Spesifikasi komponen, token warna, dan tipografi terdokumentasi di file `design.md`.
