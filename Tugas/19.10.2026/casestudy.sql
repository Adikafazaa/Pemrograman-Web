-- Database: `casestudy`
-- Digunakan oleh modul program PHP CRUD Dosen (IFB-211 Pemrograman Web)

CREATE DATABASE IF NOT EXISTS `casestudy` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `casestudy`;

-- --------------------------------------------------------

-- Struktur dari tabel `user`
CREATE TABLE IF NOT EXISTS `user` (
  `iduser` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(20) NOT NULL,
  PRIMARY KEY (`iduser`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data untuk tabel `user`
INSERT INTO `user` (`iduser`, `nama`, `username`, `password`, `level`) VALUES
(1, 'Administrator Web', 'admin', 'admin123', 'admin'),
(2, 'Adika Faza Athallah', 'adikafaza', 'adika2026', 'mahasiswa'),
(3, 'Bpk Yusup Miftahuddin', 'dosen_web', 'dosen123', 'dosen');
