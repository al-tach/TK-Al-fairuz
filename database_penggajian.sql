-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Jun 2023 pada 14.29
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database_penggajian`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jabatan`
--

CREATE TABLE `jabatan` (
  `id_jabatan` varchar(10) NOT NULL,
  `nama_jabatan` varchar(100) NOT NULL,
  `gaji_pokok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jabatan`
--

INSERT INTO `jabatan` (`id_jabatan`, `nama_jabatan`, `gaji_pokok`) VALUES
('JB001', 'KIKI KURNIYATI', 400000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawan`
--

CREATE TABLE `karyawan` (
  `id_karyawan` varchar(10) NOT NULL,
  `id_jabatan` varchar(10) NOT NULL,
  `nama_karyawan` varchar(100) NOT NULL,
  `jk` varchar(15) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `agama` varchar(20) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `no_telp` varchar(12) NOT NULL,
  `pendidikan` varchar(50) NOT NULL,
  `tgl_mulai_kerja` date NOT NULL,
  `status_karyawan` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_rek` varchar(25) NOT NULL,
  `foto` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `karyawan`
--

INSERT INTO `karyawan` (`id_karyawan`, `id_jabatan`, `nama_karyawan`, `jk`, `tempat_lahir`, `tgl_lahir`, `agama`, `alamat`, `no_telp`, `pendidikan`, `tgl_mulai_kerja`, `status_karyawan`, `email`, `no_rek`, `foto`) VALUES
('KRY0001', 'JB001', 'Hendra Bagus Setiawanto', 'Laki-Laki', 'Madiun', '2023-05-02', 'Islam', 'Jalan Nuri 1 Blok B4 No.9', '085257126513', 'S1 Teknik Informatika', '2023-05-17', 'Tetap', 'hendrabagussetiawanto25@gmail.com', '21213231232', 'hendra 3x4.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penggajian`
--

CREATE TABLE `penggajian` (
  `id_penggajian` varchar(10) NOT NULL,
  `id_karyawan` varchar(10) NOT NULL,
  `tgl_penggajian` date NOT NULL,
  `lembur` int(11) NOT NULL,
  `potongan` int(11) NOT NULL,
  `total_gaji` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penggajian`
--

INSERT INTO `penggajian` (`id_penggajian`, `id_karyawan`, `tgl_penggajian`, `lembur`, `potongan`, `total_gaji`) VALUES
('', 'KRY0001', '2023-05-09', 60000, 0, 5560000),
('PG00005', 'KRY0006', '2023-05-16', 75000, 25000, 5550000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`username`, `password`) VALUES
('iqbal', 'eedae20fc3c7a6e9c5b1102098771c70');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_siswa`
--

CREATE TABLE `tbl_siswa` (
  `no_pendaftaran` int(11) NOT NULL,
  `nama_lengkap` varchar(150) NOT NULL,
  `nama_panggilan` varchar(100) NOT NULL,
  `jk` varchar(50) NOT NULL,
  `nama_ayah` varchar(150) NOT NULL,
  `nama_ibu` varchar(150) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `desa` varchar(100) NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `provinsi` varchar(100) NOT NULL,
  `bahasa` varchar(100) NOT NULL,
  `anak_ke` varchar(10) NOT NULL,
  `kewarganegaraan` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_siswa`
--

INSERT INTO `tbl_siswa` (`no_pendaftaran`, `nama_lengkap`, `nama_panggilan`, `jk`, `nama_ayah`, `nama_ibu`, `no_hp`, `alamat`, `desa`, `kecamatan`, `provinsi`, `bahasa`, `anak_ke`, `kewarganegaraan`, `tgl_lahir`) VALUES
(4, 'bahrul', 'alam', 'laki-laki', 'mulyadi', 'sri', '0875665', 'ciledug', 'kp.paninggilan', 'cisoka', 'tangerang', 'indonesia', '1', 'Indonesia', '2023-05-31'),
(8, 'iqbal tachtiar', 'iqbal', 'laki-laki', 'imron rosadi', 'kiki kurniyati', '085881301745', 'perum pesona wibawa praja blok i4 no 1 ', 'jeungjing', 'cisoka', 'banten', 'indonesia', '1', 'Indonesia', '2023-05-01'),
(44, 'isna rostianingsih', 'isna', 'perempuan', 'wawanudin', 'emma', '0859648654097', 'jl.inpres raya', 'larangan', 'ciledug', 'kota tangerang', 'indonesia', '2', 'Indonesia', '2002-06-04'),
(45, 'faisal beckam', 'faisal', 'laki-laki', 'mulyadi', 'sri', '0875665', 'tenjo', 'tenjo', 'tenjo', 'tenjo', 'indonesia', '1', 'Indonesia', '2023-06-09');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indeks untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id_karyawan`),
  ADD KEY `id_jabatan` (`id_jabatan`);

--
-- Indeks untuk tabel `penggajian`
--
ALTER TABLE `penggajian`
  ADD PRIMARY KEY (`id_penggajian`),
  ADD KEY `id_karyawan` (`id_karyawan`);

--
-- Indeks untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`username`);

--
-- Indeks untuk tabel `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  ADD PRIMARY KEY (`no_pendaftaran`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  MODIFY `no_pendaftaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  ADD CONSTRAINT `karyawan_ibfk_1` FOREIGN KEY (`id_jabatan`) REFERENCES `jabatan` (`id_jabatan`);

--
-- Ketidakleluasaan untuk tabel `penggajian`
--
ALTER TABLE `penggajian`
  ADD CONSTRAINT `penggajian_ibfk_1` FOREIGN KEY (`id_karyawan`) REFERENCES `karyawan` (`id_karyawan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
