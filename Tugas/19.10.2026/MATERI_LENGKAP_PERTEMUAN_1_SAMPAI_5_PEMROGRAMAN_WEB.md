# Materi Lengkap Pertemuan 1 s/d Pertemuan 5 — Pemrograman Web (Edisi Khusus Persiapan UTS)

**Mata Kuliah:** IFB-211 Pemrograman Web, ITENAS Bandung  
**Dosen Pengampu:** Yusup Miftahuddin, S.Kom., M.T.  
**Cakupan Lengkap:** Pertemuan 1 s/d Pertemuan 5 (21 September 2026 – 19 Oktober 2026)  
**Metode Penyusunan:** Terstruktur, Berlogika Sebab-Akibat (*Benang Merah Antar-Bab*), & Beranalogi Langsung dari Proyek Eksperimen Pribadi (`D:\PROJECT\SELF EXPERIMENT`)  

---

## 🚀 PANDUAN TEMPUR UTS: BENANG MERAH 5 PERTEMUAN DALAM 5 MENIT

Sebelum menghafal detail sintaks, pahami dulu **logika besar (alur sebab-akibat)** mengapa materi kuliah kita disusun berurutan dari Pertemuan 1 sampai Pertemuan 5. Bayangkan kamu sedang membangun ekosistem aplikasi seperti **`AI TRADING TERMINAL`** atau **`BEASISWA-CHECKER`** milikmu dari nol:

```mermaid
flowchart TD
    P1["🌐 PERTEMUAN 1: Jaringan, HTTP, URL & Navigasi
(Jalur Pipa Komunikasi Client-Server & Peta Halaman)
Analogi: Request/Response HTTP 200 di X Like Remover"]
    P2["🦴 PERTEMUAN 2: HTML5 Semantik, Tabel & Form
(Kerangka Tulang, Struktur DOM, & Wadah Input Data)
Analogi: Struktur DOM mahasiswa.htm di Auto Check KRS"]
    P3["🎨 PERTEMUAN 3: CSS3, Box Model, Flexbox & Gradient
(Casing Visual, Tata Letak Presisi, & Badge Status)
Analogi: Dimensi Casing 3D ESP8266 & UI Glassmorphism AI Trading"]
    P4["⚙️ PERTEMUAN 4: Fundamental Backend PHP & Superglobals
(Mesin Logika Server, Array Asosiatif, $_GET vs $_POST)
Analogi: Rule-Based Matching Engine di Beasiswa-Checker"]
    P5["🗄️ PERTEMUAN 5: Database MySQL & Operasi CRUD Lengkap
(Brankas Penyimpanan Persisten: Create, Read, Update, Delete)
Analogi: Database scholarships.db / ai_trading.db & Catatan Keuangan"]

    P1 -->|"Butuh dokumen untuk dikirim lewat HTTP
& mewujudkan peta navigasi"| P2
    P2 -->|"Kerangka HTML masih polos & kaku,
butuh tata letak & estetika"| P3
    P3 -->|"Tampilan HTML+CSS masih statis (mati),
form butuh mesin pemroses di server"| P4
    P4 -->|"Variabel PHP hilang saat halaman ditutup,
butuh database agar data tersimpan permanen"| P5
```

### Tabel Peta Analogi Proyek Kamu (`D:\PROJECT\SELF EXPERIMENT`) $\leftrightarrow$ Materi UTS Pemweb

| Konsep Materi Kuliah | Analogi Langsung dari Proyek di `D:\PROJECT\SELF EXPERIMENT` | Inti Logika yang Wajib Diingat Saat UTS |
| :--- | :--- | :--- |
| **HTTP Request, Response & Status Code (`200`, `404`, `500`)** *(P1)* | **`X LIKE REMOVER v2.0`**: Bot kamu mengklik tombol *Unlike* (Request), lalu **wajib menunggu kode `HTTP 200 OK`** (Response) dari server X sebelum menghitung item berhasil dihapus. | `200` = Berhasil, `301/302` = Redirect, `404` = File/URL tidak ditemukan, `500` = Error pada kode server/PHP. |
| **Struktur Navigasi (Linear, Hierarki, Non-Linear, Campuran)** *(P1)* | **`AUTOMATION KUISIONER`** berjalan **Linear** (harus urut langkah demi langkah). Menu **`BEASISWA-CHECKER`** berbentuk **Hierarki** (Pohon *Master–Slave*). **`AI TRADING`** memakai **Campuran**. | **Linear** = berurutan wajib; **Hierarki** = pohon induk–anak; **Non-Linear** = bebas setara; **Campuran** = kombinasi. |
| **HTML DOM, `id`, `class`, vs `name` pada `<form>`** *(P2)* | **`AUTO CHECK KRS` (`mahasiswa.htm`)**: Scraper mencari elemen unik dengan `id`, kelompok elemen dengan `class`. Tapi saat form disubmit ke server, yang dikirim adalah atribut **`name`**. | `id` (unik, `#id` di CSS), `class` (berulang, `.class` di CSS), **`name` (wajib ada di `<input>` agar terbaca `$_POST['name']` di PHP)**. |
| **CSS Box Model (`content`, `padding`, `border`, `margin`)** *(P3)* | **`3D DESIGN\ESP8266-CASE`**: Papan chip ESP8266 = `content`; rongga longgar di dalam casing = `padding`; tebal dinding plastik 3D = `border`; jarak antar alat di meja = `margin`. | Rumus lebar total `content-box` = `width + padding_kiri + padding_kanan + border_kiri + border_kanan`. (`margin` di luar kotak!). |
| **CSS Positioning (`relative`, `absolute`, `sticky`)** *(P3)* | **`X LIKE REMOVER`**: Tombol tertutup *sticky header* X (`position: sticky`). Di Kartu Profil, foto bulat memakai `position: absolute` di dalam header yang `position: relative`. | Elemen `absolute` mencari induk terdekat yang memiliki `position: relative` sebagai titik koordinat `(0,0)`-nya. |
| **Web Statis vs Web Dinamis (Siklus Eksekusi PHP)** *(P4)* | File offline `mahasiswa.htm` di **`AUTO CHECK KRS`** adalah **Statis**. Web **`AI TRADING TERMINAL`** yang merender data live saat *runtime* adalah **Dinamis**. | Browser **tidak pernah** melihat kode `<?php ... ?>`; PHP dieksekusi di server dan hanya mengirim HTML bersih ke browser. |
| **Array Asosiatif & Logika `if-elseif-else` / `foreach`** *(P4)* | **`BEASISWA-CHECKER`**: Menyimpan profil `["nama" => "Adika", "ipk" => 3.65]` (Array Asosiatif) lalu mengklasifikasi peluang `>=80%` Safety, `>=60%` Target, `<60%` Reach (`if-elseif-else`). | Array Terindeks memakai angka mulai `0` (`$arr[0]`); Array Asosiatif memakai kunci string (`$row['nama']` — persis hasil query MySQL!). |
| **Superglobal `$_GET` vs `$_POST`** *(P4)* | Membuka link detail `?id=5` atau filter koin di URL memakai **`$_GET`**. Mengirim order **`⚡ Eksekusi OKX LIVE`** atau password login wajib memakai **`$_POST`**. | `$_GET` tampil di URL Query String (untuk ambil data/ID edit/hapus). `$_POST` tersembunyi di HTTP Body (untuk simpan/ubah data & login). |
| **Operasi CRUD PHP & MySQL + Pola PRG (`header location`)** *(P5)* | Database `scholarships.db` / `ai_trading.db` & **Tugas 5 Catatan Keuangan**: Tambah order (`INSERT`), Tampil posisi (`SELECT`), Edit SL/TP (`UPDATE WHERE id=...`), Tutup posisi (`DELETE WHERE id=...`). | Setelah `INSERT`/`UPDATE`/`DELETE`, wajib redirect (`header("location:index.php")`) agar saat di-refresh (F5) order/data tidak tergandakan! |

---

## Ringkasan Kronologis Pertemuan 1 s/d Pertemuan 5

| Pertemuan | Tanggal | Fokus Materi & Sub-CPMK | Penugasan / Praktikum |
| :--- | :--- | :--- | :--- |
| **Pertemuan 1** | 21 Sept 2026 | Kontrak Kuliah, Konsep Dasar Web (Internet vs WWW, Client-Server, HTTP/HTTPS, URL, DNS), & 4 Struktur Navigasi Website (Linear, Hierarki, Non-Linear, Campuran) | **Tugas 1:** Analisis & Diagram Struktur Navigasi Sistem Web ITENAS (SIMSKK) |
| **Pertemuan 2** | 28 Sept 2026 | Pemrograman HTML5: Struktur Dokumen, Tag/Elemen/Atribut, Heading, Paragraf, List, Hyperlink, Multimedia, Tabel, Form & Validasi HTML5, serta Elemen Semantik & DOM | **Tugas 2:** Pembuatan Halaman Web Profil (CV) menggunakan HTML5 |
| **Pertemuan 3** | 05 Okt 2026 | Pemrograman CSS3: Sintaks, 3 Metode Penerapan, Selector & Combinator, Specificity, Sistem Warna, Tipografi, Box Model, Unit Ukuran, Display, Flexbox, Positioning, & Background/Gradient | **Tugas 3:** Mempercantik Desain Web Profil (CV) dengan CSS3 & Praktikum Kartu Profil |
| **Pertemuan 4** | 12 Okt 2026 | Evaluasi Komprehensif HTML & CSS (W3Schools Exercises) serta **Mastering Backend PHP** (Web Statis vs Dinamis, Siklus Eksekusi PHP, Sintaks Dasar, Tipe Data, Array Terindeks & Asosiatif, `if-else`, `foreach`, serta Superglobals `$_GET` & `$_POST`) | **Tugas 4:** Penyelesaian Latihan Interaktif HTML & CSS di W3Schools |
| **Pertemuan 5** | 19 Okt 2026 | **Operasi CRUD pada PHP & MySQL**: Pemetaan CRUD–HTTP–SQL, Arsitektur 3-Tier, Perancangan Tabel MySQL, Koneksi Database (`mysqli` & `PDO`), Implementasi Read/Create/Update/Delete, serta Keamanan Web (*Prepared Statements* Anti-SQLi, `htmlspecialchars()` Anti-XSS, & Pola PRG) | **Tugas 5:** Pembuatan Aplikasi Web CRUD 1 Tabel (Min. 5 Atribut) PHP & MySQL dengan Desain UI Elegan |

---

## Daftar Isi

