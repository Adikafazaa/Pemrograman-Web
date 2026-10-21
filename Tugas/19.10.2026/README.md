# Tugas CRUD 1 Tabel — Catatan Keuangan

Tugas praktikum mata kuliah **IFB-211 Pemrograman Web** (Pertemuan 19 Oktober 2026).  
Mengimplementasikan fungsi CRUD (*Create, Read, Update, Delete*) pada satu tabel basis data menggunakan PHP murni (prosedural) dan MySQL dengan antarmuka Bootstrap 5.

---

## 🗂️ Struktur Berkas

```text
📁 19.10.2026/
├── 📄 152025013_Adika_Faza_Athallah_Tugas_CRUD_1_Tabel.pdf  <- Laporan pengumpulan resmi
├── 🗄️ keuangan.sql                                          <- Skema database & data awal
├── 🔌 koneksi.php                                           <- Penghubung PHP ke MySQL
│
├── 📖 index.php           [READ]   Halaman tabel utama daftar catatan keuangan
├── ➕ tambah.php          [CREATE] Formulir input transaksi baru
├── 💾 proses_tambah.php   [CREATE] Skrip pemroses query INSERT
├── ✏️ ubah.php            [UPDATE] Formulir pengubahan data transaksi
├── 🔄 update.php          [UPDATE] Skrip pemroses query UPDATE
└── ❌ hapus.php           [DELETE] Skrip pemroses query DELETE
│
├── 📁 docs/               <- Seluruh dokumen modul & laporan resmi
├── 📁 diagram/            <- Diagram arsitektur & sequence Draw.io
├── 📁 latihan/            <- Folder scratch latihan dasar
└── 📁 _tools/             <- Skrip otomasi generator PDF & tangkapan layar
```

---

## ⚙️ Petunjuk Menjalankan Proyek

1. **Nyalakan Server Database:**
   * Buka aplikasi **Laragon** / **XAMPP**.
   * Klik **Start All** (pastikan modul MySQL aktif pada port 3306).

2. **Import Basis Data:**
   * Buka phpMyAdmin / HeidiSQL, lalu buat database bernama `keuangan` atau import langsung berkas:
     ```bash
     mysql -u root -p < keuangan.sql
     ```

3. **Jalankan Server Lokal PHP:**
   * Buka terminal di direktori ini, lalu jalankan:
     ```bash
     php -S localhost:8000
     ```

4. **Buka di Peramban:**
   * Akses URL: **[http://localhost:8000/index.php](http://localhost:8000/index.php)**

---

## 📊 Struktur Data Tabel `catatan_keuangan`

| Nama Kolom | Tipe Data | Keterangan |
|---|---|---|
| `id` | `INT(11)` | Primary Key, Auto Increment |
| `tanggal` | `DATE` | Tanggal transaksi |
| `jenis` | `VARCHAR(20)` | Pemasukan / Pengeluaran |
| `kategori` | `VARCHAR(50)` | Kategori transaksi (makanan, gaji, transport, dll) |
| `nominal` | `INT(11)` | Jumlah uang transaksi (Rp) |
| `keterangan` | `VARCHAR(255)` | Catatan detail transaksi |

---

## 📑 Dokumen & Laporan

* **Laporan Pengumpulan Tugas:** [`152025013_Adika_Faza_Athallah_Tugas_CRUD_1_Tabel.pdf`](152025013_Adika_Faza_Athallah_Tugas_CRUD_1_Tabel.pdf)
* **Modul Panduan Belajar:** [`docs/PANDUAN_PEMAHAMAN_CRUD_PHP.pdf`](docs/PANDUAN_PEMAHAMAN_CRUD_PHP.pdf)
