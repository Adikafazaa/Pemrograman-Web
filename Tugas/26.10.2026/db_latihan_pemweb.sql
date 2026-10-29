CREATE DATABASE IF NOT EXISTS db_latihan_pemweb;
USE db_latihan_pemweb;

DROP TABLE IF EXISTS mahasiswa;
DROP TABLE IF EXISTS dosen_wali;

CREATE TABLE dosen_wali (
    id_dosen INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nip VARCHAR(10) NOT NULL UNIQUE,
    nama VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    ttl VARCHAR(50) NOT NULL
);

CREATE TABLE mahasiswa (
    id_mahasiswa INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nrp VARCHAR(15) NOT NULL UNIQUE,
    nama VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    ttl VARCHAR(50) NOT NULL,
    id_dosen INT UNSIGNED NULL,
    CONSTRAINT fk_mahasiswa_dosen FOREIGN KEY (id_dosen) REFERENCES dosen_wali(id_dosen)
        ON UPDATE CASCADE ON DELETE SET NULL
);

INSERT INTO dosen_wali (nip, nama, email, ttl) VALUES
('DW-15-01', 'Asep Sunandar', 'asep.sunandar@ngampus.ac.id', 'Kuningan, 17-08-1945'),
('DW-15-02', 'Bambang Kurniawan', 'bambang.kurniawan@ngampus.ac.id', 'Bandung, 17-08-1820'),
('DW-15-03', 'Gunawan Fajar', 'gunawan.fajar@ngampus.ac.id', 'Subang, 17-08-1728');

INSERT INTO mahasiswa (nrp, nama, email, ttl, id_dosen) VALUES
('MHS-15-01', 'Adika Faza', 'adika.faza@ngampus.ac.id', 'Bandung, 17-08-2000', 1),
('MHS-15-02', 'Alfajri Tegar', 'alfajri.tegar@ngampus.ac.id', 'Subang, 17-08-2000', 1),
('MHS-15-03', 'Raisa Andika', 'raisa.andika@ngampus.ac.id', 'Bandung, 17-08-2000', 3);