1. [Daftar sumber dan cara penggabungan (Pertemuan 1–5)](#1-daftar-sumber-dan-cara-penggabungan)
2. [Pengantar dan kontrak perkuliahan](#2-pengantar-dan-kontrak-perkuliahan)
3. [Dasar pemrograman web (Pertemuan 1 — Fondasi Jaringan & Protokol)](#3-dasar-pemrograman-web-pertemuan-1--fondasi-jaringan--protokol)
4. [Struktur navigasi website (Pertemuan 1 — Arsitektur Alur Halaman)](#4-struktur-navigasi-website-pertemuan-1--arsitektur-alur-halaman)
5. [HTML: struktur dan isi halaman (Pertemuan 2 — Kerangka & Semantik Konten)](#5-html-struktur-dan-isi-halaman-pertemuan-2--kerangka--semantik-konten)
6. [CSS: sintaks dan cara penerapan (Pertemuan 3 — Styling & Presentasi Visual)](#6-css-sintaks-dan-cara-penerapan-pertemuan-3--styling--presentasi-visual)
7. [Selector, combinator, dan prioritas CSS (Pertemuan 3)](#7-selector-combinator-dan-prioritas-css)
8. [Warna teks dan elemen (Pertemuan 3)](#8-warna-teks-dan-elemen)
9. [Tipografi dan text formatting (Pertemuan 3)](#9-tipografi-dan-text-formatting)
10. [Box model, ukuran, dan layout (Pertemuan 3)](#10-box-model-ukuran-dan-layout)
11. [Background warna, gambar, dan gradient (Pertemuan 3)](#11-background-warna-gambar-dan-gradient)
12. [Pembahasan latihan kartu profil HTML & CSS (Pertemuan 3)](#12-pembahasan-latihan-kartu-profil)
13. [Pertemuan 4: Evaluasi HTML/CSS & Fundamental Backend PHP](#13-pertemuan-4-evaluasi-htmlcss--fundamental-backend-php)
14. [Pertemuan 5: Operasi CRUD pada PHP & MySQL](#14-pertemuan-5-operasi-crud-pada-php--mysql)
15. [Pembahasan Studi Kasus CRUD: Contoh Dosen & Aplikasi Catatan Keuangan](#15-pembahasan-studi-kasus-crud-contoh-dosen--aplikasi-catatan-keuangan)
16. [Pelurusan istilah dan kesalahan sumber (Pertemuan 1–5)](#16-pelurusan-istilah-dan-kesalahan-sumber-pertemuan-15)
17. [Latihan soal beserta pembahasan lengkap (60 Soal Pertemuan 1–5)](#17-latihan-soal-beserta-pembahasan-lengkap-60-soal-pertemuan-15)
18. [Ringkasan cepat, cheat-sheet sintaks, dan checklist belajar](#18-ringkasan-cepat-cheat-sheet-sintaks-dan-checklist-belajar)
19. [Lampiran kode latihan dan praktikum lengkap](#19-lampiran-kode-latihan-dan-praktikum-lengkap)
20. [Peta cakupan sumber dan referensi klarifikasi teknis](#20-peta-cakupan-sumber-dan-referensi-klarifikasi-teknis)

---

## 1. Daftar sumber dan cara penggabungan

Seluruh materi dalam dokumen ini disintesis dari 27 berkas sumber perkuliahan pada Pertemuan 1 hingga Pertemuan 5:

| No. | Pertemuan | Berkas Sumber | Hal/Slide | Topik Utama yang Digunakan |
| ---: | :---: | :--- | ---: | :--- |
| 1 | P1 | `01_Dasar_Pemrograman_Web.pptx` & `.pdf` | 24 | Website, jenis web, istilah, struktur navigasi, editor, dan Tugas 1 |
| 2 | P1 | `01_Canva_Prodi_Informatika.pdf` | 17 | Kontrak kuliah, client–server, HTTP, URL, peran developer, etika |
| 3 | P1–P2 | `01_Canva_Teknik_Informatika_SI.pdf` | 17 | Struktur HTML5, DOM, semantik, multimedia, form, dan validasi |
| 4 | P2 | `02_Pemrograman_HTML.pptx` & `.pdf` | 28 | Struktur HTML, tag, elemen, atribut, paragraf, dan heading |
| 5 | P2 | `02_Pemrograman_HTML_Alt.pptx` & `.pdf` | 17 | Versi ringkas HTML hingga aturan penulisan atribut |
| 6 | P3 | `03_Pemrograman_CSS.pptx` & `.pdf` | 16 | Jenis CSS, istilah, pseudo, padding, margin, combinator, border |
| 7 | P3 | `03_Canva_CSS_Versi_2.pdf` | 18 | Sintaks, komentar, selector elemen/class/ID/atribut/universal/pseudo/group |
| 8 | P3 | `03_Canva_Mahasiswa_Pemula.pdf` | 22 | Dasar CSS, warna, tipografi, box model, unit, display, Flexbox, DevTools |
| 9 | P3 | `03_Canva_Warna_Teks_Elemen.pdf` | 10 | Nama warna, RGB, RGBA, hex, HSL, dan properti pewarnaan |
| 10 | P3 | `03_Canva_Text_Formatting.pdf` | 9 | Font, perataan, arah baca, dekorasi, kapitalisasi, shadow, dan spasi |
| 11 | P3 | `03_Canva_Terima_Kasih.pdf` | 9 | Background CSS: warna, fallback, gradient, gambar, repeat, position, size |
| 12 | P3 | `Latihan_gemini-code_HTML.html` & `.css` | — | Praktikum kartu profil digital (variabel CSS, Flexbox, position, hover) |
| 13 | P4 | `Canva_Topik_4_Mastering_Backend_PHP` | 8 | Arsitektur statis vs dinamis, siklus eksekusi PHP, sintaks, variabel, array terindeks & asosiatif, `if-elseif-else`, `foreach`, `$_GET` vs `$_POST` |
| 14 | P4 | `W3Schools HTML & CSS Exercises` | — | Evaluasi latihan tag HTML5, atribut, tabel, form, dan properti CSS3 |
| 15 | P5 | `Canva_Topik_5_Operasi_CRUD_PHP_MySQL` | 13 | Konsep CRUD, pemetaan CRUD–HTTP–SQL, arsitektur 3-tier, skema tabel `mahasiswa`, koneksi OOP `mysqli`, Read/Create/Update/Delete, Prepared Statements, PDO, XSS, PRG |
| 16 | P5 | `Moodle_PHP_Downloads` (8 file `.php`) | — | Kode contoh dosen: `koneksi.php`, `tampil.php`, `tambah.php`, `inputuser.php`, `ubah.php`, `update2.php`, `hapus.php`, `formlogin.php` |
| 17 | P5 | `Tugas_5_CRUD_Catatan_Keuangan` | — | Implementasi final CRUD 1 tabel (`keuangan.sql`, `koneksi.php`, `index.php`, `tambah.php`, `proses_tambah.php`, `ubah.php`, `update.php`, `hapus.php`) |

## 2. Pengantar dan kontrak perkuliahan

### 2.1 Pengampu dan kanal komunikasi dalam materi

Slide dasar web, HTML, dan CSS mencantumkan **Yusup Miftahuddin, S.Kom., M.T.** Canva pengantar juga mencantumkan **Anisa Putri Setyaningrum, S.Kom., M.T.** dalam informasi tim pengampu.

Kanal yang disebut pada Canva pengantar adalah Elearning ITENAS sebagai LMS, WhatsApp/Discord kelas untuk diskusi, dan GitHub Classroom sebagai repositori kode. Bagian ini merekam keterangan sumber; akun, kelas, dan tautan undangan tetap mengikuti arahan dosen.

### 2.2 Bobot penilaian pada Canva pengantar

| Komponen | Bobot dalam slide | Keterangan dalam slide |
| --- | ---: | --- |
| Kehadiran | 10% | Minimal 80% kehadiran kelas |
| Tugas | 25% | Latihan mandiri dan mingguan |
| ETS | 25% | Ujian teori dan coding pemahaman |
| UAS | 20% | Ujian akhir teori integratif |
| Proyek akhir | 20% | Pengembangan aplikasi web oleh tim |
| **Total** | **100%** | Jumlah bobot yang tertulis pada sumber |

Bobot di atas berasal dari `01_Canva_Prodi_Informatika.pdf`, halaman 3. Jika kontrak yang diumumkan di kelas berbeda, gunakan ketentuan dosen. Dokumen ini tidak membandingkan bobot tersebut dengan RPS di folder lain.

### 2.3 Peta satu semester dalam sumber

| Minggu | Tahap | Topik yang disebut |
| --- | --- | --- |
| 1–4 | Fondasi web | HTML5 semantik, form, dasar CSS3, dan box model |
| 5–7 | Styling dan layout | Flexbox, Grid, responsive web design, dan framework CSS |
| 8–11 | Interaktivitas | JavaScript dasar, DOM, event handling, dan Fetch API |
| 12–16 | Integrasi dan proyek | Backend API, database, deployment, dan presentasi |

Tabel ini menjelaskan arah perkuliahan dalam Canva. Pembahasan detail dokumen tetap berfokus pada isi folder tiga minggu.

### 2.4 Etika coding dan integritas akademik

Materi menekankan penulisan kode secara mandiri, pemahaman logika, dokumentasi yang membantu pembaca, serta penggunaan AI sebagai alat memahami konsep. Menyalin pekerjaan teman tanpa pemahaman/modifikasi dan membagikan jawaban saat ujian disebut sebagai pelanggaran. Slide menyebut sanksi nilai gugur untuk komponen terkait; penerapan sanksi mengikuti kebijakan dosen.

Kebiasaan belajar yang sesuai: ketik ulang contoh, jelaskan fungsi tiap bagian dengan kalimat sendiri, ubah satu nilai untuk melihat akibatnya, lalu kerjakan variasi tanpa membuka contoh.

### 2.5 Persiapan dan tugas yang disebut

1. Menyiapkan editor dan browser, mengaktifkan akses LMS, serta membaca pengantar HTML.
2. **Tugas 1 pada slide dasar web:** memilih satu sistem berbasis website di ITENAS dan membuat struktur navigasinya.
3. **Tugas pada Canva HTML:** membuat CV `index.html` berisi biodata serta riwayat pendidikan, menerapkan elemen semantik, kemudian commit/push ke repositori dan mengirim tautannya melalui LMS.
4. Mempelajari HTML dan CSS sebelum beralih ke framework. Bootstrap dan Tailwind hanya disebut sebagai arah belajar berikutnya, bukan materi yang dijelaskan di folder ini.

## 3. Dasar pemrograman web (Pertemuan 1 — Fondasi Jaringan & Protokol)

> ### 🔗 Jembatan Logika & Relevansi Antar-Materi
> - **Mengapa kita mulai dari bab ini?** Sebelum menulis satu baris kode pun, kita wajib memahami **bagaimana komputer pengguna (Client) meminta halaman ke komputer penyedia (Server)**. Tanpa jaringan Internet, protokol HTTP, DNS, dan URL, file kode yang kita buat hanya akan diam di laptop sendiri dan tidak bisa diakses orang lain.
> - **Hubungan ke materi selanjutnya:** Ketika Server menerima permintaan HTTP (Bab 3), pengguna perlu berpindah dari satu halaman ke halaman lain secara terarah — itulah yang melahirkan **Struktur Navigasi (Bab 4)** dan dokumen **HTML5 (Bab 5)** sebagai isi pesan yang dikirim oleh Server ke Browser.
>
> ### 💡 Analogi dari Proyek Pribadi Kamu (`D:\PROJECT\SELF EXPERIMENT`)
> - **Client–Server, HTTP Request/Response, & Status Code (`200 OK`):** Ingat cara kerja proyek **`X LIKE REMOVER v2.0`** buatanmu! Saat skrip kamu menghapus Like atau Bookmark di X (Twitter), skrip tidak asal klik tombol lalu lanjut, melainkan **menunggu konfirmasi respon `HTTP 200 OK`** dari server X (`UnfavoriteTweet` / `DeleteBookmark`). Di sini, browser otomatis kamu adalah **Client**, mesin X adalah **Server**, aksi klik adalah **HTTP Request**, dan kode `200` adalah **HTTP Response** yang membuktikan server berhasil memproses permintaan!
> - **Anatomi URL:** Saat di `X LIKE REMOVER` kamu membuka `https://x.com/adikafaza/likes?filter=recent#top`:
>   - `https` = **Scheme/Protokol** (komunikasi terenkripsi TLS)
>   - `x.com` = **Host/Domain** (diterjemahkan oleh **DNS** menjadi alamat IP server X)
>   - `/adikafaza/likes` = **Path** (lokasi sumber daya di server)
>   - `?filter=recent` = **Query String** (parameter data yang dikirim ke server, kelak ditangkap oleh `$_GET` di PHP pada Pertemuan 4!)
>   - `#top` = **Fragment** (penanda posisi elemen `id="top"` di dalam halaman, hanya dibaca browser dan tidak dikirim ke server).
> - **Frontend vs Backend vs Fullstack:** Di proyek **`AI TRADING TERMINAL` (`run_web.py`)**, tampilan chart, tombol *1-Click Execution*, dan *Badge Telemetri* di browser adalah **Frontend** (HTML + CSS + JS), sedangkan mesin Python yang menghitung *Order Book Imbalance*, memanggil API OKX/Arkham, dan menyimpan data ke `ai_trading.db` adalah **Backend**. Karena kamu membangun keduanya sekaligus hingga saling terhubung, kamu berperan sebagai **Fullstack Developer**!


### 3.1 Internet, WWW, website, dan halaman web

**Internet** adalah jaringan dari berbagai jaringan komputer yang berkomunikasi menggunakan keluarga protokol TCP/IP. Internet merupakan infrastrukturnya; layanan yang berjalan di atasnya dapat berupa web, email, dan layanan lain.

**World Wide Web (WWW)** adalah sistem dokumen dan sumber daya yang saling terhubung melalui hyperlink, diakses menggunakan browser dan layanan web. Karena itu, internet dan WWW tidak sama: web merupakan salah satu layanan yang menggunakan internet.

**Website** adalah kumpulan halaman dan sumber daya terkait. Satu website dapat memiliki halaman beranda, profil, berita, dan kontak. **Halaman web** adalah satu dokumen atau tampilan dalam website tersebut. Kontennya dapat berupa teks, gambar, animasi, audio, video, atau gabungannya.

**Aplikasi web** menyediakan fungsi yang dijalankan melalui browser, misalnya mengisi KRS, mengelola berita, atau berdiskusi. Website dan aplikasi web dapat saling tumpang tindih; sebuah situs informasi juga bisa memiliki fungsi aplikasi seperti formulir pencarian.

Definisi pada slide berfokus pada akses internet. Dalam praktik pembelajaran, halaman juga dapat dibuka secara lokal atau melalui server pada jaringan internal.

### 3.2 Jenis website

| Jenis dalam slide | Ciri utama | Contoh ilustratif | Cara perubahan konten |
| --- | --- | --- | --- |
| Statis | Konten umumnya berasal dari file yang sudah disiapkan | Halaman profil sederhana | Pengembang mengedit file lalu menerbitkannya |
| Dinamis | Konten disusun atau diperbarui berdasarkan data dan proses aplikasi | Portal berita, sistem akademik | Melalui backend, database, atau pengolahan data |
| Interaktif | Pengguna dapat saling berinteraksi atau memberikan kontribusi | Forum dan blog dengan komentar | Melalui kiriman, balasan, atau tindakan pengguna |

Materi mengelompokkan ketiganya sebagai jenis website. Secara konsep, **dinamis** dan **interaktif** tidak harus saling terpisah: forum biasanya sekaligus dinamis dan interaktif. Halaman yang disajikan sebagai file statis pun bisa memiliki interaksi di browser melalui JavaScript.

### 3.3 Peran HTML, CSS, JavaScript, dan PHP

| Teknologi | Tanggung jawab | Contoh |
| --- | --- | --- |
| HTML | Struktur dan makna konten | Judul, paragraf, gambar, daftar, form |
| CSS | Presentasi dan tata letak | Warna, font, ukuran, jarak, layout |
| JavaScript | Perilaku dan logika interaksi | Merespons klik, memperbarui DOM |
| PHP | Pengolahan di server | Menerima data form dan menghasilkan respons |

Analogi bangunan: HTML menentukan ruang dan bagian bangunan, CSS menentukan penampilannya, JavaScript mengatur perilaku perangkat yang dapat dioperasikan, dan server mengolah permintaan yang memerlukan layanan di belakang layar.

Slide memakai istilah umum “bahasa skrip pemrograman web”. Untuk pemahaman teknis, HTML merupakan bahasa markup dan CSS bahasa stylesheet; keduanya tidak berperan sama dengan bahasa pemrograman yang menjalankan logika seperti JavaScript/PHP.

### 3.4 Model client–server

**Client** adalah pihak yang meminta layanan, biasanya browser pengguna. **Server** menerima permintaan dan mengirim respons. Server dapat mengirim file yang sudah ada atau menjalankan aplikasi untuk menyusun respons berdasarkan data.

```mermaid
sequenceDiagram
    participant U as Pengguna
    participant B as Browser
    participant D as DNS
    participant S as Server web/aplikasi
    participant DB as Database
    U->>B: Memasukkan URL atau memilih tautan
    B->>D: Mencari alamat host jika diperlukan
    D-->>B: Informasi alamat host
    B->>S: HTTP request melalui koneksi yang sesuai
    opt Halaman membutuhkan data aplikasi
        S->>DB: Meminta data
        DB-->>S: Hasil data
    end
    S-->>B: HTTP response
    B->>S: Meminta CSS, gambar, atau skrip yang dirujuk
    S-->>B: Sumber daya tambahan
    B-->>U: Halaman dirender
```

Bagan ini menyederhanakan alur. Pencarian DNS dapat memakai cache; koneksi HTTPS melibatkan TLS. Database hanya diperlukan jika aplikasi memang menggunakan data tersebut.

**Client-side** berjalan atau ditafsirkan pada sisi browser. **Server-side** berjalan pada server sebelum respons dikirim atau saat permintaan API diproses. Browser tidak menjalankan kode PHP hanya karena file PHP diunduh; PHP harus diproses oleh lingkungan server yang mendukungnya.

### 3.5 Frontend, backend, dan fullstack

| Peran | Fokus yang dijelaskan pada sumber |
| --- | --- |
| Frontend | Antarmuka, pengalaman pengguna, layout, serta interaksi browser |
| Backend | Logika bisnis, akses database, keamanan, dan layanan API |
| Fullstack | Menghubungkan pekerjaan sisi antarmuka dan sisi server |

Pembagian ini merupakan tanggung jawab pekerjaan, bukan jenis website. Dalam tugas awal, HTML/CSS terutama melatih bagian frontend.

### 3.6 Istilah penting

| Istilah | Arti | Hubungannya dengan web |
| --- | --- | --- |
| Browser | Aplikasi untuk mengakses dan merender sumber daya web | Membaca HTML, menerapkan CSS, menjalankan JavaScript |
| Web server | Perangkat lunak yang menerima permintaan HTTP dan mengirim respons | Contohnya Apache; “server” juga dapat merujuk pada mesin tempatnya berjalan |
| Hosting | Layanan penyedia tempat dan sumber daya untuk menjalankan/menyajikan situs | Menyimpan file dan menyediakan layanan yang dapat diakses |
| Domain | Nama yang mudah dibaca untuk mengidentifikasi host/situs | Misalnya `itenas.ac.id` |
| DNS | Domain Name System, sistem penamaan terdistribusi | Membantu menemukan alamat host berdasarkan nama |
| IP | Internet Protocol | Mengatur pengalamatan dan pengiriman paket antarjaringan |
| Alamat IP | Alamat numerik perangkat atau antarmuka jaringan | Berbeda dari nama domain |
| URL | Uniform Resource Locator | Alamat sebuah sumber daya, bukan hanya beranda website |
| HTTP | Hypertext Transfer Protocol | Mekanisme permintaan dan respons untuk sumber daya web |
| HTTPS | HTTP melalui koneksi yang diamankan dengan TLS | Melindungi komunikasi saat data dikirim |
| Hyperlink | Tautan menuju sumber daya atau bagian dokumen | Dapat ditempelkan pada teks maupun gambar |

**Pelurusan URL:** singkatan yang tepat adalah *Uniform Resource Locator*, meskipun salah satu slide menulis “Universal”. URL juga dapat menunjuk CSS, gambar, atau sumber daya lain. [Rujukan MDN tentang URL](https://developer.mozilla.org/en-US/docs/Learn_web_development/Howto/Web_mechanics/What_is_a_URL).

**Pelurusan XAMPP:** XAMPP merupakan paket lingkungan pengembangan yang mencakup Apache, MariaDB, PHP, dan Perl; komponen web server-nya adalah Apache. [Rujukan Apache Friends](https://www.apachefriends.org/).

### 3.7 Anatomi URL

Contoh berikut memperluas contoh pada Canva dengan fragment:

```text
https://www.kampus.ac.id:443/matakuliah/pemweb?id=101#materi
```

| Bagian | Nilai contoh | Fungsi |
| --- | --- | --- |
| Scheme | `https` | Cara/protokol mengakses sumber daya |
| Host | `www.kampus.ac.id` | Host tujuan |
| Port | `443` | Port layanan; contoh memakai port lazim HTTPS |
| Path | `/matakuliah/pemweb` | Jalur sumber daya |
| Query | `id=101` | Parameter untuk permintaan |
| Fragment | `materi` | Identifikasi bagian sumber daya, misalnya elemen `id="materi"` |

Domain saja belum merupakan URL lengkap. `https://itenas.ac.id/berita` dan `https://itenas.ac.id/profil` mempunyai host sama tetapi path berbeda. Fragment halaman dipakai browser untuk menemukan bagian dokumen; fragment tidak dikirim sebagai bagian target permintaan HTTP.

### 3.8 Metode HTTP dan status respons

| Metode dalam Canva | Maksud umum |
| --- | --- |
| GET | Mengambil representasi sumber daya |
| POST | Mengirim data untuk diproses oleh tujuan |
| PUT | Mengganti representasi sumber daya pada tujuan |
| PATCH | Menerapkan perubahan sebagian |
| DELETE | Meminta penghapusan sumber daya |

Nama metode menyatakan maksud permintaan; cara aplikasi memprosesnya ditentukan server. Form HTML biasa menggunakan GET atau POST. PUT/PATCH/DELETE dalam tabel merupakan pengenalan komunikasi aplikasi/API.

| Kode pada Canva | Makna umum | Ilustrasi |
| --- | --- | --- |
| 200 | OK | Permintaan berhasil |
| 301 | Moved Permanently | Sumber daya berpindah secara permanen |
| 302 | Found | Pengalihan sementara |
| 404 | Not Found | Sumber daya yang diminta tidak ditemukan |
| 500 | Internal Server Error | Server mengalami masalah saat memproses permintaan |

**Request** adalah pesan permintaan dari client; **response** adalah pesan jawaban server. HTTP tidak sama dengan HTML: HTTP membawa pesan dan sumber daya, sedangkan HTML merupakan salah satu format kontennya.

### 3.9 Evolusi web dalam materi

| Istilah pada Canva | Gagasan utama |
| --- | --- |
| Web 1.0 | Informasi cenderung satu arah, pengguna terutama membaca |
| Web 2.0 | Pengguna dapat membuat konten dan berinteraksi, misalnya media sosial |
| Web 3.0 | Dalam slide dikaitkan dengan data terstruktur, AI, dan desentralisasi |

Istilah ini menggambarkan kecenderungan perkembangan, bukan nomor versi HTML atau protokol HTTP. “Web semantik” dan “web terdesentralisasi” juga tidak identik; slide merangkum beberapa gagasan modern dalam satu label.

### 3.10 Editor, browser, standar, dan alat kerja

Slide lama menyebut Notepad, Notepad++, Atom, dan Sublime Text. Canva menyebut Visual Studio Code, Live Server, Prettier, browser Chrome/Firefox, DevTools, Git, dan GitHub. Nama-nama tersebut dicatat sebagai alat yang disebut sumber, bukan kewajiban memasang semuanya.

| Alat | Fungsi dalam proses belajar |
| --- | --- |
| Editor teks | Menulis dan menyimpan `.html` serta `.css` |
| Browser | Membuka dan melihat hasil halaman |
| Live Server | Menyajikan file lokal melalui server pengembangan |
| Prettier | Membantu merapikan format kode |
| DevTools | Menginspeksi DOM, gaya, request, dan kesalahan |
| Git | Mencatat riwayat perubahan kode |
| GitHub | Menyimpan dan membagikan repositori |
| XAMPP | Menyediakan lingkungan server lokal untuk materi yang membutuhkannya |
| Database | Menyimpan data aplikasi; belum diperlukan untuk contoh HTML/CSS statis |

Canva menghubungkan standar web dengan **kompatibilitas browser**, **aksesibilitas**, dan **SEO/semantik**. Artinya, kode sebaiknya mempunyai struktur yang dapat dipahami browser, pembaca layar, dan mesin pencari, selain terlihat sesuai desain. W3C dan WCAG disebut dalam konteks ini.

## 4. Struktur navigasi website (Pertemuan 1 — Arsitektur Alur Halaman)

> ### 🔗 Jembatan Logika & Relevansi Antar-Materi
> - **Hubungan dari Bab 3 (Dasar Web):** Setelah tahu bahwa sebuah **Website** adalah kumpulan dari banyak halaman web yang saling terhubung melalui *Hyperlink* dan *URL* (Bab 3), kita tidak boleh menghubungkan halaman secara acak. Kita harus merancang **peta jalan (Struktur Navigasi)** terlebih dahulu agar pengguna tidak tersesat.
> - **Hubungan ke Bab 5 (HTML5):** Peta navigasi yang kita gambar di atas kertas pada Bab 4 ini nantinya diwujudkan menjadi kode nyata menggunakan tag **`<nav>`** dan **`<a href="...">`** pada **HTML5 (Bab 5)**!
>
> ### 💡 Analogi dari Proyek Pribadi Kamu (`D:\PROJECT\SELF EXPERIMENT`)
> - **1. Navigasi Linear (Berurutan `Tahap 1 -> Tahap 2 -> Tahap 3`):** Persis seperti alur bot **`AUTOMATION KUISIONER`** kamu! Mahasiswa tidak bisa langsung melompat ke halaman *Submit Akhir* sebelum melewati *Halaman Login $ightarrow$ Pilih Mata Kuliah $ightarrow$ Isi Kuisioner Halaman 1 $ightarrow$ Isi Kuisioner Halaman 2 $ightarrow$ Selesai*. Urutannya terkunci lurus (Linear).
> - **2. Navigasi Hierarki (Pohon / *Master–Slave Page*):** Persis seperti struktur menu di **`BEASISWA-CHECKER`** atau **SIMSKK ITENAS (Tugas 1)**: Dari **Menu Utama (Master Page)** bercabang ke 4 sub-menu (**Profil**, **Analytics**, **Scraper**, **Database**), lalu dari **Analytics** bercabang lagi ke kuadran **Safety**, **Target**, dan **Reach** (*Slave Pages*).
> - **3. Navigasi Non-Linear (Bebas Setara):** Seperti daftar koin di **`AI TRADING TERMINAL`** (`BTC/USDT`, `ETH/USDT`, `SOL/USDT`) di mana kamu bebas berpindah dari koin mana saja ke koin lainnya secara langsung tanpa urutan wajib dan kedudukannya setara.
> - **4. Navigasi Campuran (*Composite*):** Gabungan semuanya! Misalnya di **`AI TRADING TERMINAL`**, kamu memilih menu secara **Hierarkis** (Dashboard $ightarrow$ Skenario Trading), tetapi saat mengeksekusi order **`⚡ Eksekusi OKX LIVE`**, kamu harus melewati alur **Linear** (*Klik Tombol $ightarrow$ Dialog Konfirmasi Risiko $ightarrow$ Validasi Margin $ightarrow$ Order Terkirim*).


### 4.1 Pengertian dan tujuan

Struktur navigasi menggambarkan hubungan halaman dan tautan serta jalur pengguna ketika mengakses aplikasi. Bagan navigasi membantu menjawab: halaman apa saja yang tersedia, dari mana suatu halaman dapat dibuka, dan apakah pengguna harus mengikuti urutan tertentu.

Menurut slide, pertimbangan pengelompokannya adalah kebutuhan objek/konten, kemudahan pemakaian, tingkat interaksi, dan kemudahan pembuatan yang memengaruhi waktu pengerjaan.

**Bedakan navigasi dari layout:** navigasi membahas hubungan halaman atau langkah; layout membahas posisi elemen di dalam sebuah halaman. Menu di bagian atas halaman adalah tampilan navigasi, sedangkan hubungan tujuan tautannya adalah struktur navigasi.

### 4.2 Navigasi linear

Halaman atau tahap dibuka berurutan. Pada model linear yang dijelaskan slide, pengguna hanya bergerak ke satu tahap sebelumnya atau sesudahnya.

```text
Tahap 1 <-> Tahap 2 <-> Tahap 3 <-> Tahap 4
```

Contoh: tutorial berurutan atau proses pengisian data beberapa langkah. Keuntungannya alur mudah dikendalikan; keterbatasannya pengguna sulit melompat ke bagian yang jauh.

### 4.3 Navigasi hierarki

Halaman disusun sebagai pohon berdasarkan kelompok dan subkelompok. Slide menyebut halaman induk sebagai **Master Page** dan halaman pendukung sebagai **Slave Page**. Istilah induk/anak dalam dokumen ini merujuk pada kedudukan navigasi, bukan hubungan elemen DOM.

```text
Beranda
├── Akademik
│   ├── Jadwal
│   └── Nilai
└── Profil
    ├── Biodata
    └── Kontak
```

Satu halaman pendukung dapat menjadi induk untuk halaman di bawahnya. Ciri pembeda model hierarki murni ialah tingkat dan percabangan; bukan urutan proses linear. Menambahkan jalur proses linear ke model ini menghasilkan navigasi campuran.

### 4.4 Navigasi non-linear

Pengguna dapat berpindah melalui berbagai tautan tanpa urutan tunggal. Menurut slide, percabangannya memiliki tingkat yang setara, berbeda dari hubungan induk–anak pada hierarki.

```text
Topik A <-> Topik B
   ^          ^
   |          |
   v          v
Topik C <-> Topik D
```

Contoh: kumpulan topik yang saling menautkan istilah terkait. Keuntungannya eksplorasi bebas; tantangannya pengguna dapat kehilangan arah jika label dan konteks halaman tidak jelas.

### 4.5 Navigasi campuran

Navigasi campuran menggabungkan dua atau lebih model. Slide juga menyebutnya navigasi bebas/composite. Contohnya pengguna memilih kategori secara hierarkis, lalu mengikuti pendaftaran yang linear.

```text
Beranda
├── Informasi
└── Pendaftaran
    └── Pilih program -> Isi data -> Tinjau -> Selesai
```

Model ini memberikan ruang bagi kebutuhan informasi sekaligus kebutuhan proses. “Campuran” harus dapat dijelaskan berdasarkan bagian yang memakai setiap model, bukan hanya karena diagramnya mempunyai banyak panah.

### 4.6 Perbandingan dan cara menentukan model

| Model | Pertanyaan pembeda | Tanda utama |
| --- | --- | --- |
| Linear | Harus mengikuti urutan? | Rantai tahap sebelumnya/sesudahnya |
| Hierarki | Ada induk, kategori, dan subkategori? | Pohon bertingkat |
| Non-linear | Bisa berpindah antartopik setara? | Tautan bebas tanpa satu rantai wajib |
| Campuran | Ada beberapa pola berbeda dalam satu sistem? | Gabungan pohon, rantai, atau tautan bebas |

Untuk tugas navigasi, catat halaman yang benar-benar ada, tuliskan tujuan tiap menu, identifikasi urutan yang wajib, lalu gambar hubungan tersebut. Contoh dalam bab ini adalah ilustrasi pembelajaran, bukan hasil audit sistem ITENAS tertentu.

## 5. HTML: struktur dan isi halaman (Pertemuan 2 — Kerangka & Semantik Konten)

> ### 🔗 Jembatan Logika & Relevansi Antar-Materi
> - **Hubungan dari Pertemuan 1 (Bab 3–4):** Di Pertemuan 1 kita sudah menyiapkan "jalur pipa HTTP" dan "peta navigasi antar-halaman". Sekarang pertanyaannya: **apa isi dari setiap halaman tersebut?** Jawabannya adalah **HTML (*HyperText Markup Language*)**. HTML bertugas membangun kerangka tulang, memberi makna semantik pada teks, menampilkan tabel data, dan menyediakan kotak formulir input.
> - **Hubungan ke Pertemuan 3 (CSS) & Pertemuan 4–5 (PHP & MySQL):**
>   - Tanpa HTML, **CSS (Pertemuan 3)** tidak punya elemen (`tag`, `class`, `id`) untuk diwarnai atau ditata.
>   - Tanpa elemen **`<form method="post" action="...">`** dan atribut **`name="..."`** pada HTML (Bab 5.13), **PHP (Pertemuan 4 & 5)** tidak akan pernah bisa menerima input dari pengguna untuk disimpan ke database MySQL!
>
> ### 💡 Analogi dari Proyek Pribadi Kamu (`D:\PROJECT\SELF EXPERIMENT`)
> - **DOM Tree & Selector Atribut (`id`, `class`, `name`):** Ingat bagaimana skrip Python Playwright kamu di **`AUTOMATION KUISIONER`**, **`AUTO CHECK KRS`**, dan **`BEASISWA-CHECKER`** menemukan tombol atau kolom input di browser? Skrip kamu menelusuri **DOM (*Document Object Model*)** HTML!
>   - Saat kamu mencari satu elemen spesifik yang unik di halaman (misal kolom NIM), kamu mencari atribut **`id="..."`** (karena `id` wajib unik 1 per halaman).
>   - Saat kamu mengambil semua kartu tweet atau semua baris mata kuliah sekaligus, kamu mencari atribut **`class="..."`** (karena `class` dipakai berulang untuk kelompok elemen sejenis).
>   - Saat form dikirim ke server (seperti di Tugas 5 CRUD), server **tidak peduli pada `id` atau `class`**, melainkan membaca atribut **`name="..."`** (contoh: `<input name="nominal">` menjadi `$_POST['nominal']`). **Ingat rumus emas UTS ini: `id` & `class` untuk Frontend (CSS/JS), sedangkan `name` wajib untuk Backend (PHP)!**
> - **Void Elements (`<img>`, `<input>`, `<br>`, `<hr>`, `<meta>`, `<link>`):** Bayangkan komponen sensor tunggal di proyek hardware **`HEADLAMP`** atau **`SOLDER STATION`** kamu — ia adalah komponen mandiri yang tidak membungkus komponen lain di dalamnya, sehingga **tidak punya tag penutup** (tidak boleh menulis `</img>` atau `</input>`).
> - **Mengapa Validasi HTML5 (`required`, `min="1"`, `type="email"`) Saja Tidak Cukup?** Sebagai pembuat bot otomasi di `SELF EXPERIMENT`, kamu tahu persis bahwa validasi di sisi browser (HTML5) bisa di-*bypass* dengan mudah lewat *Inspect Element (DevTools)* atau mengirim request langsung via script Python! Itulah sebabnya validasi HTML5 hanya untuk kenyamanan pengguna (*UX*), sedangkan validasi keamanan sejati wajib dilakukan di **Server PHP (Pertemuan 4–5)**.


### 5.1 Pengertian HTML

HTML adalah **HyperText Markup Language**, bahasa penanda untuk memberi struktur dan makna pada konten web. Dokumennya berupa teks, dapat ditulis dengan editor, dan lazim disimpan sebagai `.html`.

Browser membaca markup dan membentuk struktur dokumen untuk ditampilkan. HTML menentukan bahwa suatu teks adalah judul atau paragraf; warna dan ukuran tampilannya diatur CSS.

### 5.2 Struktur dasar dokumen

```html
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Pemrograman Web</title>
</head>
<body>
    <h1>Selamat Datang</h1>
    <p>Saya sedang mempelajari HTML dan CSS.</p>
</body>
</html>
```

| Bagian | Fungsi | Alasan dipakai |
| --- | --- | --- |
| `<!DOCTYPE html>` | Deklarasi doctype HTML | Membantu browser memakai mode standar |
| `<html>` | Elemen akar | Membungkus dokumen |
| `lang="id"` | Bahasa utama dokumen | Membantu interpretasi bahasa, termasuk pembaca layar |
| `<head>` | Metadata dan sumber daya dokumen | Menempatkan informasi yang bukan isi utama halaman |
| `<meta charset="UTF-8">` | Deklarasi encoding | Membantu pembacaan karakter dengan benar |
| Meta viewport | Konfigurasi viewport | Mendukung tampilan pada perangkat dengan lebar berbeda |
| `<title>` | Judul dokumen | Umumnya tampil pada tab/jendela browser |
| `<body>` | Konten dokumen yang ditampilkan | Menampung teks, gambar, form, dan struktur halaman |

Doctype bukan elemen pembungkus dan tidak mempunyai tag penutup. `<title>` berbeda dari `<h1>`: yang pertama judul dokumen pada metadata, yang kedua judul di konten halaman. `<head>` juga berbeda dari `<header>` yang merupakan bagian konten semantik.

### 5.3 Tag, elemen, dan atribut

```html
<p class="pengantar">Halo, dunia web!</p>
```

| Istilah | Bagian contoh | Penjelasan |
| --- | --- | --- |
| Tag pembuka | `<p class="pengantar">` | Memulai elemen |
| Nama tag | `p` | Jenis elemen |
| Nama atribut | `class` | Informasi tambahan pada tag pembuka |
| Nilai atribut | `pengantar` | Nilai yang diberikan pada atribut |
| Konten | `Halo, dunia web!` | Isi elemen |
| Tag penutup | `</p>` | Mengakhiri elemen |
| Elemen | Seluruh contoh | Komponen dokumen, termasuk kontennya |

Tag adalah penanda sintaks; elemen adalah komponen yang dibentuk oleh markup tersebut. Atribut bukan teks yang otomatis terlihat sebagai konten.

### 5.4 Elemen berpasangan dan void elements

Elemen seperti `<p>`, `<div>`, `<a>`, `<video>`, dan `<textarea>` mempunyai tag pembuka serta penutup. Elemen kosong tertentu seperti `<img>`, `<br>`, `<hr>`, `<input>`, `<meta>`, `<link>`, dan `<source>` adalah **void elements**, sehingga tidak boleh diberi tag penutup. [Aturan sintaks HTML WHATWG](https://html.spec.whatwg.org/multipage/syntax.html#void-elements).

```html
<p>Paragraf dengan tag penutup.</p>
<img src="foto.jpg" alt="Foto profil mahasiswa">
<br>
<input type="text" name="nama">
```

Pada HTML biasa, slash pada `<br />` tidak membuat mekanisme penutupan seperti XML. Untuk latihan, gunakan penulisan sederhana `<br>` dan jangan menulis `</br>` atau `</img>`.

### 5.5 Penulisan tag dan nesting

Gunakan huruf kecil secara konsisten, indentasi untuk memperlihatkan struktur, dan tutup elemen berpasangan dengan urutan yang sesuai.

```html
<p>Belajar <strong>HTML</strong> secara bertahap.</p>
```

Urutannya: membuka `p`, membuka `strong`, menutup `strong`, menutup `p`. Menutup `p` sebelum `strong` akan membuat nesting tidak sesuai maksud penulis. Browser dapat memperbaiki sebagian kesalahan secara otomatis, tetapi perbaikan itu bukan alasan menulis markup yang salah.

Nama tag HTML tidak peka huruf besar/kecil dalam sintaks HTML. Anjuran huruf kecil merupakan kebiasaan konsistensi, bukan berarti `<P>` selalu gagal dipahami browser.

### 5.6 DOM dan hubungan elemen

DOM adalah **Document Object Model**, representasi dokumen sebagai objek/node yang saling berhubungan. Element node merupakan salah satu jenis node; teks dan komentar juga dapat menjadi node.

```text
Document
└── html
    ├── head
    │   └── title
    │       └── teks judul
    └── body
        ├── h1
        │   └── teks heading
        └── p
            └── teks paragraf
```

**Parent** adalah induk langsung; **child** adalah anak langsung; **descendant** mencakup semua keturunan; **sibling** adalah elemen yang mempunyai parent sama. Hubungan ini menjadi dasar selector CSS dan manipulasi dokumen dengan JavaScript.

### 5.7 Atribut global

Tabel global pada slide mencantumkan atribut berikut. Pengaruhnya tetap bergantung pada jenis elemen dan dukungan browser.

| Atribut | Fungsi/contoh |
| --- | --- |
| `id` | Identitas unik dalam satu dokumen, misalnya `id="kontak"` |
| `class` | Kelompok gaya/perilaku yang dapat dipakai berulang, misalnya `class="kartu aktif"` |
| `style` | Deklarasi CSS inline |
| `title` | Informasi tambahan; jangan dijadikan satu-satunya label penting |
| `lang` | Bahasa konten elemen |
| `dir` | Arah teks, misalnya `ltr` atau `rtl` |
| `hidden` | Menandai konten yang tidak relevan untuk ditampilkan dalam keadaan tersebut |
| `data-*` | Data tambahan buatan penulis, misalnya `data-kategori="web"` |
| `contenteditable` | Mengizinkan konten elemen diedit |
| `draggable` | Menentukan apakah elemen dapat diseret |
| `spellcheck` | Mengatur pemeriksaan ejaan |
| `tabindex` | Mengatur kemampuan/fokus navigasi keyboard; hindari urutan positif tanpa kebutuhan |
| `accesskey` | Petunjuk shortcut aktivasi/fokus; dapat berbenturan dengan shortcut perangkat |
| `translate` | Petunjuk apakah konten sebaiknya diterjemahkan |

**ID dan class berbeda:** sebuah ID harus unik dalam dokumen; beberapa elemen boleh memiliki class sama. Satu elemen boleh memiliki beberapa class yang dipisahkan spasi.

```html
<p id="pembuka" class="paragraf sorotan">Belajar web.</p>
<p class="paragraf">Latihan berikutnya.</p>
```

### 5.8 Atribut khusus dan aturan penulisannya

| Atribut | Elemen/contoh penggunaan | Fungsi |
| --- | --- | --- |
| `href` | `<a>`, `<link>` | Alamat tujuan atau sumber terkait |
| `src` | `<img>`, `<audio>`, `<video>`, `<source>`, `<iframe>`, `<embed>` | Alamat sumber yang dimuat |
| `alt` | `<img>` | Alternatif teks untuk gambar |
| `width`, `height` | Gambar/video | Dimensi tampilan; tidak menggantikan kualitas sumber |
| `action` | `<form>` | Tujuan pengiriman form |
| `method` | `<form>` | Metode pengiriman |
| `autoplay` | Audio/video | Meminta pemutaran otomatis; browser dapat membatasinya |
| `controls` | Audio/video | Meminta kontrol pemutar bawaan |
| `type` | Input/source | Jenis input atau jenis sumber media |

Tulis nama atribut dengan konsisten, gunakan petik lurus, dan pisahkan atribut dengan spasi. **Nama atribut** tidak ditulis sebagai beberapa kata berspasi, tetapi **nilai atribut** boleh berisi spasi: `alt="Foto profil mahasiswa"`. Nama `data-nama` memakai tanda hubung, sedangkan `class="kartu aktif"` berarti dua class.

Atribut boolean dinilai dari keberadaannya. `required` berarti wajib; `required="false"` juga tetap dianggap hadir. Hilangkan atributnya jika tidak ingin mengaktifkannya.

### 5.9 Atribut event

Atribut event menghubungkan kejadian pada elemen/dokumen dengan JavaScript. Contoh pengenalan: `onclick` saat klik, `onchange` saat perubahan nilai dikonfirmasi, dan `onsubmit` saat form akan dikirim.

Tabel di slide juga memuat event tingkat jendela berikut; sebagian bersifat khusus atau tidak selalu dapat diandalkan untuk pekerjaan penting.

| Atribut event | Kejadian umum |
| --- | --- |
| `onbeforeprint`, `onafterprint` | Sebelum/sesudah proses pencetakan |
| `onbeforeunload` | Sebelum pengguna meninggalkan halaman; penggunaannya dibatasi browser |
| `onerror` | Terjadi kesalahan yang relevan dengan target |
| `onhashchange` | Fragment/hash URL berubah |
| `onload` | Pemuatan selesai |
| `onmessage` | Pesan komunikasi diterima |
| `onoffline`, `ononline` | Status koneksi browser berubah; tidak membuktikan server tertentu dapat dijangkau |
| `onpagehide`, `onpageshow` | Halaman disembunyikan/ditampilkan dalam siklus navigasi |
| `onpopstate` | Entri history aktif berubah |
| `onresize` | Ukuran jendela berubah |
| `onstorage` | Perubahan Web Storage yang relevan pada konteks lain diterima |
| `onunload` | Pelepasan halaman; jangan mengandalkannya untuk penyimpanan data penting |

Fokus materi awal adalah mengenali fungsi atribut event. Implementasi JavaScript lengkap tidak diperlukan untuk memahami struktur HTML/CSS di folder ini.

### 5.10 Paragraf, baris, garis, dan teks preformatted

| Elemen | Fungsi | Kapan digunakan |
| --- | --- | --- |
| `<p>` | Paragraf | Satu kelompok kalimat atau gagasan |
| `<br>` | Pemisah baris | Alamat atau teks yang memang memerlukan baris baru |
| `<hr>` | Pemisah tematik | Perubahan bagian/topik; biasanya tampak sebagai garis |
| `<pre>` | Teks dengan whitespace yang dipertahankan | Contoh kode atau teks berformat |
| `<div>` | Wadah generik | Mengelompokkan elemen saat tidak ada elemen semantik yang sesuai |

```html
<p>Paragraf pertama membahas struktur HTML.</p>
<p>Paragraf kedua membahas tampilan CSS.</p>

<p>Alamat kampus:<br>Jalan contoh nomor 1<br>Bandung</p>

<hr>

<pre>Nama    Nilai
Adika   90
Budi    85</pre>
```

Pada teks biasa, beberapa spasi dan baris baru dalam source sering diringkas saat ditampilkan. `<pre>` mempertahankan format whitespace. Jika ingin menampilkan karakter markup sebagai teks, gunakan entity seperti `&lt;` untuk `<` dan `&gt;` untuk `>`.

`<p>` tidak tepat dipakai sebagai pembungkus elemen blok seperti `<div>` atau paragraf lain. `<div>` bisa menjadi wadah beberapa paragraf, tetapi tidak memberi makna paragraf itu sendiri. Mengatur jarak sebaiknya memakai CSS margin/padding, bukan menambahkan banyak `<br>`.

Slide menampilkan `align` untuk perataan paragraf. Dalam contoh baru gunakan CSS:

```html
<p class="rata-tengah">Paragraf rata tengah.</p>
```

```css
.rata-tengah {
    text-align: center;
}
```

### 5.11 Heading

HTML menyediakan `<h1>` sampai `<h6>`. Angka menyatakan **tingkat judul**, bukan perintah untuk memilih ukuran teks tertentu. Tampilan default umumnya berbeda, tetapi ukuran dapat diubah CSS.

```html
<h1>Materi Pemrograman Web</h1>
<h2>HTML</h2>
<h3>Struktur Dasar</h3>
<h3>Atribut</h3>
<h2>CSS</h2>
<h3>Selector</h3>
```

Contoh tersebut mempunyai dua topik setingkat (`h2`) dan subtopik (`h3`). Tidak perlu memakai seluruh enam tingkat. Hindari melompati tingkat hanya untuk mengejar ukuran visual. Gunakan satu `<h1>` utama sebagai kebiasaan struktur yang jelas; satu H1 bukan larangan sintaks mutlak terhadap semua penggunaan H1 lebih dari satu. [Penjelasan heading MDN](https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements/Heading_Elements).

### 5.12 Format teks dan daftar

| Elemen dari sumber | Makna/penggunaan |
| --- | --- |
| `<strong>` | Kepentingan kuat; umumnya ditampilkan tebal |
| `<em>` | Penekanan; umumnya ditampilkan miring |
| `<b>` | Menarik perhatian tanpa menyatakan kepentingan kuat |
| `<i>` | Teks dengan suara/istilah berbeda, sering ditampilkan miring |
| `<u>` | Anotasi tertentu yang umumnya bergaris bawah; gunakan CSS jika hanya dekorasi |
| `<sub>` | Subscript, misalnya `H<sub>2</sub>O` |
| `<sup>` | Superscript, misalnya `x<sup>2</sup>` |
| `<ul>` | Daftar tanpa urutan numerik |
| `<ol>` | Daftar berurutan |
| `<li>` | Item di dalam daftar |

```html
<p><strong>Penting:</strong> simpan file sebelum membuka browser.</p>
<p>Saya <em>sedang belajar</em>, jadi contoh perlu dipahami.</p>

<ul>
    <li>HTML: struktur</li>
    <li>CSS: tampilan</li>
</ul>

<ol>
    <li>Tulis dokumen HTML.</li>
    <li>Hubungkan stylesheet.</li>
    <li>Periksa hasil.</li>
</ol>
```

Semantik dan tampilan berbeda: teks tebal belum tentu berarti penting; warna merah belum tentu berarti kesalahan. Pilih tag berdasarkan makna, kemudian atur penampilannya melalui CSS.

### 5.13 Hyperlink

```html
<a href="https://itenas.ac.id">Website ITENAS</a>
<a href="kontak.html">Halaman Kontak</a>
<a href="#kontak">Lompat ke bagian kontak</a>

<section id="kontak">
    <h2>Kontak</h2>
    <p>Informasi kontak mahasiswa.</p>
</section>
```

Tautan pertama menuju sumber eksternal, yang kedua menggunakan path relatif, dan yang ketiga mengacu pada elemen dalam halaman yang sama. Nilai fragment harus sesuai dengan ID tujuan.

`target="_blank"` meminta konteks penelusuran baru. Contoh penulisan yang jelas:

```html
<a href="https://itenas.ac.id" target="_blank" rel="noopener">
    Website ITENAS (dibuka di tab baru)
</a>
```

**Path relatif** dihitung dari lokasi dokumen. `gambar/foto.jpg` dan `../gambar/foto.jpg` menuju lokasi berbeda. `href="#"` merupakan tautan placeholder ke fragment kosong; tidak otomatis memberikan fungsi mengikuti akun atau mengirim pesan.

### 5.14 Gambar, video, dan audio

```html
<img src="foto.jpg" alt="Foto profil Adika" width="200" height="200">

<video width="640" height="360" controls>
    <source src="video.mp4" type="video/mp4">
    Browser Anda tidak mendukung pemutaran video ini.
</video>

<audio controls>
    <source src="audio.mp3" type="audio/mpeg">
    Browser Anda tidak mendukung pemutaran audio ini.
</audio>
```

`src` menentukan sumber; `alt` memberikan alternatif teks gambar; `controls` menyediakan kendali pemutar. `<source>` memungkinkan pemilihan sumber media. Contoh memerlukan file media yang benar-benar tersedia; nama di atas hanya ilustrasi.

Untuk gambar informatif, tulis alternatif yang menjelaskan informasi pentingnya. Gambar dekoratif dapat memakai `alt=""`. Background CSS tidak mempunyai atribut `alt`, sehingga informasi pokok sebaiknya tetap disampaikan dalam HTML.

### 5.15 Tabel dan tag lama yang muncul pada slide

Tabel tag HTML pada slide menyebut `<table>`. Tabel digunakan untuk hubungan data tabular, bukan untuk menyusun layout halaman.

```html
<table>
    <caption>Teknologi Dasar Web</caption>
    <thead>
        <tr><th scope="col">Teknologi</th><th scope="col">Fungsi</th></tr>
    </thead>
    <tbody>
        <tr><td>HTML</td><td>Struktur</td></tr>
        <tr><td>CSS</td><td>Tampilan</td></tr>
    </tbody>
</table>
```

`tr` adalah baris, `th` sel judul, dan `td` sel data. Struktur tambahan ini merupakan penjelasan penggunaan tag `table` yang disebut sumber.

Tabel sumber juga mencantumkan `<marquee>` untuk tulisan bergerak. Kenali sebagai bagian materi lama; elemen tersebut sudah deprecated dan tidak digunakan dalam contoh baru. [Status marquee di MDN](https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements/marquee).

### 5.16 Elemen semantik HTML5

Semantik berarti elemen menjelaskan peran konten. `<div class="header">` adalah wadah generik dengan nama class; `<header>` langsung menyatakan peran bagian pengantar.

| Elemen | Fungsi |
| --- | --- |
| `<header>` | Pengantar halaman atau bagian, misalnya judul dan identitas |
| `<nav>` | Kelompok navigasi utama |
| `<main>` | Konten utama dokumen |
| `<section>` | Bagian bertema yang lazim memiliki heading |
| `<article>` | Konten yang dapat berdiri sendiri, misalnya artikel |
| `<aside>` | Konten tambahan yang terkait secara tidak langsung |
| `<footer>` | Informasi penutup, kontak, atau hak cipta halaman/bagian |

```html
<header>
    <h1>Profil Mahasiswa</h1>
    <nav><a href="#pendidikan">Pendidikan</a></nav>
</header>
<main>
    <section id="pendidikan">
        <h2>Riwayat Pendidikan</h2>
        <p>Sedang belajar di ITENAS.</p>
    </section>
</main>
<footer><p>Profil untuk latihan HTML.</p></footer>
```

Elemen semantik membantu navigasi pembaca layar dan pemahaman dokumen. `<div>` masih berguna sebagai wadah styling; pilih elemen semantik ketika makna kontennya memang sesuai. Semantik tidak otomatis mengubah layout menjadi desain yang diinginkan; CSS tetap diperlukan.

### 5.17 Form dan validasi HTML5

**Form** mengumpulkan masukan. `action` menentukan tujuan pengiriman dan `method` menentukan cara pengiriman. `name` menjadi nama data field yang dikirim; `id` digunakan untuk identifikasi dan hubungan label.

```html
<form action="/pendaftaran" method="post">
    <label for="nama">Nama lengkap</label>
    <input id="nama" name="nama" type="text" required>

    <label for="email">Email</label>
    <input id="email" name="email" type="email" required
           placeholder="nama@contoh.id">

    <label for="tanggal">Tanggal lahir</label>
    <input id="tanggal" name="tanggal_lahir" type="date">

    <label for="semester">Semester</label>
    <input id="semester" name="semester" type="number" min="1" max="14">

    <label for="npm">NPM, sembilan digit</label>
    <input id="npm" name="npm" type="text" pattern="[0-9]{9}" required>

    <label for="prodi">Program studi</label>
    <select id="prodi" name="prodi">
        <option value="informatika">Informatika</option>
        <option value="sistem-informasi">Sistem Informasi</option>
    </select>

    <label for="pesan">Pesan</label>
    <textarea id="pesan" name="pesan" rows="4"></textarea>

    <button type="submit">Kirim</button>
</form>
```

Contoh ini menjelaskan struktur, bukan aplikasi pendaftaran lengkap. Tujuan `/pendaftaran` harus diimplementasikan oleh server agar data dapat diproses; pola sembilan digit adalah contoh latihan.

| Atribut/tipe | Peran |
| --- | --- |
| `type="text"` | Teks umum |
| `type="email"` | Masukan email dengan pemeriksaan format bawaan |
| `type="password"` | Menyamarkan tampilan karakter; tidak mengenkripsi pengiriman |
| `type="date"` | Masukan tanggal |
| `type="number"` | Masukan numerik |
| `required` | Field wajib mempunyai nilai yang sesuai |
| `placeholder` | Petunjuk singkat; bukan pengganti label dan bukan aturan validasi |
| `pattern` | Pola yang harus dipenuhi pada tipe input yang mendukungnya |
| `min`, `max` | Batas nilai pada tipe yang sesuai |

**GET** biasanya mengikutsertakan data form dalam query URL. **POST** biasanya mengirim data form dalam body permintaan. POST sendiri tidak menyediakan enkripsi; HTTPS diperlukan untuk melindungi komunikasi.

Validasi browser membantu pengguna memperbaiki masukan, tetapi dapat dilewati. Server tetap harus memvalidasi data yang diterima. Label dengan `for` yang sesuai `id` membantu pengguna mengenali dan mengaktifkan field.

Gambar ilustrasi pada Canva membandingkan `requestSubmit()` dan `submit()`: yang pertama mengikuti validasi dan event submit seperti pengiriman normal; `submit()` langsung tidak menjalankan kedua tahap itu. Ini merupakan pengenalan perilaku form, bukan kewajiban menulis JavaScript untuk tugas awal.

### 5.18 Memeriksa HTML

Canva menyebut W3C Markup Validator. Pemeriksaan markup membantu menemukan nesting, atribut, dan tag yang salah. Untuk latihan, simpan file, buka di browser, gunakan Inspect untuk melihat DOM, lalu periksa markup dengan validator jika diperlukan.

Validasi sintaks tidak menjamin desain, aksesibilitas, atau semua perilaku sudah benar. Misalnya markup tautan `href="#"` bisa diterima, tetapi tujuan aksi belum berfungsi. Pemeriksaan visual dan penggunaan keyboard tetap memberikan informasi yang berbeda dari validasi markup.

## 6. CSS: sintaks dan cara penerapan (Pertemuan 3 — Styling & Presentasi Visual)

> ### 🔗 Jembatan Logika & Relevansi Antar-Materi (Bab 6 s/d Bab 12)
> - **Hubungan dari Pertemuan 2 (HTML5):** Di Tugas 2 (28 September), kamu sudah berhasil membuat halaman CV/Profil dengan HTML murni. Namun tampilannya masih berupa teks hitam-putih polos yang berjajar kaku dari atas ke bawah. **CSS (*Cascading Style Sheets*)** hadir di Pertemuan 3 untuk memisahkan tugas: **HTML mengurus struktur & makna konten**, sedangkan **CSS mengurus estetika, warna, tipografi, ukuran kotak, dan tata letak (layout)**.
> - **Hubungan ke Pertemuan 5 (CRUD UI):** Kemampuan CSS yang kamu pelajari di Bab 6–12 ini (terutama *Flexbox*, *Box Model*, *Table Styling*, *Badge Warna*, dan *Linear Gradient*) langsung dipakai kembali saat mempercantik aplikasi **CRUD Catatan Keuangan** di Pertemuan 5!
>
> ### 💡 Analogi Master CSS dari Proyek Pribadi Kamu (`D:\PROJECT\SELF EXPERIMENT`)
> Agar konsep CSS di Bab 6 hingga Bab 12 langsung menancap di kepala saat ujian UTS, bayangkan proyek-proyek yang pernah kamu bangun sendiri:
> 1. **3 Cara Penerapan CSS (Bab 6 — *Inline, Internal, External*):**
>    - **External CSS (`<link rel="stylesheet" href="style.css">`)** seperti file konfigurasi terpusat **`settings.yaml` / `style.css`** di proyek **`AI TRADING TERMINAL`**. Satu file mengatur tampilan banyak halaman sekaligus.
>    - **Internal CSS (`<style>...</style>` di dalam `<head>`)** seperti styling khusus satu halaman yang kita pakai di `index.php`, `tambah.php`, dan `ubah.php` pada Tugas 5 agar mudah dibundel.
>    - **Inline CSS (`style="width: 180px;"` langsung di tag HTML)** seperti *hardcode parameter* langsung pada satu komponen spesifik.
> 2. **Specificity / Prioritas CSS (Bab 7 — Siapa yang Menang Jika Aturan Bentrok?):**
>    - Bayangkan hierarki perintah di **`AI TRADING TERMINAL`**: Aturan umum (`tag selector` seperti `p` atau `div`, skor `0-0-1`) kalah oleh aturan kelompok kategori (`class selector` seperti `.btn-emerald`, skor `0-1-0`), yang kalah oleh aturan identitas unik (`ID selector` seperti `#chart-utama`, skor `1-0-0`), dan semuanya kalah oleh intervensi manual langsung di elemen (`inline style="..."`).
> 3. **CSS Box Model (Bab 10 — `Content`, `Padding`, `Border`, `Margin`):**
>    - Bayangkan saat kamu mendesain casing 3D printing di folder **`3D DESIGN\ESP8266-CASE` (`ESP8266_BOTTOM_FINAL.stl`)**:
>      - **`Content` (`width` & `height`):** Ukuran papan mikrokontroler ESP8266 itu sendiri.
>      - **`Padding` (Jarak Dalam):** Ruang longgar di **dalam** dinding casing agar papan ESP8266 tidak terjepit dinding plastik. Jika *background* casing diwarnai, area `padding` ikut berwarna!
>      - **`Border` (Garis Tepi):** Ketebalan dinding plastik hasil cetakan 3D print yang mengelilingi casing.
>      - **`Margin` (Jarak Luar):** Jarak aman di **luar** casing ESP8266 agar tidak bersentuhan dengan **`SOLDER STATION`** di sebelahnya. Area `margin` selalu transparan!
>      - **`box-sizing: content-box` vs `border-box`:** Pada `content-box` (default), jika lebar ruang dalam 200px, padding kiri-kanan @20px, dan tebal dinding border kiri-kanan @2px, maka ukuran luar total membengkak menjadi `200 + 20 + 20 + 2 + 2 = 244px`. Sedangkan jika memakai **`box-sizing: border-box`**, ukuran total luar casing dikunci pas **200px** (padding dan border otomatis menyesuaikan di bagian dalam)! **(Perhitungan ini langganan soal UTS!)**
> 4. **Positioning (Bab 10 — `relative`, `absolute`, `fixed`, `sticky`) & Flexbox:**
>    - Ingat bug klasik yang kamu atasi di **`X LIKE REMOVER v2.0`**: Mengapa tombol Like di Twitter sempat gagal diklik? Karena tertutup oleh **Sticky Header** navigasi atas X yang memakai `position: sticky; top: 0;`!
>    - Dan ingat di **Latihan Kartu Profil (Bab 12)**: Bagaimana cara membuat foto profil bulat menimpa tepat di tengah garis batas antara header dan body kartu? Caranya: kotak induk `.card-header` diberi **`position: relative`** (sebagai titik patokan), lalu elemen anak `.profile-img` diberi **`position: absolute; bottom: -55px; left: 50%; transform: translateX(-50%);`**!


### 6.1 Pengertian dan fungsi CSS

CSS adalah **Cascading Style Sheets**, bahasa stylesheet untuk mengatur presentasi dokumen. CSS mengendalikan warna, jenis dan ukuran huruf, jarak, border, background, serta tata letak elemen.

Pemisahan HTML dan CSS memudahkan pemeliharaan: struktur konten dapat dipertahankan saat tema tampilan berubah. Satu stylesheet juga dapat dipakai beberapa halaman sehingga pengembang tidak perlu menulis ulang aturan yang sama.

Slide menyebut manfaat berupa percepatan desain, konsistensi gaya, dan pemuatan lebih cepat. Manfaat pemuatan bergantung pada ukuran file, cache, dan cara pemuatan; penggunaan CSS tidak otomatis membuat setiap situs lebih cepat.

### 6.2 Anatomi aturan CSS

```css
h1 {
    color: blue;
    font-size: 24px;
}
```

| Istilah | Contoh | Fungsi |
| --- | --- | --- |
| Selector | `h1` | Memilih elemen yang dikenai aturan |
| Property | `color`, `font-size` | Aspek yang diatur |
| Value | `blue`, `24px` | Nilai pengaturan |
| Declaration | `color: blue;` | Pasangan property dan value |
| Declaration block | Isi di antara `{` dan `}` | Kumpulan declaration |
| Ruleset/aturan | Selector beserta bloknya | Satu aturan gaya lengkap |

Titik dua memisahkan property dan value; titik koma memisahkan declaration. Tulis titik koma juga pada declaration terakhir agar penambahan berikutnya tidak mudah salah. Kurung kurawal membungkus blok, bukan menjadi bagian setiap declaration.

Beberapa slide menggunakan “deklarasi” untuk menyebut blok. Dokumen ini membedakan declaration dan declaration block sesuai istilah CSS. [Penjelasan sintaks CSS MDN](https://developer.mozilla.org/en-US/docs/Web/CSS/Guides/Syntax/Introduction).

Nilai CSS tidak selalu memakai tanda petik:

```css
p {
    color: blue;
    font-family: "Helvetica Neue", Arial, sans-serif;
}
```

Nama font yang berisi spasi dapat ditulis dengan tanda petik. `color: "blue";` bukan cara yang benar untuk memberikan nilai warna.

### 6.3 Komentar CSS

```css
/* Menjaga jarak teks dari garis tepi kartu. */
.kartu {
    padding: 20px;
}
```

Komentar CSS dibuka dengan `/*` dan ditutup dengan `*/`. Komentar tidak menjadi tampilan halaman. Selain menjelaskan alasan, komentar dapat menonaktifkan declaration sementara saat eksperimen.

```css
p {
    /* color: blue; */
    font-size: 18px;
}
```

Komentar HTML memakai `<!-- ... -->`; keduanya tidak saling menggantikan. Komentar juga tidak tepat dipakai sebagai tempat data rahasia karena source dapat dibaca pihak lain.

### 6.4 Inline CSS

Inline CSS berada di atribut `style` pada elemen:

```html
<p style="color: blue; font-size: 18px;">Paragraf dengan inline CSS.</p>
```

Dalam atribut ini tidak ditulis selector atau kurung kurawal, karena targetnya sudah merupakan elemen tersebut. Cocok untuk contoh cepat atau kebutuhan khusus, tetapi pengulangan membuat perubahan gaya sulit dilakukan secara konsisten.

### 6.5 Internal CSS

Internal CSS berada di elemen `<style>`, lazimnya di `<head>`:

```html
<head>
    <meta charset="UTF-8">
    <title>Contoh Internal CSS</title>
    <style>
        p {
            color: blue;
            font-size: 18px;
        }
    </style>
</head>
```

Internal CSS praktis untuk satu halaman karena aturan ada bersama HTML. Selector class dan ID dapat digunakan. Jika banyak halaman membutuhkan aturan sama, menyalin CSS internal ke masing-masing halaman menambah pekerjaan dan risiko inkonsistensi.

Jangan tertukar antara `<head>` dan `<header>`. Jangan pula menulis internal CSS sebagai isi `<div>` biasa; aturan harus berada pada elemen `<style>` yang sesuai.

### 6.6 External CSS

External CSS berada di file `.css` terpisah. Contoh pasangan file dengan nama yang sesuai:

```html
<head>
    <meta charset="UTF-8">
    <title>Contoh External CSS</title>
    <link rel="stylesheet" href="style.css">
</head>
```

Isi file `style.css`:

```css
p {
    color: blue;
    font-size: 18px;
}
```

File CSS tidak dibungkus `<style>`. `rel="stylesheet"` menyatakan hubungan file dengan dokumen, sedangkan `href` menunjuk lokasi file. External CSS dapat dipakai beberapa halaman dan dapat di-cache browser. Jika path salah atau file gagal dimuat, struktur HTML masih tersedia, tetapi gaya yang diharapkan tidak diterapkan.

### 6.7 Perbandingan ketiga cara

| Cara | Lokasi | Cakupan | Kelebihan | Keterbatasan |
| --- | --- | --- | --- | --- |
| Inline | Atribut `style` | Elemen tertentu | Cepat untuk contoh kecil | Sulit dirawat bila berulang |
| Internal | `<style>` di dokumen | Halaman tersebut | Praktis untuk satu halaman | Harus disalin jika dipakai banyak halaman |
| External | File `.css` melalui `<link>` | Semua halaman yang memuatnya | Aturan dapat dibagikan dan dirawat terpusat | Bergantung pada pemuatan file/path yang benar |

**Internal dan external tidak mempunyai urutan prioritas tetap.** Browser melihat aturan cascade, selector, dan urutan sumber. External CSS yang dimuat kemudian dapat mengalahkan internal CSS dengan specificity setara; kebalikannya juga bisa terjadi.

## 7. Selector, combinator, dan prioritas CSS

### 7.1 Selector elemen

Selector elemen menggunakan nama tag tanpa awalan khusus:

```css
p {
    color: blue;
}
```

Aturan memilih semua elemen `p` yang cocok dalam dokumen. Aturan lain dapat mengubah nilai untuk sebagian paragraf. Selector ini cocok untuk gaya dasar suatu jenis konten.

### 7.2 Selector class

Selector class diawali titik:

```html
<p class="paragraf">Paragraf merah.</p>
<p class="paragraf bg-yellow">Paragraf merah dengan latar kuning.</p>
```

```css
.paragraf {
    color: red;
}
.bg-yellow {
    background-color: yellow;
}
```

Nama class di HTML tidak memakai titik. `.paragraf` adalah sintaks selector CSS, sedangkan `class="paragraf"` adalah atribut HTML. Class dapat dipakai banyak elemen, sehingga cocok untuk komponen atau gaya berulang.

Urutan nama dalam `class="paragraf bg-yellow"` tidak menetapkan prioritas aturan. Nilai akhir tetap ditentukan CSS.

### 7.3 Selector ID

Selector ID diawali `#`:

```html
<p id="text-paragraf" class="paragraf">Paragraf khusus.</p>
```

```css
#text-paragraf {
    font-size: 18px;
    color: navy;
}
```

ID berfungsi mengidentifikasi elemen yang unik dalam dokumen. Selector ID memiliki specificity lebih tinggi daripada satu selector class dalam kondisi cascade yang setara. Untuk gaya yang akan diulang pada banyak komponen, gunakan class.

### 7.4 Selector atribut

```css
input[type="text"] {
    color: blue;
    padding: 10px;
    border: 1px solid blue;
}
```

Aturan memilih elemen `input` yang atribut `type`-nya bernilai `text`. Tanda `[]` adalah sintaks selector atribut, berbeda dari `>` pada child combinator.

### 7.5 Selector universal

```css
* {
    box-sizing: border-box;
}
```

`*` memilih semua elemen. Pada latihan, selector ini juga mereset `margin` dan `padding`. Reset membantu mengendalikan jarak awal, tetapi dapat menghapus gaya default yang berguna; setelah reset, elemen tetap perlu diberi jarak yang sesuai.

### 7.6 Grouping selector

```css
h1, h2, p {
    color: navy;
}
```

Koma menggabungkan beberapa selector agar mendapat declaration yang sama. Artinya memilih `h1`, **atau** `h2`, **atau** `p`. Ini tidak menyatakan bahwa `p` berada di dalam `h2`.

### 7.7 Empat combinator

Combinator menyatakan hubungan antar-elemen yang dipilih.

| Bentuk | Nama | Target |
| --- | --- | --- |
| `div p` | Descendant | Semua `p` yang menjadi keturunan `div` |
| `div > p` | Child | `p` yang merupakan anak langsung `div` |
| `h2 + p` | Adjacent/next sibling | `p` tepat setelah `h2` dengan parent yang sama |
| `h2 ~ p` | General/subsequent sibling | Semua `p` setelah `h2` dengan parent yang sama |

Contoh struktur:

```html
<div class="area">
    <p>Paragraf A</p>
    <section>
        <p>Paragraf B</p>
    </section>
</div>

<h2>Judul</h2>
<p>Paragraf C</p>
<span>Pemisah</span>
<p>Paragraf D</p>
```

Untuk struktur tersebut:

- `.area p` memilih A dan B.
- `.area > p` hanya memilih A; B adalah anak langsung `section`.
- `h2 + p` memilih C karena tepat setelah heading.
- `h2 ~ p` memilih C dan D karena keduanya sibling setelah heading.

Spasi antar-selector adalah descendant combinator, bukan sekadar format penulisan. `.kartu .judul` berbeda dari `.kartu.judul`: yang pertama memilih `.judul` di dalam `.kartu`, sedangkan yang kedua memilih elemen yang sekaligus mempunyai kedua class.

### 7.8 Pseudo-class

Pseudo-class memilih elemen berdasarkan keadaan atau kondisi. Sintaksnya memakai satu titik dua.

```css
a:hover {
    color: blue;
}
input:focus {
    border-color: navy;
}
```

| Pseudo-class pada sumber | Makna |
| --- | --- |
| `:hover` | Pointer berada di atas elemen |
| `:active` | Elemen sedang diaktifkan, misalnya selama penekanan |
| `:focus` | Elemen menerima fokus, termasuk dari keyboard |
| `:link` | Tautan yang belum dikunjungi |
| `:visited` | Tautan yang telah dikunjungi; browser membatasi gaya tertentu demi privasi |
| `:disabled` | Kontrol yang berada dalam keadaan nonaktif |
| `:enabled` | Kontrol yang berada dalam keadaan aktif |

`:active` tidak berarti semua tautan yang dapat diklik. Efek hover juga tidak boleh menjadi satu-satunya cara pengguna mengetahui informasi atau mengakses fungsi, karena perangkat sentuh dan keyboard bekerja berbeda. Pertahankan indikator fokus.

### 7.9 Pseudo-element

Pseudo-element memilih bagian tertentu dari elemen atau membuat konten presentasi sebelum/sesudahnya. Penulisan modern memakai dua titik dua.

```css
p::first-letter {
    font-size: 2rem;
}
p::first-line {
    font-variant: small-caps;
}
.catatan::before {
    content: "Catatan: ";
    font-weight: bold;
}
.catatan::after {
    content: " — selesai";
}
```

| Pseudo-element pada sumber | Fungsi |
| --- | --- |
| `::first-letter` | Menata huruf pertama yang sesuai |
| `::first-line` | Menata baris pertama yang terformat |
| `::before` | Menambahkan konten presentasi sebelum isi |
| `::after` | Menambahkan konten presentasi setelah isi |

`content` diperlukan agar contoh `::before`/`::after` menghasilkan konten. Teks pokok yang harus dibaca dan dipahami sebaiknya ditulis di HTML. Baris pertama bergantung pada lebar dan hasil layout, bukan hanya pada lokasi enter di source.

**Bedanya:** `a:hover` adalah keadaan suatu elemen; `p::first-letter` adalah bagian dari suatu elemen.

### 7.10 Cascade dan specificity

Cascade menentukan nilai akhir ketika lebih dari satu declaration berlaku untuk property pada elemen yang sama. Untuk contoh dasar yang hanya memakai aturan penulis **normal**, tanpa cascade layer, animasi, atau transition aktif, urutan ringkas berikut berguna:

1. Inline style normal mengungguli aturan normal pada stylesheet penulis.
2. Di antara selector stylesheet, bandingkan specificity.
3. Jika specificity setara, aturan yang muncul kemudian menang.

Specificity selector dibandingkan sebagai tiga kelompok, dari kiri ke kanan:

| Kelompok | Yang dihitung | Contoh |
| --- | --- | --- |
| ID | Jumlah selector ID | `#utama` → `1-0-0` |
| Class | Class, atribut, dan pseudo-class | `.kartu:hover` → `0-2-0` |
| Type | Nama elemen dan pseudo-element | `p::first-line` → `0-0-2` |

Selector universal dan combinator tidak menambah bobot. `#utama p` bernilai `1-0-1`; `.kartu p` bernilai `0-1-1`. Kelompok dibandingkan berurutan, bukan dijumlahkan menjadi skor biasa.

```html
<p id="pesan" class="catatan">Warna apa yang tampil?</p>
```

```css
p { color: blue; }
.catatan { color: green; }
#pesan { color: red; }
```

Teks menjadi merah karena ID lebih spesifik dalam kondisi contoh tersebut. Jika ditambahkan `style="color: purple"`, inline style normal menjadi nilai yang digunakan.

```css
.catatan { color: red; }
.catatan { color: blue; }
```

Pada contoh kedua, kedua selector sama sehingga declaration terakhir menghasilkan biru.

**Batas aturan ringkas:** `!important` bukan penambahan specificity. Origin, importance, layer, animasi, dan transition juga memengaruhi cascade; jangan menghafal “inline selalu menang” untuk semua keadaan. Declaration penting pada stylesheet penulis dapat mengalahkan inline normal. [Penjelasan specificity dan batasnya di MDN](https://developer.mozilla.org/en-US/docs/Web/CSS/Guides/Cascade/Specificity).

### 7.11 Inheritance

Sebagian property seperti `color` dan banyak property font dapat diwariskan dari parent ketika child tidak mempunyai nilai sendiri. Property lain seperti margin dan padding tidak otomatis diwariskan.

```css
body {
    color: #1f2937;
    font-family: sans-serif;
}
```

Paragraf dapat mengikuti warna dan font tersebut. Namun, jika ada aturan langsung pada `p`, nilai langsung itu dipakai untuk property terkait. Inheritance bukan persaingan specificity antara parent dan child; keduanya merupakan proses yang berbeda.

## 8. Warna teks dan elemen

### 8.1 Tiga property pewarnaan

| Property | Mengubah |
| --- | --- |
| `color` | Warna teks/foreground |
| `background-color` | Warna latar elemen |
| `border-color` | Warna garis tepi |

```css
.kotak {
    color: #1f2937;
    background-color: #ffffff;
    border: 2px solid #4f46e5;
}
```

Memberi `border-color` saja belum tentu membuat garis terlihat; border juga perlu style dan width yang sesuai. Contoh memakai shorthand `border` untuk menyatakan ketiganya.

### 8.2 Lima format warna dalam sumber

| Format | Contoh merah | Cara membaca |
| --- | --- | --- |
| Nama | `red` | Kata warna yang dikenali CSS |
| RGB | `rgb(255, 0, 0)` | Intensitas red, green, blue |
| RGBA | `rgba(255, 0, 0, 0.5)` | RGB ditambah alpha |
| Hex | `#ff0000` | Tiga pasangan digit heksadesimal RGB |
| HSL | `hsl(0, 100%, 50%)` | Hue, saturation, lightness |

RGB, hex, dan HSL pada tabel menggambarkan merah pekat. RGBA memakai alpha 0.5 sehingga tampilan akhir bergantung pada warna di belakangnya.

### 8.3 Nama warna

```css
h1 { color: navy; }
p { color: black; }
```

Nama warna memudahkan contoh awal. Sumber menyebut lebih dari 140 nama warna; untuk belajar, utamakan mengenali format dan fungsi property, bukan menghafalkan seluruh daftar.

### 8.4 RGB dan RGBA

Pada sintaks angka RGB yang dipakai sumber, setiap kanal berada pada rentang 0–255. Kanal juga dapat ditulis sebagai persentase pada sintaks yang sesuai.

```css
.merah { color: rgb(255, 0, 0); }
.hijau { color: rgb(0, 255, 0); }
.biru { color: rgb(0, 0, 255); }
.latar-transparan { background-color: rgba(40, 23, 11, 0.7); }
```

Alpha 0 berarti transparan dan alpha 1 berarti pekat penuh. Transparansi warna latar melalui RGBA berbeda dari `opacity` pada keseluruhan elemen: opacity elemen juga memengaruhi tampilannya bersama konten anak.

### 8.5 Heksadesimal

Format dasar sumber adalah `#RRGGBB`. Digit memakai `0`–`9` dan `A`–`F`. `00` berarti nilai kanal 0; `FF` berarti 255.

| Nilai | Warna |
| --- | --- |
| `#000000` | Hitam |
| `#ffffff` | Putih |
| `#ff0000` | Merah |
| `#00ff00` | Hijau |
| `#0000ff` | Biru |

Format pendek `#fff` setara `#ffffff`, karena setiap digit digandakan. `#123` setara `#112233`, bukan `#000123`.

### 8.6 HSL

HSL memisahkan pemilihan corak, kejenuhan, dan tingkat terang:

- **Hue:** sudut warna; merah pada 0°/360°, hijau 120°, biru 240°.
- **Saturation:** 0% tidak jenuh dan 100% jenuh penuh.
- **Lightness:** 0% hitam, 100% putih, dan 50% berada di tengah skala terang HSL.

```css
.judul {
    color: hsl(240, 100%, 50%);
}
```

Angka hue tidak menyatakan ukuran pixel. HSL berguna untuk mengubah kecerahan atau kejenuhan tanpa langsung menebak kombinasi tiga kanal RGB.

### 8.7 Kebiasaan pemilihan warna

Canva menyarankan memakai palet, mencoba color picker di Inspect Element, dan menjaga konsistensi format. Untuk keterbacaan, nilai kontras warna teks terhadap background lebih penting daripada sekadar warna favorit.

Gunakan warna untuk membantu pemahaman, tetapi jangan menjadikannya satu-satunya penanda. Pesan kesalahan perlu teks yang jelas, bukan hanya garis merah. Beberapa contoh selector pada materi memakai kombinasi warna mencolok untuk demonstrasi; itu tidak berarti kombinasinya cocok sebagai desain akhir.

## 9. Tipografi dan text formatting

### 9.1 Font utama

| Property | Contoh | Fungsi |
| --- | --- | --- |
| `font-family` | `"Poppins", Arial, sans-serif` | Urutan pilihan font |
| `font-size` | `18px`, `1rem` | Ukuran huruf |
| `font-style` | `normal`, `italic`, `oblique` | Gaya kemiringan |
| `font-weight` | `normal`, `bold`, `400`, `700` | Ketebalan font |

```css
p {
    font-family: "Poppins", Arial, sans-serif;
    font-size: 1rem;
    font-style: normal;
    font-weight: 400;
}
```

Browser mencoba font dari kiri ke kanan. Jika Poppins tidak tersedia, pilihan berikutnya digunakan. Keluarga generik seperti `sans-serif`, `serif`, dan `monospace` menjadi fallback terakhir yang membantu teks tetap dapat tampil.

Materi memperkenalkan angka weight 100–900; hasilnya bergantung pada font dan bobot yang tersedia. Menuliskan nama font di `font-family` saja tidak selalu mengunduh font tersebut. Pada latihan, stylesheet Google Fonts digunakan untuk menyediakan Poppins.

### 9.2 Satuan untuk ukuran teks

| Unit | Hubungan utama |
| --- | --- |
| `px` | Pixel CSS, unit panjang absolut dalam model CSS |
| `rem` | Relatif terhadap ukuran font elemen akar (`html`) |
| `em` pada `font-size` | Relatif terhadap ukuran font parent |
| `%` pada `font-size` | Persentase ukuran font parent |

Jika root font bernilai 16px, `1.5rem` sama dengan 24px. Jika parent berukuran 20px, `font-size: 1.5em` menghasilkan 30px. Angka dasar 16px hanya asumsi contoh, bukan nilai yang selalu sama pada semua konfigurasi.

Pada property seperti padding, `em` berhubungan dengan ukuran font elemen itu sendiri. Karena itu, “em selalu mengikuti parent” adalah penyederhanaan yang perlu diperjelas berdasarkan property.

### 9.3 Perataan dan arah teks

```css
.tengah { text-align: center; }
.kanan { text-align: right; }
.rata { text-align: justify; }
.arah-kanan-kiri { direction: rtl; }
```

`text-align` mengatur perataan konten inline di dalam wadah. Nilai yang diperkenalkan sumber ialah `left`, `right`, `center`, dan `justify`. `text-align: center` tidak otomatis memindahkan kotak elemen ke tengah parent.

`direction: ltr` berarti kiri ke kanan; `rtl` berarti kanan ke kiri. Arah baca bukan sekadar perataan kanan. Untuk dokumen bahasa kanan-ke-kiri, informasi arah juga dapat dinyatakan melalui atribut HTML `dir` yang sesuai.

### 9.4 Dekorasi teks

| Nilai `text-decoration` | Efek |
| --- | --- |
| `none` | Tanpa dekorasi yang diberikan aturan itu |
| `underline` | Garis bawah |
| `overline` | Garis atas |
| `line-through` | Garis melintasi teks |

```css
.harga-lama { text-decoration: line-through; }
.tautan { text-decoration: underline; }
```

Menghapus underline tautan dapat membuatnya sulit dikenali. Jika desain memakai `none`, beri penanda visual lain yang jelas dan pertahankan fokus keyboard.

### 9.5 Kapitalisasi dengan text-transform

```css
.judul { text-transform: uppercase; }
.label { text-transform: capitalize; }
```

`uppercase` menampilkan huruf besar, `lowercase` huruf kecil, `capitalize` menerapkan kapitalisasi awal kata menurut pemrosesan teks, dan `none` tidak menerapkan transformasi. Transformasi mengubah presentasi, bukan mengganti teks asli di source HTML.

### 9.6 Bayangan teks

```css
h1 {
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.25);
}
```

Urutan contoh adalah offset horizontal, offset vertikal, radius blur, lalu warna. Offset positif bergeser ke kanan/bawah. Blur semakin besar membuat tepi bayangan lebih lembut.

`text-shadow` membayangi glyph/teks, sedangkan `box-shadow` membayangi kotak elemen. Bayangan berlebihan dapat menurunkan keterbacaan; gunakan seperlunya.

### 9.7 Jarak kata, huruf, dan baris

| Property | Contoh | Mengatur |
| --- | --- | --- |
| `word-spacing` | `4px` | Jarak antarkata |
| `letter-spacing` | `0.5px` | Jarak antarkarakter |
| `line-height` | `1.6` | Tinggi kotak baris teks |

```css
.isi-artikel {
    font-size: 18px;
    line-height: 1.6;
    letter-spacing: 0.5px;
    word-spacing: 2px;
}
```

`line-height: 1.6` adalah pengali tanpa unit. Untuk font 18px, hasil nominalnya 28.8px. Pengaturan ini berbeda dari margin antarparagraf. Jarak yang cukup membuat teks nyaman dibaca, tetapi jarak huruf/kata terlalu besar bisa mengganggu.

### 9.8 Contoh kombinasi formatting

```css
.title-custom {
    font-family: "Plus Jakarta Sans", sans-serif;
    font-size: 28px;
    font-weight: 700;
    text-transform: uppercase;
    text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);
}
.content-text {
    line-height: 1.8;
    letter-spacing: 0.5px;
}
```

Contoh mengikuti gagasan penggabungan property pada Canva. Jika font khusus belum dimuat, browser memakai fallback. Heading tetap dipilih berdasarkan tingkat struktur, bukan hanya karena aturan `.title-custom` membuatnya besar.

## 10. Box model, ukuran, dan layout

### 10.1 Empat lapisan box model

```text
Margin: jarak di luar border
┌──────────────────────────────────────┐
│ Border: garis tepi                  │
│ ┌──────────────────────────────────┐ │
│ │ Padding: jarak di dalam border   │ │
│ │ ┌──────────────────────────────┐ │ │
│ │ │ Content: teks atau gambar    │ │ │
│ │ └──────────────────────────────┘ │ │
│ └──────────────────────────────────┘ │
└──────────────────────────────────────┘
```

| Bagian | Fungsi | Hubungan warna latar |
| --- | --- | --- |
| Content | Isi elemen | Berada pada area kotak elemen |
| Padding | Ruang antara isi dan border | Biasanya ikut area background |
| Border | Garis yang mengelilingi content dan padding | Mempunyai style, width, dan color sendiri |
| Margin | Ruang di luar border | Bukan area yang diwarnai background elemen |

### 10.2 Margin dan padding

```css
.kartu {
    margin: 20px;
    padding: 16px;
    border: 2px solid navy;
}
```

Margin menjauhkan kartu dari elemen di sekitarnya; padding menjauhkan isi dari border kartu. Menambah padding biasanya memperbesar area internal, sedangkan margin memengaruhi jarak luar.

| Shorthand | Arti urutan nilai |
| --- | --- |
| `padding: 10px;` | Semua sisi 10px |
| `padding: 10px 20px;` | Atas/bawah 10px, kanan/kiri 20px |
| `padding: 10px 20px 30px;` | Atas 10px, kanan/kiri 20px, bawah 30px |
| `padding: 10px 20px 30px 40px;` | Atas, kanan, bawah, kiri |

Aturan urutan shorthand yang sama berlaku pada margin. Property individual yang diperkenalkan sumber meliputi `padding-top/right/bottom/left` dan `margin-top/right/bottom/left`.

```css
.kartu {
    padding-top: 50px;
    padding-right: 30px;
    padding-bottom: 50px;
    padding-left: 80px;
}
```

Pada block layout biasa, margin vertikal tertentu dapat mengalami **margin collapse**, sehingga jaraknya tidak selalu merupakan penjumlahan dua nilai. Jarak antar-flex item tidak mengikuti aturan collapse yang sama; pahami konteks layout saat menghitung jarak.

### 10.3 Border

```css
.kotak {
    border: 2px solid #4f46e5;
    border-radius: 12px;
    border-top: 4px solid navy;
}
```

Shorthand `border` menyatakan width, style, dan color. Nilai style yang umum adalah `solid`, `dashed`, `dotted`, dan `none`. `border-radius` membulatkan sudut dan bukan ukuran ketebalan garis.

Property pada slide mencakup `border-left-width`, `border-color`, `border-style`, `border-top`, dan `border-right`. Awalan sisi memungkinkan satu garis diubah tanpa mengubah seluruh sisi.

### 10.4 Width dan box-sizing

Pada `box-sizing: content-box`, `width` menentukan lebar content. Padding serta border ditambahkan ke ukuran kotak.

```css
.kotak {
    box-sizing: content-box;
    width: 200px;
    padding: 20px;
    border: 2px solid black;
    margin: 10px;
}
```

Perhitungan horizontal contoh:

```text
Lebar content       = 200px
Padding kiri+kanan  = 20px + 20px = 40px
Border kiri+kanan   = 2px + 2px = 4px
Lebar border box    = 200px + 40px + 4px = 244px
Margin kiri+kanan   = 10px + 10px = 20px
Bentang luar contoh = 244px + 20px = 264px
```

Pada `box-sizing: border-box` dengan nilai lain sama, lebar border box adalah 200px, content menjadi 156px, dan bentang luar dengan margin menjadi 220px. Margin tetap berada di luar width.

Latihan menggunakan reset `* { box-sizing: border-box; }` agar pengaturan lebar lebih mudah diprediksi ketika padding dan border ditambahkan.

### 10.5 Ukuran absolut dan relatif

| Unit/property | Arti dalam konteks umum |
| --- | --- |
| `px` | Unit panjang pixel CSS |
| `rem` | Relatif pada ukuran font root |
| `em` | Relatif pada ukuran font yang sesuai konteks property |
| `%` | Relatif pada acuan yang ditentukan property, sering containing block untuk width |
| `vw`, `vh` | Satuan berdasarkan viewport; 1 unit adalah 1% ukuran acuan viewport terkait |
| `width: 100%` | Memakai lebar persentase dari acuan layout |
| `max-width: 380px` | Membatasi lebar maksimum |
| `min-height: 100vh` | Menetapkan tinggi minimum berdasarkan viewport |

Pixel CSS tidak selalu sama dengan satu pixel fisik layar. Zoom browser dapat mengubah hasil tampilan, sehingga klaim bahwa ukuran px “tidak pernah berubah” terlalu mutlak.

`width: 100%; max-width: 380px;` pada kartu memberi batas lebar di layar besar sekaligus memungkinkan ukuran mengecil pada ruang yang lebih sempit. Persentase tidak selalu mengikuti parent untuk setiap property; lihat acuan property yang dipakai.

### 10.6 Display

| Nilai | Perilaku sederhana | Catatan |
| --- | --- | --- |
| `block` | Membentuk block pada alur biasa, biasanya mulai pada baris baru | Lebarnya mengikuti aturan layout, tidak wajib selalu 100% |
| `inline` | Mengalir bersama teks | Width/height pada inline non-replaced tidak bekerja seperti block |
| `inline-block` | Mengalir pada baris seperti inline tetapi mempunyai kotak yang dapat diberi width/height | Dapat dipakai pada elemen tertentu sesuai desain |
| `flex` | Membentuk flex container | Menata direct child sebagai flex item |

`div` dan `p` lazim tampil block, sedangkan `span` dan `a` lazim inline pada gaya browser. Tampilan itu dapat diubah dengan CSS. Gambar merupakan replaced element sehingga perilaku ukurannya tidak sama dengan inline teks biasa.

### 10.7 Flexbox

Flexbox digunakan untuk tata letak satu dimensi: baris atau kolom. `display: flex` diterapkan pada container, sedangkan anak langsungnya menjadi flex item.

```css
.container-flex {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 12px;
}
```

| Property | Fungsi |
| --- | --- |
| `flex-direction` | Menentukan arah utama, misalnya `row` atau `column` |
| `justify-content` | Mengatur distribusi pada main axis |
| `align-items` | Mengatur perataan pada cross axis |
| `gap` | Jarak antar-item |
| `flex-wrap` | Mengizinkan item berpindah ke baris/kolom berikutnya |
| `flex` pada item | Mengatur pertumbuhan, penyusutan, dan basis ukuran |

Untuk `row`, main axis biasanya horizontal; pada `column`, main axis vertikal. Karena itu, `justify-content` tidak selalu berarti “perataan horizontal”.

Pemusatan seperti pada latihan:

```css
body {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
}
```

Flexbox membantu layout adaptif, tetapi tidak otomatis menjamin semua desain responsif. Aturan ukuran, wrapping, dan panjang konten tetap perlu diperhatikan.

### 10.8 Position, object-fit, dan overflow pada latihan

Bagian ini menjelaskan property yang muncul dalam file CSS kartu profil.

- `position: relative` mempertahankan posisi elemen dalam alur sambil dapat menjadi acuan anak absolute.
- `position: absolute` membuat elemen tidak menempati ruang alur normal; posisinya dihitung berdasarkan containing block yang sesuai.
- `left: 50%` menempatkan sisi kiri elemen pada titik tengah acuan. `transform: translateX(-50%)` menggesernya kembali sebesar setengah lebar elemen sehingga elemen terpusat.
- `object-fit: cover` mengisi kotak gambar sambil menjaga proporsi, dengan kemungkinan pemotongan sisi gambar.
- `overflow: hidden` menyembunyikan bagian konten yang melampaui area pemotongan elemen.

Pada latihan, `.card-header` memakai relative dan foto memakai absolute. Karena foto keluar dari alur normal, ruang kosong untuknya perlu disediakan secara sengaja; sumber memakai `margin-bottom` pada header.

### 10.9 Shadow, transform, dan transition

```css
.kartu {
    box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
}
.kartu:hover {
    transform: translateY(-5px);
}
```

`box-shadow` memberi bayangan kotak dengan urutan offset X, offset Y, blur, spread, dan warna pada contoh ini. `translateY(-5px)` menggeser tampilan ke atas tanpa menyusun ulang ruang alur normal. `transition` menghaluskan perubahan property selama durasi tertentu.

Materi latihan memakai hover sebagai dekorasi. Konten dan fungsi utama tetap harus tersedia tanpa hover, dan animasi sebaiknya tidak mengganggu pembacaan.

### 10.10 Browser DevTools

Canva memperkenalkan Inspect Element/F12 untuk melihat DOM dan aturan CSS. Panel Styles menunjukkan aturan yang berlaku atau kalah; Computed membantu melihat nilai akhir; visualisasi box model membantu memahami width, padding, border, dan margin.

Perubahan melalui DevTools cocok untuk eksperimen cepat, tetapi tidak otomatis menyimpan perubahan ke file sumber. Setelah menemukan nilai yang sesuai, ubah file dan muat ulang halaman.

Jika CSS tidak muncul, periksa nama file dan path `href`, keberhasilan pemuatan di panel Network, kecocokan selector dengan class/ID, serta declaration yang ditimpa aturan lain.

## 11. Background warna, gambar, dan gradient

### 11.1 Sumber dan fungsi background

Bab ini terutama berasal dari **`03_Canva_Terima_Kasih.pdf`**, yang judul isinya adalah “Menggunakan Background di CSS”. Materinya bukan hanya halaman penutup. Slide CSS utama juga mengenalkan property background.

Background dapat berupa warna atau gambar. Gradient termasuk jenis gambar yang dihasilkan CSS, sehingga tidak ditulis sebagai nilai `background-color`. [Batas nilai background-color di MDN](https://developer.mozilla.org/en-US/docs/Web/CSS/Reference/Properties/background-color).

### 11.2 Background warna dan fallback

```css
body {
    background-color: lightblue;
}
```

Canva memperlihatkan beberapa declaration untuk property sama. Browser menggunakan declaration terakhir yang valid dalam kondisi cascade setara:

```css
.area {
    background-color: pink;
    background-color: rgba(255, 0, 87, 0.5);
}
```

Contoh menunjukkan mekanisme fallback: jika nilai terakhir tidak didukung, nilai sebelumnya dapat dipakai. Jika keduanya valid, RGBA yang dipakai; warna pink sebelumnya bukan lapisan yang otomatis terlihat di bawah RGBA.

### 11.3 Linear gradient dan radial gradient

```css
.header-linear {
    background-color: #6366f1;
    background-image: linear-gradient(135deg, #6366f1 0%, #a855f7 100%);
}
.header-radial {
    background-color: #3f5efb;
    background-image: radial-gradient(circle, #3f5efb 0%, #fc466b 100%);
}
```

**Linear gradient** berpindah warna sepanjang arah garis; **radial gradient** menyebar dari pusat menurut bentuk seperti lingkaran. Nilai persentase color stop menyatakan posisi warna dalam gradient, bukan alpha.

Contoh memakai `background-color` sebagai warna dasar dan `background-image` untuk gradient. Shorthand `background: linear-gradient(...)` juga dapat digunakan, seperti pada header latihan. Jangan memakai `background-color: linear-gradient(...)` karena property itu menerima warna, bukan gambar.

### 11.4 Background gambar dan path

```css
.banner {
    background-color: #1f2937;
    background-image: url("gambar/banner.jpg");
}
```

`url()` menunjuk sumber gambar. Pada stylesheet eksternal, path relatif dihitung dari lokasi file CSS, bukan langsung dari lokasi file HTML. Contoh memerlukan gambar yang tersedia pada path tersebut.

Sumber menyebut format JPG, PNG, SVG, GIF, dan WebP. Background umumnya digunakan sebagai presentasi/dekorasi. Untuk gambar yang membawa informasi pokok, `<img>` dengan alternatif teks sering lebih sesuai.

### 11.5 Pengulangan gambar

| Nilai `background-repeat` | Hasil |
| --- | --- |
| `repeat` | Mengulang pada kedua arah, perilaku default umum |
| `no-repeat` | Menampilkan tanpa pengulangan |
| `repeat-x` | Mengulang horizontal |
| `repeat-y` | Mengulang vertikal |

```css
.banner {
    background-repeat: no-repeat;
}
```

Jika gambar tampak seperti ubin, periksa property ini sebelum menganggap file gambarnya rusak.

### 11.6 Posisi gambar

```css
.banner {
    background-position: center top;
}
.ornamen {
    background-position: 30px 30px;
}
```

Pada dua panjang, nilai pertama menyatakan posisi horizontal dan nilai kedua vertikal. Keyword seperti `center`, `top`, `left`, dan `right` membantu menentukan acuan posisi.

`background-position` memindahkan gambar latar dalam area elemen; property itu tidak memindahkan kotak elemen itu sendiri.

### 11.7 Ukuran gambar

| Nilai `background-size` | Efek | Konsekuensi |
| --- | --- | --- |
| `cover` | Mengisi seluruh area sambil menjaga proporsi | Sebagian gambar dapat terpotong |
| `contain` | Membuat seluruh gambar muat sambil menjaga proporsi | Dapat menyisakan ruang kosong |
| `200px 100px` | Menetapkan dua dimensi | Dapat mengubah proporsi jika nilainya tidak sesuai |
| `100% auto` | Lebar mengikuti acuan, tinggi menyesuaikan | Tidak selalu memenuhi seluruh tinggi |

Perbedaan cover/contain adalah kompromi antara memenuhi area dan mempertahankan seluruh gambar tetap terlihat. `background-size: cover` tidak memberi tinggi elemen; elemen tetap memerlukan content atau pengaturan ukuran.

### 11.8 Contoh gabungan

```css
.banner {
    min-height: 240px;
    padding: 24px;
    color: white;
    background-color: #1f2937;
    background-image: url("gambar/banner.jpg");
    background-repeat: no-repeat;
    background-position: center top;
    background-size: cover;
}
```

Contoh menggabungkan ukuran area, warna dasar, gambar, pengulangan, posisi, dan skala. Pastikan teks tetap terbaca di atas gambar. Jika gambar tidak tersedia, background warna masih menjadi dasar tampilan.

## 12. Pembahasan latihan kartu profil

### 12.1 Tujuan latihan

Pasangan file `Latihan_gemini-code_HTML.html` dan `Latihan_gemini-code_CSS.css` membentuk kartu profil digital. Latihan menghubungkan struktur HTML dengan selector class, warna, tipografi, box model, Flexbox, positioning, dan hover.

Data contoh pada HTML adalah **Budi Santoso**, jabatan **Junior Web Developer**, deskripsi singkat, serta statistik **12 Proyek**, **1.2k Pengikut**, dan **4.8 Rating**. Nilai ini merupakan isi contoh, bukan data mahasiswa yang harus dianggap benar.

### 12.2 Struktur HTML dan hubungan class

```text
body
└── .profile-card
    ├── .card-header
    │   └── img.profile-img
    └── .card-body
        ├── h1.name
        ├── p.title
        ├── p.bio
        ├── .stats-container
        │   ├── .stat-item -> .stat-number + .stat-label
        │   ├── .stat-item -> .stat-number + .stat-label
        │   └── .stat-item -> .stat-number + .stat-label
        └── .social-links
            ├── a.btn.btn-primary
            └── a.btn.btn-outline
```

Nama seperti `profile-card` dan `btn-primary` adalah nama class buatan penulis, bukan tag atau fitur khusus browser. CSS akan berfungsi jika nama selector cocok dengan class pada HTML.

Tautan pertama memiliki `class="btn btn-primary"`, sehingga mendapatkan aturan dasar `.btn` sekaligus aturan tambahan `.btn-primary`. Ini memperlihatkan penggunaan kembali gaya tanpa menyalin semua declaration tombol.

### 12.3 Hubungan file dan ketidaksesuaian nama

HTML asli memuat:

```html
<link rel="stylesheet" href="style.css">
```

Namun file CSS di folder sumber bernama `Latihan_gemini-code_CSS.css`. Jika menjalankan pasangan berkas langsung dengan nama yang tersedia, sesuaikan referensi menjadi:

```html
<link rel="stylesheet" href="Latihan_gemini-code_CSS.css">
```

Alternatifnya, ketika menyalin latihan ke folder praktik sendiri, simpan CSS sebagai `style.css`. Pilih salah satu pendekatan agar nama pada `href` dan nama file konsisten. Lampiran tetap menyajikan kode asli agar sumbernya dapat diperiksa; berkas sumber tidak diubah oleh penyusunan dokumen ini.

### 12.4 Reset dan custom properties

```css
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
:root {
    --primary-color: #4f46e5;
    --bg-card: #ffffff;
    --border-radius: 16px;
}
```

Reset menghilangkan jarak awal sehingga desain ditentukan aturan latihan. `:root` memilih elemen akar dan menjadi tempat deklarasi custom properties. Nama custom property diawali `--`, kemudian dipakai melalui `var()`.

```css
.profile-card {
    background-color: var(--bg-card);
    border-radius: var(--border-radius);
}
```

Sumber mendefinisikan warna utama/hover, warna teks utama/redup, warna body/kartu, shadow, dan radius. Menyimpannya terpusat memudahkan penggantian tema tanpa mengedit setiap pemakaian.

### 12.5 Body sebagai flex container

Aturan body menggunakan font Poppins dengan fallback sans-serif, latar abu-abu terang, dan warna teks utama. `display: flex`, `justify-content: center`, serta `align-items: center` menempatkan kartu di tengah. `min-height: 100vh` menyediakan tinggi minimum agar pemusatan vertikal mempunyai ruang.

`padding: 20px` menjaga kartu tidak langsung menempel pada tepi layar. Karena memakai tinggi minimum, halaman masih dapat memanjang ketika konten membutuhkan ruang lebih banyak.

### 12.6 Kotak kartu

```css
.profile-card {
    width: 100%;
    max-width: 380px;
    border-radius: var(--border-radius);
    overflow: hidden;
    text-align: center;
}
```

Lebar 100% memungkinkan kartu mengikuti ruang yang tersedia, sedangkan batas maksimum menjaga kartu tidak terlalu lebar. Overflow hidden membantu latar header mengikuti sudut kartu. Text-align center memusatkan konten inline/teks dalam kartu.

Shadow memberi kesan kedalaman. Hover menggeser kartu ke atas 5px dan mengubah shadow. Transition pada transform dan shadow menghaluskan perubahan tersebut.

### 12.7 Header dan posisi foto

Header mempunyai gradient dari indigo ke ungu, tinggi 120px, `position: relative`, dan `margin-bottom: 60px`.

Foto berukuran 110×110px, berbentuk lingkaran melalui radius 50%, memakai object-fit cover, serta border putih 4px. Foto diposisikan absolute dengan:

```css
.profile-img {
    position: absolute;
    bottom: -55px;
    left: 50%;
    transform: translateX(-50%);
}
```

`bottom: -55px` menempatkan bagian foto ke bawah melewati batas header; nilai 55px merupakan setengah ukuran kotaknya. `left: 50%` dan translateX memusatkannya horizontal. Margin bawah header menyediakan ruang agar isi kartu tidak bertabrakan dengan foto.

### 12.8 Isi dan tipografi

`.card-body` memakai `padding: 0 24px 32px 24px`: tidak ada padding atas, ada 24px di kanan/kiri, dan 32px di bawah. `.name` berukuran 1.35rem dan weight 700. `.title` berwarna utama, uppercase, weight 600, dan letter spacing 0.5px. `.bio` memakai warna redup dan line-height 1.5.

Tujuannya membedakan hirarki informasi: nama paling menonjol, jabatan menjadi label, dan bio menjadi teks penjelas. Pemilihan ukuran melalui CSS tidak mengubah makna heading/paragraf pada HTML.

### 12.9 Statistik

`.stats-container` menggunakan flex dengan `justify-content: space-around`, padding vertikal, serta border atas/bawah. Tiga `.stat-item` ditata pada baris, sedangkan tiap item memakai `flex-direction: column` agar angka berada di atas label.

`.stat-number` diberi weight 700; `.stat-label` berukuran lebih kecil dan berwarna redup. Ini adalah contoh flex container yang berada di dalam flex container lain.

### 12.10 Tautan aksi dan hover

`.social-links` merupakan flex container dengan gap 12px. `.btn` menggunakan `flex: 1`, sehingga kedua tombol dapat berbagi ruang. `.btn-primary` mempunyai background utama, sedangkan `.btn-outline` memakai latar transparan dan garis tepi.

Hover mengubah warna dan memberi translateY -2px. `cursor: pointer` menampilkan isyarat pointer, tetapi tidak memberikan fungsi aplikasi.

**Batas contoh:** kedua aksi memakai `href="#"`. Teks “Ikuti” dan “Kirim Pesan” hanya tampilan tautan; belum ada fitur mengikuti akun, backend, atau pengiriman pesan. Jika nanti menjadi aksi aplikasi, pilih elemen dan perilaku sesuai fungsi yang benar, serta sediakan fokus keyboard yang terlihat.

### 12.11 Ketergantungan eksternal

HTML memuat Poppins dari Google Fonts dan foto dari URL Unsplash. `preconnect` membantu browser menyiapkan koneksi ke host font; `crossorigin` pada koneksi font membantu mode koneksi yang sesuai. URL tersebut merupakan ketergantungan jaringan pada contoh asli, bukan aset lokal.

Jika jaringan tidak tersedia, font dapat kembali ke sans-serif dan foto dapat gagal dimuat. Alternatif teks gambar masih membantu. Untuk latihan tanpa internet, gunakan font sistem dan file foto lokal, lalu sesuaikan `src`; dokumen ini tidak menyediakan media tersebut.

### 12.12 Latihan perubahan yang membantu memahami kode

1. Ubah `--primary-color` lalu periksa elemen yang ikut berubah.
2. Ganti `max-width: 380px` menjadi 320px dan lihat hubungan ukuran serta ruang konten.
3. Ubah `padding` pada `.card-body`; jelaskan sisi yang berubah.
4. Ganti `space-around` pada statistik menjadi `space-between`; bandingkan distribusi jaraknya.
5. Hapus sementara translateX pada foto; jelaskan mengapa foto tidak lagi terpusat.
6. Ubah `font-weight` nama menjadi 400; bedakan perubahan presentasi dan makna elemen.
7. Periksa tampilan pada ruang sempit dan navigasi keyboard; jangan hanya melihat hover dengan mouse.


---

## 13. Pertemuan 4: Evaluasi HTML/CSS & Fundamental Backend PHP

> ### 🔗 Jembatan Logika & Relevansi Antar-Materi
> - **Mengapa setelah HTML & CSS (Pertemuan 2–3) kita harus belajar PHP di Pertemuan 4?**  
>   Halaman HTML + CSS yang kamu buat di Pertemuan 2 dan 3 bersifat **statis (mati)**. Jika kamu membuat `<form>` di HTML lalu pengguna mengklik tombol `Simpan`, HTML dan CSS tidak punya kemampuan untuk menyimpan data, menghitung rumus, atau mengecek password. Kita membutuhkan **mesin pemroses di sisi server (*Backend*)**, yaitu **PHP**!
> - **Hubungan ke Pertemuan 5 (CRUD MySQL):**  
>   Di Pertemuan 4 ini kamu belajar bagaimana PHP menyimpan data di dalam **Variabel (`$x`)**, mengolah banyak data di dalam **Array Asosiatif (`$mhs['nama']`)**, melakukan perulangan (`foreach`/`while`), dan menangkap kiriman form dengan **`$_GET` & `$_POST`**. Empat konsep inilah yang menjadi **bahan bakar utama** untuk menjalankan query database MySQL (`SELECT`, `INSERT`, `UPDATE`, `DELETE`) di **Pertemuan 5**!
>
> ### 💡 Analogi dari Proyek Pribadi Kamu (`D:\PROJECT\SELF EXPERIMENT`)
> - **Web Statis vs Web Dinamis:** Bandingkan berkas `mahasiswa.htm` yang kamu simpan di folder **`AUTO CHECK KRS`** dengan aplikasi **`AI TRADING TERMINAL` (`run_web.py`)**. File `mahasiswa.htm` adalah **Web Statis** — mau dibuka kapan pun, nilai IPK dan daftar mata kuliah di dalamnya tetap sama persis karena hanya membaca file teks mati. Sebaliknya, **`AI TRADING TERMINAL`** adalah **Web Dinamis** — setiap kali dibuka, mesin backend mengambil data terbaru, menghitung indikator, dan merender HTML baru secara *real-time*!
> - **Array Asosiatif & `if-elseif-else`:** Persis seperti modul **`matching_engine.py`** di proyek **`BEASISWA-CHECKER`** milikmu! Saat mengevaluasi profil pendaftar (`"nama" => "Adika", "ipk" => 3.65, "ielts" => 6.5`), data pendaftar disimpan sebagai pasangan kunci-nilai (**Array Asosiatif**), lalu diuji dengan percabangan logika:
>   - `if ($skor >= 80)` $ightarrow$ Kategori **🟢 Safety** (Chevening UK)
>   - `elseif ($skor >= 60)` $ightarrow$ Kategori **🟡 Target** (LPDP Reguler)
>   - `else` $ightarrow$ Kategori **🔴 Reach** (Gates Cambridge)

Pada Pertemuan 4 (12 Oktober 2026), perkuliahan mencakup dua agenda utama: (1) evaluasi komprehensif penguasaan HTML & CSS melalui latihan interaktif W3Schools, dan (2) transisi dari pengembangan *Frontend* statis menuju *Backend Development* menggunakan **PHP (*PHP: Hypertext Preprocessor*)** berdasarkan materi Canva **"Mastering Backend PHP"**.

### 13.1 Evaluasi Latihan HTML & CSS (W3Schools)

Latihan W3Schools menguji ketepatan sintaks dasar yang wajib dikuasai di luar kepala sebelum masuk ke pemrograman server:

1. **Kelengkapan Atribut Tag HTML:**
   - Hyperlink wajib menggunakan atribut `href` (`<a href="url">Teks</a>`).
   - Gambar wajib menggunakan atribut `src` dan `alt` (`<img src="foto.jpg" alt="Deskripsi">`).
   - Input formulir wajib memiliki atribut `type` dan `name` agar nilainya dapat dikirim ke server (`<input type="text" name="username">`).
2. **Penulisan Properti CSS yang Presisi:**
   - Membedakan properti warna teks (`color`), warna latar (`background-color`), dan gambar/gradien latar (`background-image` atau shorthand `background`).
   - Memahami urutan *Box Model* (`margin`, `border`, `padding`, `width`/`height`) serta penggunaan Flexbox (`display: flex; justify-content: center; align-items: center;`).

### 13.2 Arsitektur Web: Statis vs Dinamis

Materi Canva *Mastering Backend PHP* (Slide 3) membedakan dua arsitektur utama website:

| Aspek Perbandingan | Website Statis (HTML/CSS) | Website Dinamis (PHP + Database) |
| :--- | :--- | :--- |
| **Sifat Konten** | **Konten Tetap:** Dokumen dikirim langsung dari penyimpanan (*storage*) server ke browser tanpa diubah. | **Konten Personalisasi:** Tampilan halaman berubah menyesuaikan input pengguna, sesi login, atau data terbaru dari database. |
| **Cara Pembaruan** | Memerlukan penyuntingan manual langsung pada kode file `.html`. | **Otomatisasi:** Markup HTML dibentuk secara dinamis saat *runtime* oleh *PHP Engine* berdasarkan data di MySQL. |
| **Komponen Server** | Cukup Web Server biasa (Apache/Nginx) untuk menyajikan file. | Membutuhkan Web Server + *PHP Interpreter* + *Database Server* (MySQL/MariaDB). |

### 13.3 Siklus Hidup Eksekusi Script PHP (*Request–Response Lifecycle*)

Bagaimana sebuah file `.php` diproses hingga tampil di layar pengguna? Slide 4 menjelaskan empat tahapan berurutan:

```mermaid
sequenceDiagram
    autonumber
    participant B as 1. Browser (Client)
    participant W as 2. Web Server (Apache/Nginx)
    participant P as 3. PHP Interpreter
    participant D as Database (MySQL)

    B->>W: HTTP Request (Meminta halaman index.php)
    W->>P: Meneruskan file index.php ke modul PHP Engine
    P->>D: Menjalankan logika PHP & mengirim query SQL
    D-->>P: Mengembalikan hasil data (Result Set)
    P-->>W: Merender hasil menjadi markup HTML bersih
    W-->>B: HTTP Response (Mengirimkan HTML murni ke Browser)
```

> **Catatan Penting (Sering Keluar di UTS):** Browser **tidak pernah** menerima atau melihat kode asli `<?php ... ?>`. Jika pengguna menekan *View Page Source* di browser, yang terlihat hanyalah HTML, CSS, dan JavaScript hasil olahan (*output*) dari PHP Interpreter.

### 13.4 Sintaks Dasar, *Weakly Typed Language*, & *Case Sensitivity*

Kode PHP ditulis di dalam tag pembuka `<?php` dan tag penutup `?>`. Setiap pernyataan (*statement*) diakhiri dengan tanda titik koma (`;`).

```php
<?php
// Variabel selalu diawali dengan simbol dolar ($)
$nim = "152025013";
$ipk = 3.85;
$status_aktif = true;

// Penggabungan string (Concatenation) menggunakan operator titik (.)
echo "Mahasiswa NIM: " . $nim . " Memiliki IPK: " . $ipk;
?>
```

Dua karakteristik utama bahasa PHP yang ditekankan pada Slide 5:
1. **Weakly Typed / Loosely Typed Language:**
   PHP secara otomatis mengenali dan menentukan tipe data variabel berdasarkan nilai yang diberikan saat *runtime* tanpa perlu deklarasi tipe eksplisit seperti pada C++ atau Java (`string`, `int`, `float`, `bool`).
2. **Aturan Case Sensitivity (Peka Huruf Besar/Kecil):**
   - **Nama Variabel bersifat CASE-SENSITIVE:** `$nim`, `$NIM`, dan `$Nim` dianggap sebagai **tiga variabel yang berbeda**.
   - **Fungsi Bawaan & Keyword bersifat CASE-INSENSITIVE:** `echo`, `ECHO`, `if`, `IF`, `mysqli_query`, atau `MYSQLI_QUERY` tetap dikenali sama oleh PHP (namun standar penulisan yang baik selalu menggunakan huruf kecil).

### 13.5 Perbedaan Kutip Dua (`"`) vs Kutip Satu (`'`) pada String

Dalam PHP, string dapat ditulis menggunakan kutip dua maupun kutip satu, tetapi perilakunya berbeda:
- **Kutip Dua (`"..."`) — Mendukung *String Interpolation*:** Variabel di dalam kutip dua akan langsung dievaluasi nilainya. Contoh: `echo "Halo $nama";` akan mencetak `Halo Rian`.
- **Kutip Satu (`'...'`) — String Literal Murni:** Variabel di dalam kutip satu tidak dievaluasi dan dicetak apa adanya (`Halo $nama`). Untuk menggabungkan variabel dengan kutip satu, wajib menggunakan operator titik (`.`): `echo 'Halo ' . $nama;`.

### 13.6 Struktur Data Array: Terindeks vs Asosiatif

Array adalah variabel khusus yang dapat menyimpan banyak nilai sekaligus. Slide 6 membedakan dua jenis array utama dalam PHP:

#### 1. Array Terindeks (*Numeric / Indexed Array*)
Menggunakan indeks berupa angka otomatis yang dimulai dari **`0`**.
```php
<?php
$matkul = ["Web", "PBO", "Basdat"];
echo $matkul[0]; // Output: Web
echo $matkul[2]; // Output: Basdat
?>
```

#### 2. Array Asosiatif (*Associative Array / Key–Value Pair*)
Menggunakan kunci (*key*) berupa string bernama khusus yang dipetakan ke nilainya dengan operator panah ganda (`=>`).
```php
<?php
$mhs = [
    "nama"  => "Rian",
    "prodi" => "Informatika"
];
echo $mhs['nama'];  // Output: Rian
echo $mhs['prodi']; // Output: Informatika
?>
```
> **🔗 Relevansi Langsung ke Pertemuan 5:** Saat PHP mengambil satu baris data dari tabel MySQL (dengan `mysqli_fetch_array($data)` atau `$result->fetch_assoc()`), baris tabel tersebut diubah menjadi **Array Asosiatif** di mana nama kolom database menjadi *key*-nya (contoh: `$d['tanggal']`, `$d['nominal']`, `$d['keterangan']`). Jadi, memahami Array Asosiatif di Pertemuan 4 adalah syarat mutlak untuk menampilkan tabel database di Pertemuan 5!

### 13.7 Logika Program: Pengondisian & Perulangan `foreach`

Slide 7 menjelaskan dua kontrol alur esensial untuk memproses data dinamis:

#### 1. Pengecekan Kondisi (`if - elseif - else`)
Digunakan untuk mengambil keputusan berdasarkan kondisi logika (misalnya konversi nilai angka ke indeks huruf di akademik, atau membedakan warna badge **Pemasukan** vs **Pengeluaran** di Tugas 5):
```php
<?php
$nilai = 82;

if ($nilai >= 85) {
    $grade = "A";
} elseif ($nilai >= 70) {
    $grade = "B";
} else {
    $grade = "C";
}
echo "Grade Anda: " . $grade; // Output: Grade Anda: B
?>
```

#### 2. Iterasi Data (`foreach` Loop)
Dirancang khusus untuk menelusuri seluruh elemen di dalam array dari awal hingga akhir tanpa perlu menghitung jumlah indeks secara manual:
```php
<?php
$list_nilai = [80, 90, 75];

foreach ($list_nilai as $n) {
    echo "Nilai: " . $n . "<br>";
}

// Bentuk key => value untuk Array Asosiatif:
foreach ($mhs as $kunci => $nilai) {
    echo $kunci . " : " . $nilai . "<br>";
}
?>
```

### 13.8 Penanganan Input Form: Superglobal `$_GET` vs `$_POST`

PHP menyediakan variabel **Superglobals** (array asosiatif bawaan yang dapat diakses di mana saja) untuk menangkap data yang dikirim oleh pengguna dari browser. Slide 8 membandingkan dua metode utama:

| Karakteristik | Metode `$_GET` | Metode `$_POST` |
| :--- | :--- | :--- |
| **Media Pengiriman** | Dikirim melalui **URL Query String** (contoh: `ubah.php?id=5&page=1`). | Dikirim secara tersembunyi di dalam **HTTP Request Body**. |
| **Visibilitas di URL** | **Terlihat jelas** di bilah alamat (*address bar*) browser dan tersimpan di riwayat (*history*). | **Tidak terlihat** di URL. |
| **Kapasitas Data** | Terbatas pada panjang URL maksimal browser (~2048 karakter). | Tidak memiliki batasan ukuran ketat (mendukung teks panjang & upload file). |
| **Kegunaan Utama** | Navigasi halaman, filter pencarian, *pagination*, *bookmarking*, dan mengirim parameter ID pada tautan Edit/Hapus (`?id=...`). | **Standar utama** formulir login, registrasi, pengiriman kata sandi, serta penambahan/pembaruan data ke database (mutasi data). |
| **Catatan Keamanan** | **Dilarang keras** digunakan untuk mengirim kata sandi atau data sensitif. | Lebih aman dari intipan layar/riwayat URL, namun **tetap wajib menggunakan HTTPS** agar terenkripsi di jaringan. |

---

## 14. Pertemuan 5: Operasi CRUD pada PHP & MySQL

> ### 🔗 Jembatan Logika & Relevansi Antar-Materi
> - **Mengapa setelah belajar PHP Dasar (Pertemuan 4) kita wajib menghubungkannya ke MySQL di Pertemuan 5?**  
>   Variabel (`$nominal`) dan Array di PHP hanya hidup sementara di memori RAM server selama beberapa milidetik saat skrip dijalankan. Begitu halaman selesai dimuat atau browser ditutup, **semua data di dalam variabel PHP lenyap**. Agar data pengguna (seperti riwayat transaksi keuangan, daftar mahasiswa, atau akun user) tersimpan secara **permanen (persisten)**, PHP harus mengirim perintah SQL ke **Database MySQL**.
> - **Bagaimana Pertemuan 1, 2, 3, 4, dan 5 Menyatu di Bab Ini?**
>   1. Pengguna mengklik tautan URL atau mengirim Form melalui protokol **HTTP GET/POST** *(Pertemuan 1)*.
>   2. Pengguna mengisi data di dalam elemen **`<form>`** dan melihat daftar data di dalam **`<table>`** *(Pertemuan 2 — HTML)*.
>   3. Halaman tabel dan form tampil rapi, terpusat dengan **Flexbox**, memiliki **Padding/Margin** yang pas, dan berlatar **Linear Gradient** *(Pertemuan 3 — CSS)*.
>   4. Skrip **PHP** menangkap kiriman form dengan **`$_POST` / `$_GET`** dan melakukan perulangan array hasil query *(Pertemuan 4 — PHP Dasar)*.
>   5. Skrip PHP mengeksekusi perintah **`INSERT`, `SELECT`, `UPDATE`, `DELETE`** ke database **MySQL** *(Pertemuan 5 — CRUD)*!
>
> ### 💡 Analogi dari Proyek Pribadi Kamu (`D:\PROJECT\SELF EXPERIMENT`)
> Bayangkan bagaimana kamu mengelola data posisi trading di **`AI TRADING TERMINAL` (`ai_trading.db`)** atau data beasiswa di **`BEASISWA-CHECKER` (`scholarships.db`)**:
> - **CREATE (`INSERT INTO` via `POST`):** Saat kamu menekan tombol **`📝 Paper Trading`** untuk membuka posisi baru `LONG BTC/USDT`, sistem mengambil input dari form (Pair, Entry, TP, SL, Margin) lalu menyisipkan 1 baris baru ke tabel database. Di Tugas 5, ini dilakukan oleh `tambah.php` $ightarrow$ `proses_tambah.php`.
> - **READ (`SELECT *` via `GET`):** Saat kamu membuka halaman utama terminal dan melihat tabel **Posisi Aktif Terminal** beserta badge hijau `LONG` / merah `SHORT`, sistem sedang membaca seluruh baris dari database dan menampilkannya dengan perulangan. Di Tugas 5, ini dilakukan oleh `index.php`.
> - **UPDATE (`UPDATE ... SET ... WHERE id=...`):** Saat posisi trading sedang berjalan dan kamu ingin mengubah angka *Take Profit* atau *Stop Loss*-nya saja:
>   - **Tahap 1 (`GET`):** Sistem mengambil data posisi lama berdasarkan `id` posisi tersebut agar angkanya muncul dulu di kotak form (`ubah.php?id=1`), sambil menyimpan `id` tersebut secara tersembunyi di `<input type="hidden" name="id">`.
>   - **Tahap 2 (`POST`):** Setelah kamu ubah angkanya dan klik Update, sistem menjalankan `UPDATE ... WHERE id='$id'` (`update.php`).
> - **DELETE (`DELETE FROM ... WHERE id=...`):** Saat kamu menekan tombol merah **`Close Position`** atau menghapus tweet di **`X LIKE REMOVER`**, muncul dialog konfirmasi dulu (*"Yakin ingin menghapus?"*). Jika setuju, sistem menghapus baris tersebut berdasarkan `id`-nya (`hapus.php?id=1`).

Pada Pertemuan 5 (19 Oktober 2026), materi berfokus pada integrasi penuh antara aplikasi PHP dan basis data relasional **MySQL** untuk membangun sistem **CRUD (*Create, Read, Update, Delete*)** berdasarkan modul Canva **"Operasi CRUD pada PHP & MySQL"** serta berkas praktikum di LMS Elearning.

### 14.1 Landasan Teori CRUD & Pemetaan Protokol (CRUD, HTTP, & SQL)

**CRUD** adalah akronim dari empat fungsi dasar pengelolaan data persisten pada aplikasi berbasis database:
1. **Create (Penyimpanan Data):** Menambahkan entitas/baris (*record*) baru ke dalam tabel basis data.
2. **Read (Retrieval Informasi):** Membaca, mengambil, dan menampilkan daftar *record* terstruktur ke antarmuka pengguna.
3. **Update (Sinkronisasi/Pembaruan):** Memperbarui nilai pada baris data yang sudah ada berdasarkan pengenal unik (*Primary Key*).
4. **Delete (Pembersihan/Penghapusan):** Menghapus *record* tertentu dari tabel basis data.

Slide 3 memetakan hubungan langsung antara fungsi CRUD, metode protokol HTTP, dan perintah SQL:

| Fungsi CRUD | Metode HTTP | Perintah SQL Utama | Deskripsi Aksi pada Aplikasi |
| :--- | :---: | :--- | :--- |
| **Create** | `POST` | `INSERT INTO nama_tabel (...) VALUES (...)` | Menambahkan baris data baru dari formulir input ke tabel database. |
| **Read** | `GET` | `SELECT * FROM nama_tabel` | Membaca dan menampilkan data dari satu atau lebih tabel ke halaman web. |
| **Update** | `POST` / `PUT` | `UPDATE nama_tabel SET kolom=nilai WHERE id=...` | Memperbarui baris data spesifik berdasarkan *Primary Key* (`id` / `nim`). |
| **Delete** | `GET` / `DELETE` | `DELETE FROM nama_tabel WHERE id=...` | Menghapus baris data tertentu secara permanen dari tabel database. |

> **⚠️ Jebakan Ujian UTS tentang Klausa `WHERE`:** Pada operasi `UPDATE` dan `DELETE`, klausa **`WHERE primary_key = nilai`** bersifat **mutlak wajib**. Jika klausa `WHERE` terlupa, maka **seluruh baris di dalam tabel database akan terubah atau terhapus semuanya**!

### 14.2 Arsitektur 3-Tier Aplikasi PHP & MySQL

Slide 4 menggambarkan alur kerja sistem (*3-Tier Architecture*) dalam aplikasi web berbasis database:

```mermaid
flowchart LR
    subgraph Tier1["1. Browser (Frontend)"]
        UI["Tabel HTML & Formulir Input"]
    end
    subgraph Tier2["2. Server PHP (Backend)"]
        Logic["Validasi Input, Logika Bisnis,
& Penyusunan Kueri SQL"]
    end
    subgraph Tier3["3. MySQL Database"]
        DB[("Tabel Relasional
(Penyimpanan Persisten)")]
    end

    UI -- "HTTP Request (GET / POST)" --> Logic
    Logic -- "Eksekusi SQL (mysqli / PDO)" --> DB
    DB -- "Result Set / Status Eksekusi" --> Logic
    Logic -- "HTTP Response (HTML / Redirect)" --> UI
```

### 14.3 Perancangan Skema Basis Data MySQL

Sebelum menulis kode PHP, langkah pertama adalah merancang struktur tabel di MySQL. Dalam perkuliahan terdapat tiga skema tabel yang dipelajari:

#### A. Skema Tabel `mahasiswa` (Studi Kasus Slide Canva Pertemuan 5 — Slide 6)
```sql
CREATE TABLE mahasiswa (
    nim VARCHAR(12) PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    prodi VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL
);
```

#### B. Skema Tabel `user` (Studi Kasus Berkas Elearning Dosen — Database `casestudy`)
```sql
CREATE TABLE user (
    iduser INT(11) AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL,
    level VARCHAR(20) NOT NULL
);
```

#### C. Skema Tabel `catatan_keuangan` (Studi Kasus Tugas 5 — Database `casestudy`)
Memenuhi syarat tugas minimal 5 atribut (memiliki 6 atribut: `id`, `tanggal`, `jenis`, `kategori`, `nominal`, `keterangan`):
```sql
CREATE TABLE IF NOT EXISTS catatan_keuangan (
    id INT(11) NOT NULL AUTO_INCREMENT,
    tanggal DATE NOT NULL,
    jenis ENUM('Pemasukan', 'Pengeluaran') NOT NULL,
    kategori VARCHAR(50) NOT NULL,
    nominal INT(11) NOT NULL,
    keterangan VARCHAR(255) NOT NULL,
    PRIMARY KEY (id)
);
```

### 14.4 Modul Koneksi Database (`koneksi.php`)

Agar konfigurasi database tidak ditulis berulang-ulang di setiap halaman (prinsip *DRY — Don't Repeat Yourself*, sama seperti file `modules/database.py` di **`BEASISWA-CHECKER`** kamu), koneksi dibuat di dalam satu file terpisah bernama **`koneksi.php`**, lalu dipanggil menggunakan `include 'koneksi.php';` atau `require_once 'koneksi.php';`.

Terdapat **tiga pendekatan koneksi** yang dibahas dalam materi:

#### 1. MySQLi Procedural (Digunakan pada File Contoh Elearning Dosen & Tugas 5)
```php
<?php
$koneksi = mysqli_connect("localhost", "root", "", "casestudy");

if (mysqli_connect_errno()) {
    echo "Koneksi database gagal : " . mysqli_connect_error();
}
?>
```

#### 2. MySQLi Object-Oriented (Digunakan pada Slide 7 Canva Pertemuan 5)
```php
<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "db_akademik";

$koneksi = new mysqli($host, $user, $pass, $db);

if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}
?>
```

#### 3. PDO / PHP Data Objects (Standar Industri pada Slide 11 & Modul Referensi)
Keunggulan PDO adalah mendukung 12 *database engine* berbeda (MySQL, PostgreSQL, SQLite, SQL Server, dll.) dan memiliki fitur *named parameters* serta *exception handling*:
```php
<?php
$dsn = "mysql:host=localhost;dbname=db_akademik;charset=utf8mb4";
try {
    $pdo = new PDO($dsn, "root", "", [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
} catch (PDOException $e) {
    die("Koneksi gagal: " . $e->getMessage());
}
?>
```

### 14.5 Bedah Lengkap 4 Fitur Utama CRUD

Berikut adalah cara kerja teknis dari keempat operasi CRUD beserta perbandingan gaya **MySQLi Procedural** (gaya praktikum kelas) dan **MySQLi Prepared Statements** (gaya Slide 8–10 Canva):

#### 1. Fitur READ — Menampilkan Data (`index.php` / `tampil.php`)
Alur kerja:
1. Memanggil file `koneksi.php`.
2. Menjalankan query `SELECT * FROM nama_tabel` dengan `mysqli_query()`.
3. Melakukan perulangan `while ($d = mysqli_fetch_array($data))` untuk mencetak setiap baris menjadi elemen `<tr><td>...</td></tr>` pada tabel HTML.
4. Menyertakan tautan aksi **Ubah** (`ubah.php?id=...`) dan **Hapus** (`hapus.php?id=...`) yang mengirimkan *Primary Key* melalui URL parameter (`GET`).

```php
<?php
include 'koneksi.php';
$no = 1;
$data = mysqli_query($koneksi, "SELECT * FROM catatan_keuangan");
while ($d = mysqli_fetch_array($data)) {
?>
<tr>
    <td><?php echo $no++; ?></td>
    <td><?php echo $d['tanggal']; ?></td>
    <td><?php echo $d['jenis']; ?></td>
    <td><?php echo $d['kategori']; ?></td>
    <td>Rp <?php echo number_format($d['nominal'], 0, ',', '.'); ?></td>
    <td><?php echo $d['keterangan']; ?></td>
    <td>
        <a href="ubah.php?id=<?php echo $d['id']; ?>">Ubah</a>
        <a href="hapus.php?id=<?php echo $d['id']; ?>" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
    </td>
</tr>
<?php } ?>
```
> **Fungsi `number_format($angka, 0, ',', '.')`:** Memformat angka integer (misal `1500000`) menjadi format ribuan Indonesia (`1.500.000`) dengan `0` desimal, koma sebagai pemisah desimal, dan titik sebagai pemisah ribuan.

#### 2. Fitur CREATE — Tambah Data (`tambah.php` & `proses_tambah.php`)
Terdiri dari dua file:
- **`tambah.php`**: Menampilkan formulir HTML dengan `<form method="post" action="proses_tambah.php">`. Setiap input wajib memiliki atribut `name` yang sesuai.
- **`proses_tambah.php`**: Menangkap data dari `$_POST`, menjalankan query `INSERT INTO`, lalu mengalihkan halaman kembali ke `index.php` menggunakan `header("location:index.php");`.

**Gaya MySQLi Procedural (`proses_tambah.php`):**
```php
<?php
include 'koneksi.php';

$tanggal    = $_POST['tanggal'];
$jenis      = $_POST['jenis'];
$kategori   = $_POST['kategori'];
$nominal    = $_POST['nominal'];
$keterangan = $_POST['keterangan'];

mysqli_query($koneksi, "INSERT INTO catatan_keuangan VALUES(NULL, '$tanggal', '$jenis', '$kategori', '$nominal', '$keterangan')");

header("location:index.php");
?>
```
> **Penting — Mengapa Menggunakan `NULL` dan Bukan `''` pada Kolom Pertama (`id`)?**  
> Pada contoh lawas (MySQL 5.x), sering ditulis `VALUES('', '$nama', ...)`. Namun pada **MySQL 8.x** yang mengaktifkan *Strict SQL Mode* (`STRICT_TRANS_TABLES`) secara bawaan, memasukkan string kosong `''` ke dalam kolom bertipe `INT AUTO_INCREMENT` akan menghasilkan fatal error: `Incorrect integer value: '' for column 'id' at row 1`. Menggunakan **`NULL`** (atau menyebutkan nama kolom secara eksplisit tanpa `id`) adalah cara standar yang valid di semua versi MySQL!

**Gaya MySQLi Prepared Statements (Slide 9 Canva Pertemuan 5):**
```php
<?php
$stmt = $koneksi->prepare("INSERT INTO mahasiswa (nim, nama, prodi, email) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $nim, $nama, $prodi, $email);

$nim   = $_POST['nim'];
$nama  = $_POST['nama'];
$prodi = $_POST['prodi'];
$email = $_POST['email'];

$stmt->execute();
?>
```
*(Keterangan `"ssss"` pada `bind_param`: keempat parameter bertipe **s**tring. Tipe lain: `i` = integer, `d` = double/float, `b` = blob).*

#### 3. Fitur UPDATE — Ubah Data (`ubah.php` & `update.php`)
Sesuai Slide 10 Canva, operasi Update berjalan dalam **2 tahap**:
1. **Tahap 1 — *Fetch Existing Record* (`ubah.php` via `GET`):**
   - Menangkap `id` dari URL dengan `$id = $_GET['id'];`.
   - Mengambil data lama dari database: `SELECT * FROM catatan_keuangan WHERE id='$id'`.
   - Menampilkan nilai lama ke dalam atribut `value="..."` pada setiap input form.
   - Menyimpan `id` di dalam **`<input type="hidden" name="id" value="<?php echo $d['id']; ?>">`** agar saat form di-submit, file pemroses tahu baris mana yang harus diperbarui.
   - Untuk elemen `<select>`, menggunakan logika `<?php if($d['jenis'] == 'Pemasukan') echo 'selected'; ?>` agar opsi yang tersimpan otomatis terpilih.
2. **Tahap 2 — *Execute UPDATE SQL* (`update.php` via `POST`):**
   - Menangkap seluruh nilai baru beserta `$_POST['id']`.
   - Menjalankan kueri `UPDATE ... SET ... WHERE id='$id'`.
   - Melakukan redirect ke `index.php`.

```php
<?php
include 'koneksi.php';

$id         = $_POST['id'];
$tanggal    = $_POST['tanggal'];
$jenis      = $_POST['jenis'];
$kategori   = $_POST['kategori'];
$nominal    = $_POST['nominal'];
$keterangan = $_POST['keterangan'];

mysqli_query($koneksi, "UPDATE catatan_keuangan SET tanggal='$tanggal', jenis='$jenis', kategori='$kategori', nominal='$nominal', keterangan='$keterangan' WHERE id='$id'");

header("location:index.php");
?>
```

#### 4. Fitur DELETE — Hapus Data (`hapus.php`)
1. Pada halaman daftar (`index.php`), tombol Hapus diberi atribut `onclick="return confirm('Yakin ingin menghapus data ini?')"` agar pengguna tidak sengaja menghapus data.
2. Jika pengguna menekan OK, browser membuka `hapus.php?id=...`.
3. `hapus.php` menangkap `$_GET['id']`, menjalankan query `DELETE FROM ... WHERE id='$id'`, lalu mengalihkan halaman kembali ke `index.php`:

```php
<?php
include 'koneksi.php';
$id = $_GET['id'];

mysqli_query($koneksi, "DELETE FROM catatan_keuangan WHERE id='$id'");

header("location:index.php");
?>
```

### 14.6 Standar Industri & Keamanan Aplikasi CRUD PHP (Slide 11 Canva)

Slide 11 merangkum tiga praktik terbaik (*Best Practices*) berstandar industri dalam pengembangan aplikasi CRUD PHP:

| Pilar Standar | Nama Konsep | Masalah yang Dicegah | Analogi di Proyek Kamu & Cara Implementasi di PHP |
| :--- | :--- | :--- | :--- |
| **1. Prepared Statements & PDO** | Abstraksi Database & Parameterisasi Kueri | **SQL Injection (SQLi):** Peretas menyisipkan perintah SQL jahat (seperti `' OR '1'='1`) ke dalam input form untuk membobol atau menghapus database. | Seperti memisahkan *prompt template sistem* dari *teks input mentah* di **`BEASISWA-CHECKER`**. Di PHP, gunakan `prepare()` dan `bind_param()` (MySQLi) atau `PDO::prepare()` dengan placeholder `?` sehingga input pengguna diperlakukan murni sebagai data literal, bukan perintah SQL. |
| **2. Sanitasi Output (Anti-XSS)** | Escaping Karakter HTML Khusus | **Cross-Site Scripting (XSS):** Peretas memasukkan skrip `<script>alert('hacked')</script>` ke form, lalu skrip tersebut tereksekusi di browser pengguna lain saat tabel ditampilkan. | Bungkus setiap output variabel dari database/user dengan fungsi **`htmlspecialchars($data, ENT_QUOTES, 'UTF-8')`** sebelum dicetak dengan `echo`. |
| **3. Pola PRG** | *Post–Redirect–Get Pattern* | **Duplicate Form Submission:** Jika setelah `POST` server langsung menampilkan halaman tanpa redirect, menekan tombol *Refresh (F5)* di browser akan mengirim ulang data `POST` yang sama sehingga data ganda masuk ke tabel. | Bayangkan di **`AI TRADING TERMINAL`**, jika setelah klik order `POST` tidak di-redirect ke `GET`, menekan F5 akan mengirim *double order*! Selalu lakukan redirect dengan **`header("location:index.php");`** setelah operasi `INSERT`, `UPDATE`, atau `DELETE` selesai. |

---

## 15. Pembahasan Studi Kasus CRUD: Contoh Dosen & Aplikasi Catatan Keuangan

### 15.1 Bedah Arsitektur Contoh CRUD Dosen (`user` pada Database `casestudy`)

Di LMS Elearning (Topik 6), dosen menyediakan 8 berkas contoh yang mengelola tabel `user` (`iduser`, `nama`, `username`, `password`, `level`):

```text
Alur Berkas Contoh Dosen:
├── koneksi.php      -> Koneksi ke database "casestudy"
├── tampil.php       -> [READ] Menampilkan tabel user + tombol Tambah, Ubah, Hapus
├── tambah.php       -> [CREATE - Form] Form input user baru -> kirim POST ke inputuser.php
├── inputuser.php    -> [CREATE - Proses] INSERT INTO user -> redirect ke tampil.php
├── ubah.php         -> [UPDATE - Form] Ambil data WHERE iduser=$_GET['id'] -> kirim POST ke update2.php
├── update2.php      -> [UPDATE - Proses] UPDATE user SET ... WHERE iduser=$_POST['iduser'] -> redirect ke tampil.php
├── hapus.php        -> [DELETE - Proses] DELETE FROM user WHERE iduser=$_GET['id'] -> redirect ke tampil.php
└── formlogin.php    -> [BONUS] Contoh tampilan form login Bootstrap -> kirim POST ke ceklogin.php
```

### 15.2 Bedah Arsitektur Tugas 5 — Aplikasi Catatan Keuangan (`catatan_keuangan`)

Berdasarkan pola contoh dosen di atas, pada Tugas 5 dibangun aplikasi **Catatan Keuangan** yang telah disempurnakan baik dari sisi kompatibilitas MySQL 8, struktur kode, maupun desain antarmuka modern (Bootstrap 5 + *Base Design* Gradien *Deep Emerald & Slate*):

```text
Alur Berkas Tugas 5 (Catatan Keuangan):
├── keuangan.sql       -> Skrip pembuatan tabel catatan_keuangan (6 atribut) + 5 data awal
├── koneksi.php        -> Modul koneksi MySQLi ke database casestudy
├── index.php          -> [READ] Halaman utama tabel transaksi (badge Pemasukan/Pengeluaran & format Rupiah)
├── tambah.php         -> [CREATE - Form] Form 2-kolom terpusat untuk tambah transaksi
├── proses_tambah.php  -> [CREATE - Proses] INSERT INTO catatan_keuangan VALUES(NULL, ...) + Redirect PRG
├── ubah.php           -> [UPDATE - Form] Form edit transaksi dengan pre-filled value & hidden ID
├── update.php         -> [UPDATE - Proses] UPDATE catatan_keuangan SET ... WHERE id='$id' + Redirect PRG
└── hapus.php          -> [DELETE - Proses] DELETE FROM catatan_keuangan WHERE id='$id' + Redirect PRG
```

---

## 16. Pelurusan istilah dan kesalahan sumber (Pertemuan 1–5)

Tabel berikut merangkum pelurusan teknis atas penyederhanaan atau kekeliruan ketik (*typo*) pada slide maupun berkas kode contoh dari Pertemuan 1 hingga Pertemuan 5 agar tidak menjadi hafalan yang salah saat ujian UTS atau praktikum:

| Pernyataan/contoh pada sumber | Pelurusan untuk belajar |
| --- | --- |
| HTML disebut bahasa pemrograman | HTML merupakan bahasa markup; memberi struktur dan makna |
| URL ditulis “Universal Resource Locator” | Kepanjangannya **Uniform Resource Locator** |
| Website disamakan dengan satu halaman/nama halaman | Website dapat terdiri dari banyak halaman dan sumber daya |
| HTTP “digunakan dalam protokol HTML” | HTTP adalah protokol komunikasi; HTML format markup yang dapat dikirim |
| XAMPP disebut sebagai web server | XAMPP paket pengembangan; Apache merupakan komponen web server |
| Semua elemen harus ditutup | Elemen berpasangan ditutup; void elements tidak diberi end tag |
| `<img ...></img>` | Gunakan `<img ...>` tanpa `</img>` dan dengan alternatif teks yang sesuai |
| `< a href=...>` | Tidak ada spasi antara `<` dan nama tag: `<a href="...">` |
| Petik tipografis pada kode | Gunakan petik lurus `"` atau `'` dalam sintaks atribut |
| Huruf kecil dianggap wajib secara parser | Nama tag HTML tidak peka kapital dalam sintaks HTML; huruf kecil dianjurkan untuk konsistensi |
| Atribut/nilainya tidak boleh mempunyai spasi | Nama atribut tidak memakai spasi; nilai seperti `alt="Foto saya"` boleh |
| `<br>` dipakai untuk membuat paragraf | `<br>` membuat baris baru; `<p>` menyatakan paragraf |
| `align` sebagai cara meratakan paragraf | Untuk contoh HTML modern gunakan CSS `text-align` |
| `<marquee>` sebagai tag umum | Kenali sebagai elemen lama/deprecated; hindari penggunaan baru |
| “Wajib hanya satu H1” sebagai aturan absolut | Satu judul utama merupakan praktik yang dianjurkan, bukan larangan sintaks mutlak semua H1 ganda |
| Declaration sama dengan `{ ... }` | Declaration adalah `property: value`; `{ ... }` membentuk declaration block |
| Pola `property: "nilai"` untuk semua nilai | Petik tergantung jenis nilai; warna tidak ditulis `color: "blue"` |
| Internal CSS disebut berada pada `<div>` | Gunakan `<style>` di `<head>` pada contoh materi |
| ID selalu lebih prioritas dalam semua keadaan | Specificity ID dibandingkan setelah konteks cascade yang relevan diperhitungkan |
| Inline selalu paling tinggi | Berlaku pada perbandingan normal tertentu; declaration penting dan konteks lain perlu diperhitungkan |
| Child selector diberi label “kurung siku” untuk `>` | `>` adalah tanda lebih besar; `[]` digunakan untuk selector atribut |
| `:active` berarti tautan yang aktif umum | Berarti sedang diaktifkan, bukan semua link yang tersedia |
| Contoh `::first-line` justru menulis `a:link` | Gunakan `p::first-line` untuk baris pertama; `a:link` pseudo-class link |
| Background disebut “border properti” | Background mengatur latar; border mengatur garis tepi |
| Gradient disebut nilai background-color | Gradient merupakan image; gunakan `background-image` atau shorthand `background` |
| Block selalu berlebar 100% | Itu gambaran perilaku umum tertentu; width dan konteks layout dapat mengubahnya |
| Pixel tidak pernah berubah | Pixel CSS berbeda dari pixel fisik; zoom dapat mengubah hasil tampilan |
| Flexbox otomatis responsif | Tetap perlu ukuran, wrapping, dan pengujian konten |
| Placeholder dimasukkan sebagai validasi | Placeholder petunjuk; required/pattern/min/max mengatur batasan |
| POST dianggap pengiriman aman dengan sendirinya | POST tidak mengenkripsi; keamanan komunikasi memerlukan HTTPS |
| Validator menjamin hasil semua browser sama | Validator memeriksa markup; hasil visual dan perilaku tetap harus diuji |
| HTML latihan memuat `style.css` | Nama file pada `href` harus cocok dengan CSS yang tersedia |
| Tombol “Ikuti” dianggap sudah berfungsi | Pada sumber masih tautan placeholder `href="#"` |

| `insert into user values('','$nama',...)` pada `inputuser.php` | Pada MySQL 8 Strict Mode, mengisi kolom `AUTO_INCREMENT` dengan string kosong `''` menyebabkan error; gunakan `NULL` atau sebutkan daftar kolom secara eksplisit |
| `<style>::after table { ... }` pada `tambah.php` & `tampil.php` | Penulisan `::after` tanpa selector dan tanpa properti `content` adalah sintaks CSS yang keliru; tulis langsung `table { ... }` |
| `<button type="input">` pada `tambah.php` & `tampil.php` | Nilai `type` yang valid untuk `<button>` di HTML adalah `submit`, `button`, atau `reset` (bukan `input`) |
| `<a role="button" ...>UBAH</a> </button>` pada `tampil.php` | Elemen `<a>` ditutup dengan `</a>`; tambahan `</button>` tanpa tag pembuka `<button>` adalah *unmatched closing tag* |
| Mencampur `$koneksi = mysqli_connect(...)` dengan `$koneksi->query(...)` pada `update2.php` | Meskipun berjalan di PHP karena `mysqli_connect()` mengembalikan objek `mysqli`, sebaiknya konsisten memilih gaya *Procedural* (`mysqli_query($koneksi, ...)`) atau *OOP* (`$koneksi->query(...)`) |
| Menyimpan password secara *plain text* di tabel `user` | Dalam contoh dasar disimpan langsung untuk kemudahan belajar; pada aplikasi nyata wajib di-hash dengan `password_hash()` dan diverifikasi dengan `password_verify()` |
| Kueri SQL langsung menggabungkan variabel `'$_POST[...]'` | Mudah dipahami untuk pengenalan dasar CRUD, tetapi rentan *SQL Injection*; pada sistem produksi gunakan *Prepared Statements* (`prepare()` & `bind_param()`) |


---

## 17. Latihan soal beserta pembahasan lengkap (60 Soal Pertemuan 1–5)

Soal berikut mencakup seluruh materi dari Pertemuan 1 hingga Pertemuan 5. Gunakan untuk menguji kesiapan menghadapi kuis, praktikum, maupun ETS/UTS.

### 17.1 Konsep dasar dan navigasi

**1. Apa perbedaan internet dan WWW?**  
Internet adalah infrastruktur jaringan; WWW merupakan sistem sumber daya dan dokumen bertaut yang menggunakan infrastruktur tersebut. Email juga menggunakan internet, tetapi bukan berarti email adalah WWW.

**2. Sebuah portal berita dapat diperbarui melalui halaman admin dan menerima komentar pembaca. Termasuk jenis apa?**  
Dinamis karena konten diolah/diperbarui melalui aplikasi, sekaligus interaktif karena pembaca dapat berkontribusi. Pengelompokan dalam slide tidak harus saling meniadakan.

**3. Apa tugas HTML, CSS, JavaScript, dan PHP?**  
HTML menyusun konten, CSS menata presentasinya, JavaScript menjalankan perilaku/logic interaksi, dan PHP mengolah permintaan di server. HTML dan CSS tidak menggantikan pengolahan data server.

**4. Urutkan alur sederhana saat membuka halaman web.**  
Pengguna memilih URL; browser menemukan host bila diperlukan; browser mengirim request; server memproses dan memberi response; browser memuat sumber tambahan serta merender halaman. Database hanya terlibat jika aplikasi memerlukannya.

**5. Bedakan domain, alamat IP, dan URL.**  
Domain adalah nama host/situs, IP address adalah alamat numerik jaringan, dan URL menunjukkan sumber daya lengkap dengan bagian seperti scheme dan path. DNS membantu menghubungkan nama host dengan informasi alamat.

**6. Identifikasi scheme, host, path, query, dan fragment dari `https://kampus.ac.id/materi?minggu=3#css`.**  
Scheme `https`, host `kampus.ac.id`, path `/materi`, query `minggu=3`, dan fragment `css`. Fragment mengacu pada bagian sumber daya, bukan parameter query yang dikirim ke server.

**7. Apa perbedaan 404 dan 500?**  
404 menyatakan sumber daya tidak ditemukan; 500 menyatakan masalah internal server saat memproses permintaan. Keduanya respons server, tetapi masalahnya berbeda.

**8. Pengguna harus mengisi data, meninjau, lalu mengirim. Model navigasi apa yang sesuai?**  
Linear, karena proses mempunyai urutan tahap. Jika halaman ini dibuka dari menu kategori bertingkat, struktur keseluruhan bisa merupakan campuran.

**9. Apa pembeda hierarki dan non-linear pada slide?**  
Hierarki mempunyai hubungan induk dan tingkat subhalaman; non-linear menyediakan hubungan antarhalaman yang digambarkan setara tanpa urutan tunggal.

### 17.2 HTML

**10. Jelaskan perbedaan `<head>`, `<header>`, dan `<body>`.**  
Head menyimpan metadata; body memuat konten dokumen; header adalah bagian pengantar semantik di dalam konten. Nama yang mirip tidak membuat fungsinya sama.

**11. Mana yang tampil sebagai judul tab: `<title>` atau `<h1>`?**  
Title merupakan judul dokumen yang umumnya tampil di tab; H1 adalah heading tingkat pertama pada isi halaman.

**12. Pada `<a class="tautan" href="kontak.html">Kontak</a>`, identifikasi tag, atribut, dan elemen.**  
Tag pembuka adalah `<a ...>`, tag penutup `</a>`, atributnya class dan href, kontennya “Kontak”, dan seluruh markup tersebut membentuk elemen anchor.

**13. Perbaiki `<img src="foto.jpg"></img>`.**  
Gunakan `<img src="foto.jpg" alt="Foto profil">`. Img merupakan void element sehingga tidak diberi end tag. Alternatif teks perlu disesuaikan informasi gambar sebenarnya.

**14. Apa beda `<p>`, `<br>`, dan `<pre>`?**  
P menyatakan paragraf, br membuat baris baru, dan pre mempertahankan format whitespace. Ketiganya tidak saling menggantikan untuk semua kebutuhan teks.

**15. Apakah `class="kartu aktif"` salah karena ada spasi?**  
Tidak. Nilainya menyatakan dua class: kartu dan aktif. Spasi di dalam nilai tidak sama dengan spasi pada nama atribut.

**16. Mengapa ID tidak digunakan berulang pada beberapa elemen?**  
ID merupakan identitas unik dalam dokumen. Class dirancang untuk kelompok yang dapat dipakai berulang. ID yang berulang membuat target navigasi dan pemilihan elemen tidak jelas.

**17. Apa kelebihan `<nav>` dibanding `<div class="nav">`?**  
Nav menyatakan makna bagian navigasi bagi pemroses dokumen. Class pada div hanya memberi nama buatan penulis; tampilannya dapat sama, tetapi maknanya berbeda.

**18. Apa beda `name`, `id`, `required`, dan `placeholder` pada input?**  
Name menjadi nama data yang dikirim; id mengidentifikasi elemen dan dapat dihubungkan label; required menetapkan kewajiban masukan; placeholder hanya petunjuk sementara.

**19. Apakah `required="false"` membuat input opsional?**  
Tidak. Required merupakan atribut boolean; keberadaannya mengaktifkan batasan itu. Hilangkan required untuk membuat input tidak diwajibkan.

**20. Mengapa validasi HTML5 belum cukup untuk server?**  
Client dapat dimodifikasi atau dilewati. Server harus memeriksa masukan sebelum menggunakannya. Pemeriksaan format browser membantu pengalaman pengguna, bukan menjadi batas kepercayaan server.

### 17.3 CSS, warna, dan layout

**21. Identifikasi selector, property, value, dan declaration dari `.judul { color: navy; }`.**  
Selector `.judul`, property color, value navy, declaration `color: navy`, dan keseluruhannya adalah aturan/ruleset.

**22. Mana yang cocok untuk beberapa halaman dengan desain sama: inline, internal, atau external?**  
External biasanya memudahkan penggunaan aturan yang sama melalui satu file. Keunggulannya pemeliharaan terpusat; path file harus benar.

**23. Apakah internal CSS selalu mengalahkan external CSS?**  
Tidak. Untuk aturan dengan konteks cascade dan specificity setara, declaration yang muncul kemudian menang. Lokasi internal/external bukan ranking tersendiri.

**24. Apa beda `p`, `.p`, dan `#p` sebagai selector?**  
`p` memilih tag paragraf, `.p` memilih class bernama p, dan `#p` memilih ID bernama p. Simbol menentukan cara pemilihan.

**25. Apa beda `.area p` dan `.area > p`?**  
Yang pertama memilih semua paragraf keturunan area; yang kedua hanya anak langsung. Paragraf di dalam section yang berada di area hanya cocok dengan selector pertama.

**26. Apa beda `h2 + p` dan `h2 ~ p`?**  
`+` memilih paragraf sibling yang tepat mengikuti heading; `~` memilih semua paragraf sibling yang mengikuti heading, termasuk yang dipisahkan elemen lain.

**27. Apa beda `:hover` dan `::first-letter`?**  
Hover adalah pseudo-class keadaan elemen, sedangkan first-letter adalah pseudo-element yang memilih bagian teks tertentu.

**28. Tentukan warna teks contoh berikut.**

```html
<p id="info" class="pesan">Belajar CSS</p>
```

```css
p { color: blue; }
.pesan { color: green; }
#info { color: red; }
```

**Pembahasan:** merah, karena selector ID paling spesifik pada perbandingan normal ini. Jika konteks importance atau origin berbeda, analisis cascade perlu dilakukan lebih dahulu.

**29. Tentukan warna dan background contoh berikut.**

```html
<p class="paragraf bg-yellow">Contoh</p>
```

```css
.paragraf { color: red; }
.bg-yellow { background-color: yellow; }
```

**Pembahasan:** teks merah, latar kuning. Kedua declaration mengatur property berbeda sehingga tidak saling mengalahkan.

**30. Apa persamaan `red`, `rgb(255, 0, 0)`, `#ff0000`, dan `hsl(0, 100%, 50%)`?**  
Keempatnya menyatakan merah yang sama dalam format berbeda. `rgba(255, 0, 0, 0.5)` menambahkan transparansi sehingga hasil compositing dapat berbeda.

**31. Apa bedanya color, background-color, dan border-color?**  
Color menata teks, background-color menata latar elemen, dan border-color menata warna garis tepi. Border juga memerlukan style serta width agar tampak.

**32. Bolehkah menulis `color: "blue"` dan `background-color: linear-gradient(red, blue)`?**  
Kedua declaration tidak sesuai jenis nilai property tersebut. Gunakan `color: blue` serta `background-image: linear-gradient(red, blue)` atau shorthand background.

**33. Jika ukuran font root 16px dan parent 20px, berapa hasil `1.5rem` dan `1.5em` pada font-size anak?**  
1.5rem menghasilkan 24px karena mengacu root; 1.5em menghasilkan 30px karena font-size mengacu ukuran parent.

**34. Apa hasil `padding: 10px 20px 30px 40px`?**  
Atas 10px, kanan 20px, bawah 30px, kiri 40px. Urutan empat nilai bergerak searah jarum jam dari atas.

**35. Hitung lebar border box untuk width 200px, padding 20px, dan border 2px pada content-box.**  
Lebarnya 200 + 20 + 20 + 2 + 2 = **244px**. Margin tidak masuk border box. Dengan border-box dan width sama, border box tetap 200px.

**36. Apa beda margin dan padding?**  
Margin berada di luar border, padding di antara content dan border. Background elemen umumnya mewarnai area padding, bukan margin.

**37. Pada flex-direction column, apa arah main axis?**  
Vertikal. Justify-content mengatur distribusi pada main axis tersebut; align-items mengatur cross axis.

**38. Mengapa foto memakai left 50% sekaligus translateX -50%?**  
Left 50% menempatkan sisi kiri foto pada tengah acuan; translateX -50% menggeser foto setengah lebarnya sendiri sehingga pusat foto sejajar dengan tengah acuan.

**39. Apa beda background-size cover dan contain?**  
Cover memenuhi area dengan kemungkinan memotong gambar; contain mempertahankan seluruh gambar terlihat dengan kemungkinan menyisakan ruang. Keduanya menjaga proporsi.

**40. Kartu profil tidak mendapat CSS saat dibuka langsung. Apa pemeriksaan pertama?**  
Bandingkan href pada link dengan nama file CSS. Pada sumber, href masih style.css sedangkan file bernama Latihan_gemini-code_CSS.css. Setelah sesuai, periksa request file dan selector melalui DevTools.



### 17.4 Fundamental Backend PHP (Pertemuan 4)

**41. Apa perbedaan utama website statis dan website dinamis berdasarkan arsitektur servernya?**  
Website statis mengirimkan file HTML/CSS langsung dari penyimpanan server ke browser apa adanya, sedangkan website dinamis memproses logika di server (melalui PHP Interpreter dan database MySQL) untuk membentuk markup HTML secara dinamis saat *runtime* sesuai permintaan pengguna.

**42. Mengapa kode PHP tidak terlihat ketika pengguna memilih menu *View Page Source* di browser?**  
Karena PHP adalah bahasa *server-side*. Kode PHP dieksekusi sepenuhnya oleh PHP Interpreter di server, dan hanya hasil keluarannya (berupa HTML murni) yang dikirimkan di dalam HTTP Response ke browser.

**43. Apa yang dimaksud bahwa PHP adalah *Weakly Typed Language*?**  
Kita tidak perlu mendeklarasikan tipe data secara eksplisit saat membuat variabel. PHP otomatis menentukan tipe data variabel (`string`, `int`, `float`, `bool`) berdasarkan nilai yang diberikan kepadanya.

**44. Apakah variabel `$Nama` dan `$nama` dianggap sama di PHP? Bagaimana dengan `echo` dan `ECHO`?**  
Nama variabel di PHP bersifat *case-sensitive*, sehingga `$Nama` dan `$nama` adalah dua variabel yang berbeda. Sebaliknya, fungsi bawaan dan keyword seperti `echo` dan `ECHO` bersifat *case-insensitive*.

**45. Apa perbedaan hasil dari `echo "Halo $nama";` dan `echo 'Halo $nama';` jika `$nama = "Budi";`?**  
Kutip dua (`"`) melakukan *string interpolation* sehingga mencetak `Halo Budi`. Kutip satu (`'`) memperlakukan teks sebagai literal murni sehingga mencetak `Halo $nama` apa adanya.

**46. Bagaimana cara menggabungkan dua buah string atau variabel di dalam PHP?**  
Menggunakan operator titik (`.`), misalnya `"Mahasiswa NIM: " . $nim . " memiliki IPK: " . $ipk`. (Bukan menggunakan tanda `+` seperti pada JavaScript/Java).

**47. Jelaskan perbedaan Array Terindeks dan Array Asosiatif beserta contoh cara mengakses nilainya!**  
Array terindeks menggunakan nomor indeks otomatis mulai dari 0 (contoh: `$matkul[0]`), sedangkan array asosiatif menggunakan kunci (*key*) berupa string bernama yang dipetakan dengan `=>` (contoh: `$mhs['nama']`).

**48. Kapan kita harus menggunakan `$_GET` dan kapan harus menggunakan `$_POST`?**  
Gunakan `$_GET` untuk mengambil data atau navigasi yang parameternya boleh terlihat di URL (seperti filter pencarian, pagination, atau tautan `ubah.php?id=5`). Gunakan `$_POST` untuk mengirim data sensitif (seperti password login) atau aksi yang mengubah/menyimpan data di database (Create/Update) karena datanya dikirim di dalam HTTP Request Body.

**49. Tuliskan perulangan `foreach` untuk mencetak seluruh isi array `$buah = ["Apel", "Jeruk", "Mangga"];`!**  
```php
foreach ($buah as $b) {
    echo $b . "<br>";
}
```

**50. Jika nilai `$skor = 75`, apa hasil dari `if ($skor >= 85) { echo "A"; } elseif ($skor >= 70) { echo "B"; } else { echo "C"; }`?**  
Hasilnya adalah `B`, karena kondisi pertama (`$skor >= 85`) bernilai salah, lalu kondisi kedua (`$skor >= 70`) bernilai benar.

### 17.5 Operasi CRUD PHP & MySQL serta Keamanan Web (Pertemuan 5)

**51. Sebutkan kepanjangan CRUD dan petakan masing-masing ke perintah SQL serta metode HTTP-nya!**  
- **Create:** `INSERT INTO` (HTTP `POST`)  
- **Read:** `SELECT` (HTTP `GET`)  
- **Update:** `UPDATE ... SET` (HTTP `POST` / `PUT`)  
- **Delete:** `DELETE FROM` (HTTP `GET` / `DELETE`)

**52. Mengapa kode koneksi database sebaiknya dipisah ke dalam file `koneksi.php` tersendiri?**  
Agar kode koneksi tidak ditulis berulang-ulang di setiap file (`index.php`, `tambah.php`, `ubah.php`, `hapus.php`). Jika nama database atau password berubah, kita cukup mengubah satu file `koneksi.php` saja.

**53. Apa fungsi `mysqli_fetch_array($data)` atau `$result->fetch_assoc()` di dalam perulangan `while` pada fitur Read?**  
Untuk mengambil baris demi baris dari hasil query `SELECT` MySQL dan mengubahnya menjadi array PHP (seperti `$d['nama']`, `$d['nominal']`) hingga seluruh baris habis dibaca.

**54. Mengapa pada MySQL 8 query `INSERT INTO tabel VALUES('', '$nama')` gagal dijalankan jika kolom pertama adalah `INT AUTO_INCREMENT`?**  
Karena MySQL 8 menerapkan *Strict Mode* yang menolak string kosong `''` dimasukkan ke dalam kolom bertipe integer. Solusinya adalah mengganti `''` menjadi `NULL` (`VALUES(NULL, '$nama')`) atau menyebutkan nama kolom yang diisi secara eksplisit.

**55. Mengapa pada formulir Edit (`ubah.php`) kita wajib menyertakan `<input type="hidden" name="id" value="...">`?**  
Karena pengguna tidak mengedit kolom Primary Key (`id`), tetapi file pemroses (`update.php`) tetap membutuhkan nilai `id` tersebut pada klausa `WHERE id='$id'` agar tahu baris mana yang harus diperbarui.

**56. Apa akibatnya jika kita menjalankan query `UPDATE catatan_keuangan SET nominal=50000` atau `DELETE FROM catatan_keuangan` tanpa klausa `WHERE`?**  
Seluruh baris data yang ada di dalam tabel `catatan_keuangan` akan berubah nominalnya menjadi 50000 atau terhapus semuanya!

**57. Bagaimana cara kerja serangan *SQL Injection* dan bagaimana *Prepared Statements* mencegahnya?**  
SQL Injection terjadi ketika input pengguna digabungkan langsung ke string SQL sehingga karakter seperti `'` dapat membelokkan logika query. *Prepared Statements* (`prepare()` dan `bind_param()`) mencegahnya dengan memisahkan kompilasi struktur perintah SQL (`?`) dari pengiriman data input, sehingga input pengguna selalu diperlakukan murni sebagai teks/data biasa.

**58. Apa fungsi `htmlspecialchars()` saat menampilkan data ke halaman HTML?**  
Untuk mencegah serangan *Cross-Site Scripting (XSS)* dengan cara mengubah karakter khusus HTML (seperti `<`, `>`, `"`, `'`, `&`) menjadi entitas aman (`&lt;`, `&gt;`, dll.) sehingga skrip berbahaya tidak dieksekusi oleh browser.

**59. Apa yang dimaksud dengan pola *Post-Redirect-Get (PRG)* menggunakan `header("location:index.php")`?**  
Teknik mengalihkan browser kembali ke halaman daftar (`GET index.php`) segera setelah memproses pengiriman form (`POST`). Tujuannya agar jika pengguna menekan tombol *Refresh* di browser, form tidak terkirim dua kali (*duplicate submission*).

**60. Bagaimana cara menampilkan kotak dialog konfirmasi di browser sebelum tautan Hapus benar-benar dijalankan?**  
Dengan menambahkan atribut event JavaScript pada elemen anchor: `onclick="return confirm('Yakin ingin menghapus data ini?')"`. Jika pengguna menekan *Cancel*, fungsi mengembalikan `false` dan pembukaan tautan `hapus.php` dibatalkan.


---

## 18. Ringkasan cepat, cheat-sheet sintaks, dan checklist belajar

### 18.1 Ringkasan konsep (Pertemuan 1–5)

| Topik | Inti yang perlu diingat |
| --- | --- |
| Internet vs WWW | Infrastruktur jaringan vs layanan/sistem web |
| Website | Kumpulan halaman dan sumber daya terkait |
| Statis/dinamis/interaktif | Cara konten disajikan/diubah dan cara pengguna berinteraksi |
| Client–server | Client meminta; server memberi response |
| HTML/CSS/JS/PHP | Struktur, tampilan, perilaku, pengolahan server |
| URL | Scheme, host, port, path, query, fragment |
| Navigasi | Linear, hierarki, non-linear, campuran |
| Dokumen HTML | Doctype, html, head, title, body |
| Tag/elemen/atribut | Penanda, komponen dokumen, informasi tambahan |
| Paragraf | p berbeda dari br, hr, pre, dan div |
| Heading | h1–h6 adalah tingkat struktur |
| Semantik | Elemen menyatakan peran konten |
| Form | Action/method mengatur pengiriman; name untuk data, id untuk identifikasi |
| CSS | Selector dengan declaration property:value |
| Penerapan CSS | Inline, internal, external |
| Selector | Elemen, class, ID, atribut, universal, group, pseudo |
| Combinator | Spasi, `>`, `+`, `~` |
| Prioritas | Konteks cascade, specificity, kemudian urutan untuk keadaan setara |
| Warna | Nama, RGB, RGBA, hex, HSL |
| Typography | Font, alignment, decoration, transform, shadow, spacing |
| Box model | Content → padding → border → margin |
| Layout | Display/Flexbox; main axis dan cross axis |
| Background | Warna/gambar, repeat, position, size, gradient |
| DevTools | Periksa DOM, rule, nilai akhir, serta pemuatan sumber |
| Statis vs Dinamis | Statis menyajikan file tetap; dinamis membentuk HTML saat *runtime* via PHP & MySQL |
| Siklus PHP | Browser Request → Web Server → PHP Interpreter (↔ MySQL) → Render HTML Bersih |
| Sintaks & Variabel PHP | Diawali `$`, *weakly typed*, variabel *case-sensitive*, penggabungan string dengan titik (`.`) |
| Array PHP | Terindeks memakai angka (`0, 1, ...`); Asosiatif memakai kunci string (`"nama" => "Rian"`) |
| `$_GET` vs `$_POST` | `$_GET` via URL Query String (navigasi/ID); `$_POST` via HTTP Body (login/mutasi data) |
| Pemetaan CRUD | Create (`INSERT`/POST), Read (`SELECT`/GET), Update (`UPDATE`/POST), Delete (`DELETE`/GET) |
| Koneksi Database | Dipisah di `koneksi.php` (`mysqli_connect()`, `new mysqli()`, atau `new PDO()`) |
| Fitur Update (2 Tahap) | Tahap 1: `SELECT WHERE id=...` via GET + `<input type="hidden">`; Tahap 2: `UPDATE WHERE id=...` via POST |
| Keamanan & Standar CRUD | *Prepared Statements* (Anti-SQLi), `htmlspecialchars()` (Anti-XSS), & `header("location:...")` (PRG) |


### 18.2 Cheat-Sheet Sintaks Penting (HTML, CSS, PHP, & SQL)

```text
=== HTML & CSS (Pertemuan 1 - 3) ===
HTML element:       <p class="isi">Konten</p>
CSS rule:           .isi { color: navy; }
CSS inline:         style="color: navy;"
CSS internal:       <style>...</style>
CSS external:       <link rel="stylesheet" href="style.css">
Class / ID / Attr:  .nama   |   #nama   |   input[type="text"]
Combinator:         .kartu p (descendant) | .kartu > p (child) | h2 + p (next) | h2 ~ p (sibling)
Pseudo:             a:hover (pseudo-class) | p::first-letter (pseudo-element)
Custom property:    --warna: #0f766e; kemudian var(--warna)
Gradient:           background: linear-gradient(135deg, #022c22 0%, #0f766e 100%);

=== PHP DASAR (Pertemuan 4) ===
Tag & Variabel:     <?php $nama = "Adika"; $ipk = 3.85; ?>
Concatenation:      echo "Halo " . $nama . " (IPK: " . $ipk . ")";
Indexed Array:      $matkul = ["Web", "PBO"]; echo $matkul[0];
Associative Array:  $mhs = ["nim" => "152025013", "nama" => "Adika"]; echo $mhs['nama'];
Foreach Loop:       foreach ($mhs as $key => $val) { echo "$key: $val"; }
Superglobals:       $id = $_GET['id'];   |   $nama = $_POST['nama'];

=== PHP & MYSQL CRUD (Pertemuan 5) ===
Koneksi MySQLi:     $koneksi = mysqli_connect("localhost", "root", "", "casestudy");
READ (Select):      $data = mysqli_query($koneksi, "SELECT * FROM tabel");
                    while ($d = mysqli_fetch_array($data)) { echo $d['kolom']; }
CREATE (Insert):    mysqli_query($koneksi, "INSERT INTO tabel VALUES(NULL, '$v1', '$v2')");
UPDATE (Ubah):      mysqli_query($koneksi, "UPDATE tabel SET kolom='$v1' WHERE id='$id'");
DELETE (Hapus):     mysqli_query($koneksi, "DELETE FROM tabel WHERE id='$id'");
Redirect (PRG):     header("location:index.php");
Format Rupiah:      number_format($d['nominal'], 0, ',', '.');
Prepared Stmt:      $stmt = $koneksi->prepare("INSERT INTO mhs (nim, nama) VALUES (?, ?)");
                    $stmt->bind_param("ss", $nim, $nama); $stmt->execute();
Anti-XSS:           echo htmlspecialchars($d['keterangan'], ENT_QUOTES, 'UTF-8');
```

### 18.3 Checklist pemahaman (Pertemuan 1–5)

- [ ] Saya dapat membedakan internet, WWW, website statis/dinamis/interaktif, dan aplikasi web.
- [ ] Saya dapat menjelaskan siklus request/response HTTP dan peran client–server.
- [ ] Saya dapat membaca bagian-bagian URL (scheme, host, port, path, query, fragment) serta fungsi DNS.
- [ ] Saya dapat mengenali dan menggambar empat model struktur navigasi (linear, hierarki, non-linear, campuran).
- [ ] Saya dapat menulis kerangka dasar HTML5, elemen semantik, tabel, dan formulir tanpa menyalin contoh.
- [ ] Saya dapat membedakan selector dasar CSS, combinator (` `, `>`, `+`, `~`), dan menyelesaikan konflik specificity.
- [ ] Saya dapat menghitung ukuran elemen pada Box Model (`content-box` vs `border-box`) dan menata layout dengan Flexbox.
- [ ] Saya dapat menjelaskan alur eksekusi file `.php` dari browser hingga kembali menjadi HTML murni.
- [ ] Saya dapat menulis variabel, penggabungan string (`.`), `if-elseif-else`, `foreach`, serta membedakan array terindeks dan asosiatif di PHP.
- [ ] Saya memahami kapan harus menggunakan `$_GET` (URL parameter) dan kapan menggunakan `$_POST` (HTTP body).
- [ ] Saya dapat merancang tabel MySQL dan membuat file `koneksi.php` yang terhubung ke database.
- [ ] Saya dapat membuat 4 fitur CRUD lengkap (`index.php`, `tambah.php`, `proses_tambah.php`, `ubah.php`, `update.php`, `hapus.php`) tanpa melihat contekan.
- [ ] Saya memahami fungsi `<input type="hidden" name="id">` pada form edit dan bahaya melupakan klausa `WHERE` pada SQL `UPDATE`/`DELETE`.
- [ ] Saya dapat menjelaskan cara mencegah SQL Injection (*Prepared Statements*), XSS (`htmlspecialchars`), dan duplikasi submit form (*Post-Redirect-Get*).

---

## 19. Lampiran kode latihan dan praktikum lengkap

Lampiran ini memuat seluruh *source code* penting dari Pertemuan 3 hingga Pertemuan 5 untuk dipelajari dan dipraktikkan langsung.

### 19.1 Latihan_gemini-code_HTML.html

```html
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kartu Profil Digital - Praktikum CSS</title>
    <!-- Menghubungkan File CSS Eksternal -->
    <link rel="stylesheet" href="style.css">
    <!-- Google Fonts untuk Tipografi -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
</head>
<body>

    <!-- Container Utama Card Profil -->
    <div class="profile-card">
        
        <!-- Header & Foto Profil -->
        <div class="card-header">
            <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=400&auto=format&fit=crop&q=80" alt="Foto Profil" class="profile-img">
        </div>

        <!-- Informasi Utama -->
        <div class="card-body">
            <h1 class="name">Budi Santoso</h1>
            <p class="title">Junior Web Developer</p>
            <p class="bio">
                Antusias dalam pengembangan antarmuka web modern, UI/UX design, dan mempelajari teknologi web terbaru.
            </p>

            <!-- Statistik Singkat -->
            <div class="stats-container">
                <div class="stat-item">
                    <span class="stat-number">12</span>
                    <span class="stat-label">Proyek</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">1.2k</span>
                    <span class="stat-label">Pengikut</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">4.8</span>
                    <span class="stat-label">Rating</span>
                </div>
            </div>

            <!-- Tautan Media Sosial / Aksi -->
            <div class="social-links">
                <a href="#" class="btn btn-primary">Ikuti</a>
                <a href="#" class="btn btn-outline">Kirim Pesan</a>
            </div>
        </div>

    </div>

</body>
</html>
```

### 19.2 Latihan_gemini-code_CSS.css

```css
/* ===================================================
   1. RESET & VARIABLE CSS
   =================================================== */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

:root {
    --primary-color: #4f46e5;      /* Indigo */
    --primary-hover: #4338ca;
    --text-main: #1f2937;          /* Dark Gray */
    --text-muted: #6b7280;         /* Muted Gray */
    --bg-body: #f3f4f6;            /* Light Gray */
    --bg-card: #ffffff;
    --shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 8px 10px -6px rgba(0, 0, 0, 0.1);
    --border-radius: 16px;
}

/* ===================================================
   2. BODY & LAYOUT UTAMA (Flexbox Centering)
   =================================================== */
body {
    font-family: 'Poppins', sans-serif;
    background-color: var(--bg-body);
    color: var(--text-main);
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    padding: 20px;
}

/* ===================================================
   3. KARTU PROFIL (Box Model & Elevation)
   =================================================== */
.profile-card {
    background-color: var(--bg-card);
    width: 100%;
    max-width: 380px;
    border-radius: var(--border-radius);
    box-shadow: var(--shadow);
    overflow: hidden;
    text-align: center;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

/* Efek Hover pada Kartu Utama */
.profile-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 20px 30px -10px rgba(0, 0, 0, 0.15);
}

/* ===================================================
   4. HEADER & AVATAR
   =================================================== */
.card-header {
    background: linear-gradient(135deg, #6366f1 0%, #a855f7 100%);
    height: 120px;
    position: relative;
    margin-bottom: 60px; /* Ruang untuk setengah foto yang menimpa */
}

.profile-img {
    width: 110px;
    height: 110px;
    border-radius: 50%;
    object-fit: cover;
    border: 4px solid var(--bg-card);
    position: absolute;
    bottom: -55px;
    left: 50%;
    transform: translateX(-50%);
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
}

/* ===================================================
   5. BONTANG / ISI KARTU & TIPOGRAFI
   =================================================== */
.card-body {
    padding: 0 24px 32px 24px;
}

.name {
    font-size: 1.35rem;
    font-weight: 700;
    color: var(--text-main);
    margin-bottom: 4px;
}

.title {
    font-size: 0.875rem;
    font-weight: 600;
    color: var(--primary-color);
    margin-bottom: 12px;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.bio {
    font-size: 0.9rem;
    color: var(--text-muted);
    line-height: 1.5;
    margin-bottom: 24px;
}

/* ===================================================
   6. STATISTIK (Flexbox Distribution)
   =================================================== */
.stats-container {
    display: flex;
    justify-content: space-around;
    padding: 16px 0;
    margin-bottom: 24px;
    border-top: 1px solid #e5e7eb;
    border-bottom: 1px solid #e5e7eb;
}

.stat-item {
    display: flex;
    flex-direction: column;
}

.stat-number {
    font-size: 1.1rem;
    font-weight: 700;
    color: var(--text-main);
}

.stat-label {
    font-size: 0.75rem;
    color: var(--text-muted);
}

/* ===================================================
   7. TOMBOL & INTERAKSI (HOVER)
   =================================================== */
.social-links {
    display: flex;
    gap: 12px;
}

.btn {
    flex: 1;
    padding: 10px 16px;
    border-radius: 8px;
    font-size: 0.875rem;
    font-weight: 600;
    text-decoration: none;
    transition: all 0.2s ease;
    cursor: pointer;
}

.btn-primary {
    background-color: var(--primary-color);
    color: #ffffff;
    border: none;
}

.btn-primary:hover {
    background-color: var(--primary-hover);
    transform: translateY(-2px);
}

.btn-outline {
    background-color: transparent;
    color: var(--text-main);
    border: 1.5px solid #d1d5db;
}

.btn-outline:hover {
    border-color: var(--primary-color);
    color: var(--primary-color);
    background-color: #f5f3ff;
    transform: translateY(-2px);
}
```


### 19.3 Kode Contoh CRUD Dosen di Elearning (Studi Kasus Tabel `user`)

Berikut adalah kode asli contoh CRUD dari LMS Elearning ITENAS (dengan catatan perbaikan telah dibahas pada Bab 16):

#### `koneksi.php` (Versi Dosen)
```php
<?php 
$koneksi = mysqli_connect("localhost","root","","casestudy");
 
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
?>
```

#### `tampil.php` (Versi Dosen)
```php
<!DOCTYPE html>
<head>
	<title>tampil data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <form method="POST" action="tambah.php">
        <hr>
        <button type="submit" class="btn btn-outline-primary">Tambah</button>
        <hr>
    </form>
	<table class="table table-striped">
		<tr>
			<th>No</th>
            <th>Nama lengkap</th>
			<th>Username</th>
			<th>Password</th>
			<th>Level</th>
			<th>Aksi</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from user");
		while($d = mysqli_fetch_array($data)){
		?>
			<tr>
				<td><?php echo $no++; ?></td>
                <td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['username']; ?></td>
				<td><?php echo $d['password']; ?></td>
				<td><?php echo $d['level']; ?></td>
				<td>
					<a role="button" class="btn btn-info" href="ubah.php?id=<?php echo $d['iduser']; ?>">UBAH</a>
					<a role="button" class="btn btn-danger" href="hapus.php?id=<?php echo $d['iduser']; ?>">HAPUS</a>
				</td>
			</tr>
		<?php 
		}
		?>
	</table>
</body>
</html>
```

#### `inputuser.php`, `update2.php`, & `hapus.php` (Versi Dosen)
```php
<?php 
// === inputuser.php ===
include 'koneksi.php';
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];
mysqli_query($koneksi,"insert into user values(NULL,'$nama','$username','$password', '$level')");
header("location:tampil.php");
?>

<?php
// === update2.php ===
include('koneksi.php');
$iduser   = $_POST['iduser'];
$nama     = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$level    = $_POST['level'];
$query = "UPDATE user SET nama = '$nama', username = '$username', password = '$password', level = '$level' WHERE iduser = '$iduser'";
if($koneksi->query($query)) {
    header("location: tampil.php");
} else {
    echo "Data Gagal Diupdate!";
}
?>

<?php 
// === hapus.php ===
include 'koneksi.php';
$id = $_GET['id'];
mysqli_query($koneksi,"delete from user where iduser='$id'");
header("location:tampil.php");
?>
```

---

### 19.4 Kode Lengkap Tugas 5 — Aplikasi CRUD 1 Tabel Catatan Keuangan

Berikut adalah *source code* lengkap aplikasi CRUD 1 Tabel (**Catatan Keuangan**) yang bersih, kompatibel penuh dengan PHP 8 & MySQL 8, serta menggunakan *base design* gradien elegan:

#### 1. `keuangan.sql`
```sql
CREATE DATABASE IF NOT EXISTS `keuangan` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `keuangan`;

CREATE TABLE IF NOT EXISTS `catatan_keuangan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal` date NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `nominal` int(11) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `catatan_keuangan` (`id`, `tanggal`, `jenis`, `kategori`, `nominal`, `keterangan`) VALUES
(1, '2026-10-01', 'Pemasukan', 'Uang Saku Bulanan', 2500000, 'Kiriman uang saku awal bulan dari orang tua'),
(2, '2026-10-03', 'Pengeluaran', 'Kebutuhan Kuliah', 150000, 'Beli modul cetak & buku catatan praktikum'),
(3, '2026-10-06', 'Pengeluaran', 'Makanan & Minuman', 75000, 'Makan siang di kantin kampus'),
(4, '2026-10-10', 'Pemasukan', 'Project Web Freelance', 1200000, 'Pembayaran DP pembuatan landing page klien'),
(5, '2026-10-14', 'Pengeluaran', 'Transportasi', 50000, 'Isi saldo e-money / bensin motor'),
(6, '2026-10-18', 'Pengeluaran', 'Internet & Pulsa', 100000, 'Beli kuota paket data bulanan');
```

#### 2. `koneksi.php`
```php
<?php 

$koneksi = mysqli_connect("localhost", "root", "", "keuangan");

if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}

?>
```

#### 3. `index.php` (Read / Tampil Data)
```php
<!DOCTYPE html>
<html>
<head>
    <title>Aplikasi Catatan Keuangan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background: linear-gradient(135deg, #022c22 0%, #0f766e 50%, #134e4a 100%); background-attachment: fixed; min-height: 100vh; font-family: system-ui, sans-serif; color: #1e293b; padding: 40px 15px; display: flex; justify-content: center; align-items: flex-start; }
        .main-container { width: 100%; max-width: 1060px; }
        .card-app { background: #ffffff; border-radius: 16px; box-shadow: 0 20px 40px -10px rgba(0, 0, 0, 0.35); overflow: hidden; border: none; }
        .app-header { background: linear-gradient(135deg, #064e3b 0%, #0f766e 100%); color: #ffffff; padding: 22px 28px; display: flex; justify-content: space-between; align-items: center; }
        .btn-add { background: #ffffff; color: #064e3b; font-weight: 600; border-radius: 8px; padding: 8px 18px; border: none; text-decoration: none; box-shadow: 0 4px 10px rgba(0,0,0,0.08); }
        .btn-add:hover { background: #f0fdf4; color: #022c22; }
        .table-custom thead { background: #f8fafc; color: #475569; font-size: 13px; text-transform: uppercase; letter-spacing: 0.5px; border-bottom: 2px solid #e2e8f0; }
        .table-custom th, .table-custom td { padding: 13px 16px; font-size: 14px; vertical-align: middle; border-color: #f1f5f9; }
        .badge-masuk { background-color: #d1fae5; color: #065f46; font-weight: 600; padding: 5px 14px; border-radius: 20px; font-size: 12px; }
        .badge-keluar { background-color: #ffe4e6; color: #9f1239; font-weight: 600; padding: 5px 14px; border-radius: 20px; font-size: 12px; }
        .btn-action-edit { background: linear-gradient(135deg, #334155 0%, #475569 100%); color: #fff; border-radius: 6px; padding: 6px 14px; font-size: 13px; font-weight: 500; text-decoration: none; display: inline-block; white-space: nowrap; }
        .btn-action-edit:hover { color: #fff; opacity: 0.9; }
        .btn-action-delete { background: linear-gradient(135deg, #e11d48 0%, #be123c 100%); color: #fff; border-radius: 6px; padding: 6px 14px; font-size: 13px; font-weight: 500; text-decoration: none; display: inline-block; white-space: nowrap; }
        .btn-action-delete:hover { color: #fff; opacity: 0.9; }
    </style>
</head>
<body>
    <div class="main-container">
        <div class="card-app">
            <div class="app-header">
                <div>
                    <h3 class="fw-bold mb-1 fs-4">Aplikasi Catatan Keuangan</h3>
                    <p class="mb-0 opacity-75 small">Tugas CRUD 1 Tabel - IFB-211 Pemrograman Web</p>
                </div>
                <a href="tambah.php" class="btn-add">+ Tambah Transaksi</a>
            </div>
            <div class="table-responsive">
                <table class="table table-custom table-hover mb-0">
                    <thead class="text-center">
                        <tr>
                            <th style="width: 55px;">No</th>
                            <th style="width: 120px;">Tanggal</th>
                            <th style="width: 130px;">Jenis</th>
                            <th>Kategori</th>
                            <th style="width: 150px; text-align: right;">Nominal</th>
                            <th>Keterangan</th>
                            <th style="width: 180px; min-width: 170px; white-space: nowrap;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        include 'koneksi.php';
                        $no = 1;
                        $data = mysqli_query($koneksi, "select * from catatan_keuangan");
                        while($d = mysqli_fetch_array($data)){
                        ?>
                        <tr>
                            <td class="text-center text-muted"><?php echo $no++; ?></td>
                            <td class="text-center"><?php echo $d['tanggal']; ?></td>
                            <td class="text-center">
                                <?php if($d['jenis'] == 'Pemasukan') { ?>
                                    <span class="badge-masuk">Pemasukan</span>
                                <?php } else { ?>
                                    <span class="badge-keluar">Pengeluaran</span>
                                <?php } ?>
                            </td>
                            <td class="fw-semibold text-secondary"><?php echo $d['kategori']; ?></td>
                            <td class="fw-bold text-end">Rp <?php echo number_format($d['nominal'], 0, ',', '.'); ?></td>
                            <td class="text-muted"><?php echo $d['keterangan']; ?></td>
                            <td class="text-center" style="white-space: nowrap;">
                                <div class="d-inline-flex gap-2">
                                    <a href="ubah.php?id=<?php echo $d['id']; ?>" class="btn-action-edit">Ubah</a>
                                    <a href="hapus.php?id=<?php echo $d['id']; ?>" class="btn-action-delete" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                                </div>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
```

#### 4. `tambah.php` (Form Create Data)
```php
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Catatan Keuangan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background: linear-gradient(135deg, #022c22 0%, #0f766e 50%, #134e4a 100%); background-attachment: fixed; min-height: 100vh; font-family: system-ui, sans-serif; color: #1e293b; display: flex; align-items: center; justify-content: center; padding: 30px 15px; }
        .form-card { width: 100%; max-width: 600px; background: #ffffff; border-radius: 16px; box-shadow: 0 20px 40px -10px rgba(0, 0, 0, 0.35); overflow: hidden; border: none; }
        .card-header-custom { background: linear-gradient(135deg, #064e3b 0%, #0f766e 100%); color: #ffffff; padding: 20px 28px; }
        .form-label { font-weight: 500; font-size: 14px; color: #334155; margin-bottom: 6px; }
        .btn-emerald { background: linear-gradient(135deg, #064e3b 0%, #0f766e 100%); color: #fff; border: none; font-weight: 600; border-radius: 8px; padding: 9px 22px; }
        .btn-emerald:hover { opacity: 0.95; color: #fff; }
        .btn-secondary-custom { background: #64748b; color: #fff; border: none; border-radius: 8px; padding: 9px 18px; text-decoration: none; font-weight: 500; display: inline-block; }
        .btn-secondary-custom:hover { background: #475569; color: #fff; }
    </style>
</head>
<body>
    <div class="form-card">
        <div class="card-header-custom">
            <h4 class="mb-1 fs-5 fw-semibold">Tambah Catatan Keuangan</h4>
            <p class="mb-0 opacity-75 small">Masukkan detail transaksi keuangan baru</p>
        </div>
        <div class="p-4 bg-white">
            <form method="post" action="proses_tambah.php">
                <div class="row g-3 mb-3">
                    <div class="col-md-6">
                        <label class="form-label">Tanggal</label>
                        <input type="date" name="tanggal" class="form-control" value="<?php echo date('Y-m-d'); ?>" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Jenis</label>
                        <select name="jenis" class="form-select" required>
                            <option value="Pemasukan">Pemasukan</option>
                            <option value="Pengeluaran" selected>Pengeluaran</option>
                        </select>
                    </div>
                </div>

                <div class="row g-3 mb-3">
                    <div class="col-md-6">
                        <label class="form-label">Kategori</label>
                        <input type="text" name="kategori" class="form-control" placeholder="Contoh: Makanan, Gaji" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Nominal (Rp)</label>
                        <input type="number" name="nominal" class="form-control" placeholder="Contoh: 50000" min="1" required>
                    </div>
                </div>

                <div class="mb-4">
                    <label class="form-label">Keterangan</label>
                    <input type="text" name="keterangan" class="form-control" placeholder="Contoh: Makan siang di kantin" required>
                </div>

                <div class="d-flex justify-content-between align-items-center pt-2 border-top">
                    <a href="index.php" class="btn-secondary-custom">Kembali</a>
                    <button type="submit" class="btn btn-emerald">Simpan Transaksi</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
```

#### 5. `proses_tambah.php` (Proses Simpan Data)
```php
<?php 

include 'koneksi.php';

$tanggal    = $_POST['tanggal'];
$jenis      = $_POST['jenis'];
$kategori   = $_POST['kategori'];
$nominal    = $_POST['nominal'];
$keterangan = $_POST['keterangan'];

mysqli_query($koneksi, "insert into catatan_keuangan values(NULL,'$tanggal','$jenis','$kategori','$nominal','$keterangan')");

header("location:index.php");

?>
```

#### 6. `ubah.php` (Form Update Data)
```php
<!DOCTYPE html>
<html>
<head>
    <title>Ubah Catatan Keuangan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background: linear-gradient(135deg, #022c22 0%, #0f766e 50%, #134e4a 100%); background-attachment: fixed; min-height: 100vh; font-family: system-ui, sans-serif; color: #1e293b; display: flex; align-items: center; justify-content: center; padding: 30px 15px; }
        .form-card { width: 100%; max-width: 600px; background: #ffffff; border-radius: 16px; box-shadow: 0 20px 40px -10px rgba(0, 0, 0, 0.35); overflow: hidden; border: none; }
        .card-header-custom { background: linear-gradient(135deg, #1e293b 0%, #334155 100%); color: #ffffff; padding: 20px 28px; }
        .form-label { font-weight: 500; font-size: 14px; color: #334155; margin-bottom: 6px; }
        .btn-slate { background: linear-gradient(135deg, #1e293b 0%, #334155 100%); color: #fff; border: none; font-weight: 600; border-radius: 8px; padding: 9px 22px; }
        .btn-slate:hover { opacity: 0.95; color: #fff; }
        .btn-secondary-custom { background: #64748b; color: #fff; border: none; border-radius: 8px; padding: 9px 18px; text-decoration: none; font-weight: 500; display: inline-block; }
        .btn-secondary-custom:hover { background: #475569; color: #fff; }
    </style>
</head>
<body>
    <div class="form-card">
        <div class="card-header-custom">
            <h4 class="mb-1 fs-5 fw-semibold">Ubah Catatan Keuangan</h4>
            <p class="mb-0 opacity-75 small">Perbarui data transaksi keuangan yang tersimpan</p>
        </div>
        <div class="p-4 bg-white">
            <?php
            include 'koneksi.php';
            $id = $_GET['id'];
            $data = mysqli_query($koneksi, "select * from catatan_keuangan where id='$id'");
            while($d = mysqli_fetch_array($data)){
            ?>
            <form method="post" action="update.php">
                <input type="hidden" name="id" value="<?php echo $d['id']; ?>">

                <div class="row g-3 mb-3">
                    <div class="col-md-6">
                        <label class="form-label">Tanggal</label>
                        <input type="date" name="tanggal" class="form-control" value="<?php echo $d['tanggal']; ?>" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Jenis</label>
                        <select name="jenis" class="form-select" required>
                            <option value="Pemasukan" <?php if($d['jenis'] == 'Pemasukan') echo 'selected'; ?>>Pemasukan</option>
                            <option value="Pengeluaran" <?php if($d['jenis'] == 'Pengeluaran') echo 'selected'; ?>>Pengeluaran</option>
                        </select>
                    </div>
                </div>

                <div class="row g-3 mb-3">
                    <div class="col-md-6">
                        <label class="form-label">Kategori</label>
                        <input type="text" name="kategori" class="form-control" value="<?php echo $d['kategori']; ?>" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Nominal (Rp)</label>
                        <input type="number" name="nominal" class="form-control" value="<?php echo $d['nominal']; ?>" min="1" required>
                    </div>
                </div>

                <div class="mb-4">
                    <label class="form-label">Keterangan</label>
                    <input type="text" name="keterangan" class="form-control" value="<?php echo $d['keterangan']; ?>" required>
                </div>

                <div class="d-flex justify-content-between align-items-center pt-2 border-top">
                    <a href="index.php" class="btn-secondary-custom">Kembali</a>
                    <button type="submit" class="btn btn-slate">Update Transaksi</button>
                </div>
            </form>
            <?php } ?>
        </div>
    </div>
</body>
</html>
```

#### 7. `update.php` (Proses Update Data)
```php
<?php

include 'koneksi.php';

$id         = $_POST['id'];
$tanggal    = $_POST['tanggal'];
$jenis      = $_POST['jenis'];
$kategori   = $_POST['kategori'];
$nominal    = $_POST['nominal'];
$keterangan = $_POST['keterangan'];

$query = "UPDATE catatan_keuangan SET tanggal = '$tanggal', jenis = '$jenis', kategori = '$kategori', nominal = '$nominal', keterangan = '$keterangan' WHERE id = '$id'";

if($koneksi->query($query)) {
    header("location: index.php");
} else {
    echo "Data Gagal Diupdate: " . $koneksi->error;
}

?>
```

#### 8. `hapus.php` (Proses Delete Data)
```php
<?php 

include 'koneksi.php';

$id = $_GET['id'];

mysqli_query($koneksi, "delete from catatan_keuangan where id='$id'");

header("location:index.php");

?>
```

---

## 20. Peta cakupan sumber dan referensi klarifikasi teknis

### 20.1 Peta topik ke halaman sumber (Pertemuan 1–5)

| Sumber | Halaman/slide | Topik | Bab dokumen |
| --- | --- | --- | --- |
| Dasar Pemrograman Web, PDF/PPTX | 3–11 | Website, jenis, pemrograman, dan istilah | 3 |
| Dasar Pemrograman Web, PDF/PPTX | 12–21 | Pengertian, kriteria, empat jenis navigasi dan diagram | 4 |
| Dasar Pemrograman Web, PDF/PPTX | 22–24 | Editor, tugas navigasi, dan tools | 2, 3 |
| Canva Prodi Informatika | 2–4 | Pengampu, kanal, bobot penilaian, silabus | 2 |
| Canva Prodi Informatika | 5–10 | WWW, client–server, HTTP, URL, tiga fondasi, peran developer | 3 |
| Canva Prodi Informatika | 11–15 | Evolusi web, tools, standar, etika, persiapan | 2, 3 |
| Canva Teknik Informatika SI | 2–6 | Tujuan, HTML, elemen, struktur, DOM | 5 |
| Canva Teknik Informatika SI | 7–11 | Teks/list, hyperlink, media, semantik | 5 |
| Canva Teknik Informatika SI | 12–15 | Form, validasi, validator, tugas CV | 2, 5 |
| HTML utama, PDF/PPTX | 2–17 | Definisi, struktur, tag, elemen, atribut dan tabel atribut | 5 |
| HTML utama, PDF/PPTX | 18–28 | Paragraf, br/hr/pre/div, heading dan contoh | 5 |
| HTML alternatif, PDF/PPTX | 2–17 | Cakupan awal HTML yang juga ada pada versi utama | 5 |
| CSS utama, PDF/PPTX | 2–7 | CSS, hubungan HTML, manfaat, internal/external/inline | 6 |
| CSS utama, PDF/PPTX | 8–11 | Comment, declaration, selector, property, value, pseudo | 6, 7 |
| CSS utama, PDF/PPTX | 12–16 | Padding, margin, combinator, border, background | 7, 10, 11 |
| Canva CSS Versi 2 | 2–6 | Sintaks, selector, declaration, nilai, komentar | 6, 7 |
| Canva CSS Versi 2 | 8–18 | Elemen, class, ID, atribut, universal, pseudo, group | 7 |
| Canva Mahasiswa Pemula | 2–8 | CSS, fondasi frontend, sintaks, tiga metode | 3, 6 |
| Canva Mahasiswa Pemula | 9–13 | Selector, warna, tipografi | 7, 8, 9 |
| Canva Mahasiswa Pemula | 14–20 | Box model, margin/padding, unit, display, Flexbox, cascade, DevTools | 7, 10 |
| Canva Warna Teks Elemen | 2–10 | Peran warna, lima format, tiga property, contoh, tips | 8 |
| Canva Text Formatting | 2–9 | Font, alignment/direction, dekorasi, transform, shadow, spacing | 9 |
| Canva Terima Kasih | 2–9 | Background warna, fallback, gradient, gambar, repeat, position, size | 11 |
| HTML/CSS latihan | Seluruh isi file | Kartu profil dan penerapan property | 12, 19 |
| Canva Topik 4: Mastering Backend PHP | 1–4 | Agenda backend, web statis vs dinamis, siklus eksekusi PHP | 13 |
| Canva Topik 4: Mastering Backend PHP | 5–8 | Sintaks dasar, variabel, array terindeks & asosiatif, `if-else`, `foreach`, `$_GET` & `$_POST` | 13 |
| W3Schools HTML & CSS Exercises | — | Evaluasi atribut HTML, tabel, form, selector, dan box model CSS | 13 |
| Canva Topik 5: Operasi CRUD PHP & MySQL | 1–6 | Konsep CRUD, pemetaan CRUD–HTTP–SQL, arsitektur 3-tier, skema tabel `mahasiswa` | 14 |
| Canva Topik 5: Operasi CRUD PHP & MySQL | 7–11 | Koneksi `mysqli`, Read (`fetch_assoc`), Create (`prepare`/`bind_param`), Update, Delete, PDO, XSS, PRG | 14 |
| Berkas PHP Elearning (`tampil.php`, dll.) | 8 file | Implementasi CRUD prosedural pada tabel `user` (`casestudy`) | 14, 15, 19 |
| Tugas 5 CRUD Catatan Keuangan | 8 file | Implementasi CRUD 1 tabel (`catatan_keuangan`) dengan Bootstrap 5 & gradien | 14, 15, 19 |

### 20.2 Referensi klarifikasi teknis

| Referensi | Hal yang diklarifikasi |
| --- | --- |
| [WHATWG HTML — Syntax](https://html.spec.whatwg.org/multipage/syntax.html#void-elements) | Doctype, void elements, end tag, serta penulisan nama tag/atribut |
| [MDN — What is a URL?](https://developer.mozilla.org/en-US/docs/Learn_web_development/Howto/Web_mechanics/What_is_a_URL) | Uniform Resource Locator dan bagian alamat |
| [MDN — Heading elements](https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements/Heading_Elements) | Tingkat heading dan anjuran satu H1 utama |
| [MDN — CSS specificity](https://developer.mozilla.org/en-US/docs/Web/CSS/Guides/Cascade/Specificity) | Specificity, inline style, dan peran importance/cascade |
| [MDN — Introduction to CSS syntax](https://developer.mozilla.org/en-US/docs/Web/CSS/Guides/Syntax/Introduction) | Declaration, declaration block, dan ruleset |
| [MDN — background-color](https://developer.mozilla.org/en-US/docs/Web/CSS/Reference/Properties/background-color) | Property warna latar menerima warna, bukan gradient image |
| [MDN — marquee](https://developer.mozilla.org/en-US/docs/Web/HTML/Reference/Elements/marquee) | Status deprecated elemen tulisan bergerak |
| [Apache Friends — XAMPP](https://www.apachefriends.org/) | XAMPP sebagai paket Apache, MariaDB, PHP, dan Perl |
| [PHP Manual — Superglobals](https://www.php.net/manual/en/language.variables.superglobals.php) | Penggunaan `$_GET`, `$_POST`, dan ruang lingkup variabel superglobal |
| [PHP Manual — MySQLi & Prepared Statements](https://www.php.net/manual/en/mysqli.quickstart.prepared-statements.php) | Pencegahan SQL Injection dengan `prepare()` dan `bind_param()` |
| [PHP Manual — htmlspecialchars](https://www.php.net/manual/en/function.htmlspecialchars.php) | Sanitasi output HTML untuk mencegah Cross-Site Scripting (XSS) |
