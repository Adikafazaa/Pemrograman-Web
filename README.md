# IFB-211 — Pemrograman Web
---

Repositori resmi penugasan, modul praktikum, dan proyek pengembangan web semester 3 mata kuliah **IFB-211 Dasar Pemrograman Web**, Program Studi Informatika, Institut Teknologi Nasional (ITENAS) Bandung.

* **Mahasiswa:** Adika Faza Athallah
* **NRP:** 152025013
* **Dosen Pengampu:** Yusup Miftahuddin, S.Kom., M.T.
* **Kelas:** BB

---

## 📁 Struktur Repositori

```text
IFB-211-Pemrograman-Web/
├── README.md                 <- Dokumentasi utama repositori & rekap seluruh tugas
├── .gitignore                <- Konfigurasi pengecualian berkas build, cache, & tools
├── referensi-belajar/        <- Buku modul digital PDF lengkap & siap baca/cetak
│   └── Buku-Pemrograman-Web.pdf
├── Assets/                   <- Diagram & aset visual pendukung
└── Tugas/                    <- Direktori seluruh tugas mingguan perkuliahan
    ├── 21.9.2026/            <- Tugas 1: Perancangan Struktur Navigasi SIMSKK ITENAS
    ├── 28.9.2026/            <- Tugas 2: Analisis SDLC & Portofolio Personal (HTML Dasar)
    ├── 05.10.2026/           <- Tugas 3: Desain Portofolio Web Responsif & Styling CSS Modern
    ├── 12.10.2026/           <- Tugas 4: Course & Latihan Interaktif W3Schools (HTML & CSS)
    └── 19.10.2026/           <- Tugas 5: Operasi CRUD 1 Tabel PHP & MySQL (Catatan Keuangan)
```

---

## 📝 Rekapitulasi Penugasan Perkuliahan

### 1. Tugas 1 (21.9.2026) — Perancangan Struktur Navigasi SIMSKK
* **Fokus:** Analisis arsitektur informasi dan pemetaan alur sistem informasi kegiatan kemahasiswaan (SIMSKK ITENAS).
* **Luaran:** Diagram hierarkis navigasi 5 level interaktif serta laporan analisis resmi format PDF.

---

### 2. Tugas 2 (28.9.2026) — Analisis SDLC & Portofolio Web
* **Fokus:** Studi komparasi metodologi *Software Development Life Cycle* (Waterfall, Agile, Spiral, Prototype) dan implementasi halaman web portofolio personal awal menggunakan HTML semantik.
* **Luaran:** Berkas halaman web `main.html` dan laporan kajian teknis format PDF (`152025013_Adika_Faza_Athallah_tugas_2.pdf`).

---

### 3. Tugas 3 (05.10.2026) — Desain Portofolio Web Responsif & Styling CSS
* **Fokus:** Pengembangan antarmuka web CV & Portofolio personal tingkat lanjut dengan sistem desain modern:
  * Layout responsif menggunakan Flexbox dan CSS Grid.
  * Tema visual *Modern Dark Theme* dengan aksen warna cyan & emerald.
  * Tipografi Google Fonts (*Plus Jakarta Sans* & *Space Grotesk*).
* **Luaran:** Berkas `main.html`, `style.css`, rangkuman persiapan quiz 3 minggu, dan laporan pengumpulan PDF (`152025013_Adika_Faza_Athallah_tugas_3.pdf`).

---

### 4. Tugas 4 (12.10.2026) — Course & Latihan Interaktif W3Schools (HTML & CSS)
* **Fokus:** Penyelesaian dan verifikasi rangkaian modul latihan daring resmi bersertifikasi dari platform **W3Schools** untuk materi fundamental HTML dan CSS.
* **Cakupan 12 Topik Latihan:**
  * **Modul HTML:**
    1. *HTML Basic Exercises*
    2. *HTML Elements Exercises*
    3. *HTML Attributes Exercises*
    4. *HTML Headings Exercises*
    5. *HTML Paragraphs Exercises*
    6. *HTML Styles Exercises*
  * **Modul CSS:**
    7. *CSS Introduction Exercises*
    8. *CSS Syntax Exercises*
    9. *CSS Selectors Exercises*
    10. *CSS How To Exercises*
    11. *CSS Comments Exercises*
    12. *CSS Colors Exercises*
* **Luaran Berkas PDF Laporan:**
  * [`152025013_Adika_Faza_Athallah_tugas_4_HTML_CSS.pdf`](Tugas/12.10.2026/152025013_Adika_Faza_Athallah_tugas_4_HTML_CSS.pdf) *(Lengkap Gabungan HTML & CSS)*
  * [`152025013_Adika_Faza_Athallah_tugas_4_HTML.pdf`](Tugas/12.10.2026/152025013_Adika_Faza_Athallah_tugas_4_HTML.pdf) *(Khusus 6 Topik HTML)*
  * [`152025013_Adika_Faza_Athallah_tugas_4_CSS.pdf`](Tugas/12.10.2026/152025013_Adika_Faza_Athallah_tugas_4_CSS.pdf) *(Khusus 6 Topik CSS)*
  * [`152025013_Adika_Faza_Athallah_tugas_4.pdf`](Tugas/12.10.2026/152025013_Adika_Faza_Athallah_tugas_4.pdf) *(Laporan Pengumpulan Utama)*

---

### 5. Tugas 5 (19.10.2026) — Operasi CRUD 1 Tabel PHP & MySQL (Catatan Keuangan)
* **Fokus:** Implementasi sistem aplikasi berbasis basis data relasional menggunakan PHP prosedural murni dan MySQL dengan antarmuka Bootstrap 5.
* **Fitur Utama:**
  * **Create:** Input transaksi baru melalui formulir input ([`tambah.php`](Tugas/19.10.2026/tambah.php) $\rightarrow$ [`proses_tambah.php`](Tugas/19.10.2026/proses_tambah.php)).
  * **Read:** Menampilkan data transaksi secara berbaris dalam tabel Bootstrap ([`index.php`](Tugas/19.10.2026/index.php)).
  * **Update:** Memperbarui transaksi lama berdasarkan ID ([`ubah.php`](Tugas/19.10.2026/ubah.php) $\rightarrow$ [`update.php`](Tugas/19.10.2026/update.php)).
  * **Delete:** Menghapus baris transaksi dari database berdasarkan ID ([`hapus.php`](Tugas/19.10.2026/hapus.php)).
  * **Database:** Skema basis data `keuangan` dengan 6 atribut lengkap ([`keuangan.sql`](Tugas/19.10.2026/keuangan.sql)).
* **Luaran Berkas:**
  * Laporan resmi penyerahan tugas: [`152025013_Adika_Faza_Athallah_Tugas_CRUD_1_Tabel.pdf`](Tugas/19.10.2026/152025013_Adika_Faza_Athallah_Tugas_CRUD_1_Tabel.pdf)
  * Modul belajar mandiri 14 halaman: [`docs/PANDUAN_PEMAHAMAN_CRUD_PHP.pdf`](Tugas/19.10.2026/docs/PANDUAN_PEMAHAMAN_CRUD_PHP.pdf)
  * Diagram arsitektur & sequence interaktif berbasis Draw.io di subfolder [`diagram/`](Tugas/19.10.2026/diagram/).

---

## 📚 Buku Referensi Perkuliahan

Buku digital komprehensif materi pemrograman web dasar dapat diunduh dan dipelajari melalui:  
**[referensi-belajar/Buku-Pemrograman-Web.pdf](referensi-belajar/Buku-Pemrograman-Web.pdf)**
