-- Database: `keuangan`
-- Tugas CRUD 1 Tabel - IFB-211 Pemrograman Web

CREATE DATABASE IF NOT EXISTS `keuangan` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `keuangan`;

-- --------------------------------------------------------

-- Struktur dari tabel `catatan_keuangan`
CREATE TABLE IF NOT EXISTS `catatan_keuangan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal` date NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `nominal` int(11) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data awal untuk tabel `catatan_keuangan`
INSERT INTO `catatan_keuangan` (`id`, `tanggal`, `jenis`, `kategori`, `nominal`, `keterangan`) VALUES
(1, '2026-10-01', 'Pemasukan', 'Uang Saku Bulanan', 2500000, 'Kiriman uang saku awal bulan dari orang tua'),
(2, '2026-10-03', 'Pengeluaran', 'Kebutuhan Kuliah', 150000, 'Beli modul cetak & buku catatan praktikum'),
(3, '2026-10-06', 'Pengeluaran', 'Makanan & Minuman', 75000, 'Makan siang di kantin kampus'),
(4, '2026-10-10', 'Pemasukan', 'Project Web Freelance', 1200000, 'Pembayaran DP pembuatan landing page klien'),
(5, '2026-10-14', 'Pengeluaran', 'Transportasi', 50000, 'Isi saldo e-money / bensin motor'),
(6, '2026-10-18', 'Pengeluaran', 'Internet & Pulsa', 100000, 'Beli kuota paket data bulanan');
